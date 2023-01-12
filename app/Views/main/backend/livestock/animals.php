
<!------------- Display all animals from database----------------------->
<?php 
    date_default_timezone_set("Africa/Nairobi");    
    $date=date_create(date("y-m-d"));
    $count = count($livestock);
    ?>
<div class = "container page-box pt-1">
<h1 class = "text-green title-head">Livestock on Sale <span class="badge badge-success"><h6 class="mb-1"><?php
            echo $count; ?> Results       
    </h6></span></h1>
<?php foreach($livestock_type as $category ):
            $title = $category['name'];?>   
            <div class = "container-fluid py-1"  id = "<?php echo $title;?>"> 
                <h3 class = "subtitle-head text-lightorange"><?php echo $title; ?></h3> 
            </div>
    <div class = "row ">
     
    <!-------Loop through Livestock database-----------------!-->
    <?php foreach($livestock as $animal ):
    
    //process auction date
        $auction = strtotime($animal['auctiondate']);
        $date1=date_create(date('y-m-d', $auction));
		$diff=date_diff($date,$date1);
        $days = $diff->format("%R%a");

    //check the livestock category and output the details
    if($animal['category'] == $title && $date1>=$date && $days>=0){?>
    <div class="col-md-5 card py-1 mb-3  ml-5">
        <div class = "row ">
        <div class="col-md-4">
            <a href="#" style="text-decoration: none;  color:inherit;">
                <img class="card-img-top " src="<?php echo $animal['image']; ?>" width = "auto" height = "auto" alt = "Livestock image"/>
            </a>
        </div>
        <div class="col-md-8 ">
            <a href="#" style="text-decoration: none;  color:inherit;">
                <h5 class="card-title text-green text-lightorange text-left"><?php echo $title.",  ".$animal['breed']; ?></h5>
                <p class = "card-text  text-green text-left my-2"><?php echo 'Price: '.$animal['price']. '  KES'; ?></p>
                <p class = " card-text text-left my-2">Age:<?php echo $animal['age']; ?> Months</p>
                <p class = "card-text text-left my-2">Weight:<?php echo $animal['weight']; ?> Kgs</p>                
                <h6 class="card-title text-maroon text-left">Location: <?php echo $animal['location']; ?></h6>
            </a>
        </div>
        </div>        
        <p class="card-title text-green text-left"><?php 
                if($date1>$date){?>
                <a href="#" style="text-decoration: none;  color:inherit;">
                    <div class = "btn btn-success">
                    Bidding to end in: <?php echo $days. "  days";?>
                    </div>
                </a>
                <?php }
                else{?>
                <a href="#" style="text-decoration: none; color:inherit;">
                <div class = "btn btn-warning">
                        Bidding Ended
                </div>                
            </a>    
                <?php }
                ?></p>
        </div>
        <?php }
        else{?>
                
            <?php }
       ?>
        <?php endforeach; ?>
    </div> 
    <?php endforeach; ?> 
</div>