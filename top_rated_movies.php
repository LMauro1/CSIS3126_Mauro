<?php
	include("header.php");
	include("global.php");
?>
    <div class="container-fluid body">
    

        <h1 style="color:white">Top Movies </h1>

        <div class="container">
            <div id="movies" class="row"></div>
        </div>
    </div>
    
    <script>
        getTopMovies();
    </script>

<?php
    include("footer.php");
?>