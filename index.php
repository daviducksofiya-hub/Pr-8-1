<?php ?>
<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Дані сервера</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Дані сервера</h1>
    <table>
      <tr><th>Ключ</th><th>Значення</th></tr>
      <?php foreach ($_SERVER as $key => $value): ?>
        <tr>
          <td><?php echo htmlspecialchars($key); ?></td>
          <td><?php echo htmlspecialchars((string)$value); ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </main>
</body>
</html>
