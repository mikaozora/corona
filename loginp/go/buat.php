<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="http://localhost/php/corona/fontawesome/css/all.min.css">
    <title>Form</title>
</head>

<body>
    <div class="contai">
        <div class="box">
            <form action="proses2.php" method="POST">
                <h2>Buat Akun</h2>
                <div class="underline"></div>
                <div class="data">
                    <h5>nama</h5>
                    <input type="text" name="nama" autocomplete="off" class="input">
                </div>
                <div class="data">
                    <h5>alamat</h5>
                    <input type="text" name="alamat" autocomplete="off" class="input">
                </div>
                <div class="data">
                    <h5>usia</h5>
                    <input type="text" name="usia" autocomplete="off" class="input">
                </div>
                <div class="data">
                    <h5>username</h5>
                    <input type="text" name="username" autocomplete="off" class="input">
                </div>
                <div class="data">
                    <h5>password</h5>
                    <input type="password" name="password" autocomplete="off" class="input">
                </div>
                <button type="submit" name="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>