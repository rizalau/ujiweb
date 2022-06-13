<?php


// koneksi
$koneksi = mysqli_connect('localhost','root','','login');

// daftar
if(isset($_POST['register'])){
    // jika tombol register di clik

    $username = $_POST['username'];
    $password = $_POST['password']; //pure inputan user

    // Fungsi enkripsi
    $epassword = password_hash($password, PASSWORD_DEFAULT);

    // insert to db
    $insert = mysqli_query($koneksi,"INSERT INTO user (email,password) values ('$username','$epassword')");

    if($insert){
        // jika berhasil
        header('location:login.php'); //redirect ke halaman login
    } else {
        //  jika gagal
        echo '
        <script>
            alert("Registrasi gagal");
            window.location.herf="register.php";
        </script>
        ';
    }
}

// Login

// koneksi
$koneksi = mysqli_connect('localhost','root','','login');

// daftar
if(isset($_POST['login'])){
    // jika tombol register di clik

    $username = $_POST['username'];
    $password = $_POST['password']; //pure inputan user

    // insert to db
    $cekdb = mysqli_query($koneksi,"SELECT * FROM user where email='$username'");
    $hitung = mysqli_num_rows($cekdb);
    $pw = mysqli_fetch_array($cekdb);
    $passwordsekarang = $pw['password'];


    if($hitung>0){
        // jika berhasil
        if(password_verify($password,$passwordsekarang)){
            header('location:index.html');
        
    } else {

        //  jika gagal
        echo '
        <script>
            alert("password salah");
            window.location.herf="register.php";
        </script>
        ';
        }
} else {

        //  jika gagal
        echo '
        <script>
            alert("login gagal");
            window.location.herf="register.php";
        </script>
        ';
        }   
    }

?>