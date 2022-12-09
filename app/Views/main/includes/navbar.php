<div class="page-content container-fluid">
<!---------------------------------------------------------------------Top navbar--------------------------------------------------------------------------------->
    <div class="row bg-maroon">
        <div class="nav-top container">
            <div class=" row">                
                <!----------------------------------This is Display for all Screens--------------------------------------->
                <div class="col-md-12 d-flex center-content-around">
                <ul class="d-block d-sm-block d-md-block nav">
                            <li class="nav-item dropdown">
                               <a class="dropdown-item" href="#" >admin@livestockmarkets.com </a>
                            </li>
                    </ul>
                <ul class="d-block d-sm-block d-md-block nav">
                            <li class="nav-item dropdown">
                               <a class="dropdown-item" href="#" >0711648268</a>
                            </li>
                    </ul>
                     <ul class="d-block d-sm-block d-md-block nav">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" target="_blank" href="<?php echo base_url();?>markets/login" >Login</a>  
                            </li>
                    </ul>
                    <ul class="d-block d-sm-block d-md-block nav">
                            <li class="nav-item dropdown">
                               <a class="dropdown-item" href="<?php echo base_url();?>markets/register" >Register</a>
                            </li>
                    </ul>                    
                </div>
            </div>
        </div>
    </div>
</div>
  
<!------------------------------------------Middle navbar---------------------------------------------------------------------------------------------------->
<div class="page-content container-fluid">
    <div class="row" id = "middle">
        <div class="container">
            <div class=" row">
                <div class="col-md-4 col-sm-4 col-12 d-flex align-items-center py-2 ">
                    <a href="<?php echo base_url();?>">
                        <img class="img-fluid  thumbnail" src="<?php echo base_url();?>/uploads/system/logo.png" alt="<?php echo $settings['institution_long'];?>"/>
                    </a>
                </div>
                <div class="col-md-8 col-sm-8 col-12 row  py-2  d-none d-md-flex ">                    
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <div class="text-maroon navicon px-3"><i class='fas fa-money-check'></i></div>
                        <div class="text">
                            <span>Tenders</span><br>
                            <a class="text-maroon" href="<?php echo base_url();?>downloads/tenders">Visit Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----------------------Main navbar----------------------------------------------------------------------------------------------------->
<nav class=" page-content navbar navbar-expand-md bg-black navbar-dark sticky-top">    
    <div class="container ml-md-5 pl-md-5">
        
        <!-- Brand -->
        <a class=" navbar-brand" href="<?php echo base_url();?>">Home</a>
        
        <ul class="d-block d-sm-block d-md-none nav">
            <li class="text-white nav-item">
                <i class='fas fa-phone'></i> <span><?php echo $settings['phone'];?></span>
            </li>
        </ul>
         <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseNav">
            <span class=" navbar-toggler-icon"></span>
        </button>
        
         <!-- Navbar links -->
        <div class=" collapse navbar-collapse" id="collapseNav">
            <ul class="navbar-nav ">                
                <!--------------------About us section---------------------------------------------------------------------------------------------------------->
                <li  class="nav-item dropdown px-md-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      About Us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url();?>">About Livestock Markets</a></li>                       
                      	<li><a class="dropdown-item" href="<?php echo base_url();?>">How we came to be</a></li>                      	
                    </ul>
                </li>
                <!--------------------Transaction Section---------------------------------------------------------------------------------------------------------->
                <li  class="nav-item dropdown px-md-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Transaction
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url();?>">Sell Livestock</a></li>                       
                      	<li><a class="dropdown-item" href="<?php echo base_url();?>">Buy Livestock</a></li>                      	
                    </ul>
                </li>
                <!--------------------weekly Results Sections------------------------------------------------------------------------------------------------------->
                <a class=" navbar-brand" href="<?php echo base_url();?>">weekly Results</a> 
                
                <!--------------------Conntact Us Sections------------------------------------------------------------------------------------------------------->
                <a class=" navbar-brand" href="<?php echo base_url();?>">Contact Us</a> 
                
            </ul>
        </div>
    </div>
</nav>