<?php
$item = $items[0];
?>

<div class="container">
    <div class="panel panel-warning">
        <div class="panel-heading">
            EDIT USER DETAILS
            <div class="panel-body">
                <a href="<?=$this->config->base_url()?>index.php/users/servicelist" class="btn btn-danger" style="margin-bottom:20px">BACK</a>
                <form action="<?=$this->config->base_url()?>index.php/users/updateservice/<?=$item->service_id?>" method="post">
                    
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="u_id" class="form-control" value="<?=$item->service_id?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>SERVICE</label>
                        <input type="text" name="s_name" class="form-control" value="<?=$item->service_name?>" required/>
                    </div>
                    <div class="form-group">
                        <label>DESCRIPTION</label>
                        <input type="text" name="s_desc" class="form-control" value="<?=$item->service_desc?>" required/>
                    </div>
                    <div class="form-group">
                        <label>PRICING</label>
                        <input type="number" name="s_price" class="form-control" value="<?=$item->service_price?>" required/>
                    </div>
                    <div class="form-group">
                        <label>CATEGORY</label>
                        <select id="Category" name="s_category" value="<?=$item->service_category?>">
                            <option disabled selected value> -- select an option -- </option>
                            <option value="cat">Cat</option>
                            <option value="dog">Dog</option>
                            <option value="both">Both</option>
                        </select>
                        <!-- <input type="text" name="s_category" class="form-control" value="<?=$item->service_category?>" required/> -->
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success"/>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>