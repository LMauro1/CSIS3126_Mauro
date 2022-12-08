<?php
	include("header.php");
	include("global.php");
?>
    <div class="container-fluid body">
        <div class="container">
            <div class="sbox">
                <div>
                    <center>
                        <div class="content">
                              <h1 style ="color:white"> Welcome to <span style="font-weight:bold; color: #0096FF">Indagatrix!</span> </h1> 
                              <p style="color:white"> The purpose of this website is to allow a user to create an account, track
                                tv shows and movies, keep up with popular and well rated tv shows and movies, share this tracking with friends, and more! The information and database for the movies on this website is provided by 
                                <span style="font-weight:bold;">MovieDB</span>, a tv show and movie database website. Default display below search is the
                                <span style="font-weight:bold;">top 20 most popular shows </span> and <span style="font-weight:bold;"> top 20 most popular movies </span>
                                at the current time.
                            </p>
                        </div>
                    </center>
                    <form id="searchForm">
                        <input type="text" class="searchBox" placeholder="Search for something..." id="searchText" autocomplete="off" >
                    </form>
                </div>
            </div>
        </div>



        <h1 style="color:white"> Your Search: </h1>

         <div class="container"> <h1 class="white" id="showsHeader"><u> Shows </u></h1>
            <div id="shows" class="row"></div>
        </div>

        <div class="container"> <h1 class="white" id="moviesHeader"> <u>Movies</u> </h1>
            <div id="movies" class="row"></div>
        </div>
    </div>

    
    <script>
        popularMovies();
        popularShows();
    </script>

<?php
    include("footer.php");
?>