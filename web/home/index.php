<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Home</title>       
        <?php 
        include "header/header.php";
        ?> 
    </head>

    <body>
        <?php
        include "header/navigation.php";
        ?>
        <br/><br/>
        <div class="wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Block Button</h4>

                            <p class="text-muted m-b-15 font-13">
                                Create block level buttons,with by adding add <code>.btn-block</code>.
                            </p>

                            <button type="button" class="btn btn-block btn--md btn-pink waves-effect waves-light">Block Button</button>
                            <button type="button" class="btn btn-block btn-sm btn-success waves-effect waves-light">Block Button</button>
                            <button type="button" class="btn btn-block btn-xs btn-purple waves-effect waves-light">Block Button</button>

                        </div>

                    </div>
                    <!-- end col -->
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
       include "footer/footer.php";
       ?> 
    </body>
</html>