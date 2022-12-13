<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.css">
    <style>
        body{
            overflow-x:hidden;
        }
        form{
            padding:0 150px;
        }
        .submit{
            padding:10px 45px;
           margin:0 90%;
        }
        .form-control{
            border:none;
            border-bottom:3px solid coral;
            background:none;
        }
        .col-md-5{
            margin:0 130px;  
        }
        </style>
    
</head>
<body>
    <form method='get' action='' class="form">
    <div class="row m-3">
        <div class="col-md-3"><label for="" class="form-label m-3">Name of The Candidate</label></div>
        <div class="col-md-4"><input type="text"class="form-control mb-3" name="Uname" value="<?php if(isset($_GET['Uname'])){ echo $_GET['Uname'];}?>"></div>
        <div class="col-md-4"><input type="submit" class="btn btn-primary" value="Search" name='submit'></div>
        </div>
    </form>
    <hr>
 <?php 
 $conn=mysqli_connect("localhost","root","","finance");
 if(!$conn){
     die("Connection Failed");
 }
 if(isset($_GET['Uname']))
     {
  $name=$_GET['Uname'];
 $sql="select * from `data` where Name='$name'";
 $result=mysqli_query($conn,$sql);

 if(mysqli_num_rows($result)>0)
         {
  foreach($result as $row){
      ?>
      <div class="row fetch_data flex justify-content-center">
          <div class="col-md-8">
            <h4>Information</h4>
   <form class='form row' method="post" action="returnamount.php">
   <div class="row mb-2">
            <div class="col-md-4">ID :-</div>
            <div class="col-md-7"><input type="text" name='id' value='<?= $row['ID'] ?>' class='form-control' readonly></div>     
        </div>
        <div class="row mb-2">
            <div class="col-md-4">Name :-</div>
            <div class="col-md-7"><input type="text" name="uname" value='<?= $row['Name'] ?>' class='form-control w-100' readonly></div>     
        </div>
        <div class="row mb-2">
            <div class="col-md-4">Father Name :-</div>
            <div class="col-md-7"><input type="text" name="fname" value='<?= $row['Father_Name'] ?>' class='form-control w-100' readonly></div>     
        </div>
        <div class="row mb-2">
            <div class="col-md-4">Phone Number :-</div>
            <div class="col-md-7"><input type="text" name="phone" value='<?= $row['Phone_Number'] ?>' class='form-control w-100' readonly></div>     
        </div>
        <div class="row mb-2">
            <div class="col-md-4">Total Loan Amount :-</div>
            <div class="col-md-7"><input type="text" value='<?= $row['Total_Loan_Amount'] ?>' class='form-control' readonly></div>     
        </div> 
        <div class="row mb-2">
            <div class="col-md-4">Return Amount :-</div>
            <div class="col-md-7"><div class="row">
                <div class="col-md-6"><input type="text" value='<?= $row['Return_Amount'] ?>' class='form-control' readonly></div>
                <div class="col-md-6"><input type="text" name="value" placeholder="New Amount" class="form-control"></div>
            </div></div>     
        </div> 
        <div class="row mb-2">
            <div class="col-md-4">Date Of Loan Issued :-</div>
            <div class="col-md-7"><input type="text" value='<?= $row['Date'] ?>' class='form-control' readonly></div>     
        </div> 
        <div class="row">
            <div class="col-md-5"><input type="submit" name="update" value="Submit" class="btn btn-primary"></div>
        </div>
   </form>
          </div> 
                 </div>
                        <?php
                        }
                    }
                    else{
                        echo "<script>alert('No Data Found');window.location.href='update.php'<script/>";
                    }
                }
                else{
                        echo "<script>alert('No Data Found');window.location.href='update.php'<script/>";
                }?>
        </div>
        
</body>
</html>