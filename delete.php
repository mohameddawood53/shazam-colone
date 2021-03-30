<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    unlink($_POST['name']);
    echo "file Deleted.";

}else{
    echo "sorry, You're not Authorized!";
}