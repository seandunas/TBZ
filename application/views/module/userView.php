<div class="container-fluid h-50 p-10">
    <div class="row justify-content-center h-100">
        <div class="col-md-8 my-auto">
            <div class="card h-100 shadow-lg rounded-lg" style="background-color: #ffe5b4;">
                <div class="card-header" style="background-color: #94bbe9; color: white;">
                    <h4>User Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                        <img src="<?=base_url()?>uploads/<?=$user_avatar;?>" src="..." alt="..." class="img-fluid rounded shadow-sm">
                           
                        </div>
                        <div class="col-md-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>User ID:</strong> <?php echo $user_id; ?></li>
                                <li class="list-group-item"><strong>First Name:</strong> <?php echo $user_fname; ?></li>
                                <li class="list-group-item"><strong>Last Name:</strong> <?php echo $user_lname ?></li>
                                <li class="list-group-item"><strong>Username:</strong> <?php echo $user_username ?></li>
                                <li class="list-group-item"><strong>Email Address:</strong> <?php echo $user_email ?></li>
                                <li class="list-group-item"><strong>Birth Date:</strong> <?php echo $user_bday ?></li>
                                <li class="list-group-item"><strong>Contact No.:</strong> <?php echo $user_contactno ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
