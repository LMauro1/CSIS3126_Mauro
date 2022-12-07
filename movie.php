<?php
 include("header.php");
 include("global.php");
?>
    <link rel="stylesheet" href="css/movie_style.css">
    <div class="container">
        <div id="movie"></div>
    </div>
    <div class="container">
        <div class="container main-review">
            <h1 class="title-second review-text">Reviews from TMDB website: </h1>
            <div id="reviews"></div>
        </div>
    </div>

    <script>
        getMovie();
        getReviews();
    </script>
</body>

</html>