<?php
    //this is a page which can be used by admin to delete any faculty
    // $server= "localhost";
    // $username="root";
    // $password="";
    // $con= mysqli_connect($server,$username,$password,'dowell university');
    // if(!$con){
    //  die("Connection not made due to".mqsqli_connect_error());
    // }
    require_once('./Config.php');
    //getting id from url
    $id = $_GET['id'];
    $query = "DELETE FROM staff WHERE sid=$id";
    $result = $con->query($query);
    if($result){
        echo"Successfully deleted";
        //if the query is successfull redirecting to admin page
        header('location: ./Master Page.php');
        exit;
    }
    else{
        echo "There was an error removing the record";
    }

?>