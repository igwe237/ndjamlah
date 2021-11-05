<?php
    session_start();
    require_once ('../model/backEnd.php');
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if(!empty($fname) && !empty($lname) && !empty($city) && !empty($email) && !empty($phone_number) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($db, "SELECT * FROM users WHERE email_user = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email  existe déjà!";
            }else{
                if(isset($_FILES['profile_picture'])){
                    $img_name = $_FILES['profile_picture']['name'];
                    $img_type = $_FILES['profile_picture']['type'];
                    $tmp_name = $_FILES['profile_picture']['tmp_name'];
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name,"../public/images/".$new_img_name)){
                                $ran_id = rand(time(), 100000000);
                                $status = "En ligne";
                                $account_type = "classic";
                                $encrypt_pass = md5($password);
                                $register_date_user = date("d/m/Y H:i:s");
                               $insert_query = mysqli_query($db, "INSERT INTO users (unique_id, f_name, l_name, email_user, password_user, profile_picture, statuts_user, city_user, phone_user, account_type)
                                VALUES ('{$ran_id}', '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}', '{$city}', '{$phone_number}', '{$account_type}')");
                                if($insert_query){
                                    $select_sql2 = mysqli_query($db, "SELECT * FROM users WHERE email_user = '{$email}'");
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['unique_id'] = $result['unique_id'];
                                        echo "success";
                                    }else{
                                        echo "Cette adresse mail n'esxiste pas !";
                                    }
                                }else{
                                    echo  mysqli_error($db);
                                }
                            }
                        }else{
                            echo "Veuillez choisir une image au format jpeg, png ou jpg !";
                        }
                    }else{
                        echo "Veuillez choisir une image au format jpeg, png ou jpg !";
                    }
                }
            }
        }else{
            echo "$email n'est pas une email valide !";
        }
    }else{
        echo "Vous devez remplir tous les champs !";
    }
?>