<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lianel Kicks | Premium Sneakers</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">LIANEL KICKS</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#testimonials">Testimoni</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="javascript:void(0)" class="btn-member" onclick="openMember()">JOIN MEMBER</a></li>
            </ul>
        </nav>
    </header>

    <div id="memberModal" class="modal-overlay">
        <div class="modal-box">
            <span class="close-btn" onclick="closeMember()">×</span>
            <h3>MEMBER REGISTRATION</h3>
            <form onsubmit="alert('Pendaftaran Berhasil!'); return false;">
                <input type="text" placeholder="Nama Lengkap" required>
                <input type="number" placeholder="Nomor WhatsApp" required>
                <button type="submit" class="btn-submit">DAFTAR SEKARANG</button>
            </form>
        </div>
    </div>

    <script>
        function openMember() { document.getElementById("memberModal").style.display = "flex"; }
        function closeMember() { document.getElementById("memberModal").style.display = "none"; }
    </script>