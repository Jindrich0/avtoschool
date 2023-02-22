function scrollReveal() {
    var revealPoint = 165;
    var revealElement = document.querySelectorAll(".animation");
    for (var i = 0; i < revealElement.length; i++) {
      var windowHeight = window.innerHeight;
      var revealTop = revealElement[i].getBoundingClientRect().top;
      if (revealTop < windowHeight - revealPoint) {
        revealElement[i].classList.add("active");
      } else {
        revealElement[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", scrollReveal);