
<!------------- Display all animals from database----------------------->
    <?php 
        date_default_timezone_set("Africa/Nairobi");    
        $date=date_create(date("y-m-d"));    
        $count = count($livestock);
    ?>
<div class = "container page-box pt-1">
                <h1 class = "text-green title-head">Weekly Results</h1> 
                    <?php foreach($livestock_type as $category ):
                        $title = $category['name'];?>   
                            <div class = "container-fluid py-1"  id = "<?php echo $title;?>"> 
                                <h3 class = "subtitle-head text-lightorange"><?php echo $title; ?></h3> 
                            </div>

        <div class = "row">     
<!-------------------------process auction date----------------------------------------------------------!-->
            <?php foreach($livestock as $animal ):
                $auction = strtotime($animal['auctiondate']);
                $date1=date_create(date('y-m-d', $auction));
                $diff=date_diff($date,$date1);
                $d=strtotime("+1 week");
                $expiry = date("Y-m-d", $d);
                $days = $diff->format("%R%a");

        //check the livestock category and output the details
            if($animal['category'] == $title && $date>$date1 && $days>=-10){?>
                <div class="col-md-5 card py-1 mb-3  ml-5">
                    <div class = "row">
                        <div class="col-md-4">
                            <a href="#" style="text-decoration: none;  color:inherit;">
                                <img class="card-img-top " src="<?php echo $animal['image'];?>" width = "auto" height = "auto" alt = "Livestock image"/>
                            </a>
                        </div>
                        <div class="col-md-8">
                            <a href="#" style="text-decoration: none;  color:inherit;">
                                <h5 class="card-title text-lightorange text-left"><?php echo $title.",  ".$animal['breed']; ?></h5>
                                <p class = "card-text  text-green text-left my-2"><?php echo 'Price: '.$animal['price']. '  KES'; ?></p>              
                                <h6 class="card-title text-maroon text-left">Location: <?php echo $animal['location']; ?></h6>
                                <h6 class="card-title text-maroon text-left">Expired : <?php echo $days. "  days"; ?></h6>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } elseif($days<=-10){
                echo site_url('delete/' . $animal['id']); } endforeach; ?>
        </div> 
    <?php endforeach; ?> 
</div>