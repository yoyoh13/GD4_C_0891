<?php
    include '../component/sidebar.php';

    include('../db.php');
    $id = $_GET['id'];
    $sql=  mysqli_query($con, "SELECT * FROM movies WHERE id=$id") or die(mysqli_error($con));
    if($sql) {
            if(mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql); 
            $name = $row['name'];
            $genre = $row['genre'];
            $realese = $row['realese'];
            $season = $row['season'];
            $synopsis = $row['synopsis'];
            }
    }
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
    0.19);" >
        <div class="body d-flex justify-content-between">
            <h4>Edit MOVIE</h4>
        </div>
        <div>
        
        </div>
        <hr>
            <form action="../process/editMovieProcess.php" method="post">
                <div><input type="text" hidden value="<?php echo $id ?>" name="id"></div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Movie Name" name="name" value="<?php echo $name?>">      
                </div>
                        <div class="col-md-6">
                          <label for="genre" class="form-label">Genre</label>
                          <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $genre?>">
                          
                        </div>
                        <div class="col-md-6">
                            <label for="realese" class="form-label">Realese</label>
                            <input type="text" class="form-control" id="realese" placeholder="Year Realese" name="realese" value="<?php echo $realese?>">
                            
                          </div>
                        <div class="col-md-6">
                          <label for="season" class="form-label">Season</label>
                          <input type="text" class="form-control" id="season" placeholder="Season" name="season" value="<?php echo $season?>">
                          
                        </div>
                        <div class="col-md-6">
                          <label for="synopsis" class="form-label">Synopsis</label>
                          <input type="text" class="form-control" id="synopsis" placeholder="..." name="synopsis" value="<?php echo $synopsis?>">
                        </div>

                        <div class="col-12">
                            <hr>
                            <button class="btn btn-primary" type="submit" name="editMovie">Save</button>
                        </div>
            </form>
    </div>
    </aside>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    </body>
</html>