<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Dashboard / View reservations
                
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
               
                   <i class="fa fa-tags"></i>  View Reservations
                
               </h3>
            </div>
            
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        
                        <thead>
                            <tr>
                                <th> Reservation ID: </th>
                                <th> Name: </th>
                                <th> Mobile: </th>
                                <th> Email: </th>
                                <th> Time: </th>
                                <th> Date: </th>
                                <th> Total People: </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <?php 
          
                                $i=0;
                            
                                $get_reservations = "select * from reservations";
                                
                                $run_reservations = mysqli_query($con,$get_reservations);
          
                                while($row_reservations=mysqli_fetch_array($run_reservations)){
                                    
                                    $reservations_id = $row_reservations['reservation_id'];                                    
                                    $reservations_name = $row_reservations['reservation_name'];
                                    $reservations_mobile = $row_reservations['reservation_mobile'];
                                    $reservations_email = $row_reservations['reservation_email'];
                                    $reservations_time = $row_reservations['reservation_time'];                                    
                                    $reservations_date = $row_reservations['reservation_date'];
                                    $reservations_people = $row_reservations['reservation_people'];
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $reservations_name; ?> </td>
                                <td> <?php echo $reservations_mobile; ?> </td>
                                <td> <?php echo $reservations_email; ?> </td>                                
                                <td>  <?php echo $reservations_time; ?> </td>                             
                                <td> <?php echo $reservations_date; ?> </td>
                                <td> <?php echo $reservations_people; ?> </td>
                            
                                <td> 
                                     
                                     <a href="index.php?delete_reservation=<?php echo $reservations_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                               
                            </tr>
                            
                            <?php } ?>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php } ?>