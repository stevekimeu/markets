<div class = "container" id = "markets">
    <h4 class ="title-head text-green table-striped">Livestcok Markets | Physical Markets - East Africa</h4>
        <table class="table table-hover">
            <thead>
                <tr >
                    <th>#S.No</th>
                    <th>Market Name</th>
                    <th>Market Location</th>
                    <th>Market Day</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            if(!empty($markets)):                
            foreach($markets as $data): ?>
                <tr>
                    <td></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['location']; ?></td>
                    <td><?php echo $data['day']; ?></td>
                </tr>
                <?php endforeach; endif; ?>
            </tbody>
        </table>

</div>