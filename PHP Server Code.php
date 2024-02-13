<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $email = $_POST['email'];
    $typeofseller = $_POST['type-of-seller'];
    $inquiry = $_POST['inquiry'];
    }
      ?>
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>