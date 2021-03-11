<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ace in the Hole Multisport Events</title>
  <meta name="description" content="Ace in the Hole Multisport Events, sports events in the Portland, Oregon area.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href=css/reset.css rel="stylesheet" type="text/css">
  <link href=css/styles.css rel="stylesheet" type="text/css">
  <link href=css/navigation.css rel="stylesheet" type="text/css">
</head>
<body>
  <div id="home">
    <?php include "header.inc.html.php"; ?> <!-- Header -->
    <?php include "includes/nav.inc.html.php"; ?> <!-- Nav -->
    <main>
      <div id="content1">
          
      <h1>Welcome</h1>
       
      <div class="slideshow-container">
        <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/ss1.jpg" style="width:100%" alt="3 athletes side by side">
        </div>

        <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/ss2.jpg" style="width:100%" alt="Female athlete walking with crutches with other athletes behind her">
        </div>

        <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/ss3.jpg" style="width:100%" alt="runner athletes in a race">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
          
        <script>
          
            var slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                } 
            var slideIndex = 0;
            showSlides();

            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}
              slides[slideIndex-1].style.display = "block";
              setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
          
        </script>
      </div>
      
      <div id="content2">
        <h2>About Us</h2>
          <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body.</p>
          
          <br><br><br>
          
        <h2>About the Events</h2>
          <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.<br><br>

          There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
      </div>
        
      <div id="content3">
        <h2>Events Calendar</h2>
          <br>
          <ul>
              <li class="day">Saturday</li>
              
              <li class="event">Long Course Triathlon</li>
              <li>7:00AM</li>
              
              <li class="event">Olympic Triathlon</li>
              <li>7:30AM</li>
              
              <li class="event">10K</li>
              <li>7:15AM</li>
              
              <li class="event">Half Marathon</li>
              <li>7:15AM</li>
          </ul>
          <br><br>
          <ul>
              <li class="day">Sunday</li>
              
              <li class="event">Sprint Triathlon</li>
              <li>8:00AM</li>
              
              <li class="event">Try-a-Tri</li>
              <li>8:20AM</li>
              
              <li class="event">Splash n Dash</li>
              <li>12:00PM</li>
          </ul>
      </div>
      
    </main>
    <?php include "includes/footer.inc.html.php"; ?> <!-- Footer -->
  </div>
</body>
</html>