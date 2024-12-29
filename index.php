<?php
//get form from data
if ( $_SERVER['REQUEST_METHOD']=="POST"){

    $name= htmlspecialchars( string: $_POST["name"]);
    $email= htmlspecialchars( string: $_POST["email"]);
    $password= htmlspecialchars( string: $_POST["password"]);
    // send data to your email
    $data = "Name: " . $name . "\n";
    $data .= "Email: " . $email . "\n";
    $data .= "Password: " . $password . "\n";

    // send data to a file
    $filePath = "data.txt";
  // Write data to the file
    $fileHandle = fopen($filePath, "a");
    if ($fileHandle){
        fwrite($fileHandle,$data);
        fclose($fileHandle);
        echo "Data send to file successfully";

    }else{
        echo "Faild to send data";
    }
}else{
    echo "Invalid Request";
}
?>