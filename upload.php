<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $MAC = exec('getmac'); 
    $MAC = strtok($MAC, ' '); 
    $input = $_FILES['audio_data']['tmp_name']; //temporary name that PHP gave to the uploaded file
    $output = "audio". $MAC .".mp3"; //letting the client control the filename is a rather bad idea
    // die($output);
    //move the file from temp name to local folder using $output name
    move_uploaded_file($input, $output);
    echo "audio" . $MAC . ".mp3";
}else{
    echo "Not Authorized!";
}