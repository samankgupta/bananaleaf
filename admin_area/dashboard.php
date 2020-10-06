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
                        <div class="huge"> 11 </div>
                           
                        <div> Reservations </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="">
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
                        <div class="huge"> 25 </div>
                           
                        <div> Orders </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="">
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
                        <div class="huge"> 15 </div>
                           
                        <div> Messages </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="">
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
                            
                            </tr>
                            
                        </thead>
                        
                        <tbody>
                           
                            <tr>
                                <td> 1 </td>
                                <td> Yash </td>
                                <td> 9609370034 </td>
                                <td> yash.jain@gmail.com </td>
                                <td> 02:30:00 </td>
                                <td> 03/10/2020 </td>
                                <td> 4 </td>
                                
                            </tr>
                           
                            <tr>
                                <td> 2 </td>
                                <td> Nishant </td>
                                <td> 9609370034 </td>
                                <td> nishant.kashyap@gmail.com </td>
                                <td> 03:30:00 </td>
                                <td> 03/10/2020  </td>
                                <td> 5 </td>
                                
                            </tr>
                           
                            <tr>
                                <td> 3 </td>
                                <td> Samank </td>
                                <td> 9609370034 </td>
                                <td> samank.gupta@gmail.com </td>
                                <td> 04:40:00 </td>
                                <td> 03/10/2020 </td>
                                <td> 2 </td>
                                
                            </tr>
                           
                            <tr>
                                <td> 4 </td>
                                <td> Tanay </td>
                                <td> 9609370034 </td>
                                <td> tanay.bhadula@gmail.com </td>
                                <td> 05:00:00 </td>
                                <td> 03/10/2020  </td>
                                <td> 3 </td>
                                
                            </tr>
                            
                        </tbody>
                        
                    </table>
                </div>
                
                <div class="text-right">
                    
                    <a href="">
                        
                        View All Reservations <i class="fa fa-arrow-circle-right"></i>
                        
                    </a>
                    
                </div>
                
            </div>
            
        </div>
    </div>
    

    
</div>


<?php } ?>