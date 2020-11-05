<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_contact'])){
        
        $delete_id = $_GET['delete_contact'];
        
        $delete_contact = "delete from contacts where contact_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_contact);
        
        if($run_delete){
            
            echo "<script>alert('Message Has been Removed.')</script>";
            
            echo "<script>window.open('index.php?view_contacts','_self')</script>";
            
        }
        
    }

?>

<?php } ?>