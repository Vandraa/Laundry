<?php
    // Memulai atau melanjutkan sesi
    session_start();
    
    // Menyertakan fungsi dari file "functions.php"
    include 'functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/logres.css">
    </head>

    <body>
        <div class="container">
            <div class="img">
                <img src="../assets/img/laundry.jpg" alt="y">
            </div>
            <div class="sambutan">
                <p>SELAMAT DATANG DI JASA LAUNDRY SMKN 2 BANJARMASIN</p>
            </div>
            <div class="main-content">
                <form action="" method="post">
                    <label for="username">Username</label>
                    <input type="text" name="user" id="username" placeholder="Username" required>
                    <label for="password">Password</label>
                    <input type="password" name="pass" id="password" placeholder="Password" required>
                    <div class="btn">
                        <!-- Tombol untuk menuju halaman registrasi -->
                        <button type="button" onclick="window.location = 'register.php'">Register</button>
                        <!-- Tombol untuk melakukan login -->
                        <input type="submit" name="submit" value="Login">
                    </div>
                </form>
            </div>
            
            <?php 
                // Menjalankan saat tombol "submit" diklik
                if(isset($_POST['submit'])){
                    // Mengamankan input dari SQL Injection
                    $user = mysqli_real_escape_string($conn, $_POST['user']);
                    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

                    // Mengecek apakah user dengan username tersebut ada
                    $cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$user."' ");
                    if (mysqli_num_rows($cek) > 0) {
                        // Mendapatkan data user
                        $d = mysqli_fetch_object($cek);
                        // Membandingkan password yang di-hash
                        if(md5($pass) == $d->password){
                            // Memulai sesi dan menyimpan ID user
                            $_SESSION['status_login'] = true;
                            $_SESSION['uid'] = $d->id;
                            // Mengarahkan ke halaman beranda setelah login sukses
                            echo "<script>window.location = 'beranda.php'</script>";
                        }else{
                            // Menampilkan pesan jika password salah
                            echo "<script>alert('Password salah');</script>";
                        }
                    }else{
                        // Menampilkan pesan jika user tidak ditemukan
                        echo "<script>alert('User tidak ditemukan');</script>";
                    }
                }
            ?>
        </div>
    </body>
</html>
