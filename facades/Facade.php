<?php

class Facade {
    protected $analize;
    protected $procastinate;
    protected $program;

    function __construct($analizeObj, $procastinateObj, $programObj)
    {
        $this->analize = $analizeObj;
        $this->procastinate = $procastinateObj;
        $this->program = $programObj;
    }

    function developSomething($slave, $foo, $code)
    {
        $this->analize->doAnalize($slave);
        $this->procastinate->doProcastinate($slave, $foo);
        $this->program->doProgram($slave, $code);
    }

}