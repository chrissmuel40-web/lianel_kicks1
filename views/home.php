<style>
/* ================= PENGAMAN GAYA & MENU NAVIGASI ================= */
body {
    background-color: #000000 !important;
    color: #ffffff !important;
    margin: 0;
    font-family: 'Arial', sans-serif;
}

/* Mengatur area header/menu bawaan agar di kanan atas dan transparan */
header, .header, nav, .navbar {
    position: absolute !important;
    top: 0 !important;
    right: 0 !important;
    width: 100% !important;
    background: transparent !important;
    z-index: 1000 !important;
    display: flex !important;
    justify-content: flex-end !important;
    padding: 20px 40px !important;
    box-sizing: border-box !important;
}

/* MENGHILANGKAN TULISAN "LIANEL KICKS" DI HEADER PALING ATAS */
header .logo, .header .logo, .navbar-brand, header h1, .navbar h1, .brand {
    display: none !important;
}

/* Memastikan teks menu tetap berwarna putih dan rapi di kanan */
header a, .header a, nav a, .navbar a, .menu a {
    color: #ffffff !important;
    margin-left: 20px !important;
    text-decoration: none !important;
    font-weight: bold !important;
    font-size: 1rem !important;
}

/* Hero Section */
.hero {
    height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url('images/store-bg.jpeg');
    background-color: #111111;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.hero-content h1 {
    font-size: 3.5rem;
    letter-spacing: 8px;
    margin-bottom: 10px;
    color: #ffffff;
    font-weight: bold;
}

.hero-content p {
    font-size: 1.2rem;
    letter-spacing: 3px;
    color: #cccccc;
    margin-bottom: 30px;
}

.btn-explore {
    background-color: transparent;
    color: #ffffff;
    border: 2px solid #ffffff;
    padding: 12px 30px;
    text-decoration: none;
    font-weight: bold;
    letter-spacing: 2px;
    border-radius: 50px;
    transition: 0.3s;
    display: inline-block;
}

.btn-explore:hover {
    background-color: #ffffff;
    color: #000000;
}

/* Judul Bagian */
.section-title {
    font-size: 2.2rem;
    letter-spacing: 5px;
    color: #ffffff;
    margin-bottom: 40px;
    text-transform: uppercase;
    text-align: center;
}

/* Bagian Konten Utama */
.products, .about-section, .testi-section, .location-section {
    padding: 80px 20px;
    background-color: #000000;
    text-align: center;
    position: relative;
    z-index: 1;
}

/* ================= SUSUNAN GRID PRODUK (3 DI ATAS, 3 DI BAWAH) ================= */
.product-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Memaksa pas 3 kolom ke samping */
    gap: 30px;
    max-width: 1100px;
    margin: 0 auto;
}

/* Penyesuaian otomatis jika dibuka lewat HP agar gambar tidak terlalu kecil */
@media (max-width: 768px) {
    .product-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .product-grid {
        grid-template-columns: 1fr;
    }
}

.product-card {
    background-color: #0d0d0d;
    border: 1px solid #222222;
    padding: 20px;
    border-radius: 12px;
    box-sizing: border-box;
    transition: transform 0.3s, border-color 0.3s;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.product-card:hover {
    transform: translateY(-5px);
    border-color: #25d366;
}

.product-img img {
    width: 100%;
    height: 220px;
    border-radius: 8px;
    object-fit: cover;
}

.product-card h3 {
    font-size: 1.2rem;
    color: #ffffff;
    margin: 15px 0 10px 0;
}

.product-card .price {
    color: #25d366;
    font-weight: bold;
    font-size: 1.1rem;
    margin-bottom: 20px;
}

.btn-wa-trigger {
    background-color: #25d366;
    color: #ffffff;
    border: none;
    padding: 12px;
    width: 100%;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
    font-size: 0.95rem;
}

.btn-wa-trigger:hover {
    background-color: #20ba5c;
}

/* ================= MODAL / POPUP DETAIL ================= */
.modal-overlay {
    display: none;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.92);
    z-index: 9999;
    justify-content: center;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
}

.modal-box {
    background-color: #111111;
    border: 1px solid #333333;
    border-radius: 16px;
    max-width: 850px;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
    padding: 30px;
    position: relative;
    text-align: left;
    box-sizing: border-box;
}

.close-btn {
    position: absolute;
    right: 25px;
    top: 15px;
    font-size: 32px;
    color: #888888;
    cursor: pointer;
    transition: 0.2s;
}

.close-btn:hover {
    color: #ffffff;
}

.badge-ongkir {
    background-color: rgba(37, 211, 102, 0.15);
    color: #25d366;
    border: 1px solid #25d366;
    padding: 6px 14px;
    font-size: 0.85rem;
    font-weight: bold;
    border-radius: 50px;
    display: inline-block;
    margin-bottom: 15px;
}

.size-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 10px;
}

.size-btn {
    background-color: #1a1a1a;
    border: 1px solid #444444;
    color: #ffffff;
    padding: 10px 16px;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.2s;
}

.size-btn:hover {
    border-color: #888888;
}

.size-btn.active {
    background-color: #ffffff;
    color: #000000;
    border-color: #ffffff;
}

.info-label {
    font-size: 0.85rem;
    color: #888888;
    margin-top: 20px;
    margin-bottom: 5px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.payment-box {
    background-color: #1a1a1a;
    padding: 12px 15px;
    border-radius: 8px;
    border: 1px solid #2a2a2a;
    color: #ffffff;
    font-weight: bold;
    font-size: 0.9rem;
    letter-spacing: 1px;
}

.review-box {
    background-color: #1a1a1a;
    padding: 15px;
    border-radius: 8px;
    border: 1px solid #2a2a2a;
    margin-top: 5px;
}
</style>

<section id="home" class="hero">
    <div class="hero-content">
        <h1>LIANEL KICKS</h1>
        <p>DESTINASI SNEAKERS PREMIUM TERPERCAYA</p>
        <a href="#products" class="btn-explore">EXPLORE NOW</a>
    </div>
</section>

<section id="products" class="products">
    <h2 class="section-title">COLLECTIONS</h2>
    <div class="product-grid">
        <?php if (!empty($products)) : ?>
            <?php foreach ($products as $item) : ?>
            <div class="product-card" style="cursor: pointer;" onclick="bukaModalDetail('<?php echo addslashes($item['name']); ?>', '<?php echo $item['price']; ?>', '<?php echo $item['image']; ?>')">
                <div class="product-img"><img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>"></div>
                <div>
                    <h3><?php echo $item['name']; ?></h3>
                    <p class="price"><?php echo $item['price']; ?></p>
                </div>
                <button class="btn-wa-trigger">LIHAT DETAIL & ORDER</button>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<section id="about" class="about-section">
    <h2 class="section-title">ABOUT US</h2>
    <p style="max-width: 800px; margin: 0 auto; line-height: 1.8; color: #cccccc; font-size: 1.1rem;">
        Lianel Kicks adalah store sneakers pilihan di Bondowoso yang menyediakan koleksi premium original. 
        Kami mengutamakan kualitas dan gaya autentik untuk setiap pelanggan.
    </p>
</section>

<section id="testimonials" class="testi-section">
    <h2 class="section-title">TESTIMONIALS</h2>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; max-width: 1100px; margin: 0 auto;">
        
        <div style="flex: 1; min-width: 300px; max-width: 500px; background-color: #0d0d0d; border: 1px solid #222222; border-radius: 12px; padding: 10px; box-sizing: border-box;">
            <img src="images/testimoni1.jpeg" alt="Testimoni Instagram" style="width: 100%; height: auto; border-radius: 8px; display: block;">
        </div>

        <div style="flex: 1; min-width: 300px; max-width: 500px; background-color: #0d0d0d; border: 1px solid #222222; border-radius: 12px; padding: 10px; box-sizing: border-box;">
            <img src="images/testimoni2.jpeg" alt="Testimoni TikTok" style="width: 100%; height: auto; border-radius: 8px; display: block;">
        </div>

    </div>
</section>

<section id="location" class="location-section">
    <h2 class="section-title">OUR LOCATION</h2>
    <p style="color: #cccccc; font-size: 1.1rem; margin-bottom: 30px; max-width: 800px; margin-left: auto; margin-right: auto;">
        📍 Gg. Taitong, Patemon, Blindungan, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68212
    </p>
    <div style="max-width: 1000px; margin: 0 auto; border-radius: 12px; overflow: hidden; border: 1px solid #222222;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.585250438676!2d113.821731!3d-7.91501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNTQnNTQuMCJTIDExM8KwNDknMTguMiJF!5e0!3m2!1sid!2sid!4v1620000000000!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<div id="modalDetailSepatu" class="modal-overlay">
    <div class="modal-box">
        <span class="close-btn" onclick="tutupModalDetail()">×</span>
        
        <div style="display: flex; flex-wrap: wrap; gap: 30px;">
            <div style="flex: 1; min-width: 260px;">
                <img id="modalImg" src="" alt="Sepatu" style="width: 100%; height: auto; border-radius: 12px; border: 1px solid #222222;">
            </div>
            
            <div style="flex: 1.5; min-width: 280px;">
                <div class="badge-ongkir">🚚 GRATIS ONGKIR SELURUH INDONESIA</div>
                
                <h2 id="modalTitle" style="margin: 0 0 10px 0; font-size: 1.8rem; color: #ffffff;">Nama Sepatu</h2>
                <div id="modalPrice" style="color: #25d366; font-size: 1.4rem; font-weight: bold; margin-bottom: 20px;">Rp 0</div>
                
                <div class="info-label">PILIH UKURAN (EUR):</div>
                <div class="size-grid">
                    <button class="size-btn" onclick="pilihUkuran(this)">38</button>
                    <button class="size-btn" onclick="pilihUkuran(this)">39</button>
                    <button class="size-btn" onclick="pilihUkuran(this)">40</button>
                    <button class="size-btn" onclick="pilihUkuran(this)">41</button>
                    <button class="size-btn" onclick="pilihUkuran(this)">42</button>
                    <button class="size-btn" onclick="pilihUkuran(this)">43</button>
                    <button class="size-btn" onclick="pilihUkuran(this)">44</button>
                </div>

                <div class="info-label">METODE PEMBAYARAN TERSEDIA:</div>
                <div class="payment-box">
                    <span style="color: #0066cc;">BCA</span> • 
                    <span style="color: #ffcc00;">MANDIRI</span> • 
                    <span style="color: #003399;">BRI</span> • 
                    <span style="color: #ff3366;">QRIS</span> • 
                    <span style="color: #00aa55;">GOPAY</span>
                </div>

                <div class="info-label">ULASAN PEMBELI:</div>
                <div class="review-box">
                    <div style="color: #ffcc00; font-size: 1.1rem; margin-bottom: 5px;">★★★★★ <span style="color: #888888; font-size: 0.85rem;">(5.0 / 5.0)</span></div>
                    <p style="font-style: italic; font-size: 0.9rem; color: #dddddd; margin: 0 0 5px 0;">
                        "Kualitas original, sol empuk banget, dan pengiriman super cepat sampai rumah. Mantap Lianel Kicks!"
                    </p>
                    <div style="font-size: 0.8rem; color: #888888; text-align: right;">- Pembeli Terverifikasi</div>
                </div>

                <button onclick="prosesPemesananWA()" style="width: 100%; background-color: #25d366; color: #ffffff; border: none; padding: 16px; font-size: 1.1rem; font-weight: bold; border-radius: 8px; margin-top: 25px; cursor: pointer; transition: 0.3s; text-align: center;">
                    ORDER SEKARANG VIA WHATSAPP
                </button>
            </div>
        </div>
    </div>
</div>

<script>
let sepatuTerpilih = "";
let ukuranTerpilih = "";

function bukaModalDetail(nama, harga, gambar) {
    sepatuTerpilih = nama;
    ukuranTerpilih = "";
    
    document.getElementById("modalTitle").innerText = nama;
    document.getElementById("modalPrice").innerText = harga;
    document.getElementById("modalImg").src = gambar;
    
    let tombolUkuran = document.querySelectorAll(".size-btn");
    tombolUkuran.forEach(t => t.classList.remove("active"));
    
    document.getElementById("modalDetailSepatu").style.display = "flex";
}

function tutupModalDetail() {
    document.getElementById("modalDetailSepatu").style.display = "none";
}

function pilihUkuran(elemenTombol) {
    let tombolUkuran = document.querySelectorAll(".size-btn");
    tombolUkuran.forEach(t => t.classList.remove("active"));
    
    elemenTombol.classList.add("active");
    ukuranTerpilih = elemenTombol.innerText;
}

function prosesPemesananWA() {
    if (ukuranTerpilih === "") {
        alert("Mohon pilih ukuran (Size) terlebih dahulu sebelum memesan.");
        return;
    }
    
    let teksPesan = "Halo Admin Lianel Kicks, saya berminat order:\n\n" +
                    "👟 *Nama Produk:* " + sepatuTerpilih + "\n" +
                    "📏 *Ukuran (EUR):* " + ukuranTerpilih + "\n\n" +
                    "Apakah stoknya tersedia dan bisa diproses dengan fitur Gratis Ongkir ke alamat saya?";
                    
    let linkWhatsApp = "https://api.whatsapp.com/send?phone=6289699600812&text=" + encodeURIComponent(teksPesan);
    window.open(linkWhatsApp, "_blank");
}
</script>