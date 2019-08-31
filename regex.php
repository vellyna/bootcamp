<?php
$username1 = 'Vellyna15A';
$username2 = '15Vellyna15';
$password1 = 'passW0rd=';
$password2 = 'C0d3YourFuture!#'; 
function is_username_valid($username)
{
    if(preg_match("/^([a-zA-Z][a-zA-Z0-9]{5,9}$)+/", $username)) 
    {
        echo "TRUE\n";
    } else {
        echo "FALSE\n";
    }
}
function is_password_valid($password)
{
    if(preg_match("/^(?=.{8,}$)(?=.[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?\W).*$/", $password)) 
    {
        echo "TRUE\n";
    } else {
        echo "FALSE\n";
    }
}
is_username_valid($username1);
is_username_valid($username2);
is_password_valid($password1);
is_password_valid($password2);
?>
