

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Market Portal </title>
    
    <!----------Meta tags/elements similar on all page---------------------------->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="stevekimeu@gmail.com" />
    <meta name="robots" content="index, follow"/>
    <meta name="url" content="<?php echo base_url();?>"/>
    <meta name="keywords" content="Online Livestock Markets, Livestock auctioning, Livestock Farming, Animals Online Markets, Animal Auctioning"/>
    <meta name="description" content="This is a Livestock Markets system that gives platform for farmers to meet buyers directly without including the middle-men" />

    
    <?php include 'includes/header.php';?>
</head>

<body >
    <!--------Loader-------------->
    <!-- <div class= "loader spinner-border text-success" role = "status" ></div>     -->
    
	<!---Navbar with links--->
	<?php include 'includes/navbar.php';?>	

    
    
    <!---Load page name based on parameter handed by controller--->	   
    <?php include $page_folder.'/'.$page_name.'.php';?>


    <!--Footer section ---->
    <?php 
    // include 'includes/footer.php';?>
    
    <!--Scripts section ---->
    <!-- <?php 
    // include 'includes/scripts.php';?> -->

    
</body>
</html>