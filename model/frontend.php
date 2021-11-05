<?php
/**
 * Connexion DB
 */
class dbConnect 
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ndjamlah_db";

    $db = mysqli_connect($hostname, $username, $password, $dbname);

    return $db;
}

function getHouses()
{
    $db = dbConnect();
    $req = $db->query('SELECT *, DATE_FORMAT(register_date_house, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM house ORDER BY register_date_house DESC LIMIT 0, 5');

    return $req;
}
/*
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

function postComment($postId, $author, $comment)
{
    $db = dbConnect();
    $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($postId, $author, $comment));

    return $affectedLines;
}
*/
