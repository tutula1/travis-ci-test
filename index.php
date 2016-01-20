<?php
include 'YouTube.php';
class YouTubeTest extends PHPUnit_Framework_TestCase {
 private $youTube;
 protected function setUp() {
  $this->youTube = new YouTube();
 }
 public function testCase1() {
  $url = 'http://www.youtube.com/watch?v=_RRnyChxijA&feature=related&';
  $keyCode = $this->youTube->getKeyCode($url);
  $this->assertEquals('_RRnyChxijA', $keyCode);
 }
 /*public function testCase2() {
  $url = 'http://www.youtube.com/watch?v=-WolCnOLPg8&feature=related';
  $keyCode = $this->youTube->getKeyCode($url);
  $this->assertEquals('-WolCnOLPg8', $keyCode);
 }*/
}
/*class RemoteConnectTest extends PHPUnit_Framework_TestCase
{
    public function setUp(){ }
    public function tearDown(){ }

    public function testConnectionIsValid()
    {
        // test to ensure that the object from an fsockopen is valid
        $connObj = new RemoteConnect();
        $serverName = 'www.google.com';
        $this->assertTrue($connObj->connectToServer($serverName) !== false);
    }
}*/
