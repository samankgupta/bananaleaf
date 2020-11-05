<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Dashboard / View Messages
                
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
               
                   <i class="fa fa-tags"></i>  View Messages
                
               </h3>
            </div>
            
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        
                        <thead>
                            <tr>
                                <th> Contact ID: </th>
                                <th> Name: </th>
                                <th> Mobile: </th>
                                <th> Email: </th>
                                <th> Message: </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <?php 
          
                                $i=0;
                            
                                $get_contacts = "select * from contacts";
                                
                                $run_contacts = mysqli_query($con,$get_contacts);
          
                                while($row_contacts=mysqli_fetch_array($run_contacts)){
                                    
                                    $contact_id = $row_contacts['contact_id'];                                    
                                    $contact_name = $row_contacts['contact_name'];
                                    $contact_mobile = $row_contacts['contact_mobile'];
                                    $contact_email = $row_contacts['contact_email'];
                                    $contact_message = $row_contacts['contact_message'];      
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $contact_name; ?> </td>
                                <td> <?php echo $contact_mobile; ?> </td>
                                <td> <?php echo $contact_email; ?> </td>                                
                                <td>  <?php echo $contact_message; ?> </td>
                            
                                <td> 
                                     
                                     <a href="index.php?delete_contact=<?php echo $contact_id; ?>">
                                     
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