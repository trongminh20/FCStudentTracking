
<?php
$to = 'trongminh20@gmail.com';
$content = "<h1>This is testing email from invoice</h1>";

Mail::send_mail($to, $content);

