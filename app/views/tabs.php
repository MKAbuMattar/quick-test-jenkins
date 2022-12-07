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
      <p>
        <?php echo "Environment: " . ENV; ?>
      </p>

      <table border="1">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user) : ?>
            <tr>
              <td><?php echo $user['id']; ?></td>
              <td><?php echo $user['name']; ?></td>
              <td><?php echo $user['email']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </main>

    <footer>
      <p>My Site &copy; 2022</p>
    </footer>
  </body>
</html>