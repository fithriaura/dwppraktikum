<?php
session_start();
include "../config/koneksi.php";

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// REKAPITULASI DATA
$total_tamu = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tamu"));
$hadir = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tamu WHERE status='hadir'"));
$tidak_hadir = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tamu WHERE status='tidak_hadir'"));
$belum = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tamu WHERE status='belum'"));
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Kelola Undangan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="admin-style.css">
</head>

<body class="admin-page">
    <div class="dashboard-container">
        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-logo">
                <i class="fa-solid fa-envelope-open-text"></i>
                <span>Admin</span>
            </div>
            <nav class="sidebar-nav">
                <a class="nav-item active" data-section="mempelai">
                    <i class="fa-solid fa-user-heart"></i>
                    <span>Data Mempelai</span>
                </a>
                <a class="nav-item" data-section="story">
                    <i class="fa-solid fa-heart"></i>
                    <span>Kisah Cinta</span>
                </a>
                <a class="nav-item" data-section="tamu">
                    <i class="fa-solid fa-users"></i>
                    <span>Daftar Tamu</span>
                </a>
                <a class="nav-item" data-section="galeri">
                    <i class="fa-solid fa-images"></i>
                    <span>Galeri</span>
                </a>
                <a class="nav-item" data-section="waktu">
                    <i class="fa-solid fa-map-location-dot"></i>
                    <span>Waktu & Tempat</span>
                </a>
                <div class="mt-auto pt-20 border-t-1">
                    <a href="logout.php" class="nav-item cursor-pointer">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </nav>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="main-content">
            <!-- SECTION: DATA MEMPELAI -->
            <section id="mempelai" class="section-page active">
                <div class="content-header">
                    <h1>Data Mempelai</h1>
                    <p>Kelola informasi pengantin pria dan wanita</p>
                </div>

                <div class="glass-card">
                    <h2>Identitas Pengantin Pria</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-input" id="pria-nama" placeholder="Aryo Abi" data-target="cover-name-script">
                        </div>
                        <div class="form-group">
                            <label>Nama Panggilan</label>
                            <input type="text" class="form-input" id="pria-panggilan" placeholder="Aryo">
                        </div>
                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" class="form-input" id="pria-ayah" placeholder="Nama Ayah">
                        </div>
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" class="form-input" id="pria-ibu" placeholder="Nama Ibu">
                        </div>
                    </div>
                </div>

                <div class="glass-card">
                    <h2>Identitas Pengantin Wanita</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-input" id="wanita-nama" placeholder="Fithri Aura" data-target="cover-name-script">
                        </div>
                        <div class="form-group">
                            <label>Nama Panggilan</label>
                            <input type="text" class="form-input" id="wanita-panggilan" placeholder="Aura">
                        </div>
                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" class="form-input" id="wanita-ayah" placeholder="Nama Ayah">
                        </div>
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" class="form-input" id="wanita-ibu" placeholder="Nama Ibu">
                        </div>
                    </div>
                </div>

                <div class="glass-card">
                    <h2>Foto Pasangan</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Foto Utama(Circle)</label>
                            <input type="file" class="form-input" id="pria-foto" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label>Foto Utama(Couple)</label>
                            <input type="file" class="form-input" id="couple-foto" accept="image/*">
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button class="btn btn-primary" onclick="saveMempelai()">
                        <i class="fa-solid fa-save"></i> Simpan Perubahan
                    </button>
                    <button class="btn btn-secondary" onclick="previewUndangan()">
                        <i class="fa-solid fa-eye"></i> Preview
                    </button>
                </div>
            </section>

            <!-- SECTION: STORY -->
            <section id="story" class="section-page">
                <div class="content-header">
                    <h1>Kisah Cinta</h1>
                    <p>Kelola timeline perjalanan cinta kalian</p>
                </div>

                <div class="glass-card">
                    <h2>Tambah Kisah Baru</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-input" id="story-tanggal">
                        </div>
                        <div class="form-group">
                            <label>Judul Kisah</label>
                            <input type="text" class="form-input" id="story-judul" placeholder="Awal Berkenalan">
                        </div>
                        <div class="form-group grid-col-all">
                            <label>Deskripsi</label>
                            <textarea class="form-input" id="story-deskripsi" placeholder="Ceritakan momen ini..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" class="form-input" id="story-gambar" accept="image/*">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-primary" onclick="addStory()">
                            <i class="fa-solid fa-plus"></i> Tambah Story
                        </button>
                    </div>
                </div>

                <div class="glass-card">
                    <h2>Daftar Kisah</h2>
                    <div class="story-list" id="storyList">
                        <!-- Story items akan di-render oleh JS -->
                    </div>
                </div>
            </section>

            <!-- SECTION: DAFTAR TAMU -->
            <section id="tamu" class="section-page">
                <div class="content-header">
                    <h1>Daftar Tamu</h1>
                    <p>Kelola data tamu dan rekapitulasi kehadiran</p>
                </div>

                <!-- REKAPITULASI -->
                <div class="form-grid mb-15">
                    <div class="glass-card rekap-card">
                        <h3 class="rekap-title">Total Tamu</h3>
                        <p class="rekap-value rekap-total"><?php echo $total_tamu; ?></p>
                    </div>
                    <div class="glass-card rekap-card">
                        <h3 class="rekap-title">Hadir</h3>
                        <p class="rekap-value rekap-hadir"><?php echo $hadir; ?></p>
                    </div>
                    <div class="glass-card rekap-card">
                        <h3 class="rekap-title">Tidak Hadir</h3>
                        <p class="rekap-value rekap-tidak"><?php echo $tidak_hadir; ?></p>
                    </div>
                    <div class="glass-card rekap-card">
                        <h3 class="rekap-title">Belum</h3>
                        <p class="rekap-value rekap-belum"><?php echo $belum; ?></p>
                    </div>
                </div>

                <div class="glass-card">
                    <h2>Tambah Tamu Baru</h2>
                    <form action="tambah-tamu.php" method="POST" class="form-grid">
                        <div class="form-group">
                            <label>Nama Tamu</label>
                            <input type="text" name="nama" class="form-input" placeholder="Budi Santoso" required>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori" class="form-input">
                                <option value="keluarga">Keluarga</option>
                                <option value="teman">Teman</option>
                                <option value="rekan">Rekan Kerja</option>
                                <option value="tetangga">Tetangga</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>No. WhatsApp</label>
                            <input type="tel" name="no_wa" class="form-input" placeholder="081234567890">
                        </div>
                        <div class="form-group">
                            <label>Aksi</label>
                            <button type="submit" class="btn btn-primary w-full">
                                <i class="fa-solid fa-user-plus"></i> Tambah Tamu
                            </button>
                        </div>
                    </form>
                </div>

                <div class="glass-card">
                    <h2>Link Undangan Tamu</h2>
                    <div class="link-generator">
                        <div class="form-group">
                            <label>Pilih Tamu untuk Generate Link</label>
                            <select class="form-input" id="select-tamu-link" onchange="generateLink()">
                                <option value="">-- Pilih Tamu --</option>
                                <?php
                                $query_tamu = mysqli_query($koneksi, "SELECT * FROM tamu ORDER BY nama ASC");
                                while ($row = mysqli_fetch_array($query_tamu)) {
                                    echo "<option value='" . $row['id'] . "' data-nama='" . $row['nama'] . "'>" . $row['nama'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="generated-link display-none" id="generatedLink">
                            <i class="fa-solid fa-link text-primary"></i>
                            <input type="text" id="linkOutput" readonly>
                            <button onclick="copyLink()">
                                <i class="fa-solid fa-copy"></i> Copy
                            </button>
                        </div>
                    </div>
                </div>

                <div class="glass-card">
                    <h2>Daftar Tamu</h2>
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>WA</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $query_tamu = mysqli_query($koneksi, "SELECT * FROM tamu ORDER BY id DESC");
                            while ($row = mysqli_fetch_array($query_tamu)) {
                                $status_class = '';
                                if ($row['status'] == 'hadir') $status_class = 'bg-success-badge';
                                elseif ($row['status'] == 'tidak_hadir') $status_class = 'bg-danger-badge';
                                else $status_class = 'bg-neutral-badge';
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><strong><?php echo $row['nama']; ?></strong></td>
                                    <td class="capitalize"><?php echo $row['kategori']; ?></td>
                                    <td><?php echo $row['no_wa']; ?></td>
                                    <td>
                                        <select onchange="location='update-status.php?id=<?php echo $row['id']; ?>&status='+this.value" class="form-input select-status">
                                            <option value="belum" <?php echo $row['status'] == 'belum' ? 'selected' : ''; ?>>Belum</option>
                                            <option value="hadir" <?php echo $row['status'] == 'hadir' ? 'selected' : ''; ?>>Hadir</option>
                                            <option value="tidak_hadir" <?php echo $row['status'] == 'tidak_hadir' ? 'selected' : ''; ?>>Tidak Hadir</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="hapus-tamu.php?id=<?php echo $row['id']; ?>" class="btn-delete btn-delete-link" onclick="return confirm('Hapus tamu ini?')">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- SECTION: GALERI -->
            <section id="galeri" class="section-page">
                <div class="content-header">
                    <h1>Kelola Galeri</h1>
                    <p>Atur gambar untuk grid dan carousel galeri</p>
                </div>

                <div class="glass-card">
                    <h2>Grid Gambar Galeri</h2>
                    <div class="gallery-manager-grid" id="galleryGrid">
                        <!-- Gallery items akan di-render oleh JS -->
                    </div>
                </div>

                <div class="glass-card">
                    <h2>Carousel Gambar Utama</h2>
                    <div class="gallery-manager-grid" id="galleryCarousel">
                        <!-- Carousel items akan di-render oleh JS -->
                    </div>
                </div>

                <div class="form-actions">
                    <button class="btn btn-primary" onclick="saveGaleri()">
                        <i class="fa-solid fa-save"></i> Simpan Galeri
                    </button>
                </div>
            </section>

            <!-- SECTION: WAKTU & TEMPAT -->
            <section id="waktu" class="section-page">
                <div class="content-header">
                    <h1>Waktu & Tempat</h1>
                    <p>Kelola detail acara pernikahan</p>
                </div>

                <div class="glass-card">
                    <h2>Informasi Waktu</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Tanggal Akad</label>
                            <input type="date" class="form-input" id="event-tanggal">
                        </div>
                        <div class="form-group">
                            <label>Jam Akad</label>
                            <input type="time" class="form-input" id="event-jam">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Resepsi</label>
                            <input type="date" class="form-input" id="resepsi-tanggal">
                        </div>
                        <div class="form-group">
                            <label>Jam Resepsi</label>
                            <input type="time" class="form-input" id="resepsi-jam">
                        </div>
                    </div>
                </div>

                <div class="glass-card">
                    <h2>Lokasi Acara</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Nama Tempat</label>
                            <input type="text" class="form-input" id="tempat-nama" placeholder="Gedung Serbaguna">
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="text" class="form-input" id="tempat-provinsi" placeholder="Riau">
                        </div>
                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <input type="text" class="form-input" id="tempat-kabupaten" placeholder="Pekanbaru">
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" class="form-input" id="tempat-kecamatan" placeholder="Tampan">
                        </div>
                        <div class="form-group grid-col-all">
                            <label>Alamat Lengkap</label>
                            <textarea class="form-input" id="tempat-alamat" placeholder="Jl. HR Soebrantas No.123"></textarea>
                        </div>
                    </div>
                </div>

                <div class="glass-card">
                    <h2>Google Maps Embed</h2>
                    <div class="form-group">
                        <label>Link Google Maps (Embed URL)</label>
                        <input type="url" class="form-input" id="maps-link" placeholder="https://www.google.com/maps/embed?pb=...">
                    </div>
                    <div class="form-group">
                        <label>Preview Mapa</label>
                        <div class="bg-glass-light br-15 p-15 min-h-200">
                            <iframe id="maps-preview" width="100%" height="200" class="border-0 br-10" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button class="btn btn-primary" onclick="saveWaktuTempat()">
                        <i class="fa-solid fa-save"></i> Simpan Perubahan
                    </button>
                </div>
            </section>
        </main>
    </div>

    <script src="../assets/js/script.js"></script>
</body>

</html>