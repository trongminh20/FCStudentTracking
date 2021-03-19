<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>

<div class="container">
    <div id="mainContent">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="images/img_avatar.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4><?= $_SESSION['user']['username'] ?></h4>
                                <p class="text-secondary mb-1">IT Coordinator</p>
                                <p class="text-muted font-size-sm"><?= $_SESSION['user']['email'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--college social media-->
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        <!--college website-->
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h7 class="mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 -1 29 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                </svg>
                                Website
                            </h7>
                            <span class="text-secondary" style="float: right">https://firstcollege.ca</span>
                        </li>
                        <!--college ins-->
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h7 class="mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 -1 29 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-instagram mr-2 icon-inline text-danger">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                                Instagram
                            </h7>
                            <span class="text-secondary" style="float: right">firstcollegefc</span>
                        </li>
                        <!--college facebook-->
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h7 class="mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 -1 29 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-facebook mr-2 icon-inline text-primary">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                                Facebook
                            </h7>
                            <span class="text-secondary" style="float: right">First College</span>
                        </li>
                    </ul>
                </div>
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
                            <div class="col-sm-9 text-secondary" style="padding-top: 7px">Jessie Zhang</div>
                        </div>
                        <hr>
                        <!--phone number-->
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Office Number</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="padding-top: 7px">(778) 478-6611/6610</div>
                        </div>
                        <hr>
                        <!--mobile-->
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
                            echo "<h3>Received Requests</h3>";
                            if ($_SESSION['user']['admin'] == 1) {
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