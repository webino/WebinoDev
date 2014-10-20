<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Di\Definition;

use Zend\Di\Definition\CompilerDefinition;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Title("Dependency injection definition generator test")
 * @Features({"Dependency Injection"})
 */
class GeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    protected $object;

    /**
     * @var string
     */
    protected $tmpDir;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        // we can't use virtual filesystem cos of PHP realpath() isssue
        $this->tmpDir = sys_get_temp_dir() . '/' . md5(__CLASS__);
        $this->cleanup($this->tmpDir);
        $this->createFilesystemMockup($this->tmpDir);

        $this->object = new Generator($this->tmpDir . '/bin');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        $this->cleanup($this->tmpDir);
    }

    /**
     * @param string $dir
     */
    private function createFilesystemMockup($root)
    {
        // create directories
        foreach ([
            'bin',
            'src/WebinoExample/Exclude',
            'data',
            'vendor/webino/webino-example/src/WebinoExample',
        ] as $dir) {
            mkdir($root . '/' . $dir, 0777, true);
        }

        // create src class file
        $path = $root . '/src/WebinoExample/Module.php';
        file_put_contents(
            $path,
            join(PHP_EOL, [
                '<?php namespace WebinoExample;',
                'class Module {}',
            ])
        );
        require_once $path;

        // create excluded class file
        $path = $root . '/src/WebinoExample/Exclude/IgnoredClass.php';
        file_put_contents(
            $path,
            join(PHP_EOL, [
                '<?php namespace WebinoExample\Exclude;',
                'class IgnoredClass {}',
            ])
        );
        require_once $path;

        // create vendor class file
        $path = $root . '/vendor/webino/webino-example/src/WebinoExample/ExampleClass.php';
        file_put_contents(
            $path,
            join(PHP_EOL, [
                '<?php namespace WebinoExample;',
                'class ExampleClass {}',
            ])
        );
        require_once $path;
    }

    /**
     * Remove temporary files
     *
     * @param string $dir
     */
    private function cleanup($dir)
    {
        !is_dir($dir) or shell_exec('rm -rf ' . $dir);
    }

    /**
     * @Title("Test that setIgnore() works as expected")
     * @covers WebinoDev\Di\Definition\Generator::setIgnore
     */
    public function testSetIgnore()
    {
        $this->assertSame($this->object, $this->object->setIgnore([]));
    }

    /**
     * @Title("Test that custom compiler can be injected")
     * @covers WebinoDev\Di\Definition\Generator::setCompiler
     */
    public function testSetCompiler()
    {
        $this->assertSame($this->object, $this->object->setCompiler(new CompilerDefinition));
    }

    /**
     * @Title("Test basic compilation")
     */
    public function testCompile()
    {
        $this->object->compile()->dump();

        $definitionPath = $this->tmpDir . '/data/di/definition.php';
        $this->assertFileExists($definitionPath);

        $definition = require $definitionPath;

        $this->assertNotEmpty($definition);
        $this->assertArrayHasKey('WebinoExample\Module', $definition);
    }

    /**
     * @Title("Test that compiler exclude ignored files")
     */
    public function testCompileWithIgnore()
    {
        $this->object->setIgnore(['Exclude/'])->compile()->dump();

        $definitionPath = $this->tmpDir . '/data/di/definition.php';
        $this->assertFileExists($definitionPath);

        $definition = require $definitionPath;

        $this->assertNotEmpty($definition);
        $this->assertArrayHasKey('WebinoExample\Module', $definition);
        $this->assertArrayNotHasKey('WebinoExample\Exclude\IgnoredClass', $definition);
    }

    /**
     * @Title("Test custom filess compilation")
     */
    public function testCompileWithCustomFiles()
    {
        $this->object->compile(['webino/webino-example/src/WebinoExample/ExampleClass.php'])->dump();

        $definitionPath = $this->tmpDir . '/data/di/definition.php';
        $this->assertFileExists($definitionPath);

        $definition = require $definitionPath;

        $this->assertNotEmpty($definition);
        $this->assertArrayHasKey('WebinoExample\Module', $definition);
        $this->assertArrayHasKey('WebinoExample\ExampleClass', $definition);
    }
}
