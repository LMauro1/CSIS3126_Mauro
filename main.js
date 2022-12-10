//code below runs when the webpage is opened; when the user types in data, takes it in and pushes it, then runs the "searchMovies" function
//to allow the user to search through TVDB's database of movies. 

$(document).ready(() => {
    $('#searchForm').on('input', (e) => {

        let searchText = $('#searchText').val();

        if (searchText == null) {
            console.log(true);
        }

        searchMovies(searchText);
        searchShows(searchText);
        e.preventDefault();
    })
})

//function to redirect user to details of the movie they searched.
function movieSelected(id) {
    sessionStorage.setItem('id', id);
    window.location = 'movie.php';
    return false;
}

function showSelected(id) {
    sessionStorage.setItem('id', id);
    window.location = 'showselect.php';
    return false;
}


//function to pull the top 20 (first page) currently popular movies in TMDB, and then output the data to the user via a series of html divs
function popularMovies() {
    axios.get('https://api.themoviedb.org/3/movie/popular?api_key=ba31950d4ba335efd7f27e451b503b34&language=en-US&page=1')
        .then((response) => {

            let movies = response.data.results;
            let output = '';
            $.each(movies, (index, movie) => {

                if (movie.poster_path == null) {
                    poster = "images/default-movie.png";
                } else {
                    poster = "https://image.tmdb.org/t/p/w185_and_h278_bestv2" + movie.poster_path;
                }

                let date = movie.release_date;

                let year = date.slice(0, 4);
                output += `
                    <div class="col-lg-3 box">
                      <div class="movieBox">
                        <img src="${poster}" alt="poster" width="210" height="315" class="img">
                        <div class="browse-movie-bottom">
                            <a href="#" onclick="movieSelected('${movie.id}')" class="browse-movie-title">${movie.title}</a>
                            <div class="browse-movie-year">${year}</div>
                            <button type="submit" class="button" onclick="movieSelected('${movie.id}')">View Details</button>
                        </div>
                        </div>
                    </div>
            `
            });
            $('#movies').html(output);
        })
        .catch((error) => {
            console.log(error);
        });
}

function popularShows() {
    axios.get('https://api.themoviedb.org/3/tv/popular?api_key=ba31950d4ba335efd7f27e451b503b34&language=en-US&page=1')
        .then((response) => {

            let shows = response.data.results;
            let output = '';
            $.each(shows, (index, tv) => {

                if (tv.poster_path == null) {
                    poster = "images/default-movie.png";
                } else {
                    poster = "https://image.tmdb.org/t/p/w185_and_h278_bestv2" + tv.poster_path;
                }

                let airDate = tv.first_air_date;

                output += `
                    <div class="col-md-3 box">
                      <div class="movieBox">
                        <img src="${poster}" alt="poster" width="210" height="315" class="img">
                        <div class="browse-movie-bottom">
                            <a href="#" onclick="showSelected('${tv.id}')" class="browse-movie-title">${tv.name}</a>
                            <div class="browse-movie-year">First Aired: ${airDate}</div>
                            <button type="submit" class="button" onclick="showSelected('${tv.id}')">View Details</button>
                        </div>
                        </div>
                    </div>
            `
            });
            $('#shows').html(output);
        })
        .catch((error) => {
            console.log(error);
        });
}



function searchMovies(searchText) {

    axios.get('https://api.themoviedb.org/3/search/movie?api_key=ba31950d4ba335efd7f27e451b503b34&query=' + searchText)
        .then((response) => {

            let movies = response.data.results;
            let output = '';
            let output1 = '';
            $.each(movies, (index, movie) => {

                if (movie.poster_path == null) {
                    poster = "images/default-movie.png";
                } else {
                    poster = "https://image.tmdb.org/t/p/w185_and_h278_bestv2" + movie.poster_path;
                }

                let date = movie.release_date;

                let year = date.slice(0, 4);
                output += `
                        <div class="col-md-3 box">
                          <div class="movieBox">
                            <img src="${poster}" alt="poster" width="210" height="315" class="img">
                            <div class="browse-movie-bottom">
                                <a href="#" onclick="movieSelected('${movie.id}')" class="browse-movie-title">${movie.title}</a>
                                <div class="browse-movie-year">${year}</div>
                                <button type="submit" class="button" onclick="movieSelected('${movie.id}')">View Details</button>
                            </div>
                            </div>
                        </div>
                `
            });
            $('#movies').html(output);
        })
        .catch((error) => {
            console.log(error);
        });
}

function searchShows(searchText) {

    axios.get('https://api.themoviedb.org/3/search/tv?api_key=ba31950d4ba335efd7f27e451b503b34&query=' + searchText)
        .then((response) => {

            let tv = response.data;
            let shows = response.data.results;
            let output = '';
            let output1 = '';
            $.each(shows, (index, tv) => {

                if (tv.poster_path == null) {
                    poster = "images/default-movie.png";
                } else {
                    poster = "https://image.tmdb.org/t/p/w185_and_h278_bestv2" + tv.poster_path;
                }

                let airDate = tv.first_air_date;

                output += `
                        <div class="col-md-3 box">
                          <div class="movieBox">
                            <img src="${poster}" alt="poster" width="210" height="315" class="img">
                            <div class="browse-movie-bottom">
                                <a href="#" onclick="showSelected('${tv.id}')" class="browse-movie-title">${tv.name}</a>
                                <div class="browse-movie-year">First Aired: ${airDate}</div>
                                <button type="submit" class="button" onclick="showSelected('${tv.id}')">View Details</button>
                            </div>
                            </div>
                        </div>
                `
            });
            $('#shows').html(output);
        })
        .catch((error) => {
            console.log(error);
        });
}



function getReviews() {

    let movieId = sessionStorage.getItem('id');
    axios.get(`https://api.themoviedb.org/3/movie/${movieId}/reviews?api_key=ba31950d4ba335efd7f27e451b503b34&language=en-US&page=1`)

        .then((response) => {
            let reviews = response.data.results;
            let output = '';

            $.each(reviews, (index, review) => {

                output += `
                        <div class="row review">
                            <div class="col-md-2 box-review1">
                                <img src="images/default-user.png" alt="user" class="user-profile">
                            </div>
                            <div class="col-md-10 box-review2">
                                <h5>Reviewed by ${review.author}</h5>
                                <div class="content">
                                    <p style="color:silver;">${review.content}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `
            });
            $('#reviews').html(output);
        })
        .catch((error) => {
            console.log(error);
        });
}

function getMovie() {
    let movieId = sessionStorage.getItem('id');

    axios.get(`https://api.themoviedb.org/3/movie/${movieId}?api_key=ba31950d4ba335efd7f27e451b503b34`)
        .then((response) => {
            console.log(response);
            let movie = response.data;

            //if there is no poster for the movie on TMDB, replace with a default image, otherwise size the image to a 
            //height of 278 and a width of 185, and get the path to the image
            if (movie.poster_path == null) {
                poster = "images/default-movie.png";
            } else {
                poster = "https://image.tmdb.org/t/p/w185_and_h278_bestv2" + movie.poster_path;
            }

            let date = movie.release_date;

            let year = date.slice(0, 4);

            let Rated;

            let genre = [];
            movie.genres.forEach(element => {
                genre.push(element.name);
            });

            genres = genre.join(', ');

            let output1 = `
            <div class="row">
                <div class="col-md-4 box1">
                    <img src="${poster}" class="poster-image"> 
                </div>
                <div class="col-md-4 box2">
                    <h1 class="movie-title">${movie.title}</h1>

                    <h5 style="color: white; font-weight:bold">${year}</h5>
                    <h5 style="color: white; font-weight:bold; margin-top: -10px;">${genres}</h5>

                    <ul class="list-group">
                        <li class="list-group-item active">
                            <strong>Rating: </strong> ${movie.vote_average} / 10 (${movie.vote_count} votes on TMDB)</li>
                        <li class="list-group-item active">
                            <strong>Status: </strong> ${movie.status}</li>
                        <li class="list-group-item active">
                            <strong>Duration: </strong> ${movie.runtime} min</li>
             
                    </ul>

                </div>

                <div class="col-md-4 box3">
                    <h1 class="title-second">Synopsis</h1>
                    <p>${movie.overview}</p>
                    <hr style="width: 80%;color: #222;"> <br />
                    <div>
                        <a href="http://imdb.com/title/${movie.imdb_id}" target="_blank" class="button">View IMDB</a>
                        <a href="index.php" class="button">Go Back To Search</a>

                        <br/><br/><br/><label for="movieWatch">Watch Status:</label>
                        <select name="movieWatch" id="movieWatch">
                            <option disabled selected value> -- Select an Option -- </option>
                            <option value="seen">Seen</option>
                            <option value="plan to see">Plan to See</option>
                            <option value="havent seen">Haven't seen</option>
                        </select>
                    </div>
                </div>
            </div>
            `
            $('#movie').html(output1);
        })
        .catch((error) => {
            console.log(error);
        });
}


//function to get the data for a show. Gets the id of the show, sends an api request to the TMDB using said id, which then returns data that is accessed via 
//response.data.[data field wanted]. Set variable for this response.data to make it more consise. 
function getShow() {
    let showId = sessionStorage.getItem('id');

    axios.get(`https://api.themoviedb.org/3/tv/${showId}?api_key=ba31950d4ba335efd7f27e451b503b34&append_to_response=season/1`)
        .then((response) => {
            console.log(response);
            let tv = response.data;
        

            if (tv.poster_path == null) {
                poster = "images/default-movie.png";
            } else {
                poster = "https://image.tmdb.org/t/p/w185_and_h278_bestv2" + tv.poster_path;
            }

            let airDate = tv.first_air_date;

            let Rated;

            let genre = [];
            tv.genres.forEach(element => {
                genre.push(element.name);
            });
            let season = [];
            tv.seasons.forEach(element => {
                season.push(element.air_date)
            });

            /*let vids = [];
            tv.videos.results.forEach(element => {
                vids.push(element.key)
            });*/

            genres = genre.join(', ');
            seasons = season.join(', ');
            //vidss = vids.join(', ');

            //let string= "https://youtube.com/embed/";
            //video = string.concat(vids[0]);

            if(tv.episode_run_time ==  ""){
                episodeRunTime = "N/A";
            } else {
                episodeRunTime = tv.episode_run_time + " minutes";
            }
        
        
            let output1 = `
            <div class="row">
                <div class="col-md-4 box1">
                    <img src="${poster}" class="poster-image">
                </div>
                <div class="col-md-4 box2">
                    <h1 class="movie-title">${tv.name}</h1>

                    <h5 style="color: white; font-weight:bold"></h5>
                    <h5 style="color: white; font-weight:bold; margin-top: -10px;">${genres}</h5>

                    <ul class="list-group">
                        <li class="list-group-item active">
                            <strong>Rating: </strong> ${tv.vote_average} / 10 (${tv.vote_count} votes on TMDB)</li>
                        <li class="list-group-item active">
                            <strong>Status: </strong> ${tv.status}</li>
                        <li class="list-group-item active">
                            <strong>Seasons: </strong> ${tv.number_of_seasons} </li>
                        <li class="list-group-item active">
                            <strong>Episodes: </strong> ${tv.number_of_episodes}  </li>
                        <li class="list-group-item active">
                            <strong>Episode Length: </strong> ${episodeRunTime}</li>
                       

                      


             
                    </ul>

                </div>

                <div class="col-md-4 box3">
                    <h1 class="title-second">Synopsis</h1>
                    <p>${tv.overview}</p>
                    <hr style="width: 80%;color: #222;"> <br />
                    <div>
                        <a href="${tv.homepage}" target="_blank" class="button">View Website</a>
                        <a href="index.php" class="button">Go Back To Search</a>

                        <br/><br/><br/><label for="movieWatch">Watch Status:</label>
                        <form>
                        <select name="movieWatch" id="movieWatch">
                            <option disabled selected value> -- Select an Option -- </option>
                            <option value="seen">Seen</option>
                            <option value="plan to see">Plan to See</option>
                            <option value="havent seen">Haven't seen</option>
                        </select>
                        <input type="submit" value="bruh" onsubmit="">
                        </form>
                    </div>
                </div>
            </div>
            `
            $('#movie').html(output1);
        })
        .catch((error) => {
            console.log(error);
        });
}


//function to get the top rated movies on TMDB.
function getTopMovies() {
    axios.get('https://api.themoviedb.org/3/movie/top_rated?api_key=ba31950d4ba335efd7f27e451b503b34&language=en-US&page=1')
        .then((response) => {
            console.log(response);

            let movies = response.data.results;
            let output = '';
            $.each(movies, (index, movie) => {

                if (movie.poster_path == null) {
                    poster = "images/default-movie.png";
                } else {
                    poster = "https://image.tmdb.org/t/p/w185_and_h278_bestv2" + movie.poster_path;
                }

                let date = movie.release_date;

                let year = date.slice(0, 4);
                output += `
                    <div class="col-md-3 box">
                      <div class="movieBox">
                        <img src="${poster}" alt="poster" width="210" height="315" class="img">
                        <div class="browse-movie-bottom">
                            <a href="#" onclick="movieSelected('${movie.id}')" class="browse-movie-title">${movie.title}</a>
                            <div class="browse-movie-year">${year}</div>
                            <button type="submit" class="button" onclick="movieSelected('${movie.id}')">View Details</button>
                        </div>
                        </div>
                    </div>
            `
            });
            $('#movies').html(output);
        })
        .catch((error) => {
            console.log(error);
        });
}

//function to get the top rated shows on TMDB.
function getTopShows() {
    axios.get('https://api.themoviedb.org/3/tv/top_rated?api_key=ba31950d4ba335efd7f27e451b503b34&language=en-US&page=1')
        .then((response) => {
            console.log(response);

            let tv = response.data;

            let shows = response.data.results;
            let output = '';
            $.each(shows, (index, tv) => {

                if (tv.poster_path == null) {
                    poster = "images/default-movie.png";
                } else {
                    poster = "https://image.tmdb.org/t/p/w185_and_h278_bestv2" + tv.poster_path;
                }


                let airDate = tv.first_air_date;
                output += `
                    <div class="col-md-3 box">
                      <div class="movieBox">
                        <img src="${poster}" alt="poster" width="210" height="315" class="img">
                        <div class="browse-movie-bottom">
                            <a href="#" onclick="showSelected('${tv.id}')" class="browse-movie-title">${tv.name}</a>
                            <div class="browse-movie-year">First Aired: ${airDate}</div>
                            <button type="submit" class="button" onclick="showSelected('${tv.id}')">View Details</button>
                        </div>
                        </div>
                    </div>
            `
            });
            $('#movies').html(output);
        })
        .catch((error) => {
            console.log(error);
        });
}

function getEpisodes() {
    let showId = sessionStorage.getItem('id');

    axios.get(`https://api.themoviedb.org/3/tv/${showId}?api_key=ba31950d4ba335efd7f27e451b503b34&append_to_response=season/1, season/2`)
        .then((response) => {
            let tv = response.data;
            let output = '';


            let episodeName = [];
            tv["season/1"].episodes.forEach(element => {
                episodeName.push(element.name)
                episodeName.push(element.episode_number)
                episodeName.push(element.overview)
            }); 

            let episodeNumber = [];
            tv["season/1"].episodes.forEach(element => {
                episodeNumber.push(element.episode_number)
            });

            let episodeSynopsis = [];
            tv["season/1"].episodes.forEach(element => {
                episodeSynopsis.push(element.overview)
            });

            episodeNames = episodeName.join(' <br/><br/> ');
            episodeNumbers = episodeNumber.join(', ');
            episodeSynopsiss = episodeSynopsis.join(', ');
          
            output += `
                        <div class="row review">
                            <div class="col-md-10 box-review2">
                                <h5> ${episodeNames}</h5>
                                <div class="content">
                                    <p style="color:silver;"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                `
            $('#episodes').html(output);
        })
        .catch((error) => {
            console.log(error);
        });
}


