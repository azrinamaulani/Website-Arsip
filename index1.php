<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laman depan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero-section {
            background: linear-gradient(135deg, #0d6efd, #0a4caf);
            color: white;
            padding: 80px 0;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #0d6efd;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
            margin-top: 100px;
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background-color: #0a4caf;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">DPPKBP3A</h1>
            <p class="lead mb-5">Selamat Datang di Website Arsip DPPKBP3A – Tempat Penyimpanan Dokumen Digital yang Aman dan Terstruktur</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="index.php" class="btn btn-light btn-lg px-5 fw-bold">
                    <i class="fas fa-user-plus me-2"></i>Upload Dokumen
                </a>
                <a href="mencari_dokumen.php" class="btn btn-outline-light btn-lg px-5 fw-bold">
                    <i class="fas fa-sign-in-alt me-2"></i>Mencari Dokumen
                </a>
            </div>
        </div>
    </div>

    
</body>
</html>