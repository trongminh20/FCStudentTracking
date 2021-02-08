<?php
?>
<!DOCUMENT html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/master_page.css" />
    <link rel="stylesheet" href="css/w3.css" />
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar Section -->
        <nav id="sidebar">
            <div class="sidebar-header" style="height:60px;">
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">
                        <i class="glyphicon glyphicon-home"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-cloud-upload"></i>
                        Add New Record
                    </a>
                </li>
                <li>
                    <a href="#exportSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="glyphicon glyphicon-cloud-download"></i>
                        Export Documents
                    </a>
                    <ul class="collapse list-unstyled" id="exportSubmenu">
                        <li><a href="#">Generate Report</a></li>
                        <li><a href="#">Generate Invoice</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#helpSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="glyphicon glyphicon-question-sign"></i>
                        Help
                    </a>
                    <ul class="collapse list-unstyled" id="helpSubmenu">
                        <li><a href="#">Find Help Here</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </li>
                
            </ul>
        </nav>
    </div>
</body>