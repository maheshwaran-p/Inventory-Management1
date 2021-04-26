<?php
session_start();

if(!$_SESSION['empno'])
{

    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}


?>

<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>
        Registration
    </title>
</head>

<body >
<ul class="nav nav-pills nav-stacked">
    <li class="aCTIVE"><a href="welcome.php">Home</a></li>
    
    <li><a href="add_product.php">Product add</a></li>
    <li><a href="wmove_out.php">Storage</a></li>
</ul>
<h1>Welcome</h1><br>
<p >
<?php
include("database/db_conection.php");
$empno = $_SESSION['empno'];
$pquery = "SELECT * FROM employees where emp_no='$empno'";
$presult = mysqli_query($dbcon,$pquery);
$row = mysqli_fetch_array($presult);
echo "$row[3] NO: $row[0]";
?>
</p>
<p>
    <a href="add_product.php" class="btn btn-info btn-lg">
        Add Product
    </a>
</p>


<!--<h1><a href="logout.php">Logout here</a> </h1>-->
<p>
    <a href="logout.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-log-out"></span> Log out
    </a>
</p>


</body>

</html>

