<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Dashboard / View Orders
                
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
               
                   <i class="fa fa-tags"></i>  View Orders
                
               </h3>
            </div>
            
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        
                        <thead>
                            <tr>
                                <th> Order ID: </th>
                                <th> Customer Name: </th>
                                <th> Customer Email: </th>
                                <th> Order Time: </th>
                                <th> Order Summary: </th>
                                <th> Order Total: </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <?php 
          
                                $i=0;
                            
                                $get_order = "select * from orders";
                                
                                $run_order = mysqli_query($con,$get_order);
          
                                while($row_order=mysqli_fetch_array($run_order)){
                                   
                                    $order_id = $row_order['order_id'];
                                    
                                    $customer_name = $row_order['customer_name'];
                                    
                                    $customer_email = $row_order['customer_email'];
                                    
                                    $order_time = $row_order['order_time'];

                                    $order_summary = $row_order['order_summary'];
                                    
                                    $order_total = $row_order['order_total'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr> 
                                <td> <?php echo $order_id; ?> </td>
                                <td> <?php echo $customer_name; ?> </td>
                                <td> <?php echo $customer_email; ?> </td>     
                                <td> <?php echo $order_time; ?> </td>                          
                                <td> <?php echo $order_summary; ?> </td>
                                <td>Rs. <?php echo $order_total; ?> </td>
                                <td> 
                                     
                                     <a href="index.php?delete_order=<?php echo $order_id; ?>">
                                     
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