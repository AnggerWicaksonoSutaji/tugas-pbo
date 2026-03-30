<?php
// Mengambil data dari form POST
$nama = isset($_POST['Nama']) ? htmlspecialchars($_POST['Nama']) : '';
$email = isset($_POST['Email']) ? htmlspecialchars($_POST['Email']) : '';
$telepon = isset($_POST['telepon']) ? htmlspecialchars($_POST['telepon']) : '';
$alamat = isset($_POST['alamat']) ? htmlspecialchars($_POST['alamat']) : '';

// Redirect ke index.php jika data tidak ada
if (empty($nama) || empty($email) || empty($telepon) || empty($alamat)) {
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Data Diri - AMU</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Additional styles for profile page */
        .profile-card {
            background: #1e1e2e;
            border: 1px solid #374151;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .profile-header .success-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 40px;
        }

        .profile-header h2 {
            color: white;
            font-size: 32px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .profile-header p {
            color: #9ca3af;
            font-size: 16px;
        }

        .profile-item {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #374151;
        }

        .profile-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .profile-label {
            color: #9ca3af;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .profile-value {
            color: white;
            font-size: 18px;
            font-weight: 400;
        }

        .profile-icon {
            display: inline-block;
            margin-right: 10px;
            opacity: 0.7;
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .back-btn {
            flex: 1;
            padding: 16px;
            background: #1e1e2e;
            border: 1px solid #667eea;
            border-radius: 8px;
            color: #667eea;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        .back-btn:hover {
            background: rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .print-btn {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Left Section - Hero Image -->
        <div class="left-section">
            <div class="logo">Data Anda</div>

            <a href="index.php" class="back-link">
                ← Back to form
            </a>

            <div class="hero-content">
                <img src="original-43bd8f4a26ab87ef9d81ad3848a46b0e.webp" alt="Hero" class="hero-image">
                <div class="hero-text">
                    <h2>Your Profile<br>Successfully Created</h2>
                </div>
            </div>
        </div>

        <!-- Right Section - Profile Display -->
        <div class="right-section">
            <div class="form-container">
                <div class="profile-header">
                    <div class="success-icon">✓</div>
                    <h2>Data Berhasil Disimpan</h2>
                    <p>Berikut adalah data diri yang telah Anda masukkan</p>
                </div>

                <div class="profile-card">
                    <div class="profile-item">
                        <div class="profile-label">
                            <span class="profile-icon">👤</span> Nama Lengkap
                        </div>
                        <div class="profile-value"><?php echo $nama; ?></div>
                    </div>

                    <div class="profile-item">
                        <div class="profile-label">
                            <span class="profile-icon">✉️</span> Email Address
                        </div>
                        <div class="profile-value"><?php echo $email; ?></div>
                    </div>

                    <div class="profile-item">
                        <div class="profile-label">
                            <span class="profile-icon">📱</span> Nomor Telepon
                        </div>
                        <div class="profile-value"><?php echo $telepon; ?></div>
                    </div>

                    <div class="profile-item">
                        <div class="profile-label">
                            <span class="profile-icon">📍</span> Alamat
                        </div>
                        <div class="profile-value"><?php echo $alamat; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Print function
        window.onload = function() {
            // Optional: Show success animation
            console.log('Profile loaded successfully');
        }
    </script>
</body>

</html>