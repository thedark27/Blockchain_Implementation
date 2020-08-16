<?php
$serial='';
$messg="";
if(isset($_POST['sub']))
{
    //To read the data from client....
    $nameowner=$_POST['txt_name'];
    $name_buyer=$_POST['txt_nameown'];
    $adhar_owner=$_POST['txt_pwd'];
    $adhar_buyer=$_POST['txt_pwd1'];
    $mobile_owner=$_POST['txt_mob'];
    $mobile_buyer=$_POST['txt_mob1'];
    $price=$_POST['txt_price'];
    $land=$_POST['txt_land'];

    //To increment the block Number :-
    $fhandle = fopen("number.txt","r");
    $serial = fread($fhandle,filesize("number.txt"));
    strval($serial);
    $next=$serial+1;
    $fhandle = fopen("number.txt","w");
    fwrite($fhandle,$next);
    fclose($fhandle);

$c=$serial-1;
$pre_node="Transition Number_".$c;
$current_node='Transition Number_'.$serial;


//When No node is added to the chain.....
 if($serial==1)
 {
 $prev_file=fopen("node_0.txt","a+") or exit("Unable to open file!");
 fwrite($prev_file,"Block NUmber : ".$serial."\n");
 fwrite($prev_file,"Name of Owner : ".$nameowner."\n");
 fwrite($prev_file,"Name of Buyer : ".$name_buyer."\n");
 fwrite($prev_file,"Adhar NUmber of Owner : ".$adhar_owner."\n");
 fwrite($prev_file,"Adhar Number of Buyer : ".$adhar_buyer."\n");
 fwrite($prev_file,"Mobile Number of Owner : ".$mobile_owner."\n");
 fwrite($prev_file,"Mobile number of Buyer : ".$mobile_buyer."\n");
 fwrite($prev_file,"Price of land : ".$price."\n");
 fwrite($prev_file,"Area of land : ".$land."\n");
 }

 else
 {
 $prev_file=fopen($pre_node,"a+") or exit("Unable to open file!");
 }


 //Enter the data in node using file system .....
 $file=fopen($current_node,"a+") or exit("Unable to open file!");
 fwrite($file,"Block Number : ".$serial."\n");
 fwrite($file,"Name of Owner : ".$nameowner."\n");
 fwrite($file,"Name of Buyer : ".$name_buyer."\n");
 fwrite($file,"Adhar NUmber of Owner : ".$adhar_owner."\n");
 fwrite($file,"Adhar Number of Buyer : ".$adhar_buyer."\n");
 fwrite($file,"Mobile Number of Owner : ".$mobile_owner."\n");
 fwrite($file,"Mobile number of Buyer : ".$mobile_buyer."\n");
 fwrite($file,"Price of land : ".$price."\n");
 fwrite($file,"Area of land : ".$land."\n");


 //Read the prev data to get the hash of previous data ....
if($serial==1)
 $content = fread($prev_file, filesize("node_0.txt"));
 else
 $content = fread($prev_file, filesize($pre_node));
 strval($content);
$prev_hash=hash("sha256",$content);

//Read the current data to make current data....
$file=fopen($current_node,"a+") or exit("Unable to open file!");
$str=fread($file,filesize($current_node));
strval($str);

//Function to find the hash of the string :-
function gethash($nonce,$pre_hash,$curr,$key)
{
    $str=$pre_hash.$curr.$key.$nonce;
    return hash('sha256',$str);
}

//To Find The specific hash:-
$non=0;
$key="ashish@123";
$hash=gethash($non,$prev_hash,$str,$key);


//Function to check the golden hash :-
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

//To find the Nonce....
while(check($hash))
{
    $non=$non+1;
    $hash=gethash($non,$prev_hash,$str,$key);
}

//Enter the Nonce in the file....
$nonce=fopen("nonce.txt","a+") or exit("Unable to open file!");
fwrite($nonce,$non."\n");

//Enter the current hash to the file name output.txt....
$fi=fopen("output.txt","a+") or exit("Unable to open file!");
fwrite($fi,$hash."\n");


$messg= "<font color='green'>Block is Added to Blockchain</font>";

}
?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>poogle</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel = "stylesheet" type = "text/css" href = "style.css" />
<style>
    .put{
        height:50px;
    }
    label{
        margin-top: 15px;
    }
    input[type=submit]{
        margin-top: 15px;
        background-color: green;
        padding-left: 100px;
        padding-right: 100px;
        height: 60px;
    }
</style>

</head>
    <body>
        <?php include 'header.php'; ?>
      <?php include 'menu.php'; ?>
            <div class="container-fluid" style='background-color: white'>
            <div class="row cont"  >
                <div class="col-sm-12">
                  <div class='container-fluid'  style='margin-top: 25px;background-color: #f5f5f0'>
                    <div class='row'>
                        <div class="col-sm-6">
                            <form method='post'>  
                            <table>
                                <tr><td><label><strong>Name of current owner</strong></label></td><td><label style="margin-left: 35px"><strong>Name of New owner</strong></label></td></tr>
                                <tr><td><input type='text' style="height:50px" size="40" name='txt_name' value=''></td><td ><input type="text" style="margin-left: 35px;height:50px" name='txt_nameown' size="40" value=''></td></tr>
                                <tr><td><label><strong>Adhar number of current owner</strong></label></td><td><label style="margin-left: 35px"><strong>Adhar number of new owner</strong></label></td></tr>
                                <tr><td><input type='text' style="height:50px" size="40" name='txt_pwd' value=''></td><td><input type="text" size="40" style="margin-left: 35px;height:50px" name='txt_pwd1' value=''></td></tr>
                                <tr><td><label><strong>Mobile Number of new owner</strong></label></td><td><label style="margin-left: 35px"><strong>Mobile Number of current owner</strong></label></td></tr>
                                <tr><td><input type='text' style="height:50px" name='txt_mob' size="40" value=''></td><td><input type="text" size="40" style="margin-left: 35px;height:50px" name='txt_mob1' value=''></td></tr>
                                <tr><td><label><strong>Price of land</strong></label></td><td><label style="margin-left: 35px"><strong>Block Number</strong></label></td></tr>
                                <tr><td><input type='text' style="height:50px" size="40" name='txt_price' value=''></td><td><input type="text" size="40" style="margin-left: 35px;height:50px" readonly=""  value='<?php echo $serial; ?>'></td></tr>
                                <tr><td><label><strong>Land Area </strong></label></td><td><input type="text" size="40" style="margin-left: 35px;height:50px;margin-top:10px" name="txt_land"   value=''></td></tr>
                                <tr><td colspan="2"><input type='submit' name='sub' ></td></tr>
                            </table>
                        </form>
                        </div>
                        <div class="col-sm-6">
                           <?php echo "<h2 style='margin-top:200px;margin-left:100px'>".$messg."</h2>"; ?>
                        </div>
                    </div>
                   </div> 
                </div>
            </div>
            </div>
       
    </body>
</html>
