

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title> TBZ | <?=$title?></title>
        
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="<?=base_url()?>image/png" href="assets/images/icon/favicon.ico">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/metisMenu.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/slicknav.min.css">
        <!-- amchart css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <!-- others css -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/typography.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/default-css.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
        <!-- modernizr css -->
        <script src="<?=base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    
    </head>
    
    <body>

    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href=""><img src="<?=base_url()?>images\TBZLOGO.png" alt="logo" width="100"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="">
                                <a href="<?=$this->config->base_url()?>index.php/users/userview" aria-expanded="true"><i class="ti-user"></i><span>User Profile</span></a>
                            </li>
                            <li>
                                <a href="<?=$this->config->base_url()?>index.php/users" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>                                 
                            <li>
                                <a href="table.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Records</span></a>
                                <ul class="collapse">
                                    <li><a href="<?=$this->config->base_url()?>index.php/users/userlist" aria-expanded="true"><span>User List</span></a></li>
                                    <li><a href="<?=$this->config->base_url()?>index.php/users/servicelist">Services List</a></li>
                                    <!-- <li><a href="">KAHIT ANO</a></li> -->
                                </ul>
                            </li>
                            <!-- <li>
                                <a href="<?=$this->config->base_url()?>index.php/users/" aria-expanded="true"><i class="ti-dashboard"></i><span>KAHIT ANO</span></a>
                            </li>  -->
                            <li>
                                <a href="<?=$this->config->base_url()?>index.php/users/logout" aria-expanded="true" ><i class="ti-close"></i><span style="color:red">Logout</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                           
                            
        
                        </ul>
                    </div>
                </div>
            </div>
 