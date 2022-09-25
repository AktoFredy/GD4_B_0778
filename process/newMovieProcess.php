<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['newMovie'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['year'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
                    "INSERT INTO movies(name, genre, realese, season, synopsis) VALUES ('$name', '$genre', '$realese', '$season', '$synopsis')") or die(mysqli_error($con)); 
        // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
            if($query){
                echo
                    '<script>
                    alert("New Movie Added!"); 
                    window.location = "../page/listMoviesPage.php"
                    </script>';
            }else{
                echo
                    '<script>
                    alert("Failed Adding Movie");
                    </script>';
            }          
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>