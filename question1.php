for ($row=1;$row<=10;$row++)
{
  $len=$row;
  if($row>=6)
    $len=11-$row;
  for ($col=1;$col<=$len;$col++)
  {
    echo "*";
  }
  echo "<br>";
}
