<!---------------------------------------------------------------------Top navbar--------------------------------------------------------------------------------->
<div class="page-content container-fluid">
   <div class="row bg-nav-top">
        <div class="nav-top container">
            <div class=" row">
            <div class="col-md-5 d-flex center-content-around ">

            </div> 
            <div class="col-md-7 d-flex center-content-around  ">
                    <ul class="d-block d-sm-block d-md-block nav mx-3">
                            <li class="nav-item">
                                    <a class="dropdown-item text-white " href="<?php echo base_url();?>/livestock">Buy Livestock</a>  
                            </li>
                    </ul>
                    <ul class="d-block d-sm-block d-md-block nav ">
                            <li class="nav-item">
                                    <a class="dropdown-item text-white text-center" href="<?php echo base_url();?>">Hay/ Chick Feed</a> 
                            </li>
                    </ul>
                     <ul class="d-block d-sm-block d-md-block nav mx-3">
                            <li class="nav-item">
                                <a class="dropdown-item text-white" href="<?php echo base_url();?>">Dairy Products</a> 
                            </li>
                    </ul>
                    <ul class="d-block d-sm-block d-md-block nav mx-3">
                            <li class="nav-item">
                               <a class="dropdown-item text-white " href="<?php echo base_url();?>" >Sign Up</a>
                            </li>
                    </ul> 
                    <ul class="d-block d-sm-block d-md-block nav mx-3">
                            <li class="nav-item">
                               <a class="dropdown-item text-white " href="<?php echo base_url();?>" >Sign In</a>
                            </li>
                    </ul>                    
            </div>
          
            </div>
        </div>
    </div>
</div>
  
<!------------------------------------------Middle navbar---------------------------------------------------------------------------------------------------->
<div class="page-content container-fluid ">
        <div class="container-fluid">
            <div class=" row">
                <div class="col-md-3 d-flex align-items-center py-2 mb-4">
                    <a href="<?php echo base_url();?>">
                        <img class="img-fluid  thumbnail" src="<?php echo base_url();?>/uploads/system/logos.jpg"  alt = "Logo is here"/>
                    </a>
                </div>
                <div class="col-md-3 d-flex align-items-center py-2 mb-1">
                    <a class="text-green navi-btn" href="<?php echo base_url();?>/selllivestock">Sell your Livestock</a> 
                </div>
                <div class="input-group  col-md-4 py-2 mt-4">
                    <input type="text" class="form-control form-control-sm" placeholder="Quick Search: Keywords" aria-label="keywords" aria-describedby="basic-addon2">
                    <button id="search-button" type="button" name = "button" class="btn btn-success btn-sm mb-4" aria-label="Name">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="input-group  col-md-2 py-2 mt-4">


                </div>
                <!--  -->
        </div>
    </div>
</div>
<!-----------------------Main navbar----------------------------------------------------------------------------------------------------->
<nav class=" page-content navbar navbar-expand-md bg-gray navbar-dark sticky-top">    
    <div class="container ml-md-5 pl-md-5">
        
        <!-- Brand -->
        <a class=" navbar-brand" href="<?php echo base_url();?>">Home</a>
    
        <div class=" collapse navbar-collapse" id="collapseNav">
            <ul class="navbar-nav ">                
                <!--------------------Transaction Section---------------------------------------------------------------------------------------------------------->
                <a class="navbar-brand" href="<?php echo base_url();?>#about">About Livestock Markets</a>
                <a class="navbar-brand" href="<?php echo base_url();?>">Livestock Breeding</a>
                <a class="navbar-brand" href="<?php echo base_url();?>/markets">Market Days</a>
                <a class=" navbar-brand" href="<?php echo base_url();?>">weekly Results</a>
                <a class=" navbar-brand" href="<?php echo base_url();?>/contact-us">Contact Us</a> 
                <a class=" navbar-brand" href="<?php echo base_url();?>/currentinfo/blog">Blog</a> 
                <a class=" navbar-brand" href="<?php echo base_url();?>/dummy">Dummy Livestock</a>
                
            
        </div>
    </div>
</nav>