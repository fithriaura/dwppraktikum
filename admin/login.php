<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dashboard Admin</title>

    <!-- FONT & ICON -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="admin-style.css">
</head>

<body class="login-page">
    <div class="login-card">
        <svg class="user-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </svg>

        <h1 class="login-title">Dashboard Admin</h1>

        <!-- FORM LOGIN -->
        <form method="POST" action="proses-login.php">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required autocomplete="username">
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
            </div>

            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>

    <!-- JS  -->
    <script src="../assets/js/script.js"></script>
</body>

</html>