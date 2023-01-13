<div class="container  pt-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-4 login-page">
                <h3 class = "text-lightorange">Register</h3>
                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/register/signup" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Name" " class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" " class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="phone" placeholder="Phone Number" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="address" placeholder="Physical Address"  class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" >
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success form-btn">Signup</button>
                    </div>
                    <div class="d-grid">
                        <p class = "text-green">Already have an Account? <a href = "<?php echo base_url();?>/login" style = "text-decoration:none;">Login here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
