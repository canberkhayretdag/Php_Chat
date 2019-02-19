<?php
include './connect.php';

if (isset($_POST['register'])) {
    $name = $_POST['user_name'];
    $query = $db->query("SELECT * FROM Users WHERE user_name = '{$name}'")->fetch(PDO::FETCH_ASSOC);
    if ($query) {
        print "var";
    } else {
        $query = $db->prepare("INSERT INTO Users SET
        user_name = ?,
        user_password = ?");
        $insert = $query->execute(array(
            $_POST['user_name'],
            $_POST['user_password']
        ));
        if($insert){
            print "insert işlemi başarılı!";
        }
    }
}

if (isset($_POST['login'])){
    $name = $_POST['user_name'];
    $password = $_POST['user_password'];
    $person = $db->query("SELECT * FROM Users WHERE user_name = '{$name}'")->fetch(PDO::FETCH_ASSOC);
    if ($person) {
        if ($person[user_password] == $password) {
            session_start();
            $_SESSION["user"] = $person;
            header('location:../index.php');
        }
    }
    header('location:../index.php');
}

if (isset($_POST['send'])){
    $query = $db->prepare("INSERT INTO Messages SET
    msg_user = ?,
    msg_content = ?");
    $insert = $query->execute(array(
        $_POST['msg_user'],
        $_POST['msg_content']
    ));
    if($insert){
        header('location:../index.php');
    } 
}


?>