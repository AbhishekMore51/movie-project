// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

// API KEY
const API_KEY= 'api_key=723dc50966fb83d2b5b758c4a9c895af'; //To get this go to settings/api (API Key)
const BASE_URL = 'https://api.themoviedb.org/3'; //To get this go to settings/api (Example API Request) 
const API_URL =  BASE_URL + '/discover/movie?sort_by=popularity.desc&'+API_KEY; //api/discover Examples

