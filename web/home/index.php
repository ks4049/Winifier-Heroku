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
                    <div class="col-md-4">

                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">New Project</h4>

                            <p class="text-muted m-b-15 font-15">
                                <center>Create your own custom model with exisiting or supplied dataset, learning how the process works!</center>
                            </p>
                            <button type="button" class="btn btn-block btn-xs btn-purple waves-effect waves-light" onclick="location.href='data/new_project.php';">Start Now</button>

                        </div>
                      </div>
                        <div class="col-md-4">

                            <div class="card-box">

                                <h4 class="header-title m-t-0 m-b-30">Testing / Evaluating</h4>

                                <p class="text-muted m-b-15 font-15">
                                    <center>Test against an existing model you or someone else created. Evaluate different model results too!</center>
                                </p>
                                <button type="button" class="btn btn-block btn-xs btn-purple waves-effect waves-light" onclick="location.href='data/projects.php?message=testing';" >Test Now</button>

                            </div>
                          </div>
                            <div class="col-md-4">

                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-30">Information Retrieval</h4>

                                    <p class="text-muted m-b-15 font-15">
                                        <center>Retrieve reviews based on keywords and or filters. Filter further with visualized word cloud!</center>
                                    </p>
                                    <button type="button" class="btn btn-block btn-xs btn-purple waves-effect waves-light" onclick="location.href='/home/info/index.php';">Search Now</button>

                                </div>
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
