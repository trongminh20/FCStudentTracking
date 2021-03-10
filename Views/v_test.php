
<?php
Mail::$toAddress = 'trongminh20@gmail.com';
Mail::$content = "<h1>This is testing email from invoice</h1>";


Mail::send_mail();

