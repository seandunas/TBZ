<h3 style="text-align:center">Add Service Here</h3>

    <form method="post" class="form-inline" action="<?=base_url()?>index.php/users/insertItem" enctype="multipart/form-data">
        <div class="form-group">
            <label for="s_name">Service Name</label>
            <input type="text" class="form-control" name="s_name">
            <span style="font-size:12px;color:red;"><?php echo form_error('s_name');?></span>
        </div>
        <div class="form-group">
            <label for="s_desc">Description</label>
            <input type="text" class="form-control" name="s_desc">
            <span style="font-size:12px;color:red;"><?php echo form_error('s_desc');?></span>
        </div>
        <div class="form-group">
            <label for="s_price">Price</label>
            <input type="number" class="form-control" name="s_price">
            <span style="font-size:12px;color:red;"><?php echo form_error('s_price');?></span>
        </div>
        <div class="form-group">
            <label for="s_category">Category</label>
            <select id="Category" class="form-control" name="s_category">
                <option disabled selected value> -- select an option -- </option>
                <option value="cat">Cat</option>
                <option value="dog">Dog</option>
                <option value="both">Both</option>
            </select>
        </div>
        <button type="submit" class="btn btn-dark">Add Record</button>
    </form><br>


    <div class="container">
    <div class="jumbotron">
    <h4>Service List</h4><br>
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>SERVICE NAME</th>
                <th>DESCRIPTION</th>
                <th>PRICING</th>
                <th>CATEGORY</th>
            </thead>    
            <tbody>
                <?php
                    foreach($services as $service):?>
                    <tr>
                        <td>
                            <?=$service->service_id;?>
                        </td>
                        <td>
                            <?=$service->service_name;?>
                        </td>
                        <td>
                            <?=$service->service_desc;?>
                        </td>
                        <td>
                            <?=$service->service_price;?>
                        </td>
                        <td>
                            <?=$service->service_category;?>
                        </td>
                        <td>
                            <a href="<?=$this->config->base_url()?>index.php/users/editservice/<?=$service->service_id;?>" class="btn btn-warning"><i class="ti-pencil"></i></a>
                            <a href="<?=$this->config->base_url()?>index.php/users/deleteservice/<?=$service->service_id;?>" class="btn btn-danger"><i class="ti-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <?= $linksServices ?>
      
    </div>
  </div>




    <!-- <div class="main-content-inner">
        <div class="row">
            
            Contextual Classes start
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Services</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-dark text-center">
                                    <thead class="text-uppercase">
                                        <tr class="table-active">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
            <tbody>

                <?php 
                $conn = new mysqli("localhost","root","","dbfinals");
                $sql = "SELECT * FROM product";
                $result = $conn->query($sql);
                        $count=0;
                if ($result -> num_rows >  0) {
                    
                    while ($row = $result->fetch_assoc()) 
                    {
                        $count=$count+1;
                ?>
                    
                    <tr>
                        <th><?php echo $count ?></th>
                        <th><?php echo $row["service_name"] ?></th>
                        <th><?php echo $row["service_desc"] ?></th>
                        <th><?php echo $row["service_price"]  ?></th>
                        <th><?php echo $row["service_category"]  ?></th>
                        
                        <th> <a href="up"Edit</a><a href="edit.php?id=<?php echo $row["service_id"] ?>">Edit</a> <a href="up"Edit</a><a href="delete.php?id=<?php echo $row["service_id"] ?>">Delete</a></th>
                        
                        
                        </tr>
                <?php
                        
                    }
                }

                ?>

            </tbody>
                                </table>
           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->






