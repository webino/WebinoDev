<?php 
return array (
  'WebinoDev\\Exception\\ExceptionInterface' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Exception\\DevelopmentException' => 
  array (
    'supertypes' => 
    array (
      0 => 'WebinoDev\\Exception\\ExceptionInterface',
      1 => 'RuntimeException',
      2 => 'Exception',
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => 3,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'WebinoDev\\Exception\\DevelopmentException::__construct:0' => 
        array (
          0 => 'message',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Exception\\DevelopmentException::__construct:1' => 
        array (
          0 => 'code',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Exception\\DevelopmentException::__construct:2' => 
        array (
          0 => 'previous',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Module' => 
  array (
    'supertypes' => 
    array (
      0 => 'Zend\\ModuleManager\\Feature\\ConfigProviderInterface',
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Di\\Definition\\Generator' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => 3,
      'setIgnore' => 0,
      'setCompiler' => 0,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'WebinoDev\\Di\\Definition\\Generator::__construct:0' => 
        array (
          0 => 'dir',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setIgnore' => 
      array (
        'WebinoDev\\Di\\Definition\\Generator::setIgnore:0' => 
        array (
          0 => 'ignore',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setCompiler' => 
      array (
        'WebinoDev\\Di\\Definition\\Generator::setCompiler:0' => 
        array (
          0 => 'compiler',
          1 => 'Zend\\Di\\Definition\\CompilerDefinition',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\Exception\\ExceptionInterface' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\Exception\\RuntimeException' => 
  array (
    'supertypes' => 
    array (
      0 => 'WebinoDev\\Test\\Exception\\ExceptionInterface',
      1 => 'RuntimeException',
      2 => 'Exception',
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => 3,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'WebinoDev\\Test\\Exception\\RuntimeException::__construct:0' => 
        array (
          0 => 'message',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Exception\\RuntimeException::__construct:1' => 
        array (
          0 => 'code',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Exception\\RuntimeException::__construct:2' => 
        array (
          0 => 'previous',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\DomTrait' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\Functional\\AbstractMailTestCase' => 
  array (
    'supertypes' => 
    array (
      0 => 'PHPUnit_Framework_SelfDescribing',
      1 => 'Countable',
      2 => 'PHPUnit_Framework_Test',
      3 => 'PHPUnit_Framework_TestCase',
      4 => 'PHPUnit_Framework_Test',
      5 => 'Countable',
      6 => 'PHPUnit_Framework_SelfDescribing',
      7 => 'PHPUnit_Framework_Assert',
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
      '__construct' => 3,
      'setExpectedException' => 0,
      'setExpectedExceptionRegExp' => 0,
      'setUseErrorHandler' => 0,
      'setName' => 0,
      'setDependencies' => 0,
      'setDependencyInput' => 0,
      'setDisallowChangesToGlobalState' => 0,
      'setBackupGlobals' => 0,
      'setBackupStaticAttributes' => 0,
      'setRunTestInSeparateProcess' => 0,
      'setPreserveGlobalState' => 0,
      'setInIsolation' => 0,
      'setResult' => 0,
      'setOutputCallback' => 0,
      'setTestResultObject' => 0,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\Functional\\AbstractMailTestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\Functional\\SeleniumTestTrait' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\Functional\\MailTrait' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\PdfTrait' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\Selenium\\AbstractMailTestCase' => 
  array (
    'supertypes' => 
    array (
      0 => 'PHPUnit_Framework_Test',
      1 => 'Countable',
      2 => 'PHPUnit_Framework_SelfDescribing',
      3 => 'WebinoDev\\Test\\Selenium\\AbstractTestCase',
      4 => 'PHPUnit_Framework_SelfDescribing',
      5 => 'Countable',
      6 => 'PHPUnit_Framework_Test',
      7 => 'PHPUnit_Framework_TestCase',
      8 => 'PHPUnit_Framework_Test',
      9 => 'Countable',
      10 => 'PHPUnit_Framework_SelfDescribing',
      11 => 'PHPUnit_Framework_Assert',
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
      '__construct' => 3,
      'setExpectedException' => 0,
      'setExpectedExceptionRegExp' => 0,
      'setUseErrorHandler' => 0,
      'setName' => 0,
      'setDependencies' => 0,
      'setDependencyInput' => 0,
      'setDisallowChangesToGlobalState' => 0,
      'setBackupGlobals' => 0,
      'setBackupStaticAttributes' => 0,
      'setRunTestInSeparateProcess' => 0,
      'setPreserveGlobalState' => 0,
      'setInIsolation' => 0,
      'setResult' => 0,
      'setOutputCallback' => 0,
      'setTestResultObject' => 0,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractMailTestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\Selenium\\AbstractTestCase' => 
  array (
    'supertypes' => 
    array (
      0 => 'PHPUnit_Framework_SelfDescribing',
      1 => 'Countable',
      2 => 'PHPUnit_Framework_Test',
      3 => 'PHPUnit_Framework_TestCase',
      4 => 'PHPUnit_Framework_Test',
      5 => 'Countable',
      6 => 'PHPUnit_Framework_SelfDescribing',
      7 => 'PHPUnit_Framework_Assert',
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
      '__construct' => 3,
      'setExpectedException' => 0,
      'setExpectedExceptionRegExp' => 0,
      'setUseErrorHandler' => 0,
      'setName' => 0,
      'setDependencies' => 0,
      'setDependencyInput' => 0,
      'setDisallowChangesToGlobalState' => 0,
      'setBackupGlobals' => 0,
      'setBackupStaticAttributes' => 0,
      'setRunTestInSeparateProcess' => 0,
      'setPreserveGlobalState' => 0,
      'setInIsolation' => 0,
      'setResult' => 0,
      'setOutputCallback' => 0,
      'setTestResultObject' => 0,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractTestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\Selenium\\ElementTrait' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\Selenium\\AuthenticationTrait' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase' => 
  array (
    'supertypes' => 
    array (
      0 => 'PHPUnit_Framework_Test',
      1 => 'Countable',
      2 => 'PHPUnit_Framework_SelfDescribing',
      3 => 'WebinoDev\\Test\\Selenium\\AbstractTestCase',
      4 => 'PHPUnit_Framework_SelfDescribing',
      5 => 'Countable',
      6 => 'PHPUnit_Framework_Test',
      7 => 'PHPUnit_Framework_TestCase',
      8 => 'PHPUnit_Framework_Test',
      9 => 'Countable',
      10 => 'PHPUnit_Framework_SelfDescribing',
      11 => 'PHPUnit_Framework_Assert',
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
      '__construct' => 3,
      'setExpectedException' => 0,
      'setExpectedExceptionRegExp' => 0,
      'setUseErrorHandler' => 0,
      'setName' => 0,
      'setDependencies' => 0,
      'setDependencyInput' => 0,
      'setDisallowChangesToGlobalState' => 0,
      'setBackupGlobals' => 0,
      'setBackupStaticAttributes' => 0,
      'setRunTestInSeparateProcess' => 0,
      'setPreserveGlobalState' => 0,
      'setInIsolation' => 0,
      'setResult' => 0,
      'setOutputCallback' => 0,
      'setTestResultObject' => 0,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\Selenium\\ScreenshotTrait' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\Selenium\\MailTrait' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\Selenium\\WebDriver\\SimpleItem' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\Selenium\\WebDriver\\TestSession' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\Selenium\\WebDriver\\TestWebDriver' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\Selenium\\WebDriver\\TestElement' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\Selenium\\ElementsTrait' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Test\\MailTrait' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'WebinoDev\\Mail\\Message' => 
  array (
    'supertypes' => 
    array (
      0 => 'Zend\\Mail\\Message',
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      'setEncoding' => 0,
      'setHeaders' => 0,
      'setFrom' => 0,
      'setTo' => 0,
      'setCc' => 0,
      'setBcc' => 0,
      'setReplyTo' => 0,
      'setSender' => 0,
      'setSubject' => 0,
      'setBody' => 0,
    ),
    'parameters' => 
    array (
      'setEncoding' => 
      array (
        'WebinoDev\\Mail\\Message::setEncoding:0' => 
        array (
          0 => 'encoding',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setHeaders' => 
      array (
        'WebinoDev\\Mail\\Message::setHeaders:0' => 
        array (
          0 => 'headers',
          1 => 'Zend\\Mail\\Headers',
          2 => true,
          3 => NULL,
        ),
      ),
      'setFrom' => 
      array (
        'WebinoDev\\Mail\\Message::setFrom:0' => 
        array (
          0 => 'emailOrAddressList',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Mail\\Message::setFrom:1' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setTo' => 
      array (
        'WebinoDev\\Mail\\Message::setTo:0' => 
        array (
          0 => 'emailOrAddressList',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Mail\\Message::setTo:1' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setCc' => 
      array (
        'WebinoDev\\Mail\\Message::setCc:0' => 
        array (
          0 => 'emailOrAddressList',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Mail\\Message::setCc:1' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setBcc' => 
      array (
        'WebinoDev\\Mail\\Message::setBcc:0' => 
        array (
          0 => 'emailOrAddressList',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Mail\\Message::setBcc:1' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setReplyTo' => 
      array (
        'WebinoDev\\Mail\\Message::setReplyTo:0' => 
        array (
          0 => 'emailOrAddressList',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Mail\\Message::setReplyTo:1' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setSender' => 
      array (
        'WebinoDev\\Mail\\Message::setSender:0' => 
        array (
          0 => 'emailOrAddress',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Mail\\Message::setSender:1' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setSubject' => 
      array (
        'WebinoDev\\Mail\\Message::setSubject:0' => 
        array (
          0 => 'subject',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBody' => 
      array (
        'WebinoDev\\Mail\\Message::setBody:0' => 
        array (
          0 => 'body',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Vfs\\StreamWrapper' => 
  array (
    'supertypes' => 
    array (
      0 => 'org\\bovigo\\vfs\\vfsStreamWrapper',
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
);
