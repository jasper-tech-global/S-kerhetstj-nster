<?php
session_start();

$correct_code = '251525';
$error = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_code = $_POST['access_code'] ?? '';
    if ($input_code === $correct_code) {
        $_SESSION['access_granted'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Åtkomstkod krävs</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #0b2028;
      --secondary: #183e4f;
      --accent: #f59c28;
      --blue: #183e4f;
      --white: #fff;
      --error: #e74c3c;
    }
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: 'Inter', Arial, sans-serif;
      background: var(--white);
      color: var(--secondary);
    }
    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #eaeae7 0%, #f5f5f5 100%);
    }
    .access-container {
      background: var(--white);
      border-radius: 10px;
      box-shadow: 0 4px 24px rgba(24,62,79,0.08);
      padding: 40px 32px 32px 32px;
      max-width: 350px;
      width: 100%;
      text-align: center;
      position: relative;
      transition: box-shadow 0.2s;
    }
    .access-container h1 {
      font-size: 1.35rem;
      font-weight: 700;
      color: var(--secondary);
      margin-bottom: 18px;
    }
    .access-container form {
      display: flex;
      flex-direction: column;
      gap: 18px;
      align-items: center;
    }
    .access-container input[type="password"] {
      padding: 12px 16px;
      border: 1.5px solid var(--blue);
      border-radius: 5px;
      font-size: 1.1rem;
      width: 100%;
      max-width: 220px;
      outline: none;
      transition: border-color 0.2s;
    }
    .access-container input[type="password"]:focus {
      border-color: var(--accent);
    }
    .access-container button {
      background: var(--blue);
      color: var(--white);
      border: none;
      border-radius: 4px;
      padding: 12px 0;
      width: 100%;
      max-width: 220px;
      font-size: 1.1rem;
      font-weight: 700;
      cursor: pointer;
      transition: background 0.2s;
    }
    .access-container button:hover {
      background: var(--accent);
      color: var(--secondary);
    }
    .note {
      font-size: 0.98rem;
      color: #888;
      margin-top: 10px;
    }
    .error-message {
      color: var(--error);
      font-size: 1.05rem;
      margin-bottom: 8px;
      min-height: 24px;
      animation: shake 0.3s;
    }
    @keyframes shake {
      0% { transform: translateX(0); }
      20% { transform: translateX(-8px); }
      40% { transform: translateX(8px); }
      60% { transform: translateX(-6px); }
      80% { transform: translateX(6px); }
      100% { transform: translateX(0); }
    }
    @media (max-width: 500px) {
      .access-container {
        padding: 28px 8vw 24px 8vw;
        max-width: 98vw;
      }
      .access-container h1 {
        font-size: 1.1rem;
      }
    }
  </style>
</head>
<body>
  <div class="access-container<?php if ($error) echo ' shake'; ?>">
    <h1>Vänligen ange åtkomstkoden för att fortsätta</h1>
    <?php if ($error): ?>
      <div class="error-message">Fel kod. Vänligen försök igen.</div>
    <?php else: ?>
      <div class="error-message" style="visibility:hidden;">&nbsp;</div>
    <?php endif; ?>
    <form method="post" autocomplete="off">
      <input type="password" name="access_code" placeholder="Åtkomstkod" required autofocus pattern="[0-9]*" inputmode="numeric">
      <button type="submit">Bekräfta</button>
    </form>
    <div class="note">Du får denna kod via telefon från vår säkerhetsagent.</div>
  </div>
</body>
</html> 