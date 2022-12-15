=====[GitHub page for "Indagatrix"]=====

The goal of this application is to allow a user to create an account, where they
can then view popular shows, as well as well rated shows. The user
should in the end be able to view shows, see popular/top shows, see the stats for the media, log into their account, view their profile, 
and view others profiles. 


Currently, there is:

	- A login and registration page (entirely functional, user can create an account, log in, and view their profile).
	- A "landing page/ home page" that displays a list of popular movies and shows sourced from the TMDB API (https://www.themoviedb.org/documentation/api),
	  as well as allows the user to search the TMDB database for shows and movies. 
	- A "view details" button on each movie/show that links to a page with more indepth information (rating, if its airing, how many seasons
	  it has, reviews, etc.) 
	- A "top movies" page that shows the 20 highest movies on TMDB
	- A "top shows" page that shows the 20 highest rated shows on TMDB
	- A "help?" tab that will be implemented differently in the future but provides an overview of some things about the website (will be
	  further fleshed out in later pushes). 
	- A "Profile" tab that shows you your profile information; can edit display name and "about me" (easily expandable to include more
	  information as the app is fleshed out). 
	- A "Users" tab that displays the other users on the site; clicking them brings you to their profile. 

To recreate:
	- Download zip from GitHub and put into htdocs folder (or wherever a server can be hosted) 
	- sql dump contains database name and tables 
	- API Key is located in main.js, should work on install without need for access but it is there if needed (ctrl + F "api_key" will 
		show it). 


