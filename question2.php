<?php

//PHP has existing sorting functions like sort() and rsort()
//However, the following is my own sorting funtion
function mySort($arr)
{  
  $len=count($arr);
  for($i=1;$i<$len;$i++)
  { 
    for($k=0;$k<$len-$i;$k++)
    {
       if($arr[$k]>$arr[$k+1])
        {
            $tmp=$arr[$k+1];
            $arr[$k+1]=$arr[$k];
            $arr[$k]=$tmp;
        }
    }
  }
  return $arr;
}

?>
