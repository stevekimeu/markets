<div class="container pt-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-4 login-page ">
                
                <h3 class = "text-lightorange">Login in</h3>
                
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/register/signin" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email"  class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                         <button type="submit" class="btn btn-success form-btn">Login</button>
                    </div>
                </form>
                <div>
                        <p class = "text-green">Don't have an Account? <a href = "<?php echo base_url();?>/signup" style = "text-decoration:none;">Register here</a></p>
                </div>
                <div>
                        <p class = "text-green"><a href = "<?php echo base_url();?>/signup" style = "text-decoration:none;">Forgot Password?</a></p>
                </div> 
            </div>
              
        </div>
    </div>