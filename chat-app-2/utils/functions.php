<?php 
include 'db.php';

// session start
session_start();

// Databse

function getAll($table = 'messages') {
    global $db;
    $query = mysqli_query($db, "SELECT * FROM $table");
    $result = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $result[] = $data;
    }

    return $result;
}

function query($query) {
    global $db;
    $query = mysqli_query($db, $query);
    $result = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $result[] = $data;
    }

    return $result;
}

function insertData($data) {
    global $db;
    $fullname = htmlspecialchars($data['fname'].' '.$data['lname']);
    $username = htmlspecialchars($data['username']);
    $uid = mt_rand(0, 1000000);
    $email = $data['email'];
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    // echo '<pre>' . var_export($uid, true) . '</pre>'; die;


    $sql = "INSERT INTO `users` (`user_id`, `unique_id`, `fullname`, `username`, `email`, `password`, `img`, `status`) VALUES (NULL, '$uid', '$fullname', '$username', '$email', '$password', 'default.jpg', '')";
    mysqli_query($db, $sql);

    return mysqli_affected_rows($db);
}