<?php

/**
 *  Corresponding Class to test functions
 *
 *  For each class in your library, there should be a corresponding Unit-Test for it
 *  Unit-Tests should be as much as possible independent from other test going on.
 *
 *  @author sergiolch
 */
class functionsTest extends PHPUnit_Framework_TestCase{

    /**
     * Just check if the functions has no syntax error
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testIsThereAnySyntaxError(){
        $var = \sergiolch\helper\super_trim(' abc 123 ');
        $this->assertTrue(is_string($var));
        unset($var);
    }

    /**
     * Just check if the function has no syntax error
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testCorrectConversion(){
        $text = ' abc  123 ';
        $var = \sergiolch\helper\super_trim($text);
        $this->assertTrue($var == 'abc 123');
        unset($var);
    }

}