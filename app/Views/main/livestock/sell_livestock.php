<div class = "container page-box py-1">
    <h3 class = "text-green title-head">Enter details of the Livestock here</h3>
        <div class="form-row-12 pb-5">
            <form id = "myform">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <select class="custom-select mr-sm-2" id="typeoflivestock">
                            <option>Choose Type of Livestock</option>
                            <option>Beef Cattle</option>
                            <option>Dairy Cattle</option>
                            <option>Goat</option>
                            <option>Sheep</option>
                            <option>Camel</option>
                            <option>Donkey</option>
                            <option>Poultry</option>
                            <option>Domestic Cat</option>
                        </select>
                    </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="breed" placeholder="Livestock Breed">
                        </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="age" placeholder="Livestock Age e.g(20 Months)">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="weight" placeholder="Livestock Weight e.g(200 - 300 Kgs)">
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                        <input type="date" class="form-control" id="auctiondate" placeholder="Date of Auction">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="location" placeholder="Livestock Location (County and Ward)">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="price" placeholder="Quoted Price">
                    </div>
                    <div class="form-group col-md-6">
                        <select type="text" class="form-control" id="sex">
                            <option selected>Livestock Sex</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="sex" placeholder="Livestock Sex">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control" name = "image" id="myfile" />
                    </div>
                </div>
            
                <button type="submit" class="btn btn-success form-btn">Submit</button>
                </form>
        </div>
</div>