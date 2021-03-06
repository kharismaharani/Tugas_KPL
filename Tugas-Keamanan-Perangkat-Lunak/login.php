<?php
session_start();
require 'functions.php';
try {
    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        //ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT username from user WHERE id =$id");
        $row = mysqli_fetch_assoc($result);

        //cek cookie dan username
        if ($key === hash('sha256', $row['username'])) {
            $_SESSION['login'] = true;
        }
    }
    if (isset($_SESSION["login"])) {
        header("Location: masuk.php");
        exit;
    }

    if (isset($_POST["login"])) {
        $username = $_POST["unamelogin"];
        $password = $_POST["psw"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        //cek username
        if (mysqli_num_rows($result) === 1) {

            //cek password
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                //set session
                $_SESSION["login"] = true;

                //cek remember me
                if (isset($_POST['remember'])) {
                    //cookie
                    setcookie('id', $row['id'], time() + 60);
                    setcookie('key', hash('sha256', $row['username']), time() + 60);
                }
                echo "<script>
                window.location.href = 'masuk.php';
                </script>";
                exit;
            }
        }

        $error = true;
        if (isset($error)) {
            echo "<script>
                alert('Username/password salah');
                window.location.href = 'homepage.php';
                </script>";
        }
    }
} catch (Error $e) {
    echo "Error caught: " . $e->getMessage();
}
