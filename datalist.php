
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRINIVAS FINANCE</title>
    <link rel="stylesheet" href="./bootstrap.css">
</head>
<body>
    <table class="table table-bordered table-striped table-primary table-responsive text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Phone Number</th>
            <th>Total Amount</th>
            <th>Return Amount</th>
            <th>Due Amount</th>
            <th>Date</th>
        </tr>
        <?php
        $conn=mysqli_connect("localhost","root","","finance");
        if(!$conn){
            die("Connection Failed");
        }
        $sql="select * from `data`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Father_Name'];?></td>
            <td><?php echo $row['Phone_Number'];?></td>
            <td><?php echo $row['Total_Loan_Amount'];?></td>
            <td><?php echo $row['Return_Amount'];?></td>
            <td><?php echo $row['Due_Amount'];?></td>
            <td><?php echo $row['Date'];?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>