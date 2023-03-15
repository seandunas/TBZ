<?php
$item = $items[0];
?>

<div class="container">
    <div class="panel panel-warning">
        <div class="panel-heading">
            EDIT USER DETAILS
            <div class="panel-body">
                <a href="<?=$this->config->base_url()?>index.php/users/userlist" class="btn btn-danger" style="margin-bottom:20px">BACK</a>
                <form action="<?=$this->config->base_url()?>index.php/users/updateuser/<?=$item->user_id?>" method="post">
                    <div class="form-group">
                        <img src="<?=base_url()?>uploads/<?=$item->user_avatar;?>" width="100"/>
                    </div>
                    <div class="form-group">
                        <label>
                            USER ID
                        </label>
                        <input type="text" name="u_id" class="form-control" value="<?=$item->user_id?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>
                            FIRST NAME
                        </label>
                        <input type="text" name="u_fname" class="form-control" value="<?=$item->user_fname?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>
                            LAST NAME
                        </label>
                        <input type="text" name="u_lname" class="form-control" value="<?=$item->user_lname?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>
                            BIRTH DATE
                        </label>
                        <input type="date" name="u_bday" class="form-control" value="<?=$item->user_bday?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>
                            CONTACT NUMBER
                        </label>
                        <input type="number" name="u_contactno" class="form-control" value="<?=$item->user_contactno?>" required/>
                        <span style="font-size:12px;color:red;"><?php echo form_error('u_contactno');?></span>
                    </div>
                    <div class="form-group">
                        <label>
                            EMAIL
                        </label>
                        <input type="text" name="u_email" class="form-control" value="<?=$item->user_email?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>
                            USERNAME
                        </label>
                        <input type="text" name="u_username" class="form-control" value="<?=$item->user_username?>" required/>
                        <span style="font-size:12px;color:red;"><?php echo form_error('u_username');?></span>
                    </div>
                    <div class="form-group">
                        <label>
                            PASSWORD
                        </label>
                        <input type="password" name="u_password" class="form-control" value="<?=$item->user_password?>" required/>
                        <span style="font-size:12px;color:red;"><?php echo form_error('u_password');?></span>
                    </div>
                    <div class="form-group">
                        <label>
                            CONFIRM PASSWORD
                        </label>
                        <input type="password" name="cpsw" class="form-control" required/>
                        <span style="font-size:12px;color:red;"><?php echo form_error('cpsw');?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success"/>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>