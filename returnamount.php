<?php
$conn=mysqli_connect("localhost","root","","finance");
if(!$conn){
    die("Connection Failed");
}
if(isset($_POST['value']))
$id=$_POST['id'];
$name=$_POST['uname'];
$phone=$_POST['phone'];
$value=$_POST['value'];
$sql="INSERT INTO `paid_data` (`ID`,`Name`,`Phone_Number`,`Amount_Paid`) VALUES ('$id','$name','$phone','$value')";
$result=mysqli_query($conn,$sql);
if($result){
echo "Data Enter Succesfully";
header('Refresh:0.5;url=index.html');
}

$sql="UPDATE `data` SET `Return_Amount`=`Return_Amount`+'$value' where `Name`='$name'";
$result=mysqli_query($conn,$sql);
$sql="UPDATE `data` SET `Due_Amount`=`Total_Loan_Amount`-`Return_Amount` where `Name`='$name'";
$result=mysqli_query($conn,$sql);
?>