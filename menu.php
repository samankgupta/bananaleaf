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
    <link rel="stylesheet" href="css/menu.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins&display=swap" rel="stylesheet">
    <title>Banana Leaf | Menu</title>
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
            <a class="nav-link active" href="menu.php">MENU</a>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-12 offset-md-1 col-md-10 offset-lg-0 ">
            <div class="card ml-lg-4 my-5 categorycard">
              <div class="card-header bg-warning">
                Menu Categories
              </div>
              <ul class="list-group list-group-flush">
                
                <?php
                    $p_cat_sql = "SELECT p_cat_title FROM product_categories";
                    $p_cat_result = mysqli_query($con, $p_cat_sql);
                    while( $p_cat_record = mysqli_fetch_assoc($p_cat_result) ) {
                ?>  
                <a href="#<?php echo str_replace(' ', '',(strtolower($p_cat_record['p_cat_title']))); ?>"><li class="list-group-item"><?php echo $p_cat_record['p_cat_title'];?></li></a>
                <?php } ?>

              </ul>
            </div>
            <div class="card ml-lg-4 my-lg-5 mb-0 categorycard">
              <div class="card-header bg-warning">
                Categories
              </div>
                <ul class="list-group list-group-flush">

                <?php
                    $cat_sql = "SELECT cat_title FROM categories";
                    $cat_result = mysqli_query($con, $cat_sql);
                    while( $cat_record = mysqli_fetch_assoc($cat_result) ) {
                ?>  
                <li class="list-group-item" id="<?php echo str_replace(' ', '',(strtolower($cat_record['cat_title']))); ?>"><?php echo $cat_record['cat_title'];?></li>
                <?php } ?>            
            
                </ul>
            </div>
          </div>
          <div class="col-xl-9 col-lg-8 col-12 my-4 p-0">
            <?php
              $p_cat_sql = "SELECT p_cat_id,p_cat_title FROM product_categories";
              $p_cat_result = mysqli_query($con, $p_cat_sql);
              while( $p_cat_record = mysqli_fetch_assoc($p_cat_result) ) {
            ?>
              <h4 class="menuhead col-11 p-0 pb-1 my-4" id="<?php echo str_replace(' ', '',(strtolower($p_cat_record['p_cat_title']))); ?>"><?php echo strtoupper($p_cat_record['p_cat_title']); ?></h4>
              <div class="row">
                <?php
                  $p_sql = "SELECT product_id, p_cat_id, cat_id, product_title, product_img, product_price, product_desc, max_quantity FROM products";
                  $p_result = mysqli_query($con, $p_sql);
                  while( $p_record = mysqli_fetch_assoc($p_result) ) {
                    if( $p_record['p_cat_id'] == $p_cat_record['p_cat_id']) {
                ?>
                  <div class="col p-0 my-3 mb-4 text-center <?php $get_cat_name_sql= "SELECT cat_title FROM categories WHERE cat_id = ".$p_record['cat_id']; $get_cat_name_result=mysqli_query($con, $get_cat_name_sql); $get_cat_name_record = mysqli_fetch_assoc($get_cat_name_result); echo str_replace(' ', '',(strtolower($get_cat_name_record['cat_title']))) ?>">
                    <div class="card">
                      <img class="card-img-top" src="menu/<?php echo $p_record['product_img']?>" alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title"><?php echo $p_record['product_title']?></h4>
                        <p class="card-text"><?php echo $p_record['product_desc']?></p>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter<?php echo $p_record['product_id']; ?>">
                          Add To Cart
                        </button>
                        <form method="post">
                        <div class="modal fade" id="exampleModalCenter<?php echo $p_record['product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color: rgb(230,230,230);">
                                <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $p_record['product_title']?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body p-0">
                              <div class="table-responsive">
                                <table class="table table-hover m-0">
                                  <thead>
                                    <tr>
                                      <th></th>
                                      <th class="px-0">Quantity</th>
                                      <th>Price</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      for ($i=1;$i<=$p_record['max_quantity'];$i++)
                                      {
                                        echo '<tr><td><input type="radio" name="radios" id="radio'.$i.'" value="'.$i.'">';
                                        echo '</td><td><label for="radio'.$i.'">'.$i.'</label>';
                                        echo '</td><td><label for="radio'.$i.'">Rs. '.$p_record['product_price'] * $i.'</label></td></tr>';
                                      }      
                                      echo '<input type="hidden" name="item_name" value="'.$p_record['product_title'].'"'; 
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                              </div>
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-success mx-auto" value="Add To Cart" name="addtocart">
                              </div>
                            </div>
                          </div>
                      </div>
                      </form>
                    </div>
                  </div>
              </div>
                <?php } ?>
                <?php } ?>
                <?php } ?>
          </div>  
        </div>
        </div>
        </div>  
        </div>
        </div>
      <a href="#" class="fas fa-arrow-circle-up" id="backtotop"></a>
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
    <script src="js/menujs.js"></script>
  </body>
</html>
<?php
if(isset($_POST['addtocart'])){
  if(isset($_SESSION['email']))
  {
    $add_item = "insert into cart values('".$_SESSION['name']."','".$_SESSION['email']."','".$_POST['item_name']."','".$_POST['radios']."')";
    $run_item = mysqli_query($con,$add_item);
    if($run_item){
      
      echo "<script>alert('".$_POST['item_name']." Added to Cart!')</script>";
    }
  }
  else{
    echo "<script>alert('Login to Proceed.')</script>";
    echo "<script>window.open('login.php','_self')</script>";
  }
}
?>