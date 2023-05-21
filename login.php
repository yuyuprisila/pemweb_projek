<?php
include("database.php");
include("users.php");

session_start();

$user = new Users();

if (isset($_POST['login'])) {
    $user->set_login_data($_POST['no_hp'], $_POST['password']);

    $id = $user->get_no_hp();
    $password = $user->get_password();

    $result = mysqli_query($conn, "SELECT * FROM akun WHERE no_hp= '$id' AND password = '$password'");

    if ($result->num_rows > 0) {
      //data yang akan masuk ke bagian registrasi
      while ($row = $result->fetch_assoc()) {
        $_SESSION['status'] = "login";
        $_SESSION['no_hp'] = $row['no_hp'];
      }

      header("location:pendaftaran/registrasi.php");
    } else {
      header("location:class.php?message=nomor hp atau password salah!");
    }
}

?>