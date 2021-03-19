<?php
?>

<!-- Sidebar Section -->
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header" style="height:60px;">
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="?action=v_home">
                    <i class="glyphicon glyphicon-home"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="?action=v_add_new_record">
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
                    <li><a href="?action=v_report">Generate Report</a></li>
                    <li><a href="?action=v_invoice">Generate Invoice</a></li>
                </ul>
            </li>
            <li>
                <a href="#helpSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-question-sign"></i>
                    Help
                </a>
                <ul class="collapse list-unstyled" id="helpSubmenu">
                    <li><a href="?action=v_document">Find Help Here</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </li>

        </ul>
    </nav>
