<?php
use PHPUnit\Framework\TestCase;

use App\Factorial;

class FactorialTest extends TestCase
{
 public function testGenerarFactorial()
 {
 $factorial = new Factorial();
 $resultado = $factorial->calcularFactorial(5);

 $this -> assertEquals(120, $resultado);

 }
}
