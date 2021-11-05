<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        require_once ('../model/backEnd.php');
        $logout_id = mysqli_real_escape_string($db, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($db, "UPDATE users SET statuts_user = '{$status}' WHERE unique_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../view/frontend/home.php");
            }
        }else{
            header("location: ../view/frontend/home.php");
        }
    }else{  
        header("location: ../view/frontend/home.php");
    }
?>