<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
   
<nav class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="navbar-header"> 
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button> 
        
        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
        
    </div> 
    
    <ul class="nav navbar-right top-nav"> 
        
        <li class="dropdown"> 
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                
                <i class="fa fa-rocket"></i> <?php echo $admin_name;  ?> <b class="caret"></b>
                
            </a> 
            
            <ul class="dropdown-menu"> 
                <li> 
                    <a href="index.php?dashboard"> 
                        
                        <i class="fa fa-dashboard"></i> Dashboard
                        
                    </a> 
                </li> 
                
               
                
                <li class="divider"></li>
                
                <li> 
                    <a href="logout.php"> 
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                        
                    </a> 
                </li> 
            </ul> 
            
        </li> 
        
    </ul> 
    
    <div class="collapse navbar-collapse navbar-ex1-collapse"> 
        <ul class="nav navbar-nav side-nav"> 
            <li> 
                <a href="index.php?dashboard"> 
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                        
                </a> 
                
            </li> 
            
            <li> 
                <a href="#" data-toggle="collapse" data-target="#products"> 
                        
                        <i class="fa fa-fw fa-tags"></i> Products
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a> 
                
                <ul id="products" class="collapse"> 
                    <li> 
                        <a href="index.php?insert_product"><i class="fa fa-tag"></i> Insert Product </a>
                    </li> 
                    <li> 
                        <a href="index.php?view_products"><i class="fa fa-tag"></i> View Products </a>
                    </li> 
                </ul> 
                
            </li> 
            
            
            
            <li> 
                <a href="index.php?view_reservations"> 
                    <i class="fa fa-fw fa-users"></i> View Reservations
                </a> 
            </li> 
            
            <li> 
                <a href="index.php?view_orders"> 
                    <i class="fa fa-fw fa-book"></i> View Orders
                </a> 
            </li> 
            
            <li> 
                <a href="index.php?view_contacts"> 
                    <i class="fa fa-fw fa-comments"></i> View Messages
                </a> 
            </li> 
            
            
            
            <li> 
                <a href="logout.php"> 
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a>             </li> 
            
        </ul> 
    </div> 
    
</nav> 


<?php } ?>