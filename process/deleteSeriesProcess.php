<?php
    session_start();
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM series WHERE id='$id'") or die(mysqli_error($con));
        if($queryDelete){
            echo
                '<script>alert("Delete Series Success"); window.location = "../page/seriesCRUDPage.php"</script>';
        }else{
            echo
                '<script>alert("Delete Series Failed"); window.location = "../page/seriesCRUDPage.php"</script>';
        }
    }else {
        echo
        '<script>window.history.back()</script>';
    }
?>