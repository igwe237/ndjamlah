<?php
/**
 * Connexion DB
 */
//function dbConnect() 
//{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ndjamlah_db";

    $db = mysqli_connect($hostname, $username, $password, $dbname);
    if (!$db) {
        echo "Database connection error".mysqli_connect_error();
    }



/*    return $db;
}

function insertUser($unique_id, $fname, $lname, $pseudo, $city, $email, $phone, $password, $profilPicture, $accountType)
{
    $db = dbConnect();
    $datas = $db->prepare('INSERT INTO users(unique_id, f_name, l_name, pseudo, email, phone_number, city, password, profil_picture, account_type, register_date_user) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())');
    $userDatas = $datas->execute(array($uniqueId, $fName, $lName, $pseudo, $email, $phoneNumber, $city, $password, $profilPicture, $accountType));
}

function get()
{
    $db = dbConnect();
    $req = $db->query('SELECT *, DATE_FORMAT(register_date_house, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM house ORDER BY register_date_house DESC LIMIT 0, 5');

    return $req;
}

function getPost($postId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

function getComments($postId)
{
    $db = dbConnect();
    $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
    $comments->execute(array($postId));

    return $comments;
}

*/
?>