<?php

declare(strict_types=1);
use PHPUnit\Framework\TestCase;

use Intellicore\PinGenerator\Classes\Generator;

final class GenerateTest extends TestCase
{
    /**
    * check if no syntax error
    */
    public function testCheckForSyntaxError(): void
    {
        $generate = new Generator();
        $this->assertTrue(is_object($generate));
        unset($generate);
    }

    /**
     * @return void
     */
    public function testCanGeneratePins(): void
    {
        $generate =new Generator();
        $values = $generate->emit();
        $this->assertIsArray(
            $values,
            "assert values is array or not"
        );
    }


    /**
     * @return void
     */
    public function testCanGenerateSpecificNumberOfPins(): void
    {
        $n = 5;
        $generate =new Generator();
        $values = $generate->emit($n);
        $this->assertEquals(
            count($values),
            $n
        );
    }
}
