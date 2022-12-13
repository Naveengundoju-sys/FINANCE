<?php
$conn=mysqli_connect("localhost","root","","finance");
if(!$conn){
    die("Connection Failed");
}
$Name=$_POST['Username'];
$fname=$_POST['fname'];
$phone=$_POST['phone_no'];
$Lamount=$_POST['Amount'];
$Rateofinterest=$_POST['roi'];
$Time=$_POST['timep'];
$Tamount=$_POST['Tamount'];

$sql="INSERT INTO `data`(`Name`,`Father_Name`,`Phone_Number`,`Total_Loan_Amount`) values('$Name','$fname','$phone','$Tamount')";
$result=mysqli_query($conn,$sql);
if($result){
echo "<script>alert('Data Entered Succesfully');window.location.href='datalist.php';</script>";
}
?>