<?php
require('vendor/autoload.php');

use App\AddNumbers;
use PHPUnit\Framework\TestCase;

class AddNumbersTest extends TestCase {
  public function testAddNumbers() {
    $app = new AddNumbers();
    $result = $app->addNumbers(5, 7);
    $this->assertEquals(12, $result);
  }
}
