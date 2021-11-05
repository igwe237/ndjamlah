<?php
    session_start();
    require_once ('../model/backEnd.php');
    //protection des données afin d'envoyer à la db
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if(!empty($fname) && !empty($lname) && !empty($city) && !empty($email) && !empty($phone_number) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){//test email
            $sql = mysqli_query($db, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - est déjà utilisé!";
            }else{
                if(isset($_FILES['profil_picture'])){
                    $img_name = $_FILES['profil_picture']['name'];
                    $img_type = $_FILES['profil_picture']['type'];
                    $tmp_name = $_FILES['profil_picture']['tmp_name'];
                    
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
                                $status = "Active now";
                                $encrypt_pass = md5($password);
                                $insert_query = mysqli_query($db, "INSERT INTO users (unique_id, fname, lname, email, password, img, status_user, city, phone)
                                VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}', '{$city}', '{$phone_number}')");
                                
                                }else{
                                    echo "Something went wrong. Please try again!";
                                }
                            }
                        }else{
                            echo "Veuillez ajouter une image au format file - jpeg, png ou jpg !";
                        }
                    }else{
                        echo "Veuillez ajouter une photo de profil !";
                    }
                }
            }
        }else{
            echo "$email n'est pas un email valide !";
        }
    }
    else{
        echo "Veuillez remplir tous les champs !";
    }
?>