<?php 
include 'connection.php';

error_reporting(0);
session_start();
 
// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
// }
 
// if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
 
    // if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (name, email, phone, password)
                    VALUES ('$name', '$email', '$phone','$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                //set session sukses
                $_SESSION["sukses"] = 'Data Berhasil Disimpan';
                echo "<script>
                    alert('Berhasil register');
                    window.location='login.php';
                </script>";
            } else {
                echo "<script>
                    alert('Woops! Terjadi kesalahan.');
                    window.location='register.php';
                </script>";
            }
        } else {
            echo "<script>alert
                ('Woops! Email Sudah Terdaftar.');
                window.location='register.php';
            </script>";
        }

?>
