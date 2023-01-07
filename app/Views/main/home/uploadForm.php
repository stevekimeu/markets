
  <div class="container">
    <div class="row-md-12 py-3">
      <div class="col-md-12py-3">
        <?php 
            // Display Response
            if(session()->has('message')){
            ?>
            <div class="alert <?= session()->getFlashdata('alert-class') ?>">
            <?= session()->getFlashdata('message') ?>
      </div>
        <?php
        }
        ?>
        <?php 
        // File preview
        if(session()->has('filepath')){ ?>
           <?php 
                if(session()->getFlashdata('extension') == 'jpg' || session()->getFlashdata('extension') == 'jpeg'){
                ?>
                    <img src="<?= session()->getFlashdata('filepath') ?>" width="200px" height="200px"><br>
                <?php
                }else{
                ?>
                    <a href="<?= session()->getFlashdata('filepath') ?>">Click Here..</a>
           <?php
           }
        }
        ?>
        <?php $validation = \Config\Services::validation(); ?>
        <form method="post" action="<?=base_url('livestock/dummy')?>" enctype="multipart/form-data">
           <?= csrf_field(); ?>
           <div class="col-md-6 form-group">
              <label for="file">Image:</label>
              <input type="file" class="form-control" id="path" name="path" />
                <!-- Error -->
                <?php if( $validation->getError('path') ) {?>
                    <div class='alert alert-danger mt-2'>
                        <?= $validation->getError('path'); ?>
                    </div>
                <?php }?>
           </div>
           <div class="col-md-6 form-group">
              <label for="file">Image Name:</label>
              <input type="text" class="form-control" id="name" name="name" />
              <!-- Error -->
              <?php if( $validation->getError('name') ) {?>
                 <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('name'); ?>
                 </div>
              <?php }?>
           </div>

           <input type="submit" class="btn btn-success" name="submit" value="Upload">
        </form>
      </div>
    </div>
  </div>

</body>
</html>