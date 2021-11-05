<?php 
	$hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ndjamlah_db";

    $db = mysqli_connect($hostname, $username, $password, $dbname);
    if (!$db) {
        echo "Database connection error".mysqli_connect_error();
    }

$fame = 'azz';
$lame = 'eef';
$email = 'admin@admin.com';
$phone_user = 'fzf';
$city_user = 'fz';
$account_type  = 'zf';
$password_user = 'ffd';
$profile_picture = 'fdfe';
$unique_id = 'fzds';
$statuts_user = 'sd';
$register_date_user = '2021-10-13 02:12:13';

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($db, "SELECT * FROM users WHERE email_user = '{$email}' ");
            
            var_dump($sql);
           
          if(mysqli_num_rows($sql) > 0){
                echo "$email  existe déjà!";
			}
} else {
	echo "email non valide";
}



/*$insert_query = mysqli_query($db, "INSERT INTO users (unique_id, f_name, l_name, email_user, password_user, profile_picture, statuts_user, city_user, phone_user, account_type)
                                VALUES ('{$ran_id}', '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}', '{$city}', '{$phone_number}', '{$account_type}')");
                                
	
$sql = $db->prepare("f_name, l_name, email_user, phone_user, city_user, account_type, password_user, profile_picture, unique_id, statuts_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");
$sql->bind_param("ssssssssss", 
	$fame, 
	$lame, 
	$email_user, 
	$phone_user, 
	$city_user, 
	$account_type, 
	$password, 
	$profile_picture, 
	$unique_id, 
	$statuts_user);
$sql->execute(); */





/*$sql = "INSERT INTO users (f_name, l_name, email_user, phone_user, city_user, account_type, password, profile_picture, unique_id, statuts_user, register_date_user)VALUES ('thib', 'jores', 'thib@jor.es', '690759196', 'douala', 'classic', 'zpep/eee', 'img-6.jpg', '1178228', 'actif', '2021-10-13 02:12:13')";

if ($insert_query) {
  echo "New record created successfully";
} else {

  echo mysqli_error($db);
 }*/



	echo date("d/m/Y H:i:s");
 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form>
		<input type="radio" name="appart">
		<style type="text/css">
			input{
				color: red;
				height: 200px;
				width: 200px;
				background: green;
			}
		</style>
	</form>
</body>
</html>