<?php require_once('includeCode/top.php');?>
  </head>
  <body>
    <div id="wrapper">
    <?php require_once('includeCode/header.php');?>


        <div class="container-fluid body-section">
            <div class="row">
                <?php require_once('includeCode/sidebar.php');?>

                <div class="col-md-9">
                    <h1><i class="fa fa-tachometer"></i> Dashboard <small>Statistics Overview</small></h1><hr>
                    <ol class="breadcrumb">
                      <li><i class="fa fa-tachometer"></i> Dashboard</li>
                    </ol>

                    <div class="row tag-boxes">
                       

                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-text fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <!-- <div class="text-right huge">18</div> -->
                                            <div class="text-right">All Students</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left"><a href="ViewStudents.php">View All Students</a></span>
                                        <span class="pull-right"><a href="ViewStudents.php"><i class="fa fa-arrow-circle-right"></i></a></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <!-- <div class="text-right huge">30</div> -->
                                            <div class="text-right">Add Student</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left"><a href="students.php">Add students</a></span>
                                        <span class="pull-right"><a href="students.php"><i class="fa fa-arrow-circle-right"></i></a></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                       <hr>

                </div>
            </div>
        </div>

        <?php require_once('includeCode/footer.php');?>
