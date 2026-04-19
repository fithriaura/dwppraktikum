<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan Arya & Aura</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="index-page">

    <!-- FILE AUDIO UNTUK BACKGROUND MUSIK -->
    <audio id="bg-music" loop>
        <source src="assets/audio/backsound.mp3" type="audio/mpeg">
    </audio>

    <!-- TOMBOL MUSIK FLOATING -->
    <div id="music-control" class="music-control sembunyi">
        <i class="fa-solid fa-compact-disc" id="music-icon"></i>
    </div>

    <!-- HALAMAN 1 (COVER) -->
    <div class="card show-on-scroll opacity-1 transform-none" id="halaman-cover">
        <img src="assets/images/hiasan/bungaatas.png" alt="Dekorasi Bunga Atas" class="decor-flower decor-top">
        <div class="cover-the-wedding-of">The Wedding Of</div>
        <div class="cover-circle-frame">
            <span class="cover-name-script">Aryo</span>
            <span class="cover-ampersand">&amp;</span>
            <span class="cover-name-script">Aura</span>
        </div>
        <div class="cover-kepada">
            <p>Kepada Yth.</p>
            <p>Bapak/Ibu/Saudara/i</p>
        </div>
        <div class="cover-guest-name-box">Alexander</div>
        <button class="cover-btn-buka">BUKA UNDANGAN</button>
        <img src="assets/images/hiasan/bungabawah.png" alt="Dekorasi Bunga Bawah" class="decor-flower decor-bottom">
    </div>

    <!-- WRAPPER ISI UNDANGAN -->
    <div id="isi-undangan" class="sembunyi">

        <!-- HALAMAN 2 (COUNTDOWN) -->
        <div class="card" id="halaman-countdown">
            <img src="assets/images/hiasan/bungaatas.png" alt="Dekorasi Bunga Atas" class="decor-flower decor-top">
            <div class="cd-photo-wrapper">
                <img src="assets/images/hiasan/foto.png" alt="Foto Pasangan" class="cd-photo-circle">
            </div>
            <div class="cd-names">
                <span class="cd-name-script">Aryo</span>
                <span class="cd-amp">&amp;</span>
                <span class="cd-name-script">Aura</span>
            </div>
            <div class="cd-will-hold">
                Akan menyelenggarakan acara<br>pernikahan
            </div>
            <div class="cd-date-display">
                <div class="cd-date-cell">
                    <div class="cd-date-sub">SENIN</div>
                </div>
                <div class="cd-date-cell">
                    <div class="cd-date-main">10</div>
                    <div class="cd-date-sub">MARET</div>
                </div>
                <div class="cd-date-cell">
                    <div class="cd-date-sub">2027</div>
                </div>
            </div>
            <div class="cd-countdown-label">Acara akan dimulai dalam</div>
            <div class="cd-countdown-boxes">
                <div class="cd-box">
                    <div class="cd-box-inner">
                        <span class="cd-box-number" id="cd-hari">00</span>
                    </div>
                    <div class="cd-box-label">Hari</div>
                </div>
                <div class="cd-box">
                    <div class="cd-box-inner">
                        <span class="cd-box-number" id="cd-jam">00</span>
                    </div>
                    <div class="cd-box-label">Jam</div>
                </div>
                <div class="cd-box">
                    <div class="cd-box-inner">
                        <span class="cd-box-number" id="cd-menit">00</span>
                    </div>
                    <div class="cd-box-label">Menit</div>
                </div>
                <div class="cd-box">
                    <div class="cd-box-inner">
                        <span class="cd-box-number" id="cd-detik">00</span>
                    </div>
                    <div class="cd-box-label">Detik</div>
                </div>
            </div>
            <img src="assets/images/hiasan/bungabawah.png" alt="Dekorasi Bunga Bawah" class="decor-flower decor-bottom">
        </div>

        <!-- Halaman 3 (Ucapan)-->
        <div class="card">
            <img src="assets/images/hiasan/bungaatas.png" alt="Dekorasi Bunga Atas" class="decor-flower decor-top">
            <div class="greeting">Assalammualaikum Wr.Wb</div>
            <div class="invitation-text">
                Dengan segala kerendahan hati, kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri pernikahan kami
            </div>
            <div class="profile-container">
                <div class="profile-box">
                    <img src="assets/images/hiasan/foto.png" alt="Aryo Abi" class="profile-img-circle">
                    <div class="name-box">Aryo Abi</div>
                </div>
                <div class="profile-box">
                    <img src="assets/images/hiasan/foto.png" alt="Fithri Aura" class="profile-img-circle">
                    <div class="name-box">Fithri Aura</div>
                </div>
            </div>
            <img src="assets/images/hiasan/bungabawah.png" alt="Dekorasi Bunga Bawah" class="decor-flower decor-bottom">
        </div>

        <!-- Halaman 4 (Peta) -->
        <div class="card">
            <img src="assets/images/hiasan/bungaatas.png" alt="Dekorasi Bunga Atas" class="decor-flower decor-top">
            <div class="page-title">Save The Date</div>
            <div class="page-subtitle">Waktu dan Tempat</div>
            <div class="info-card-container">
                <div class="info-box">
                    <div class="info-box-title">Waktu</div>
                    <div class="info-item">
                        <i class="fa-regular fa-calendar-check"></i>
                        <span>10 MARET 2030</span>
                    </div>
                    <div class="info-item">
                        <i class="fa-regular fa-clock"></i>
                        <span>07.00 WIB</span>
                    </div>
                </div>
                <div class="info-box">
                    <div class="info-box-title">Tempat</div>
                    <div class="location-name">GEDUNG SERBAGUNA</div>
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6782914978703!2d101.3768487!3d0.4800329999999989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a853dac0e9dd%3A0x342428dc6336f4e9!2sFakultas%20Teknik%20(FT)%20-%20Unri!5e0!3m2!1sid!2sid!4v1774632634173!5m2!1sid!2sid"
                            width="600" height="450" class="border-0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <img src="assets/images/hiasan/bungabawah.png" alt="Dekorasi Bunga Bawah" class="decor-flower decor-bottom">
        </div>

        <!-- Halaman 5 (Our Story) -->
        <div class="card" id="halaman-story">
            <img src="assets/images/hiasan/bungaatas.png" alt="Dekorasi Bunga Atas" class="decor-flower decor-top">
            <div class="page-title">Our Story</div>
            <div class="page-subtitle">Perjalanan & Kisah Kami</div>
            <div class="story-container">
                <div class="timeline-line">
                    <i class="fa-solid fa-heart heart-marker top-35"></i>
                </div>
                <div class="story-item">
                    <div class="story-date">2 Oktober 2024</div>
                    <div class="story-photo-box">
                        <img src="assets/images/galeri/story1.jpeg" alt="Awal Berkenalan">
                    </div>
                    <div class="story-caption">Awal Berkenalan</div>
                </div>
                <div class="story-item">
                    <div class="story-date">2 Januari 2025</div>
                    <div class="story-photo-box">
                        <img src="assets/images/galeri/story2.jpeg" alt="Mulai Dekat">
                    </div>
                    <div class="story-caption">Mulai Dekat</div>
                </div>
                <div class="story-item">
                    <div class="story-date">10 Januari 2025</div>
                    <div class="story-photo-box">
                        <img src="assets/images/galeri/galeri3.jpeg" alt="Mulai Dekat">
                    </div>
                    <div class="story-caption">Mulai Dekat</div>
                </div>
            </div>
            <img src="assets/images/hiasan/bungabawah.png" alt="Dekorasi Bunga Bawah" class="decor-flower decor-bottom">
        </div>

        <!-- Halaman 6 (Galery) -->
        <div class="card">
            <img src="assets/images/hiasan/bungaatas.png" alt="Dekorasi Bunga Atas" class="decor-flower decor-top">
            <div class="page-title">Galery</div>
            <div class="page-subtitle">Momen Abadi Kami</div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="assets/images/galeri/galeri1.jpeg" alt="Galeri 1">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/hiasan/bungaputih.png" alt="Galeri 2" class="h-fit mt-38">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/galeri/galeri2.jpeg" alt="Galeri 3">
                </div>
            </div>
            <div class="gallery-carousel-container">
                <div class="gallery-carousel-track" id="gallery-slider">
                    <div class="gallery-main">
                        <img src="assets/images/galeri/galeri3 copy.jpeg" alt="Foto Utama 1">
                    </div>
                    <div class="gallery-main">
                        <img src="assets/images/galeri/galeri4.jpeg" alt="Foto Utama 2">
                    </div>
                </div>
            </div>
            <div class="gallery-nav">
                <i class="fa-solid fa-chevron-left" id="prev-gallery"></i>
                <span>A Story of Us</span>
                <i class="fa-solid fa-chevron-right" id="next-gallery"></i>
            </div>
            <img src="assets/images/hiasan/bungabawah.png" alt="Dekorasi Bunga Bawah" class="decor-flower decor-bottom">
        </div>

        <!-- Halaman 7 (RSVP / Kirim Pesan) -->
        <div class="card">
            <img src="assets/images/hiasan/bungaatas.png" alt="Dekorasi Bunga Atas" class="decor-flower decor-top">
            <div class="page-title">Kirim Pesan</div>
            <div class="page-subtitle">Berikan ucapan terbaikmu</div>
            <div class="form-container">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" class="form-control" placeholder="Ahmad">
                    </div>
                    <div class="form-group">
                        <label for="konfirmasi">Konfirmasi Kehadiran</label>
                        <select id="konfirmasi" class="form-control">
                            <option value="hadir">Hadir</option>
                            <option value="tidak_hadir">Tidak Hadir</option>
                            <option value="ragu">Masih Ragu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea id="pesan" class="form-control" placeholder="Tulis ucapan atau pesan Anda di sini..."></textarea>
                    </div>
                    <button type="submit" class="btn-kirim">KIRIM</button>
                </form>
            </div>
            <img src="assets/images/hiasan/bungabawah.png" alt="Dekorasi Bunga Bawah" class="decor-flower decor-bottom">
        </div>

        <!-- Halaman 8 (Titip Hadiah) -->
        <div class="card">
            <img src="assets/images/hiasan/bungaatas.png" alt="Dekorasi Bunga Atas" class="decor-flower decor-top">
            <div class="page-title">Titip Hadiah</div>
            <div class="invitation-text mb-15 p-0-35">
                Doa restu Bapak/Ibu sekalian merupakan karunia yang sangat berarti bagi kami. Dan jika memberi merupakan
                ungkapan tanda kasih, Bapak/Ibu dapat memberi kado secara cashless. Terima kasih
            </div>
            <div class="gift-box">
                <div class="gift-icon">
                    <i class="fa-solid fa-envelope-open-text"></i>
                </div>
                <div class="gift-subtitle">Amplop Digital</div>
                <div class="gift-instruction">
                    Bagi yang ingin mengirim amplop bisa melalui no rekening berikut,
                </div>
                <div class="bank-account-box">
                    <i class="fa-solid fa-credit-card"></i>
                    <div class="account-number">5623xxxxxxx</div>
                </div>
                <div class="account-details">
                    (BNI)<br>
                    Atas nama Aryo Abi Putra
                </div>
                <div class="bank-account-box">
                    <i class="fa-solid fa-wallet"></i>
                    <div class="account-number">0822xxxxxxx</div>
                </div>
                <div class="account-details">
                    (Dana, Gopay, OVO)<br>
                    Atas nama Aryo Abi Putra
                </div>
            </div>
            <img src="assets/images/hiasan/bungabawah.png" alt="Dekorasi Bunga Bawah" class="decor-flower decor-bottom">
        </div>

        <!-- Halaman 9 -->
        <div class="card">
            <img src="assets/images/hiasan/bungaatas.png" alt="Dekorasi Bunga Atas" class="decor-flower decor-top">
            <div class="names">
                <h1>Aryo</h1>
                <h1 class="ampersand">&</h1>
                <h1>Aura</h1>
            </div>
            <div class="photo-wrapper">
                <img src="assets/images/hiasan/foto.png" alt="Foto Berbingkai Arya & Aura" class="photo-framed">
            </div>
            <div class="thank-you">
                Thank you for your<br>
                coming & your blessing
            </div>
            <img src="assets/images/hiasan/bungabawah.png" alt="Dekorasi Bunga Bawah" class="decor-flower decor-bottom">
        </div>

    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>