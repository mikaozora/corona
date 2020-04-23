<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="http://localhost/php/corona/fontawesome/css/all.min.css">
    <title>Form</title>
</head>

<body>
    <script type="text/javascript" src="main.js"></script>
    <div class="contai">
        <div class="box">
            <form action="proses2.php" method="POST">
                <h2>Daftar dan Cek</h2>
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

                <div class="data">
                    <h5>apakah anda mengalami sesak napas?</h5>
                    <div class="isi">
                        <label>
                        <input type="radio" name="rdb1" value="ya" class="rdb">
                        <i class="fas fa-check"></i>
                        </label>
                        <label>
                        <input type="radio" name="rdb1" value="no" class="rdbn">
                        <i class="fas fa-times"></i>
                        </label>
                    </div>
                </div>
                <div class="data">
                <h5>apakah anda mengalami demam?</h5>
                    <div class="isi">
                        <label>
                        <input type="radio" name="rdb2" value="ya" class="rdb">
                        <i class="fas fa-check"></i>
                        </label>
                        <label>
                        <input type="radio" name="rdb2" value="no" class="rdbn">
                        <i class="fas fa-times"></i>
                        </label>
                    </div>
                </div>
                <div class="data">
                <h5>apakah anda mengalami sakit tenggorokan?</h5>
                    <div class="isi">
                    <label>
                        <input type="radio" name="rdb3" value="ya" class="rdb">
                        <i class="fas fa-check"></i>
                        </label>
                        <label>
                        <input type="radio" name="rdb3" value="no" class="rdbn">
                        <i class="fas fa-times"></i>
                        </label>
                    </div>
                </div>
                <div class="data">
                <h5>apakah anda mengalami batuk dan bersin?</h5>
                    <div class="isi">
                    <label>
                        <input type="radio" name="rdb4" value="ya" class="rdb">
                        <i class="fas fa-check"></i>
                        </label>
                        <label>
                        <input type="radio" name="rdb4" value="no" class="rdbn">
                        <i class="fas fa-times"></i>
                        </label>
                    </div>
                </div>
                <div class="data">
                <h5>apakah anda mengalami gejala sekitar 14 hari setelah travelling ke luar negeri?</h5>
                    <div class="isi">
                    <label>
                        <input type="radio" name="rdb5" value="ya" class="rdb">
                        <i class="fas fa-check"></i>
                        </label>
                        <label>
                        <input type="radio" name="rdb5" value="no" class="rdbn">
                        <i class="fas fa-times"></i>
                        </label>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>