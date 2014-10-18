<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Di\Definition;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RegexIterator;
use Zend\Code\Scanner\FileScanner;
use Zend\Di\Definition\CompilerDefinition;

/**
 * Smart wrapper for Zend DI definition generator
 */
class Generator
{
    /**
     * @var string
     */
    protected $dir;

    /**
     * @var array
     */
    protected $ignore = [];

    /**
     * @var CompilerDefinition
     */
    protected $compiler;

    /**
     * @param string $dir
     */
    public function __construct($dir)
    {
        $this->dir = $dir;
    }

    /**
     * @return array
     */
    protected function getIgnore()
    {
        return $this->ignore;
    }

    /**
     * @param array $ignore
     * @return self
     */
    public function setIgnore(array $ignore)
    {
        $this->ignore = $ignore;
        return $this;
    }

    /**
     * @return CompilerDefinition
     */
    public function getCompiler()
    {
        if (null === $this->compiler) {
            $this->setCompiler(new CompilerDefinition);
        }
        return $this->compiler;
    }

    /**
     * @param CompilerDefinition $compiler
     * @return self
     */
    public function setCompiler(CompilerDefinition $compiler)
    {
        $this->compiler = $compiler;
        return $this;
    }

    /**
     * @param array $files
     * @return self
     */
    public function compile(array $files = [])
    {
        $compiler = $this->getCompiler();
        $ignore   = $this->getIgnore();

        if (!empty($ignore)) {
            // add files, exclude ignored
            foreach ($this->createDirIterator($this->dir, $ignore) as $path) {
                $this->compiler->addCodeScannerFile(new FileScanner($path[0]));
            }
        } else {
            // add whole source dir
            $compiler->addDirectory($this->dir . '/../src');
        }

        // add custom files
        foreach ($files as $file) {
            $compiler->addCodeScannerFile(new FileScanner($this->dir . '/../vendor/' . $file));
        }

        $compiler->compile();
        return $this;
    }

    /**
     * @return self
     */
    public function dump()
    {
        $target = $this->dir . '/../data/di/definition.php';
        $dir    = dirname($target);

        is_dir($dir) or mkdir($dir);

        $definition = $this->getCompiler()->toArrayDefinition()->toArray();
        file_put_contents($target, '<?php ' . PHP_EOL . 'return ' . var_export($definition, true) . ';' . PHP_EOL);
        return $this;
    }

    /**
     * @param string $dir
     * @param array $ignore
     * @return RegexIterator
     */
    private function createDirIterator($dir, array $ignore = [])
    {
        return new RegexIterator(
            new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir . '/../src')),
            '~^((?!' . join('|', $ignore) . ').)*' . preg_quote('.php') . '$~i',
            RegexIterator::GET_MATCH
        );
    }
}
