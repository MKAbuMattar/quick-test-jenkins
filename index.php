<?php
require_once 'config/env.php';
require_once 'config/connection.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo ENV; ?> | My Site</title>
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
  </head>
  <body>
    <header>
      <h1>My Site</h1>

      <nav>
        <ul>
          <li><a href="./index.php">Home</a></li>
          <li><a href="./table.php">Table</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <h2>Home</h2>
      <p>Welcome to my site!</p>
      <p>Test for git hokus</p>
      <p>
        <?php echo "Environment: " . ENV; ?>
      </p>
    </main>

    <footer>
      <p>My Site &copy; 2022</p>
    </footer>
  </body>
</html>