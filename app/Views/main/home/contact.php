<div class = "container page-box py-1">
    <h2 class = "text-green py-2 mx-3">Get in touch with us</h2>
        <div class="form-row-12 pb-5">            
            <div class="form-row md-form">
                        <div class="form-group col-md-5" style = "color:#696969; ">
                            <h5 class = "text-lightorange pt-2 mx-2">Contact Information</h5>
                                <ul class="list-group list-group-flush" style = "padding-bottom:0; ">
                                    <li class= "list-group-item" style = "padding-bottom:0;">We are located in Westlands Nairobi, Kenya</p></li>
                                    <li class= "list-group-item" style = "padding-bottom:0;">Email: admin@livestockmarkets.com</p></li>
                                    <li class= "list-group-item" style = "padding-bottom:0;">Phone No. +254711648268</p></li>
                                    <li class= "list-group-item" style = "padding-bottom:0;">Address: Westlands Nairobi, Kenya</p></li>  
                                </ul>                                          
                        </div>
                        <div class="form-group col-md-5">
                        <h5 class = "text-lightorange pt-2 mx-2">Leave a Message</h5>
                        <form method= "post" id = "contactform" action = "<?php echo base_url();?>/home/contact" enctype="multipart/form-data">             
                                <div class="form-group">
                                    <input type="text" class="form-control" name= "name" id="name" placeholder="Enter your full name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name= "email" id="email" placeholder="Enter email addrees">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name= "contact" id="contact" placeholder="Contact Number">
                                </div>
                                <div class="form-group">
                                    <textarea class="md-textarea form-control" rows="2" name= "message" id="message" placeholder="Your message"></textarea>
                                </div>
                                <button type="submit" value = "submit" id = "contactform" name = "submit" class="btn btn-success form-btn">Submit</button>
                        </form>
                        </div>                        
                    <div class="form-group col-md-2">  </div>
                </div> 
        </div>
</div>
