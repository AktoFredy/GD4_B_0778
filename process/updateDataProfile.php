<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['update'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $email = $_POST['email'];
        //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $membership = $_POST['membership'];
        if(!empty($_POST['job'])){
            $job = $_POST['job'];
        }else{
            echo 'please select your Job';
        }
        
        $id = $_POST['id'];

        //compare phone number
        // Melakukan insert ke databse dengan query dibawah ini
        $query2 = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
        
        // ini buat ngecek kalo misalnya hasil dari querynya == 0 ato ga ketemu -> emailnya tdk ditemukan
            if(mysqli_num_rows($query2) == 0){
                echo '<script> alert("Data Tidak ada di Database!"); window.location = "../page/editProfilePage.php" </script>';
            }else{
                // Melakukan insert ke databse dengan query dibawah ini
                $query = mysqli_query($con,
                "UPDATE users SET email = '$email', name = '$name', phonenum = '$phonenum', job = '$job' WHERE id = '$id'") or die(mysqli_error($con)); 
                // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                
                    if($query){
                        $query3 = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
                        $user = mysqli_fetch_assoc($query3);
                        // session adalah variabel global sementara yang disimpen di server
                        // buat mulai sessionnya pake session_start()
                        session_start();
                        //isLogin ini temp variable yang gunanya buat ngecek nanti apakah sdh login ato belum
                        $_SESSION['userU'] = $user;
                        $_SESSION['user'] = $user;
                        echo
                            '<script>
                            alert("Update Profile Success"); 
                            window.location = "../page/nonEditableProfile.php"
                            </script>';
                    }else{
                        echo
                            '<script>
                            alert("Update Profile Failed");
                            </script>';
                    }
            }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>