<?php

include 'connections.php';
if (isset($_POST['submit'])) {
    $email = stripcslashes(strtolower($_POST['email']));
    $first_name = stripcslashes(strtolower($_POST['name-1']));
    $last_name = stripcslashes(strtolower($_POST['name-2']));
    $phone = stripcslashes(strtolower($_POST['phone']));
    $password = stripcslashes(strtolower($_POST['password']));

    $email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
    $first_name = htmlentities(mysqli_real_escape_string($conn, $_POST['first_name']));
    $last_name = htmlentities(mysqli_real_escape_string($conn, $_POST['last_name']));
    $phone = htmlentities(mysqli_real_escape_string($conn, $_POST['phone']));
    $password = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));
    $md5 = md5($password);

    if (isset($_POST['male'])) {
        $gender = $_POST['male'];
        $gender = htmlentities(mysqli_real_escape_string($conn, $_POST['male']));
    } elseif (isset($_POST['female'])) {
        $gender = $_POST['female'];
        $gender = htmlentities(mysqli_real_escape_string($conn, $_POST['female']));
    } elseif (isset($_POST['known'])) {
        $gender = $_POST['known'];
        $gender = htmlentities(mysqli_real_escape_string($conn, $_POST['known']));
    } elseif (!in_array($gender, ['male', 'female', 'known'])) {
        $gender_error = 'please choose gender not a text ! <br>';
        $err_s = 1;
    }

    if (empty($email)) {
        $email_error = 'please enter your email ! <br>';
        $err_s = 1;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = 'please enter  a vaild email ! <br>';
        $err_s = 1;
    }

    if (empty($first_name)) {
        $user_error = 'please enter your first_name ! <br>';
        $err_s = 1;
    } elseif (strlen($first_name) < 5) {
        $user_error = 'please enter  a vaild first_name ! <br>';
        $err_s = 1;
    } elseif (!filter_var($first_name, FILTER_VALIDATE_INT)) {
        $user_error = 'please enter  a vaild first_name ! <br>';
        $err_s = 1;
    }

    if (empty($last_name)) {
        $userl_error = 'please enter your first_name ! <br>';
        $err_s = 1;
    } elseif (strlen($last_name) < 5) {
        $userl_error = 'please enter  a vaild first_name ! <br>';
        $err_s = 1;
    } elseif (!filter_var($last_name, FILTER_VALIDATE_INT)) {
        $userl_error = 'please enter  a vaild first_name ! <br>';
        $err_s = 1;
    }

    if (empty($phone)) {
        $phone_error = 'please enter your phone ! <br>';
        $err_s = 1;
    } elseif (strlen($phone) < 10) {
        $phone_error = 'please enter  a vaild phone ! <br>';
        $err_s = 1;
    }

    if (empty($password)) {
        $password_error = 'please enter your password ! <br>';
        $err_s = 1;
    } elseif (strlen($password) < 8) {
        $password_error = 'please enter  a vaild password ! <br>';
        $err_s = 1;
        include 'register_post.php';
    } else {
        if ($err_s == 0) {
            $sql = "INSERT INTO users(email,first_name,last_name,phone,password,md5,gender,country)
            VALUES ('$email','$first_name','$last_name','$phone','$password','$md5','$gender','$country')";
            mysqli_query($conn, $sql);
            header('location:../index.html');
        } else {
            include 'register_post.php';
        }
    }
}