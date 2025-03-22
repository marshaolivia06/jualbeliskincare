<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in to the site | PureBeauty</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="/purebeauty.com/assets/css/login.css">
</head>
<body>
    <div class="form-container">
        <h1 class="logo">PureBeauty</h1>
        <p>Login to see our products!</p>
        
        <!-- Tampilkan pesan error jika ada -->
        <?php if (!empty($error_message)) : ?>
            <div class="error-message" style="color: red;"><?= htmlspecialchars($error_message) ?></div>
        <?php endif; ?>
        
        <form id="loginForm" action="" method="POST">
            <br><input type="text" id="username" name="username" placeholder="Username" required></br>
            <br><input type="password" id="password" name="password" placeholder="Password" required></br>
            <br><button type="submit">Login</button></br>
        </form>
    </div>
</body>
</html>

