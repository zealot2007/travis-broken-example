<?php

class Test extends PHPUnit_Framework_TestCase
{
  public function testOnePlusOne() {
    $a = 1;
    while(true) {
      $this->assertEquals(1+1,2);
      print "this is successful! {$a}";
      $a = $a + 1;
    }
  	}
}

?>
