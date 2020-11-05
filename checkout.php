<?php 

    session_start();
    include("admin_area/includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins&display=swap" rel="stylesheet">
    <title>Banana Leaf | Checkout</title>
    <style>
        .checkout{
            margin: 120px 0;
        }
        h1{
            color: #95e841;
        }
        td:nth-child(odd){
            font-size: 23px;
            color: #dbff3d;
        } 
        td:nth-child(even){
            font-size: 23px;
            color: white;
        } 
        .pay{
            width: 130px;
            border:0;
            background: none;
            display: block;
            margin: 35px auto;
            text-align: center;
            border: 2px solid #46db46;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
        .pay:hover{
            background: #46db46;
            color: black;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg px-5 pt-4">
        <a class="navbar-brand" href="index.php">BANANA LEAF</a>
        <img src="leaf.png" class="leafimg d-none d-lg-block">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <div></div>
          <div></div>
          <div></div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link" href="index.php">HOME</a>
            <a class="nav-link" href="menu.php">MENU</a>
            <a class="nav-link" href="reservation.php">RESERVATIONS</a>
            <?php
            if (isset($_SESSION['name']))
              echo '<a class="nav-link" href="logout.php">LOGOUT</a>';
            else
              echo '<a class="nav-link" href="login.php">LOGIN</a>';
            ?>
            <a class="nav-link" href="contact.php">CONTACT</a>
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
          </div>
        </div>
      </nav>
    <div class="container p-0">
      <div class="row text-center checkout">
        <div class="col-12 offset-lg-3 col-lg-6 offset-md-2 col-md-8 p-0">
            <h1>CHECKOUT</h1><br><br>
            <table>
                <tr>
                    <td>NAME : </td>
                    <td><?php echo $_SESSION['name'] ?></td>
                </tr>
                <tr>
                    <td>EMAIL : </td>
                    <td><?php echo $_SESSION['email'] ?></td>
                </tr>
                <tr>
                    <td>ORDER TOTAL : </td>
                    <td><?php echo $_SESSION['totalprice'] ?> Rs.</td>
                </tr>
            </table><br>
            <form method="post">
              <input type="submit" class="pay" name="pay" value="PAY">
            </form>
        </div>
      </div>
    </div>
<footer>
    <div class="container">
      <div class="row">
        <section class="col-md-4">
          <h4>Hours :</h4>
          <p>Mon - Thurs : 11:00am - 11:00pm<br>
          Fri - Sun : 09:00am - 11:30pm</p>
          <br>
        </section>
        <section class="col-md-4">
          <h4>Address :</h4>
           <p>Kelambakkam - Vandalur Road<br>
           Rajan Nagar, Chennai, Tamil Nadu 600127</p>
          <br>
        </section>
        <section class="col-md-3 offset-md-1">
          <h4>Contact Us :</h4>
          <i class="fab fa-facebook"></i>
          <i class="fab fa-twitter"></i>
          <i class="fas fa-envelope"></i>
          <i class="fab fa-instagram"></i><br>
          <a href="mailto:bananaleaf@gmail.com">bananaleaf@gmail.com</a>
          <br>
        </section>
      </div>
      <div class="text-center">&copy; Copyright Banana Leaf 2020</div>
    </div>
  </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  if(isset($_POST['pay']))
  {
    date_default_timezone_set("Asia/Kolkata");
    $_SESSION['time']=date("Y/m/d")." ".date("h:i:sa");
    $select_order_rows = "select * from orders";
    $run_customer = mysqli_query($con,$select_order_rows);
    $check_order_rows = mysqli_num_rows($run_order_rows);
    $check_order_rows+=1;
    $add_order = "insert into orders values('".$check_order_rows."','".$_SESSION['name']."','".$_SESSION['email']."','".$_SESSION['time']."','".$_SESSION['ordersummary']."','".$_SESSION['totalprice']."')";
    $run_order = mysqli_query($con,$add_order);
    $delete_cart="delete from cart where name='".$_SESSION['name']."'";
    $delete_cart_result=mysqli_query($con, $delete_cart);
    echo "<script>alert('Payment Successful !')</script>";
    echo "<script>window.open('index.php','_self')</script>";
  }
?>