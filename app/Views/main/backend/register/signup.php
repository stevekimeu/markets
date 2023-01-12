<div class="container page-box pt-5 mt-5">
        <div class="row justify-content-md-center">
            <div class="col-7">
                <h2>Register</h2>
                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/Registration/registration" method="post">
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
                        <button type="submit" class="btn btn-success">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
