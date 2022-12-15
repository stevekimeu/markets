
<!------------- Display all animals from database----------------------->
<div class = "container page-box">
    <div class = "row">
        <?php foreach($livestock as $animal ):?>
            <div class="col-md-2 card py-2 mb-3" >
                <a href="#">
                    <img class="img-fluid  thumbnail" src="<?php echo $animal['image']; ?>" width = "auto" height = "auto" alt = "Livestock image"/>
                    <p class = "text-livestock text-left my-2"><?php echo 'Kshs.'.$animal['price']; ?></p>
                    <p class = "text-livestock text-left my-2"><?php echo $animal['category'].",  ".$animal['breed'] ; ?></p>
                    <p class = "text-maroon text-left my-2">Location:<?php echo $animal['location']; ?></p>
                    <p class = "text-livestock text-left my-2">Age:<?php echo $animal['age']; ?> Months</p>
                    <p class = "text-livestock text-left my-2">Weight:<?php echo $animal['weight']; ?> Kgs</p>
                </a>
            </div>
            <?php endforeach; ?>
    </div> 
</div>