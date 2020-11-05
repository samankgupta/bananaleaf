<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admin where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        $admin_email = $row_admin['admin_email'];
        
        $get_products = "select * from products";
        
        $run_products = mysqli_query($con,$get_products);
        
        $count_products = mysqli_num_rows($run_products);
        
        $get_reservations = "select * from reservations";
        
        $run_reservations= mysqli_query($con,$get_reservations);
        
        $count_reservations = mysqli_num_rows($run_reservations);
        
        $get_orders = "select * from orders";
        
        $run_orders= mysqli_query($con,$get_orders);
        
        $count_orders = mysqli_num_rows($run_orders);
        
        $get_contacts = "select * from contacts";
        
        $run_contacts = mysqli_query($con,$get_contacts);
        
        $count_contacts = mysqli_num_rows($run_contacts);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banana-Leaf Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper">
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper">
            <div class="container-fluid">
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }   if(isset($_GET['insert_product'])){
                        
                        include("insert_product.php");
                        
                }   if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                        
                }   if(isset($_GET['delete_product'])){
                        
                        include("delete_product.php");
                        
                }   if(isset($_GET['edit_product'])){
                        
                        include("edit_product.php");
                        
                }    if(isset($_GET['view_reservations'])){
                        
                        include("view_reservations.php");
                        
                }   if(isset($_GET['delete_reservation'])){
                        
                        include("delete_reservation.php");
                        
                }   if(isset($_GET['view_orders'])){
                        
                        include("view_orders.php");
                        
                }   if(isset($_GET['delete_order'])){
                        
                        include("delete_order.php");
                        
                }   if(isset($_GET['view_contacts'])){
                        
                        include("view_contacts.php");
                        
                }   if(isset($_GET['delete_contact'])){
                        
                        include("delete_contact.php");
                        
                } 
        
                ?>
                
            </div>
        </div>
    </div>

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>


<?php } ?>