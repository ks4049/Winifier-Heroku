<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Data</title>        
        <?php 
        include "../header/header.php";
        ?>        
    </head>

    <body>
        <?php 
        include "../header/navigation.php";
        ?>  
        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Tree View</h4>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title m-t-0 m-b-30">Basic Tree</h4>

                            <div id="basicTree">
                                <ul>
                                    <li>Adminto
                                        <ul>
                                            <li data-jstree='{"opened":true}'>Assets
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>Css</li>
                                                    <li data-jstree='{"opened":true}'>Plugins
                                                        <ul>
                                                            <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                                            <li data-jstree='{"type":"file"}'>Plugin two</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"opened":true}'>Email Template
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>Email one</li>
                                                    <li data-jstree='{"type":"file"}'>Email two</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"icon":"mdi mdi-view-dashboard"}'>Dashboard</li>
                                            <li data-jstree='{"icon":"mdi mdi-format-font"}'>Typography</li>
                                            <li data-jstree='{"opened":true}'>User Interface
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>Buttons</li>
                                                    <li data-jstree='{"type":"file"}'>Cards</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"icon":"mdi mdi-texture"}'>Forms</li>
                                            <li data-jstree='{"icon":"mdi mdi-view-list"}'>Tables</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"type":"file"}'>Frontend</li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end container -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="mdi mdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- end wrapper -->            
       <?php 
       include "../footer/footer.php";
       ?> 
    </body>

</html>