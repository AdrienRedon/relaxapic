<?php 

namespace Test\Core\Model;

use \PHPUnit_Framework_TestCase;
use Test\Validator\TestFailValidator;
use Test\Validator\TestPassValidator;

class ValidatorTest extends PHPUnit_Framework_TestCase 
{
    public function setUp()
    {
        $this->validatorFail = new TestFailValidator();
        $this->validatorPass = new TestPassValidator();
    }

    public function testFailValidation()
    {
        $this->assertTrue($this->validatorFail->fails());
    }

    public function testPassValidation()
    {
        $this->assertTrue($this->validatorPass->passes());
    }
}
