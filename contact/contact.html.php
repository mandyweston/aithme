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
  <div id="contact">
    <?php include "../includes/header.inc.html.php"; ?> <!-- Header -->
    <?php include "../includes/nav.inc.html.php"; ?> <!-- Nav -->
    <main>
      <h1>Questions? We'd love to hear from you!</h1>
      <form method="post" action=" " id="inquiryForm">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="myName">Name:</label>
          <input type="text" name="myName" id="myName">
        <br>
        <select size="1" name="role" id="role">
          <option>Select Your Role</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
        </select>
        <br>
        <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail">
        <br>
        <label for="myQuestion">Questions or comments:</label>
          <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
        <input id="mysubmit" type="submit" value="Submit">
      </form>
    </main>
    <?php include "../includes/footer.inc.html.php"; ?> <!-- Footer -->
  </div>
</body>
</html>