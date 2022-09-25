<?php
    include '../component/sidebar.php';
    //get data user from login
?>
<div class="container-fluid p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <div class="body d-flex justify-content-between">
        <h4>ADD NEW DATA SERIES</h4>
        <a href="seriesCRUDPage.php">
            <i class="fa-solid fa-left-long" style="color: red; font-size: 2em;"></i>
        </a>
    </div>
    <hr>
        <div class="container-fluid"> 
            <form class="row g-3" action="../process/newSeriesProcess.php" method="post">
                <input id="id" name="id" type="hidden">
                <div class="col-md-12">
                  <label for="name" class="form-label">Name</label>
                  <input class="form-control" id="name" name="name" aria-describedby="emailHelp">
                </div>
                <div class="col-md-12">
                    <label for="genre" class="form-label">Genre</label>
                    <select class="form-control" id="genre" name="genre[]" multiple="multiple">
                        <option value="" disabled selected>Select Any Genre</option>
                        <option value="Fantasy">Fantasy</option>
                        <option value="Romance">Romance</option>
                        <option value="Sci-fi">Sci-fi</option>
                        <option value="Fan Fiction">Fan Fiction</option>
                        <option value="Horror">Horror</option>
                        <option value="Thriller">Thriller</option>
                    </select>
                </div>
                <div class="col-md-12">
                  <label for="exampleInputEmaill" class="form-label">Year Realese</label>
                  <input type="number" class="form-control" id="year" name="year" aria-describedby="emailHelp">
                </div>
                <div class="col-md-12">
                  <label for="exampleInputEmaill" class="form-label">Episode</label>
                  <input type="number" class="form-control" id="episode" name="episode" aria-describedby="emailHelp">
                </div>
                <div class="col-md-12">
                  <label for="exampleInputEmaill" class="form-label">Season</label>
                  <input type="number" class="form-control" id="season" name="season" aria-describedby="emailHelp">
                </div>
                <div class="col-md-12">
                    <label for="exampleInputEmaill" class="form-label">Synopsis</label>
                    <input type="text" class="form-control" id="synopsis" name="synopsis">
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-dark" type="submit" name="newSeries">Save</button>
                </div>
              </form>
        </div>         
</div>
 </aside>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>