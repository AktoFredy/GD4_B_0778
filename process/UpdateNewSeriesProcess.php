<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['UpdateNewSeries'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        $name = $_POST['name'];
        $genre = implode(",", $_POST['genre']);

        // foreach($_POST['genre'] as $subject){
        //     $allgen = "'$subject'";
        // };

        $realease = $_POST['year'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
        
        $id = $_POST['id'];

        
        // Melakukan update ke databse dengan query dibawah ini
        $query = mysqli_query($con,
        "UPDATE series SET name = '$name', genre = '$genre', realease = '$realease', episode = '$episode', season = '$season', synopsis = '$synopsis' WHERE id = '$id'") or die(mysqli_error($con)); 
        // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”        
        if($query){
            $query2 = mysqli_query($con, "SELECT * FROM series WHERE name = '$name'") or die(mysqli_error($con));
            $series = mysqli_fetch_assoc($query2);
            // session adalah variabel global sementara yang disimpen di server
            // buat mulai sessionnya pake session_start()
            session_start();

            $_SESSION['series'] = $series;
            echo
                '<script>
                alert("Update Series Success"); 
                window.location = "../page/seriesCRUDPage.php"
                </script>';
            }else{
                echo
                    '<script>
                    alert("Update Series Failed");
                    </script>';
            }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>