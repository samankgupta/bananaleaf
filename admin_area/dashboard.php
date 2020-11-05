<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?> 

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Dashboard </h1>
        
        <ol class="breadcrumb">
            <li class="active">
            
                <i class="fa fa-dashboard"></i> Dashboard
            
            </li>
        </ol>
        
    </div>
</div>

<div class="row">
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                        <i class="fa fa-tags fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $count_products ?> </div>
                           
                        <div> Products </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="index.php?view_products">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right"> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span> 
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                        <i class="fa fa-users fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_reservations ?> </div>
                           
                        <div> Reservations </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="index.php?view_reservations">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-orange">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                        <i class="fa fa-book fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_orders ?> </div>
                           
                        <div> Orders </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="index.php?view_orders">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                        <i class="fa fa-comments fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $count_contacts ?></div>
                           
                        <div> Messages </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="index.php?view_contacts">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
    
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    
                    <i class="fa fa-users"></i> New Reservations
                    
                </h3>
            </div>
            
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        
                        <thead>
                          
                            <tr>
                           
                                <th> Reservation ID: </th>
                                <th>  Name: </th>
                                <th>  Mobile: </th>
                                <th>  Email: </th>
                                <th>  Time: </th>
                                <th>  Date: </th>
                                <th> Total People </th>
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
                
                <div class="text-right">
                    
                    <a href="index.php?view_reservations">
                        
                        View All Reservations <i class="fa fa-arrow-circle-right"></i>
                        
                    </a>
                    
                </div>
                
            </div>
            
        </div>
    </div>
    

    
</div>


<?php } ?>