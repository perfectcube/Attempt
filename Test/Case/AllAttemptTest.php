<?php
class AllAttemptTest extends CakeTestSuite {
    public static function suite() {
        $suite = new CakeTestSuite('All Attempt Plugin Tests');
        $suite->addTestDirectory(APP.'Plugin'.DS.'Attempt'.DS.'Test'.DS.'Case'.DS.'Controller'.DS.'Component');
        $suite->addTestDirectory(APP.'Plugin'.DS.'Attempt'.DS.'Test'.DS.'Case'.DS.'Model');
		// $suite->addTestDirectoryRecursive(APP.'Plugin'.DS.'Attempt'.DS.'Test'.DS.'Case');
        return $suite;
    }
}