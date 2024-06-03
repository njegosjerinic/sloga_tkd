const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const navMenuActive = document.querySelector(".nav-menu .active");
const navbar = document.querySelector(".navbar");


window.addEventListener('load', function() {
  var loadingScreen = document.getElementById('loading-screen');
  loadingScreen.style.display = 'none';
});

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    navbar.classList.toggle("navbar-fixed");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click" , () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    navbar.classList.remove("navbar-fixed");
}))


  document.addEventListener('DOMContentLoaded', function() {
    var img = document.getElementById('myImage');
    
    if (window.innerWidth < 768) {
      img.src = "https://lh3.googleusercontent.com/pw/AP1GczPzSjKg1A1Aj6jxcvwJ9ZOzrX3OuoD4ZU3SOYCRETmtNJC-wtc-3iKHL4IKvNp6h-SMyart0K_GeYmH8tOfgNeWFTyLnMQnOxRudN5CKLsrv20k_aAcq7PVet1gorB1ywnWeKuhVCcOZIVQXYSSGCyf=w739-h953-s-no-gm?authuser=0";
    } else {
      img.src = "https://lh3.googleusercontent.com/pw/AP1GczOXDgERh918MfLwttxvY4dsRozvceng8073Fkl6ULsR4uBRMh_6ZuQY6ySY1n7n1NCVifOMMQ8ise2jJMXYEt-WYrjHu1INv-LeSAinsXNsLlVz5DCl30yle6p-BvYDNl_1hhrqdhWBJKaHsYwZ0mdU=w1440-h578-s-no-gm?authuser=0";
    }
  });
  
  const languageFlags = {
    en: "https://lh3.googleusercontent.com/pw/AP1GczMQ1wepx53rXXjpqptsnoiCiKUmokLVyiSV2UtJt9VNQV05Q6pVmDAzcvxS64TewnFHX1-xfzz09G_-cFrDs90YeR_oarc60KS9kxDn34AIQtX8UlmNsT44R1_NkNRWMkhNmwi_oinPFPb4dDlEa3iy=w318-h159-s-no-gm?authuser=0",
    de: "https://lh3.googleusercontent.com/pw/AP1GczOKa3FGhAYoD0yB-qnd1zg7qk7IF2ht3W5cYaYd8hql9a1J086IM6nw1viEbI7Wkhlzibwu6pVi7xiu-shWCCHc0ONUBtPf0vsTTtPkyh0dvj3zDsYBxkpf0k-Kvb3FzLbAKAf9Pj5GjQdDw1hM7inN=w290-h174-s-no-gm?authuser=0",
    srb: "https://lh3.googleusercontent.com/pw/AP1Gcz9-eCL_AQJgZTcUeymbVrU7S8tye-KAes0Jwbuxu8xwXrwQOwbbVnLrT6-YveLt9NL99ReXxq-5dUmiSpV5BffL2Dtls8=w300-h159-s-no-gm?authuser=0"
};



function changeLanguage(language) {
  fetch(`translations/${language}.json`)
      .then(response => response.json())
      .then(data => {
          document.querySelectorAll('[data-key]').forEach(element => {
              const key = element.getAttribute('data-key');
              element.textContent = data[key];
          });
          localStorage.setItem('selectedLanguage', language);
          updateActiveButton(language);
      })
      .catch(error => console.error('Error loading translation:', error));
}

function updateActiveButton(language) {
  document.querySelectorAll('.language-switcher button').forEach(button => {
      button.classList.toggle('active', button.getAttribute('onclick').includes(language));
  });
}

function toggleLanguage(language) {
  changeLanguage(language);
}

document.addEventListener('DOMContentLoaded', () => {
  const savedLanguage = localStorage.getItem('selectedLanguage') || 'srb';
  changeLanguage(savedLanguage);
});


