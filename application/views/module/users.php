<div class="container">
    <div class="jumbotron">
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>AVATAR</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>BIRTH DATE</th>
                <th>CONTACT NO.</th>
                <th>EMAIL</th>               
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>ACTIONS</th>
            </thead>    
            <tbody>
                <?php
                    foreach($users as $user):?>
                    <tr>
                        <td>
                            <?=$user->user_id;?>
                        </td>
                        <td>
                            <img src="<?=base_url()?>uploads/<?=$user->user_avatar;?>" width="100"/>
                        </td>
                        <td>
                            <?=$user->user_fname;?>
                        </td>
                        <td>
                            <?=$user->user_lname;?>
                        </td>
                        <td>
                            <?=$user->user_bday;?>
                        </td>
                        <td>
                            <?=$user->user_contactno;?>
                        </td>
                        <td>
                            <?=$user->user_email;?>
                        </td>
                        <td>
                            <?=$user->user_username;?>
                        </td>
                        <td>
                            <?=$user->user_password;?>
                        </td>
                        <td>
                            <a href="<?=$this->config->base_url()?>index.php/users/edituser/<?=$user->user_id;?>" class="btn btn-warning"><i class="ti-pencil"></i></a>
                            <a href="<?=$this->config->base_url()?>index.php/users/deleteuser/<?=$user->user_id;?>" class="btn btn-danger"><i class="ti-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <?= $links ?>
      
    </div>
</div>       