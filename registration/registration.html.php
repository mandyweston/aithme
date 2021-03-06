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
      <h1>Register for an event today</h1>
      <div id="registration">
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="myname">First and last Name:</label>
          <input type="text" name="myname" id="myname"/>
          <br>
        <label for="myage">Age:</label>
          <input type="text" name="myage" id="myage"/>
          <br>
        <label for="role">Role:</label>
        <select size="1" name="role" id="role">
          <option>Select Your Role</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
        </select>
          <br>
        <label for="myphone">Phone:</label>
          <input type="tel" name="myphone" id="myphone"/>
          <br>
         <label for="myemail">Email:</label>
          <input type="email" name="myemail" id="myemail"/>
          <br>
        <label for="ename">Emergency Contact Name:</label>
          <input type="text" name="ename" id="ename"/>  
          <br>
        <label for="ephone">Emergency Contact Phone:</label>
          <input type="tel" name="ephone" id="ephone"/>
          <br>
        <label for="gender">Gender:</label>
        <select size="1" name="gender" id="gender">
          <option>What is Your Gender</option>
          <option value="female">Female</option>
          <option value="male">Male</option>
          <option value="other">Non-binary/Other</option>
        </select>
          <br>
        <label for="shirt">T-shirt Size:</label>
          <select size="1" name="shirt" id="shirt">
            <option>What is Your T-shirt size</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
          </select>
          <br>
         <label for="event">Saturday Event Registering for:</label>
          <select size="1" name="event" id="event">
            <option>What event do you want to attend?</option>
            <option value="lct">Long Course Triathlon</option>
            <option value="ot">Olympic Triathlon</option>
            <option value="10K">10K</option>
            <option value="hm">Half Marathon</option>
          </select>
          <br>
         <label for="sevent">Sunday Event Registering for:</label>
          <select size="1" name="sevent" id="sevent">
            <option>What event do you want to attend</option>
            <option value="st">Sprint Triathlon</option>
            <option value="tat">Try-a-Tri</option>
            <option value="snd">Splash n Dash</option>
          </select>
          <br>
        <label for="mycomments">Any Special Accommodations Needed?</label>
          <textarea name="mycomments" id="mycomments" rows="2" cols="20"></textarea>
          <br>
          <input id="mysubmit" type="submit" value="Submit"/>
      </form>
      </div>
    </main>
    <?php include "../includes/footer.inc.html.php"; ?> <!-- Footer -->
  </div>
</body>
</html>