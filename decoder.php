<!DOCTYPE html>
<html>


<h1>MD5 cracker</h1>
<p>This application  takes an MD5 hash of a four digit pin 
and check all 10,000 possible four digit PINs to 
determine the PIN.<br>
</p>

<?php 

  echo "Debug Output: <br>";
  $start = microtime(true);
  for ($i = 0; $i <= 9999; $i++) {
    $x=str_pad($i, 4, '0', STR_PAD_LEFT);
    $hash=hash('md5',$x);
    if($i<=15){  
    echo "$hash  $x <br>";
    }
    $input=false;
    if ($hash == $_GET["md5"] ){
        $time_elapsed_secs = microtime(true) - $start;
        echo "Total checks:$i <br>";
        echo "Ellapsed time: $time_elapsed_secs <br> ";
        $input= true;
        echo " PIN is: $x <br>";
        break;
    } 
   }
   if($input != true){
       echo "PIN : Not Found <br>";
   }
   
?>

<form action="decoder.php"  method="get" >
  <input type="text" name="md5" size="40" >
  <input type="submit" value="Crack md5"> 
</form>
<p><a href="index.php">Back to Cracking</a></p>

</body>
</html>