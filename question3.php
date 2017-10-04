<?php
  $string1='football';
  $string2='footboll';
  
  function firstDifference($str1,$str2)
  {
    if(strlen($str1)<strlen($str2))
    {
      $len=strlen($str1);
    }
    else
    {
      $len=strlen($str2);
    }
    for ($i=0;$i<$len;$i++)
    {
      if(strncmp($str1,$str2,$i)!=0)
      {
        return $i-1;
      }
    }
  }
  
  $result=firstDifference($string1,$string2);
  echo "First difference between two strings at position ".$result.": \"".$string1[$result]."\" vs \"".$string2[$result]."\"";
?>
