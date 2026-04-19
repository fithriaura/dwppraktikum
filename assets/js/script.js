document.addEventListener('DOMContentLoaded', function () {
    /* ============================================================
       PAGE DETECTION
       ============================================================ */
    const isIndexPage = document.body.classList.contains('index-page');
    const isLoginPage = document.body.classList.contains('login-page');
    const isAdminPage = document.body.classList.contains('admin-page');

    /* ============================================================
       INDEX PAGE LOGIC (UI/UX ONLY)
       ============================================================ */
    if (isIndexPage) {
        // --- OPEN UNDANGAN & MUSIC ---
        const btnBuka = document.querySelector('.cover-btn-buka');
        const halamanCover = document.getElementById('halaman-cover');
        const isiUndangan = document.getElementById('isi-undangan');
        const bgMusic = document.getElementById('bg-music');
        const musicControl = document.getElementById('music-control');
        const musicIcon = document.getElementById('music-icon');
        let isPlaying = false;

        if (btnBuka) {
            btnBuka.addEventListener('click', () => {
                bgMusic.play().then(() => {
                    isPlaying = true;
                    musicIcon.classList.add('spin-anim');
                }).catch((e) => {
                    console.log("Autoplay ditolak: " + e);
                });

                musicControl.classList.remove('sembunyi');
                halamanCover.style.transition = 'all 0.8s ease-in-out';
                halamanCover.style.opacity = '0';
                halamanCover.style.transform = 'scale(1.1) translateY(-50px)';

                setTimeout(() => {
                    halamanCover.style.display = 'none';
                    isiUndangan.classList.remove('sembunyi');
                    window.scrollTo(0, 0);
                }, 800);
            });
        }

        if (musicControl) {
            musicControl.addEventListener('click', () => {
                if (isPlaying) {
                    bgMusic.pause();
                    musicIcon.classList.remove('spin-anim');
                } else {
                    bgMusic.play();
                    musicIcon.classList.add('spin-anim');
                }
                isPlaying = !isPlaying;
            });
        }

        // --- COUNTDOWN ---
        // TODO: Replace with target date from backend (PHP/MySQL)
        const targetDate = new Date('2027-03-10T07:00:00+07:00');
        function updateCountdown() {
            const now = new Date();
            const diff = targetDate - now;
            const elements = ['cd-hari', 'cd-jam', 'cd-menit', 'cd-detik'];

            if (diff <= 0) {
                elements.forEach(id => {
                    const el = document.getElementById(id);
                    if (el) el.textContent = '00';
                });
                return;
            }

            const hari = Math.floor(diff / (1000 * 60 * 60 * 24));
            const jam = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const menit = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const detik = Math.floor((diff % (1000 * 60)) / 1000);

            if (document.getElementById('cd-hari')) {
                document.getElementById('cd-hari').textContent = String(hari).padStart(2, '0');
                document.getElementById('cd-jam').textContent = String(jam).padStart(2, '0');
                document.getElementById('cd-menit').textContent = String(menit).padStart(2, '0');
                document.getElementById('cd-detik').textContent = String(detik).padStart(2, '0');
            }
        }
        updateCountdown();
        setInterval(updateCountdown, 1000);

        // --- SLIDER GALERI ---
        const slider = document.getElementById('gallery-slider');
        const prevBtn = document.getElementById('prev-gallery');
        const nextBtn = document.getElementById('next-gallery');
        let currentSlideIndex = 0;

        if (slider && prevBtn && nextBtn) {
            function updateSliderPosition() {
                slider.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
            }

            nextBtn.addEventListener('click', () => {
                const totalSlides = slider.children.length;
                currentSlideIndex = (currentSlideIndex < totalSlides - 1) ? currentSlideIndex + 1 : 0;
                updateSliderPosition();
            });

            prevBtn.addEventListener('click', () => {
                const totalSlides = slider.children.length;
                currentSlideIndex = (currentSlideIndex > 0) ? currentSlideIndex - 1 : totalSlides - 1;
                updateSliderPosition();
            });
        }

        // --- ANIMASI SCROLL ---
        const observerOptions = { threshold: 0.15 };
        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show-on-scroll');
                } else {
                    entry.target.classList.remove('show-on-scroll');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.card').forEach(card => scrollObserver.observe(card));
    }

    /* ============================================================
       LOGIN PAGE LOGIC (UI ONLY)
       ============================================================ */
    if (isLoginPage) {
        // AUTHENTICATION LOGIC REMOVED
        // This page will be handled manually via PHP POST request
    }

    /* ============================================================
       ADMIN PAGE LOGIC (UI/UX ONLY)
       ============================================================ */
    if (isAdminPage) {
        // --- SIDEBAR NAV ---
        document.querySelectorAll('.nav-item[data-section]').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
                this.classList.add('active');
                const sectionId = this.dataset.section;
                document.querySelectorAll('.section-page').forEach(s => s.classList.remove('active'));
                document.getElementById(sectionId).classList.add('active');
            });
        });

        // --- UI COMPONENT ACTIONS (PLACEHOLDERS) ---

        window.previewUndangan = function () {
            window.open('../index.php', '_blank');
        };

        window.generateLink = function () {
            const select = document.getElementById('select-tamu-link');
            const id = select.value;
            const output = document.getElementById('generatedLink');
            if (!id) { output.style.display = 'none'; return; }

            // Get name from data attribute
            const option = select.options[select.selectedIndex];
            const nama = option.getAttribute('data-nama');

            const link = `${window.location.origin}/index.php?to=${encodeURIComponent(nama)}`;
            document.getElementById('linkOutput').value = link;
            output.style.display = 'flex';
        };

        window.copyLink = function () {
            const input = document.getElementById('linkOutput');
            input.select();
            document.execCommand('copy');
            alert('Link disalin ke clipboard!');
        };

        // --- DATA MANIPULATION (UI PREVIEW ONLY) ---
        // TODO: Implement actual database updates using PHP/AJAX for these sections

        window.saveMempelai = function () { alert('UI Action: Simpan Perubahan triggered. (Implement PHP update)'); };
        window.addStory = function () { alert('UI Action: Tambah Story triggered. (Implement PHP update)'); };
        window.saveGaleri = function () { alert('UI Action: Simpan Galeri triggered. (Implement PHP update)'); };
        window.saveWaktuTempat = function () { alert('UI Action: Simpan Perubahan triggered. (Implement PHP update)'); };

        // --- STORY & GALLERY (UI Simulation) ---
        // TODO: Transition these to pure PHP rendering like the Guest List

        let dataStories = [
            { id: 1, tanggal: '2024-10-02', judul: 'Awal Berkenalan', deskripsi: 'Pertama bertemu', gambar: '../assets/images/galeri/story1.jpeg' },
            { id: 2, tanggal: '2025-01-02', judul: 'Mulai Dekat', deskripsi: 'Sering komunikasi', gambar: '../assets/images/galeri/story2.jpeg' },
            { id: 3, tanggal: '2025-01-10', judul: 'Pertemuan Pertama', deskripsi: 'Pertemuan resmi', gambar: '../assets/images/galeri/galeri3.jpeg' }
        ];

        let dataGaleri = {
            grid: ['../assets/images/galeri/galeri1.jpeg', '../assets/images/galeri/galeri2.jpeg', '../assets/images/galeri/galeri3.jpeg'],
            carousel: ['../assets/images/galeri/galeri3 copy.jpeg', '../assets/images/galeri/galeri4.jpeg']
        };

        window.renderStories = function () {
            const container = document.getElementById('storyList');
            if (!container) return;
            container.innerHTML = dataStories.map(story => `
                <div class="story-item-card">
                    <img src="${story.gambar}" class="story-img-preview" onerror="this.src='https://via.placeholder.com/120x90'">
                    <div class="story-fields">
                        <strong>${story.judul}</strong>
                        <span class="text-muted fs-13">${story.tanggal}</span>
                        <p class="text-dark-muted fs-13">${story.deskripsi}</p>
                    </div>
                    <div class="story-actions">
                        <button class="btn btn-danger btn-sm" onclick="deleteStory(${story.id})"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </div>
            `).join('');
        };

        window.renderGallery = function (type) {
            const container = document.getElementById(type === 'grid' ? 'galleryGrid' : 'galleryCarousel');
            const images = dataGaleri[type];
            if (!container) return;
            container.innerHTML = images.map((img, i) => `
                <div class="gallery-manager-item">
                    <img src="${img}" onerror="this.src='https://via.placeholder.com/150'">
                    <button class="remove-btn" onclick="removeGalleryImage('${type}', ${i})"><i class="fa-solid fa-times"></i></button>
                </div>
            `).join('') + `<div class="add-gallery-btn" onclick="addGalleryImage('${type}')"><i class="fa-solid fa-plus"></i><span>Tambah</span></div>`;
        };

        window.deleteStory = function (id) {
            if (confirm('Hapus kisah ini?')) {
                dataStories = dataStories.filter(s => s.id !== id);
                window.renderStories();
            }
        };

        window.removeGalleryImage = function (type, i) {
            dataGaleri[type].splice(i, 1);
            window.renderGallery(type);
        };

        window.addGalleryImage = function (type) {
            const url = prompt('Masukkan URL Gambar:');
            if (url) { dataGaleri[type].push(url); window.renderGallery(type); }
        };

        // --- INIT ADMIN COMPONENTS ---
        window.renderStories();
        window.renderGallery('grid');
        window.renderGallery('carousel');
    }
});
