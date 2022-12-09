<!---------------------------------------------------------------------Top navbar--------------------------------------------------------------------------------->
<div class="page-content container-fluid">
   <div class="row bg-nav-top">
        <div class="nav-top container">
            <div class=" row">                           
                <div class="col-md-4 d-flex center-content-around">
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
                </div>
            <div class="col-md-7 d-flex center-content-around text-white">
                <form name = "search" action = "search.php" method = "POST">                     
                <!-- <div class="form-group">                      -->
                   &nbsp; <input type="text" name = "search" placeholder="Search for Livestock" style = "border:1px solid white; border-radius:5px; padding:2px; margin:2px; " >&nbsp;<input name = "submit" type="submit" Value="Search" >
                <!-- </div>   -->
                </form>
            </div>                           
            <div class="col-md-1 d-flex center-content-around">
                     <ul class="d-block d-sm-block d-md-block nav">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" target="_blank" href="<?php echo base_url();?>markets/register" >Sign Up</a>  
                            </li>
                    </ul>
                    <ul class="d-block d-sm-block d-md-block nav">
                            <li class="nav-item dropdown">
                               <a class="dropdown-item" href="<?php echo base_url();?>markets/login" >Sign In</a>
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
                        <img class="img-fluid  thumbnail" src="<?php echo base_url();?>/uploads/system/logos.png" />
                    </a>
                </div>
                <div class="col-md-8 col-sm-8 col-12 row  py-2  d-none d-md-flex ">                    
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <div class="text-maroon navicon px-3"><i class='fas fa-money-check'></i></div>
                        <div class="text">
                            <span>Search Bar</span><br>
                            <a class="text-maroon" href="<?php echo base_url();?>downloads/tenders">Visit Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----------------------Main navbar----------------------------------------------------------------------------------------------------->
<nav class=" page-content navbar navbar-expand-md bg-green navbar-dark sticky-top">    
    <div class="container ml-md-5 pl-md-5">
        
        <!-- Brand -->
        <a class=" navbar-brand" href="<?php echo base_url();?>">Home</a>
        
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
                <li><a class=" navbar-brand" href="<?php echo base_url();?>">weekly Results</a> </li>
                
                <!--------------------Conntact Us Sections------------------------------------------------------------------------------------------------------->
                <li><a class=" navbar-brand" href="<?php echo base_url();?>">Contact Us</a> </li>
                
            </ul>
        </div>
    </div>
</nav>