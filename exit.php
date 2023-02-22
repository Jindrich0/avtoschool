<?php
setcookie('id', "", time() - 3600, "/");
setcookie('fio', "", time() - 3600, "/");
setcookie('mobile', "", time() - 3600, "/");

header('Location: index.php');
exit( );