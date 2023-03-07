// API KEY
const API_KEY = "api_key=723dc50966fb83d2b5b758c4a9c895af"; //To get this go to settings/api (API Key)
const BASE_URL = "https://api.themoviedb.org/3"; //To get this go to settings/api (Example API Request)
// const API_URL = BASE_URL+"/discover/movie?sort_by=popularity.desc&"+API_KEY; //api/discover Examples
const API_URL =
  BASE_URL +
  "/discover/movie?primary_release_date.gte=2014-09-15&primary_release_date.lte=2014-10-22&" +
  API_KEY; //api/discover Examples
const API_Popular =
  BASE_URL + "/discover/movie?sort_by=popularity.desc&" + API_KEY; //POpular Movie
const API_KIDS =
  BASE_URL +
  "/discover/movie?certification_country=US&certification.lte=G&sort_by=popularity.desc&" +
  API_KEY; //Popular kids movie
// Images
const IMG_URL = "https://image.tmdb.org/t/p/w500";

// API INTEGRATION
getmovies(API_URL);
getPopularMovies(API_Popular);
getPopularKids(API_KIDS);

// Release Date
function getmovies(url) {
  fetch(url)
    .then((res) => res.json())
    .then((data) => {
      // console.log(data, "release date");
    });
}

// Popular Movies
function getPopularMovies(url) {
  fetch(url)
    .then((res) => res.json())
    .then((data) => {
      // console.log(data, "Popular Movies");

      let results = data.results;
      showPopularMovies(results);
    });
}
function showPopularMovies(results){

  for(let i=0;i < 6 ; i++){
    console.log(results,"aja")
    let movies = document.createElement("div");
    movies.classList = "col-lg-4 col-md-4 col-sm-6 mt-5"
    movies.innerHTML = `
      <div class="card" >
        <img src="${IMG_URL+results[i].poster_path}" class="card-img-top" alt="${results[i].title}">
        <div class="card-body card-body-hover">
          <h5 class="card-title title-text">${results[i].title}</h5>
          <p class="card-text overview-text">${results[i].overview}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    `
    document.getElementById("cards-popular").append(movies);
    // main.appendChild(movies);
  }
}


// Popular kids movies
function getPopularKids(url) {
  fetch(url)
    .then((res) => res.json())
    .then((data) => {
      // console.log(data, "kids movies");
    });
}
