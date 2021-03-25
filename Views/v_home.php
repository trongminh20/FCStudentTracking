<?php
//include "v_masterPage_header.php";
//?>
<?php
//include "v_masterPage_sidebar.php";
//?>

<div class="container">
    <div id="mainContent">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="images/img_avatar.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4><?= $fname[0]['fname'] ?></h4>
                                <p><?= $_SESSION['user']['username'] ?></p>
                                <p class="text-secondary mb-1"><?=$fname[0]['role']?></p>
                                <p class="text-muted font-size-sm"><?= $_SESSION['user']['email'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--college social media-->
            </div>
            <!--detail info-->
            <div class="col-md-8">
                <!--info part-->
                <div class="card mb-3">
                    <div class="card-body">
                        <!--full name-->
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary"
                                 style="padding-top: 7px"><?= $fname[0]['fname'] ?></div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Mobile</h6>
                            </div>
                            <div class="col-sm-9 text-secondary"
                                 style="padding-top: 7px"><?= $_SESSION['user']['phone'] ?></div>
                        </div>
                        <hr>
                        <!--department-->
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Department</h6>
                            </div>
                            <div class="col-sm-9 text-secondary"
                                 style="padding-top: 7px"><?= $_SESSION['user']['department'] ?></div>
                        </div>
                    </div>
                </div>
                <!--received request part-->
                <div class="card mb-3">
                    <div class="card-body">
                        <p class="d-flex align-items-center mb-3">
                            <?php
                            if ($_SESSION['user']['admin'] == 1) {
                                echo "<h3>Received Requests</h3>";

                                $data = $model->select('requests', NULL);
                                $view->display_as_table("requestsTable", "", $data);
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>