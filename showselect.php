<?php
 include("header.php");
 include("global.php");
?>
    <link rel="stylesheet" href="css/movie.css">
    <div class="container">
        <div id="movie"></div>
    </div>
    <div class="container">
        <div class="container main-review">
            <h1 class="title-second review-text">Episodes: </h1>
            <div id="episodes"></div>
        </div>
    </div>

    <script>
        getShow();
        getEpisodes();  
    </script>
</body>

</html>