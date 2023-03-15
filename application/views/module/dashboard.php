<!-- <?php
    foreach($results as $info):

        print_r($info); die();
    ?> -->

<!-- <?php
    $info = $results[0];
    // print_r($info); die();
?> -->



    <!-- header area end -->
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="">Home</a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="<?=base_url()?>assets/images/author/avatar.png" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']?> <i class="fa fa-angle-down"></i></h4>
                    <div class="dropdown-menu">
                            
                    <a class="dropdown-item" href="">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
        <div>

            <?php  if ($this->session->has_userdata('user_username')) : ?>
            <h2 style="text-align:center"> Welcome <strong><?php echo $_SESSION['user_fname']; echo " " ;echo $_SESSION['user_lname'];?></strong></h2>
            
            <?php endif ?>
            <img src="<?=base_url()?>assets/images/image.jpg" alt="welcome " style="width:100%">
            
        </div>



<!-- <?php endforeach;?> -->
