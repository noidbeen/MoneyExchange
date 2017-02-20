<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<div class="box" style="letter-spacing: 1px;width: 100%; height: 120px; margin: 250px auto 0; text-align: center; color: white; font-family: sans-serif; font-size: 32px; padding-top: 80px; background-color: transparent;">
<?php
  $bath=$_POST['bath'];   
  $type=$_POST['type'];

  $yen = 3.587;
  $dall = 0.03;
  $euro = 0.02;

  if ($bath == "") {
    echo "PLEASE INPUT AMOUNT OF MONEY (BATH)";
  }else{
    if (is_numeric($bath)) {
  switch ($type) {
    case 1:
    $sum=$bath*$yen;
    echo $bath." Bath = ".($sum)." Yen";
    break;

    case 2: 
    $sum=$bath*$dall;
    echo $bath." Bath = ".($sum)." Dollar";
    break;

    case 3: 
    $sum=$bath*$euro;
    echo $bath." Bath = ".($sum)." Euro";
    break;

    default:
    echo "Try again";
  }
  
}else{
  echo "PLEASE INPUT WITH NUMBER";
}
}
?>
<br>
<br>
<a href="index.html"><input type="submit" value="Back" style="width:100px; height:50px; clear:both; border-radius: 50px;border:solid white 1px; background-color:transparent; cursor:pointer; color:white; ">
</a>

</div>
