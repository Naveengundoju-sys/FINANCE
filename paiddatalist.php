<! DOCTYPE html>  
<html lang="en">  
<head>  
  <title> Bootstrap 4 Footer with Social icons </title>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">   
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>  
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >  
</head>  
<style>  
body {  
  min-height: 100vh;  
 background-color: coral;  
  /* background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 100%);   */
}  
.table {  
  border-spacing: 0 0.85rem !important;  
}  
.table .dropdown {  
  display: inline-block;  
}  
.table td  
{  
  vertical-align: middle;  
  margin-bottom: 10px;  
  border: none;  
}  
.table th {  
  vertical-align: middle;  
  margin-bottom: 10px;  
  border: none;  
}  
.table thead tr {  
  border: none;  
  font-size: 12px;  
  letter-spacing: 1px;  
  text-transform: uppercase;  
  background: transparent;  
}  
.table thead th {  
  border: none;  
  font-size: 12px;  
  letter-spacing: 1px;  
  text-transform: uppercase;  
  background: transparent;  
}  
.table td {  
  background: #fff;  
}  
.table td:first-child {  
  border-top-left-radius: 10px;  
  border-bottom-left-radius: 10px;  
}  
.table td:last-child {  
  border-top-right-radius: 10px;  
  border-bottom-right-radius: 10px;  
}  
.avatar {  
  width: 2.75rem;  
  height: 2.75rem;  
  line-height: 3rem;  
  border-radius: 50%;  
  display: inline-block;  
  background: transparent;  
  position: relative;  
  text-align: center;  
  color: #868e96;  
  font-weight: 700;  
  vertical-align: bottom;  
  font-size: 1rem;  
  -webkit-user-select: none;  
  -moz-user-select: none;  
  -ms-user-select: none;  
  user-select: none;  
}  
.avatar-sm {  
  width: 2.5rem;  
  height: 2.5rem;  
  font-size: 0.83333rem;  
  line-height: 1.5;  
}  
.avatar-img {  
  width: 100%;  
  height: 100%;  
  -o-object-fit: cover;  
  object-fit: cover;  
}  
.avatar-blue {  
  background-color: #c8d9f1;  
  color: #467fcf;  
}  
table.dataTable.dtr-inline.collapsed  
  > tbody  
  > tr[role="row"]  
  > td:first-child:before,  
table.dataTable.dtr-inline.collapsed  
  > tbody  
  > tr[role="row"]  
  > th:first-child:before {  
  top: 28px;  
  left: 14px;  
  border: none;  
  box-shadow: none;  
}  
table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child  
{  
  padding-left: 48px;  
}  
table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child {  
  padding-left: 48px;  
}  
table.dataTable > tbody > tr.child ul.dtr-details {  
  width: 100%;  
}  
table.dataTable > tbody > tr.child span.dtr-title {  
  min-width: 50%;  
}  
table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,  
table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,  
table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {  
  padding: 0.75rem 1rem 0.125rem;  
}  
div.dataTables_wrapper div.dataTables_length label,  
div.dataTables_wrapper div.dataTables_filter label {  
  margin-bottom: 0;  
}  
  
@media (max-width: 767px) {  
  div.dataTables_wrapper div.dataTables_paginate ul.pagination {  
    -ms-flex-pack: center !important;  
    justify-content: center !important;  
    margin-top: 1rem;  
  }  
}  
.btn-icon {  
  background: #fff;  
}  
.btn-icon .bx {  
  font-size: 20px;  
}  
.btn .bx {  
  vertical-align: middle;  
  font-size: 20px;  
}  
.dropdown-menu {  
  padding: 0.25rem 0;  
}  
.dropdown-item {  
  padding: 0.5rem 1rem;  
}  
.badge {  
  padding: 0.5em 0.75em;  
}  
.badge-success-alt {  
  background-color: #d7f2c2;  
  color: #7bd235;  
}  
.table a {  
  color: #212529;  
}  
.table a:hover,  
.table a:focus {  
  text-decoration: none;  
}  
table.dataTable {  
  margin-top: 12px !important;  
}  
.icon > .bx {  
  display: block;  
  min-width: 1.5em;  
  min-height: 1.5em;  
  text-align: center;  
  font-size: 1.0625rem;  
}  
.btn {  
  font-size: 0.9375rem;  
  font-weight: 500;  
  padding: 0.5rem 0.75rem;  
}  
.avatar-blue {  
      background-color: #c8d9f1;  
      color: #467fcf;  
    }  
    .avatar-pink {  
      background-color: #fcd3e1;  
      color: #f66d9b;  
    }  
</style>  
<body>  
<div class="container">  
  <div class="row py-5">  
    <div class="col-12">  
    <?php 
 $conn=mysqli_connect("localhost","root","","finance");
 if(!$conn){
     die("Connection Failed");
 }
 $sql="select * from `paid_data`";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0)
         {?>
      <table id="example" class="table table-hover responsive nowrap" style="width:100%">  
        <thead>  
        <h2>SRINIVAS FINANACE</h2>  
          <tr>  
          <th>ID</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Paid Amount</th>
            <th>Date</th>
            <th>Time</th>
          </tr>  
        </thead>  
        <?php foreach($result as $row){
      ?>
        <tr>
        <th><?php echo $row['ID'];?></td>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Phone_Number'];?></td>
            <td><?php echo $row['Amount_Paid'];?></td>
            <td><?php echo $row['Date'];?></td>
            <td><?php echo $row['Time'];?></td>
        </tr>
        <?php
                        }
                    }
                    else{
                        echo "<script>alert('No Data Found');window.location.href='update.php'<script/>";
                    }
                
               ?>      </table>  
    </div>  
  </div>  
</div>  
<div class="container text-center">  
  <div class="row py-5">  
    <div class="col-12">  
          
    </div>  
  </div>  
</div>  
<script>  
$(document).ready(function() {  
  $("#example").DataTable({  
    aaSorting: [],  
    responsive: true,  
    columnDefs: [  
      {  
        responsivePriority: 1,  
        targets: 0  
      },  
      {  
        responsivePriority: 2,  
        targets: -1  
      }  
    ]  
  });  
  $(".dataTables_filter input")  
    .attr("placeholder", "Search here...")  
    .css({  
      width: "300px",  
      display: "inline-block"  
    });  
  $('[data-toggle="tooltip"]').tooltip();  
});  
</script>  
</body>  
</html>  