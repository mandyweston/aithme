<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Script Error</title>
    <meta name="description" content="Ace in the Hole Multisport Events, sports events in the Portland, Oregon area.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=css/reset.css rel="stylesheet" type="text/css">
    <link href=css/styles.css rel="stylesheet" type="text/css">
    <link href=css/navigation.css rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php include "header.inc.html.php"; ?> <!-- Header -->
    <?php include "includes/nav.inc.html.php"; ?> <!-- Nav -->
      
    <p>
      <?php echo $error; ?>
    </p>
      <?php include "includes/footer.inc.html.php"; ?> <!-- Footer -->
  </body>
</html>
