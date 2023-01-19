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
    $id = $_GET['id'];
 
    // if ($password == $cpassword) {
            $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $_SESSION['name'] = $name;
                echo "<script>
                    alert('Berhasil update profile');
                    window.location='profile.php';
                </script>";
            } else {
                echo "<script>
                    alert('Woops! Terjadi kesalahan.');
                    window.location='profile.php';
                </script>";
            }
        

?>
