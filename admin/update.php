<?php





$user_id = $_POST["user_id"];
$user_fname = $_POST["f_name"];
$user_lname = $_POST["l_name"];
$user_uname = $_POST["username"];
$user_role = $_POST["role"];

include "config.php";


echo $query = "UPDATE `user` SET `first_name`='{$user_fname}',`last_name`='{$user_lname}',`username`='{$user_uname}',`role`='{$user_role}' WHERE `user_id` = '{$user_id}'";


mysqli_query($conn,$query);


header("location:http://localhost/kstore/admin/users.php");




?>