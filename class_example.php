<?php

class SimpleExample
{

}

class MainExample
{
    const SOME_CONST = 'const value';

    public $publicField;
    protected $protectedField;
    private $privateField = null;

    public function __construct()
    {

    }

    public function publicMethod($param)
    {

    }
    public function exampleChange() {

    }
    protected function protectedMethod()
    {

    }

    private function privateMethod(SimpleExample $param)
    {

    }
}

class ChildExample extends MainExample
{

}

abstract class AbstractExample
{

}

interface InterfaceExample
{}
