<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['newSeries'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $name = $_POST['name'];
        $genre = implode(",", $_POST['genre']);

        // foreach($_POST['genre'] as $subject){
        //     $allgen = "'$subject'";
        // };

        $realease = $_POST['year'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
                    "INSERT INTO series(name, genre, realease, episode, season, synopsis) VALUES ('$name', '$genre', '$realease', '$episode', '$season', '$synopsis')") or die(mysqli_error($con)); 
        // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
            if($query){
                echo      
                    '<script>
                    alert("New Series Added!"); 
                    window.location = "../page/seriesCRUDPage.php"
                    </script>';
            }else{
                echo
                    '<script>
                    alert("Failed Adding Series");
                    </script>';
            }          
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>