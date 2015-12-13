<?php 
return array (
  'Application\\Controller\\IndexController' => 
  array (
    'supertypes' => 
    array (
      0 => 'Zend\\Stdlib\\DispatchableInterface',
      1 => 'Zend\\EventManager\\EventManagerAwareInterface',
      2 => 'Zend\\EventManager\\EventsCapableInterface',
      3 => 'Zend\\Mvc\\InjectApplicationEventInterface',
      4 => 'Zend\\ServiceManager\\ServiceLocatorAwareInterface',
      5 => 'Zend\\Mvc\\Controller\\AbstractActionController',
      6 => 'Zend\\ServiceManager\\ServiceLocatorAwareInterface',
      7 => 'Zend\\Mvc\\InjectApplicationEventInterface',
      8 => 'Zend\\EventManager\\EventsCapableInterface',
      9 => 'Zend\\EventManager\\EventManagerAwareInterface',
      10 => 'Zend\\Stdlib\\DispatchableInterface',
      11 => 'Zend\\Mvc\\Controller\\AbstractController',
      12 => 'Zend\\Stdlib\\DispatchableInterface',
      13 => 'Zend\\EventManager\\EventManagerAwareInterface',
      14 => 'Zend\\EventManager\\EventsCapableInterface',
      15 => 'Zend\\Mvc\\InjectApplicationEventInterface',
      16 => 'Zend\\ServiceManager\\ServiceLocatorAwareInterface',
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      'setEventManager' => 3,
      'setEvent' => 0,
      'setServiceLocator' => 3,
      'setPluginManager' => 0,
    ),
    'parameters' => 
    array (
      'setEventManager' => 
      array (
        'Application\\Controller\\IndexController::setEventManager:0' => 
        array (
          0 => 'eventManager',
          1 => 'Zend\\EventManager\\EventManagerInterface',
          2 => true,
          3 => NULL,
        ),
      ),
      'setEvent' => 
      array (
        'Application\\Controller\\IndexController::setEvent:0' => 
        array (
          0 => 'e',
          1 => 'Zend\\EventManager\\EventInterface',
          2 => true,
          3 => NULL,
        ),
      ),
      'setServiceLocator' => 
      array (
        'Application\\Controller\\IndexController::setServiceLocator:0' => 
        array (
          0 => 'serviceLocator',
          1 => 'Zend\\ServiceManager\\ServiceLocatorInterface',
          2 => true,
          3 => NULL,
        ),
      ),
      'setPluginManager' => 
      array (
        'Application\\Controller\\IndexController::setPluginManager:0' => 
        array (
          0 => 'plugins',
          1 => 'Zend\\Mvc\\Controller\\PluginManager',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\DomTestCase' => 
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
    'instantiator' => '__construct',
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
        'WebinoDev\\Test\\DomTestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\DomTestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\DomTestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\DomTestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\DomTestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\DomTestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\DomTestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\DomTestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\Functional\\SeleniumTestTestCase' => 
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
    'instantiator' => '__construct',
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
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\Functional\\SeleniumTestTestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\Functional\\MailTestCase' => 
  array (
    'supertypes' => 
    array (
      0 => 'PHPUnit_Framework_Test',
      1 => 'Countable',
      2 => 'PHPUnit_Framework_SelfDescribing',
      3 => 'WebinoDev\\Test\\Functional\\AbstractMailTestCase',
      4 => 'PHPUnit_Framework_SelfDescribing',
      5 => 'Countable',
      6 => 'PHPUnit_Framework_Test',
      7 => 'PHPUnit_Framework_TestCase',
      8 => 'PHPUnit_Framework_Test',
      9 => 'Countable',
      10 => 'PHPUnit_Framework_SelfDescribing',
      11 => 'PHPUnit_Framework_Assert',
    ),
    'instantiator' => '__construct',
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
        'WebinoDev\\Test\\Functional\\MailTestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Functional\\MailTestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\Functional\\MailTestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Functional\\MailTestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Functional\\MailTestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Functional\\MailTestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Functional\\MailTestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\Functional\\MailTestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\PdfTestCase' => 
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
    'instantiator' => '__construct',
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
        'WebinoDev\\Test\\PdfTestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\PdfTestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\PdfTestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\PdfTestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\PdfTestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\PdfTestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\PdfTestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\PdfTestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\Selenium\\ElementTestCase' => 
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
    'instantiator' => '__construct',
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
        'WebinoDev\\Test\\Selenium\\ElementTestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\ElementTestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\Selenium\\ElementTestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementTestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\Selenium\\TestCallback' => 
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
  'WebinoDev\\Test\\Selenium\\AuthenticationTestCase' => 
  array (
    'supertypes' => 
    array (
      0 => 'PHPUnit_Framework_SelfDescribing',
      1 => 'Countable',
      2 => 'PHPUnit_Framework_Test',
      3 => 'WebinoDev\\Test\\Selenium\\AbstractAuthenticationTestCase',
      4 => 'PHPUnit_Framework_Test',
      5 => 'Countable',
      6 => 'PHPUnit_Framework_SelfDescribing',
      7 => 'WebinoDev\\Test\\Selenium\\AbstractTestCase',
      8 => 'PHPUnit_Framework_SelfDescribing',
      9 => 'Countable',
      10 => 'PHPUnit_Framework_Test',
      11 => 'PHPUnit_Framework_TestCase',
      12 => 'PHPUnit_Framework_Test',
      13 => 'Countable',
      14 => 'PHPUnit_Framework_SelfDescribing',
      15 => 'PHPUnit_Framework_Assert',
    ),
    'instantiator' => '__construct',
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
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\Selenium\\AuthenticationTestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\Selenium\\TestCase' => 
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
    'instantiator' => '__construct',
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
        'WebinoDev\\Test\\Selenium\\TestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\TestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\Selenium\\TestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\TestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\TestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\TestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\TestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\Selenium\\TestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\Selenium\\ElementsTestCase' => 
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
    'instantiator' => '__construct',
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
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\Selenium\\ElementsTestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'WebinoDev\\Test\\Selenium\\MailTestCase' => 
  array (
    'supertypes' => 
    array (
      0 => 'PHPUnit_Framework_SelfDescribing',
      1 => 'Countable',
      2 => 'PHPUnit_Framework_Test',
      3 => 'WebinoDev\\Test\\Selenium\\AbstractMailTestCase',
      4 => 'PHPUnit_Framework_Test',
      5 => 'Countable',
      6 => 'PHPUnit_Framework_SelfDescribing',
      7 => 'WebinoDev\\Test\\Selenium\\AbstractTestCase',
      8 => 'PHPUnit_Framework_SelfDescribing',
      9 => 'Countable',
      10 => 'PHPUnit_Framework_Test',
      11 => 'PHPUnit_Framework_TestCase',
      12 => 'PHPUnit_Framework_Test',
      13 => 'Countable',
      14 => 'PHPUnit_Framework_SelfDescribing',
      15 => 'PHPUnit_Framework_Assert',
    ),
    'instantiator' => '__construct',
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
        'WebinoDev\\Test\\Selenium\\MailTestCase::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\MailTestCase::__construct:1' => 
        array (
          0 => 'data',
          1 => NULL,
          2 => false,
          3 => 
          array (
          ),
        ),
        'WebinoDev\\Test\\Selenium\\MailTestCase::__construct:2' => 
        array (
          0 => 'dataName',
          1 => NULL,
          2 => false,
          3 => '',
        ),
      ),
      'setExpectedException' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setExpectedException:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\MailTestCase::setExpectedException:1' => 
        array (
          0 => 'exceptionMessage',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\MailTestCase::setExpectedException:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setExpectedExceptionRegExp' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setExpectedExceptionRegExp:0' => 
        array (
          0 => 'exceptionName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'WebinoDev\\Test\\Selenium\\MailTestCase::setExpectedExceptionRegExp:1' => 
        array (
          0 => 'exceptionMessageRegExp',
          1 => NULL,
          2 => false,
          3 => '',
        ),
        'WebinoDev\\Test\\Selenium\\MailTestCase::setExpectedExceptionRegExp:2' => 
        array (
          0 => 'exceptionCode',
          1 => NULL,
          2 => false,
          3 => NULL,
        ),
      ),
      'setUseErrorHandler' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setUseErrorHandler:0' => 
        array (
          0 => 'useErrorHandler',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencies' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setDependencies:0' => 
        array (
          0 => 'dependencies',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDependencyInput' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setDependencyInput:0' => 
        array (
          0 => 'dependencyInput',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setDisallowChangesToGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setDisallowChangesToGlobalState:0' => 
        array (
          0 => 'disallowChangesToGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupGlobals' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setBackupGlobals:0' => 
        array (
          0 => 'backupGlobals',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setBackupStaticAttributes' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setBackupStaticAttributes:0' => 
        array (
          0 => 'backupStaticAttributes',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setRunTestInSeparateProcess' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setRunTestInSeparateProcess:0' => 
        array (
          0 => 'runTestInSeparateProcess',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setPreserveGlobalState' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setPreserveGlobalState:0' => 
        array (
          0 => 'preserveGlobalState',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setInIsolation' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setInIsolation:0' => 
        array (
          0 => 'inIsolation',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setResult' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setResult:0' => 
        array (
          0 => 'result',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setOutputCallback' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setOutputCallback:0' => 
        array (
          0 => 'callback',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setTestResultObject' => 
      array (
        'WebinoDev\\Test\\Selenium\\MailTestCase::setTestResultObject:0' => 
        array (
          0 => 'result',
          1 => 'PHPUnit_Framework_TestResult',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
);
