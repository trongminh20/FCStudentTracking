<?php

$data = $model -> select('requests',NULL);
$view->display_as_table_multi_rows("","",$data);
