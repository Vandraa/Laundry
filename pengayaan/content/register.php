<?php
    // Memulai atau melanjutkan sesi
    session_start();
    
    // Menyertakan fungsi dari file "functions.php"
    include 'functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Register</title>
        <link rel="stylesheet" href="../assets/css/logres.css">
    </head>

    <body>
        <div class="container">
            <div class="img">
                <img src="../assets/img/laundry.jpg" alt="">
            </div>
            <div class="sambutan">
                <p>SELAMAT DATANG DI JASA LAUNDRY SMKN 2 BANJARMASIN</p>
            </div>
            <div class="main-content2">
                <form action="" method="post">
                    <label for="username">Username</label>
                    <input type="text" name="user" id="username" placeholder="Username" required>
                    <label for="password">Password</label>
                    <input type="password" name="pass" id="password" placeholder="Password" required>
                    <label for="password2">Confirm Password</label>
                    <input type="password" name="pass2" id="password" placeholder="Konfirmasi Password" required>
                    <div class="btn">
                        <!-- Tombol untuk menuju halaman login -->
                        <button type="button" onclick="window.location = 'login.php'">Login</button>
                        <!-- Tombol untuk melakukan registrasi -->
                        <input type="submit" name="submit" value="Register">
                    </div>
                </form>
                
                <?php
                    if(isset($_POST['submit'])) {
                        $user   = $_POST['user'];
                        $pass   = $_POST['pass'];
                        $pass2  = $_POST['pass2'];
                        
                        // Memeriksa apakah password dan konfirmasi password sesuai
                        if($pass !== $pass2){
                            echo "<script>
                                alert('Konfirmasi password tidak sesuai');
                            </script>";
                            return false;
                        } else {
                            // Menyimpan data pengguna ke database
                            $simpan = mysqli_query($conn, "INSERT INTO user VALUES (
                                null,
                                '".$user."',
                                '".MD5($pass)."',
                                null
                            )");
                            
                            if($simpan) {
                                echo "<script>
                                    alert('Akun ditambahkan');
                                </script>";
                            } else {
                                echo "<script>
                                    alert('Gagal menambahkan akun');
                                </script>";
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>
