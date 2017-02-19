<?php
$id = $_POST['id'];

$which_mail = $_POST['sen'];

require '../mailblast.php';

SendMail($id,$which_mail);
 ?>
