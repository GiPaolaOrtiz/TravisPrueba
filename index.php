<!DOCTYPE HTML>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>
	 <h1>Prueba con Travis y PHP <h1>

      <?php
class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(2=1+1);
  	}
}
?>
    </body>
</html>
