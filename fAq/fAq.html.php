<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ace in the Hole Multisport Events</title>
  <meta name="description" content="Ace in the Hole Multisport Events, sports events in the Portland, Oregon area.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href=../css/reset.css rel="stylesheet" type="text/css">
  <link href=../css/styles.css rel="stylesheet" type="text/css">
  <link href=../css/navigation.css rel="stylesheet" type="text/css">
</head>
<body>
  <div id="registration">
    <?php include "../includes/header.inc.html.php"; ?> <!-- Header -->
    <?php include "../includes/nav.inc.html.php"; ?> <!-- Nav -->
    <main>
    <div id="content1">
        <h1>Frequently Asked Questions</h1>
        
        <button class="accordion">What are the Rules?</button>
        <div class="panel">
          <p>We currently adhere to the USAT Rules for Triathlon &amp; Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</p>
        </div>

        <button class="accordion">Can I use a personal music device while cycling?</button>
        <div class="panel">
          <p>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p>
        </div>

        <button class="accordion">Can I use a personal music device while running?</button>
        <div class="panel">
            <p>During any running segments, we prefer for athletes to <id>NOT</id> use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
            <ul class="faq">
                <li>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.</li>
                <li>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</li>
                <li>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</li>
            </ul>
        </div>
        
        <button class="accordion">Do I need to wear a wetsuit?</button>
        <div class="panel">
          <p>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</p>
        </div>
        
        <button class="accordion">Do I have to use a road or racing bike?</button>
        <div class="panel">
          <p>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
        </div>
        
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
              acc[i].addEventListener("click", function() {
                /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
                this.classList.toggle("active");

                /* Toggle between hiding and showing the active panel */
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                  panel.style.display = "none";
                } else {
                  panel.style.display = "block";
                }
              });
            }
            
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
              acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                  panel.style.maxHeight = null;
                } else {
                  panel.style.maxHeight = panel.scrollHeight + "px";
                }
              });
            }
        </script>
    </div>
    </main>
    <?php include "../includes/footer.inc.html.php"; ?> <!-- Footer -->
  </div>
</body>
</html>