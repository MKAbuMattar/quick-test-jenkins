<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quick Test Jenkins</title>
  </head>
  <body>
    <h1>Quick Test Jenkins</h1>
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
  </body>
</html>