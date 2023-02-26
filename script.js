

// API KEY
const API_KEY = "api_key=723dc50966fb83d2b5b758c4a9c895af"; //To get this go to settings/api (API Key)
const BASE_URL = "https://api.themoviedb.org/3"; //To get this go to settings/api (Example API Request)
// const API_URL = BASE_URL+"/discover/movie?sort_by=popularity.desc&"+API_KEY; //api/discover Examples
const API_URL = BASE_URL+"/discover/movie?primary_release_date.gte=2014-09-15&primary_release_date.lte=2014-10-22&"+API_KEY; //api/discover Examples

// API INTEGRATION
getmovies(API_URL);

function getmovies(url) {
  fetch(url)
    .then(res => res.json())
    .then(data => {
      console.log(data);
    });
}
