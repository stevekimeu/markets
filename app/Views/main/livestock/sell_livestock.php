<div class = "container page-box py-1">
    <h3 class = "text-green title-head">Enter details of the Livestock here</h3>
        <div class="form-row-12 pb-5">
                <?php if(session()->has('message')){ ?>
                    <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php 
                    }?>
                    <?php $validation = \Config\Services::validation(); ?>
            <form  method = "post" action = "<?php echo base_url('livestock/markets');?>" id = "myform" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <select class="custom-select mr-sm-2" name = "category" id="typeoflivestock">
                            <option>Choose Type of Livestock</option>
                            <option>Beef Cattle</option>
                            <option>Dairy Cattle</option>
                            <option>Goat</option>
                            <option>Sheep</option>
                            <option>Camel</option>
                            <option>Donkey</option>
                            <option>Poultry</option>
                            <option>Domestic Cat</option>
                            <option>Horses</option>
                            <option>Livestock Feeds</option>
                            <option>Swine</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="breed" name = "breed" placeholder="Livestock Breed">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="age" name = "age" placeholder="Livestock Age e.g(20 Months)">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="weight" name = "weight" placeholder="Livestock Weight e.g(200 - 300 Kgs)">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="date" class="form-control" id="auctiondate" name = "auctiondate" placeholder="Date of Auction">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="location" name = "location" placeholder="Livestock Location (County and Ward)">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="price" name = "price" placeholder="Quoted Price">
                    </div>
                    <div class="form-group col-md-6">
                        <select type="text" class="form-control" name = "gender" id="sex">
                            <option selected>Livestock Sex</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <!-- <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="sex" name = "auctiondate" placeholder="Livestock Sex">
                    </div> -->
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control" name = "image" id="myfile" />
                    </div>                
                </div>               
                <?php if( $validation->getError('image') ) {?>
                 <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('image'); ?>
                 </div>
                 <?php }?>
                <button type="submit" name = "submit" class="btn btn-success form-btn">Submit</button>
            </form>
            <div class="form-row">
                    <div class="form-group col-md-6">
                    <?php
                        // File preview
                            if(session()->has('filepath')){                     
                                if(session()->getFlashdata('extension') == 'jpg' || session()->getFlashdata('extension') == 'jpeg'){
                                    ?>
                                        <div class="col-sm-4 card py-2">
                                            <img src="<?= session()->getFlashdata('filepath') ?>" with="40px" height="100px"><br>
                                            <p class = "card-text text-livestock text-center">uploaded image</p>
                                        </div>
                                <?php
                                    }else{
                                        ?>
                                <a href="<?= session()->getFlashdata('filepath') ?>">Click Here..</a>
                            <?php
                            }
                        }?>  
                    </div>
                </div> 
        </div>
    </div>