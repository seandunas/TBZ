
  <div class="container">
    <div class="jumbotron">
    <a href="<?=$this->config->base_url()?>index.php/users/list" class="btn btn-danger" style="margin-bottom:20px">BACK</a>
        <table class="table table-hover">
            <thead>
                <th>USER ID</th>
                <th>AVATAR</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>ACTIONS</th>
            </thead>    
            <tbody>
                <?php
                    foreach($items as $item):?>
                    <tr>
                        <td>
                            <?=$item->user_id;?>
                        </td>
                        <td>
                            <img src="<?=base_url()?>uploads/<?=$item->user_avatar;?>" width="100"/>
                        </td>
                        <td>
                            <?=$item->user_fname;?>
                        </td>
                        <td>
                            <?=$item->user_lname;?>
                        </td>
                        <td>
                            <?=$item->user_username;?>
                        </td>
                        <td>
                            <?=$item->user_password;?>
                        </td>
                        <td>
                            <a href="<?=$this->config->base_url()?>index.php/users/edit/<?=$item->user_id;?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil">EDIT</a>
                            <a href="<?=$this->config->base_url()?>index.php/users/delete/<?=$item->user_id;?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash">DELETE</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>      
    </div>
  </div>

        
        <!-- THIS PAGE IS WALA LANG HEHE // pang view ng user details per user  -->  