<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Diri - AMU</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <!-- Left Section - Hero Image -->
        <div class="left-section">

            <div class="hero-content">
                <div class="logo">Data Diri</div>
            </div>
        </div>

        <!-- Right Section - Form -->
        <div class="right-section">
            <div class="form-container">
                <div class="form-header">
                    <h1>Data Anda</h1>
                    <p>Silakan isi data diri Anda dengan lengkap</p>
                </div>

                <form action="profil.php" method="post">
                    <div class="input-row">
                        <div class="input-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="Nama" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="Email" placeholder="example@email.com" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="telepon">Nomor Telepon</label>
                        <input type="tel" id="telepon" name="telepon" placeholder="08123456789" required>
                    </div>

                    <div class="input-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat lengkap" required>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="terms" required>
                        <label for="terms">pastikan data anda sudah sesuai</label>
                    </div>

                    <button type="submit" name="submit" class="submit-btn">Submit Data</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>