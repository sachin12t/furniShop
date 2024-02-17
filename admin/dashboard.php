<!DOCTYPE html>

<?php include 'layout/header.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        #sidebar {

            width: 250px;
            height: 100%;
            background-color: #333;
            position: fixed;
            top:90px;
            overflow: auto;

        }

        #main-content {
            margin-left: 250px;
            padding: 20px;
        }

        #sidebar a {
           
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: #818181;
            display: block;
        }

        #sidebar a:hover {
            background-color: #555;
            color: #fff;
        }

        #header {
            background-color: red;
            padding: 10px;
            color: #fff;
            text-align:center;
        }

        
    </style>
</head>
<body>
    <div id="sidebar">
        <div id="header">
            <h2>Admin</h2>
        </div>
        <a href="#">Dashboard</a>
        <a href="addproduct.php">AddProducts</a>
        <a href="product.php">productList</a>
        <a href="order.php">Orders</a>
        <a href="userlist.php">Userlist</a>
        <a href="addcategory.php">Add category</a>
    </div>
    <!-- <div id="main-content">
        <h2>Dashboard</h2>
    </div> -->
</body>
</html>
