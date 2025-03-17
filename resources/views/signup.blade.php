<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Sistem Pengajuan KKP</title>
    @vite(['resources/css/signup.css'])
</head>
<body>
    <div class="signup-container">
        <!-- Bagian Kiri: Ilustrasi atau Informasi -->
        <div class="left-section">
            <h2>PENDAFTARAN UNTUK MAHASISWA!</h2>
            <p>Daftarkan diri Anda dan ajukan Kuliah Kerja Praktek (KKP) dengan mudah.</p>
            <img src="assignup-illustration.svg" alt="Ilustrasi Pendaftaran">
        </div>

        <!-- Bagian Kanan: Form Pendaftaran -->
        <div class="right-section">
            <h2>Sign Up Mahasiswa</h2>
            <form action="mahasiswa/dashboard.html" method="POST">
                <div class="input-group">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>
                </div>
                <div class="input-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="input-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="input-group">
                    <label for="no_hp">No. HP</label>
                    <input type="tel" id="no_hp" name="no_hp" placeholder="Masukkan No. HP" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Buat Password" required>
                </div>
                <button type="submit" class="btn-signup">Sign Up</button>
                <p class="login-link">Sudah punya akun? <a href="login.html">Sign In</a></p>
            </form>
        </div>
    </div>
</body>
</html>
