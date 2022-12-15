<?php
	include("global.php");
    include("header.php");
?>

<!-- displays the top shows on TMDB -->

    <div class="container-fluid body">
    
        
        <h1 style="color:white">Top Rated Shows on TMDB </h1>

        <div class="container">
            <div id="movies" class="row"></div>
        </div>
    </div>
    
    <script>
        getTopShows();
    </script>

<?php
    include("footer.php");
?>