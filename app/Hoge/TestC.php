<?php

namespace App\Hoge;

class TestC
{
    private $property;

    function __construct(\App\Fuga\TestB $test)
    {
        $this->property = $test;
    }

    function echoMyName()
    {
        echo "my name is TestC\n";
        echo "and ...";
        echo $this->property->echoMyName();
    }
}
