<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_reservation'])){
        
        $delete_id = $_GET['delete_reservation'];
        
        $delete_reservation = "delete from reservations where reservation_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_reservation);
        
        if($run_delete){
            
            echo "<script>alert('Reserved Table has been removed.')</script>";
            
            echo "<script>window.open('index.php?view_reservations','_self')</script>";
            
        }
        
    }

?>

<?php } ?>