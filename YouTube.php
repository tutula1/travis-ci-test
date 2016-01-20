<?php
class YouTube {
  /** * Use to get the key from YouTube url *
  * @return string */
 public function getKeyCode($url) {
  $pattern = '/v=(\w+)/';
  $matches = array();
  preg_match($pattern, $url, $matches);
  if (isset($matches[1])) {
   return $matches[1];
  }
  return false;
 }
}

/*class RemoteConnect
{
    public function connectToServer($serverName=null)
    {
        if($serverName==null){
            throw new Exception("That's not a server name!");
        }
        $fp = fsockopen($serverName,80);
        return ($fp) ? true : false;
    }

    public function returnSampleObject()
    {
        return $this;
    }
}*/
