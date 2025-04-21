<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Funcoes.php';

class FuncoesTest extends TestCase
{
    public function testIsEvenTrue()
    {
        $this->assertTrue(Funcoes::isEven(4));
    }

    public function testIsEvenFalse()
    {
        $this->assertFalse(Funcoes::isEven(3));
    }

    public function testFactorialValid()
    {
        $this->assertEquals(120, Funcoes::factorial(5));
    }

    public function testFactorialZero()
    {
        $this->assertEquals(1, Funcoes::factorial(0));
    }

    public function testFactorialNegative()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-1);
    }

    public function testIsPalindromeTrue()
    {
        $this->assertTrue(Funcoes::isPalindrome("A man a plan a canal Panama"));
    }

    public function testIsPalindromeFalse()
    {
        $this->assertFalse(Funcoes::isPalindrome("Hello world"));
    }

    public function testFahrenheitToCelsius()
    {
        $this->assertEquals(0, Funcoes::fahrenheitToCelsius(32));
    }

    public function testCalculateDiscountValid()
    {
        $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
    }

    public function testCalculateDiscountNegativePrice()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(-100, 10);
    }

    public function testCalculateDiscountNegativePercent()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(100, -10);
    }
}