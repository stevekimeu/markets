
<!------------------------------------------Top navbar---------------------------------------------------------------------------------------------------->
<div class="page-content container-fluid ">
        <div class="container-fluid">
            <div class=" row">
                <div class="col-md-1 py-2 mt-4">
                

                </div>
                <div class="col-md-3 d-flex align-items-center py-2 mb-4 mt-4">
                    <a href="<?php echo base_url();?>">
                        <img class="img-fluid  thumbnail" src="<?php echo base_url();?>/uploads/system/logos.jpg"  alt = "Logo is here"/>
                    </a>
                </div>
                <div class="col-md-3 d-flex align-items-center py-2 mb-2 mt-4">
                    <a class="text-green navi-btn" href="<?php echo base_url();?>/dashboard/sales">Sell your Livestock</a> 
                </div>
                <div class="input-group  col-md-3 py-2 pt-4 mt-4">
                    <input type="text" class="form-control form-control-sm" placeholder="Quick Search: Keywords" aria-label="keywords" aria-describedby="basic-addon2">
                    <button id="search-button" type="button" name = "button" class="btn btn-success btn-sm mb-4" aria-label="Name">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="col-md-2 py-2 pt-4 mt-4">
                <p> <a href = "<?php echo base_url();?>/logout">Logout</a>
                    <?php 
                        $session = session();
                        $name = $session->get('name');    
                        echo $name;
                    ?>
                </p>

                </div>
                <!--  -->
        </div>
    </div>
</div>
<!-----------------------Main navbar----------------------------------------------------------------------------------------------------->
<nav class=" page-content navbar navbar-expand-md bg-nav-top sticky-top">    
    <div class="container ml-md-5 pl-md-5">        
        <!-- dashboard display -->    
        <div class=" collapse navbar-collapse" id="collapseNav">
            <ul class="navbar-nav ">      
                <a class=" navbar-brand" href="<?php echo base_url();?>/dashboard">Buy Livestock</a>
                <a class="navbar-brand" href="<?php echo base_url();?>/dashboard">Edit Livestock Details</a>
                <a class="navbar-brand" href="<?php echo base_url();?>/dashboard">My Livestock Bidders</a>
                <a class="navbar-brand" href="<?php echo base_url();?>/dashboard">My Bids</a>
                <a class=" navbar-brand" href="<?php echo base_url();?>/dashboard/results">weekly Results</a>
            </div>
    </div>
</nav>