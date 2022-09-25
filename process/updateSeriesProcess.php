<?php
    session_start();
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $query = mysqli_query($con, "SELECT * FROM series WHERE id='$id'") or die(mysqli_error($con));
        if($query){
            $series = mysqli_fetch_assoc($query);
            // session adalah variabel global sementara yang disimpen di server
            // buat mulai sessionnya pake session_start()
            session_start();
            //isLogin ini temp variable yang gunanya buat ngecek nanti apakah sdh login ato belum
            $_SESSION['series'] = $series;
            echo
                '<script>
                window.location = "../page/updateSeriesPage.php"
                </script>';
        }
    }else {
        echo
        '<script>window.history.back()</script>';
    }
?>