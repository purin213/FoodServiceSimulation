<?php
namespace Traits\GetterTrait;

use BadFunctionCallException;

trait getMethod{
    public function getClassVariable(string $variableName): mixed{
        try{
            if (!isset($this->$variableName)) {
                throw new BadFunctionCallException("Class variable {$variableName} does not exist.");
            }
            return $this->$variableName;
        }
        catch(BadFunctionCallException $e){
            exit("Bad function call exception called: {$e}". PHP_EOL);
        }
    }
}