<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    User Information
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="avatar.jpg" class="img-fluid rounded-circle">
                        </div>
                        <div class="col-md-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>User ID:</strong> <?php echo $user['user_id']; ?></li>
                                <li class="list-group-item"><strong>First Name:</strong> <?php echo $user['user_fname']; ?></li>
                                <li class="list-group-item"><strong>Last Name:</strong> <?php echo $user['user_lname']; ?></li>
                                <li class="list-group-item"><strong>Username:</strong> <?php echo $user['user_username']; ?></li>
                                <li class="list-group-item"><strong>Email Address:</strong> <?php echo $user['user_email']; ?></li>
                                <li class="list-group-item"><strong>Birth Date:</strong> <?php echo $user['user_bday']; ?></li>
                                <li class="list-group-item"><strong>Contact No.:</strong> <?php echo $user['user_contactno']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
