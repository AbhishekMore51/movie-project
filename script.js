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

const banner_movie =
  BASE_URL + "/discover/movie?sort_by=popularity.desc&" + API_KEY;
// Images
const IMG_URL = "https://image.tmdb.org/t/p/w500";

// API INTEGRATION
getmovies(API_URL);
getPopularMovies(API_Popular);
getPopularKids(API_KIDS);
getBannerMovie(banner_movie);

// Release Date
function getmovies(url) {
  fetch(url)
    .then((res) => res.json())
    .then((data) => {
      // console.log(data, "release date");
    });
}

// Banner Movie
function getBannerMovie(url) {
  fetch(url)
    .then((res) => res.json())
    .then((data) => {
      console.log(data, "banner data");
      let results = data.results;
      showBannerMovies(results);
    });
}

function showBannerMovies(results) {
  let banner_section = document.createElement("div");
  banner_section.innerHTML = `
      <div class="banner-background" style="
        background: linear-gradient(
          to right,
          rgb(0 0 0 / 0.5),
          rgb(0 0 0 / 0)
          ),
          url('${IMG_URL + results[0].backdrop_path}')
      ">
        <div class="banner-desc-section">
          <div class="img-container">
              <img src="${
                IMG_URL + results[0].poster_path
              }" class="card-img-top" alt="...">
          </div>

          <div class="desc-container">
            <div class="upper-title">
                <h3>${results[0].original_title}</h3>
              <div class="sub-upper-title d-flex">
                <div>
                  <i class="fas fa-language"></i>
                  ${results[0].original_language}
                </div>
                <div>
                  <i class="fas fa-thumbs-up"></i>
                  ${results[0].vote_average}
                </div>
                <div>
                  <i class="far fa-tomato"></i>
                  ${results[0].vote_count}
                </div>
              </div>
            </div>
            <div class="lower-title mt-5">
              ${results[0].overview}
            </div>
            <div class="title-btn mt-3">
              <a href="#" class="btn btn-primary">More Detaiils</a>
            </div>
          </div>

        </div>
      </div>
      `;
  document.getElementById("carousel-section").append(banner_section);
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
function showPopularMovies(results) {
  for (let i = 0; i < 6; i++) {
    // console.log(results,"aja")
    let movies = document.createElement("div");
    movies.classList = "col-lg-4 col-md-4 col-sm-6 mt-5 class-cards";
    movies.innerHTML = `
    <a class="card-links" href="#">
      <div class="card card-detailing" >
        <img src="${
          IMG_URL + results[i].poster_path
        }" class="card-img-top" alt="${results[i].title}">
        <div class="card-body card-body-hover">
          <h5 class="card-title title-text">${results[i].title}</h5>
          <p class="card-para">
            Average votes: 
            <span style="margin-left: 10px">${results[0].vote_average} 
              <i class="fas fa-star" style="color: #ffd700"></i>
            </span> 
          </p>
        </div>
      </div>
    </a>
    `;
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
