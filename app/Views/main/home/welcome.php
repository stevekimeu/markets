
<div class = "container page-box py-1 mb-2" id = "welcome">
	<h3 class = "text-green title-head">Search for your Favourite Livestock</h3>
	<div class = "row mx-2">
		<?php foreach($livestock_type as $stock):?>
				<div class="col-md-2 card py-2 mb-3" >
                    <a href="<?php echo base_url();?>/livestock#<?php echo $stock['name'];?>">
                        <img class="img-fluid  thumbnail" src="<?php echo $stock['path'];?>" width = "auto" height = "auto" alt = "Dummy Image"/>
						<p class = "card-text text-lightorange text-center"><?php echo $stock['name'];?></p>
                    </a>
                </div>
			<?php endforeach;?>
	</div>
</div>

