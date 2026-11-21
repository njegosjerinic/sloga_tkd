document.addEventListener('DOMContentLoaded', () => {

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".main-menu");
const loadingScreen = document.getElementById('loading-screen');
const navbar = document.querySelector(".navbar");
const languages = document.querySelector(".languages");
const completeMenu = document.querySelector(".complete-menu");

function hideLoadingScreen() {
  const loadingScreen = document.getElementById('loading-screen');
  if (loadingScreen) {
      loadingScreen.style.display = 'none'; // Hides the loading screen
  } else {
      console.error('Loading screen element not found.');
  }
}


if (hamburger && navMenu && navbar) {
  hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      navMenu.classList.toggle('active');
      languages.classList.toggle('active');
      completeMenu.classList.toggle('active');
      if(window.innerWidth < 550){
      navbar.classList.toggle('navbar-fixed');
      }
  });

  document.querySelectorAll('.nav-link').forEach(link =>
      link.addEventListener('click', () => {
          hamburger.classList.remove('active');
          navMenu.classList.remove('active');
          languages.classList.remove('active');
          completeMenu.classList.remove('active');
          if(window.innerWidth < 550){
            navbar.classList.remove('navbar-fixed');
            }
      })
  );
} else {
  console.error('Required elements for the navigation menu are missing.');
}


  
const languageFlags = {
  en: "https://lh3.googleusercontent.com/pw/AP1GczMQ1wepx53rXXjpqptsnoiCiKUmokLVyiSV2UtJt9VNQV05Q6pVmDAzcvxS64TewnFHX1-xfzz09G_-cFrDs90YeR_oarc60KS9kxDn34AIQtX8UlmNsT44R1_NkNRWMkhNmwi_oinPFPb4dDlEa3iy=w318-h159-s-no-gm?authuser=0",
  de: "https://lh3.googleusercontent.com/pw/AP1GczOKa3FGhAYoD0yB-qnd1zg7qk7IF2ht3W5cYaYd8hql9a1J086IM6nw1viEbI7Wkhlzibwu6pVi7xiu-shWCCHc0ONUBtPf0vsTTtPkyh0dvj3zDsYBxkpf0k-Kvb3FzLbAKAf9Pj5GjQdDw1hM7inN=w290-h174-s-no-gm?authuser=0",
  srb: "https://lh3.googleusercontent.com/pw/AP1Gcz9-eCL_AQJgZTcUeymbVrU7S8tye-KAes0Jwbuxu8xwXrwQOwbbVnLrT6-YveLt9NL99ReXxq-5dUmiSpV5BffL2Dtls8=w300-h159-s-no-gm?authuser=0"
};




// hide loading screen on window load
window.addEventListener('load',hideLoadingScreen);



//close navigation menu when a navigation link is clicked 
document.querySelectorAll(".nav-link").forEach(link =>
  link.addEventListener('click',closeNavMenu)
);



});