<?php
    session_start();
    require_once ('../model/backEnd.php');
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($db, "SELECT * FROM users WHERE email_user = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password_user'];
            if($user_pass === $enc_pass){
                $status = "En ligne";
                $sql2 = mysqli_query($db, "UPDATE users SET statuts_user = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
                }else{
                    echo mysqli_error($db);
                }
            }else{
                echo "Email ou Mot de Password  Incorrect!";
            }
        }else{
            echo "L'email $email  n'existe pas !";
        }
    }else{
        echo "Vous devez remplir tous les champs !";
    }
?>