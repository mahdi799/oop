<?php
include ("database.php");
include ("../include/user.php");



/*$result_set=User::find_all_users();

while($row= mysqli_fetch_array($result_set))
{
echo $row['email']."<br/>";
}*/

$result_id=User::user_id(2);
$user = User::instantation($result_id);
echo $user->email;
?>