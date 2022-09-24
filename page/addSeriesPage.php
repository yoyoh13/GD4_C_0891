<?php
    include '../component/sidebar.php'
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
    0.19);" >
        <div class="body d-flex justify-content-between">
            <h4>ADD SERIES</h4>
        </div>
        <div>
        
        </div>
        <hr>
            <form action="../process/addSeriesProcess.php" method="post">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Series Name" name="name">      
                </div>
                        <div class="col-md-6">
                          <label for="genre" class="form-label">Genre</label>
                          <select class="form-select" id="genre" name="genre" multiple="multiple">
                              <option value = "" hidden>Genre</option>
                              <option value="Action">Action</option>
                              <option value="Horor">Horor</option>
                              <option value="Romance">Romance</option>
                              <option value="Slice of Life">Slice of Life</option>
                            </select>
                          
                        </div>
                        <div class="col-md-6">
                            <label for="realese" class="form-label">Realese</label>
                            <input type="text" class="form-control" id="realese" placeholder="Year Realese" name="realese">
                            
                        </div>
                        <div class="col-md-6">
                          <label for="episode" class="form-label">Episode</label>
                          <input type="text" class="form-control" id="episode" placeholder="Episode" name="episode">
                          
                        </div>
                        <div class="col-md-6">
                          <label for="season" class="form-label">Season</label>
                          <input type="text" class="form-control" id="season" placeholder="Season" name="season">
                          
                        </div>
                        <div class="col-md-6">
                          <label for="synopsis" class="form-label">Synopsis</label>
                          <input type="text" class="form-control" id="synopsis" placeholder="..." name="synopsis">
                        </div>

                        <div class="col-12">
                            <hr>
                            <button class="btn btn-primary" type="submit" name="addSeries">Save</button>
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