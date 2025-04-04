<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header>
        <h2>Lập trình web</h2>
        <nav>
            <a href="index.html">Home</a> |
            <a href="login.html"><b>Đăng nhập</b></a> |
            <a href="register.html">Đăng ký</a>
        </nav>
    </header>
    
    <div class="login-container">
        <h3>Màn hình đăng nhập</h3>
        <form id="loginForm">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password" required>
            
            <div class="remember">
                <input type="checkbox" id="rememberMe">
                <label for="rememberMe">Ghi nhớ đăng nhập</label>
            </div>
            
            <a href="#" class="forgot-password">Quên mật khẩu</a>
            
            <button type="submit" class="login-btn">Đăng nhập</button>
        </form>
    </div>
    
    <footer>
        <p>Lập trình web @01/2024</p>
    </footer>
</body>
</html>