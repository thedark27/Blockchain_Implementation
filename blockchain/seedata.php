<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mycart.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<style>

</style>
</head>
<body>
<?php include_once 'header.php' ?>
<?php include_once 'menu.php' ?>
<div class='container-fluid'  style=''>
<?php
$data='';
//Get the total number of block through url :-
if($_GET['pid'])
$data=$_GET['pid'];

//Function to create the hash using sha256 :-
function gethash($nonce,$pre_hash,$curr,$key)
{
    $str=$pre_hash.$curr.$key.$nonce;
    return hash('sha256',$str);
}

$x=1;
for($i=1;$i<=$data;$i++)
{
    $node="Transition Number_".$i;
    $p=$i-1;
    $prev="Transition Number_".$p; 



 if($x==1)
  echo "<div class='row' style='margin-top:20px;'>";
    echo "<div class='col-sm-6' style='background-color: #b3e6b3;width:90%'>";
   
//Read the prev_hash:-    
    if($i==1)
    {
    $prev_node=fopen("node_0.txt","a+") or exit("Unable to open file!");
    $prev_hash = fread($prev_node, filesize("node_0.txt"));}
    else{
        $prev_node=fopen($prev,"a+") or exit("Unable to open file!");
    $prev_hash = fread($prev_node, filesize($prev));
    }
    strval($prev_hash);
    $str1=hash('sha256',$prev_hash);
    strval($str1);
   // echo $str1."<br>";

//Read the Current Block :-   
   $file=fopen($node,"a+") or exit("Unable to open file!");
   $curr=fread($file, filesize($node));
   strval($curr);


//Read The Nonce :-   
   $none=fopen("nonce.txt","a+") or exit("Unable to open file!");
     $k=1;
     $st=0;
     while($li=fgets($none)){
         $st=$li;
         if($k==$i)
         break;
         $k++;
     }
     $st=(int)$st;
     //echo $st."<br>";


//Read the current Hash :-     
    $out=fopen("output.txt","a+") or exit("Unable to open file!");
    $j=1;
    $str='';
    while ($line = fgets($out)) {
        $str=$line;
        if($j==$i)
            break;
    $j++;
      }
      strval($str);
    //echo $str."<br>";

//Read the Previous Hash :-   
    $out=fopen("output.txt","a+") or exit("Unable to open file!");
    $j=1;
    $str5='';
    while ($line = fgets($out)) {
        $str5=$line;
        if($j==$i-1)
            break;
    $j++;
      }
      strval($str5);
    //echo $str5."<br>";

    $key="ashish@123";

$hash=gethash($st,$str1,$curr,$key);
//echo $hash;


//To check the equal hash:-
    $z=0;
$s=0;
for($s=0;$s<64;$s++)
{
    if($str[$s]==$hash[$s])
    $z=1;
    else
    {
        $z=0;
    break;
    }
}

//For the First Hash:-
if($i==1)
{
    echo "<br>";
    $file=fopen($node,"a+") or exit("Unable to open file!");
    $curr=fread($file, filesize($node));
    
    $file=fopen($node,"a+") or exit("Unable to open file!");
    while ($line = fgets($file)) {
        echo $line."<br>";
      }
      echo "Nonce Value :".$st."<br>";
      
      function check($hash)
      {
          $z=1;
      for($i=0;$i<4;$i++)
      {
          if($hash[$i]=="0")
          $z=0;
          else{
              $z=1;
          break;
          }
      }
      return $z;
      }
      $non=0;
      while(check($str1))
      {
          $non=$non+1;
          $str1=$str1.$non;
          $str1=hash('sha256',$str1);
      }
      echo "Prev hash : "."<font color='green'><b>".$str1."</font></b>"."<br>";


      strval($curr);
      $curr=$curr."ashish@123";
      $curr_hash = hash('sha256',$curr);
      echo "Current Hash : "."<font color='green'><b>".$str."</b></font>";

      echo "<br><br>";
    echo "</div>";   
}

else
{
if($z)
{
    echo "<br>";
    $file=fopen($node,"a+") or exit("Unable to open file!");
    $curr=fread($file, filesize($node));
    
    $file=fopen($node,"a+") or exit("Unable to open file!");
    while ($line = fgets($file)) {
        echo $line."<br>";
      }
      echo "Nonce Value :".$st."<br>";
      echo "Prev hash : "."<font color='green'><b>".$str5."</b></font>"."<br>";
      strval($curr);
      $curr=$curr."ashish@123";
      $curr_hash = hash('sha256',$curr);
      echo "Current Hash : "."<font color='green'><b>".$str."</b></font>";

      echo "<br><br>";
    echo "</div>";
}
else{
    echo "<br><br><h3><font color='red'>SomeOne Try to Change the Data in Block Number $i ,So For the Security Purpose We Remove the chain.....</font></h3>";
break;
}
}

    $x++;
    if($x==3)
    {
    echo "</div>";
    $x=1;
    }
}
  ?>
</div>
</body>
</html>