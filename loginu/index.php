<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="http://localhost/php/corona/fontawesome/css/all.min.css">
    <title>Login</title>
</head>

<body>
    <img class="wave" src="wave.png">
    <div class="container">
        <div class="img">
            <img src="bek.svg" alt="gambar">
        </div>
        <div class="login-container">
            <form action="proses.php" method="POST">
                <img src="avatar.svg">
                <h2>Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input class="input" type="text" name="username" autocomplete="off" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password" autocomplete="off" required>
                    </div>
                </div>
                <a href="http://localhost/php/corona/loginu/go/pertanyaan.php">Ingin daftar dan check?</a>
                <input type="submit" class="btn" name="submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>