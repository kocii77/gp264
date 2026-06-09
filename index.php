<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ExpenseBuddy Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form method="post" action="proses_login.php">
        <h2>LOGIN TO YOUR ACCOUNT</h2>

        <div class="input-group">
            <span class="icon">👤</span>
            <input type="text" id="username" name="username" placeholder="Username" required>
        </div>

        <div class="input-group">
            <span class="icon">🔒</span>
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>

        <div class="role">
            <label><input type="radio" name="role" value="user" checked> User</label>
            <label><input type="radio" name="role" value="admin"> Admin</label>
        </div>

        <button type="submit">LOGIN</button>

        <p class="link">Forgot password?</p>
        <p class="link" onclick="goToRegister()">
            Don’t have an account? Sign up now!
        </p>
    </form> 
</div>

<script>
    function goToRegister() {
    window.location.href = "register.php";
}
</script>

</body>
</html>