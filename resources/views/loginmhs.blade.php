<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN - Sistem Pengajuan KKP</title>
    @vite(['resources/css/login.css'])
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h2>Sign In Mahasiswa</h2>
            <p>Silakan masuk menggunakan NIM dan password</p>
            <form action="mahasiswa/index.html" method="POST">
                <div class="input-group">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <button type="submit" class="btn-login">Masuk</button>
                <p class="register-link">Belum punya akun? <a href="#">Sign Up</a></p>
            </form>
        </div>
    </div>
</body>
</html>
