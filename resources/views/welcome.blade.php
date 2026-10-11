<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pribadi</title>
    <link rel="stylesheet" href="styles.css">  <!-- Link ke file CSS -->
</head>

<body>
    <div class="container">
        <!-- Judul Halaman -->
        <h1 class= "text-center">Portofolio Pribadi</h1>

         <!-- Gambar Profil -->
          <div class="text-center">
            <img src="Foto/foto.jpeg" alt="Gambar Profil">
          </div>

          <!-- Tentang Saya -->
           <h2 class="text-center">Wulan Nurfitriani</h2>
           <p class="text-center">Mahasiswa Program Studi Informatika</p>
           <!-- <p class="text-center">Fakultas Teknologi Informasi</p>
           <p class="text-center">Universitas Sebelas April</p> -->
           <blockquote class="text-center">"Kreativitas adalah intelejensi yang bersenang-senang." -Albert Einstein </blockquote>

           <!-- Pengalaman Organisasi -->
            <h2 class="text-center">Pengalaman Organisasi</h2>
            <table>
                <tr>
                    <th>Nama Organisasi</th>
                    <th>Sebagai</th>
                    <th>Tahun</th>
                </tr>
                <tr>
                    <td>Himpunan Mahasiswa Informatika</td>
                    <td>Sekretaris Umum 2</td>
                    <td>2025-2026</td>
                </tr>
                <tr>
                    <td>UKM Tahungoding</td>
                    <td>Anggota Divisi P2M</td>
                    <td>2025-2026</td>
                </tr>
            </table>
            
            <!-- Hobi Membaca -->
            <section class="hobi-section">
                <h2 class="text-center">📚 Hobi Saya: Membaca</h2>
                <p class="hobi-deskripsi">
                    Saya senang membaca buku novel untuk menikmati berbagai
                    cerita, mengenal karakter yang menarik, dan mendapatkan
                    sudut pandang baru. </p>
                <h3 class="judul-buku">Buku Favorit Saya</h3>
                
                <div class="buku-grid">
                    <!-- Buku 1 -->
                     <div class="buku-card">
                        <div class="buku-info">
                            <span class="nomor-buku">01</span>
                            <h4>THE KING</h4>
                            <p>BATTLE OF IMPERIUM SCHOOL</p>
                            <p class="penulis">PALUPIII07&ANDRYU</p>
                            <span class="kategori">Novel Fiksi</span>
                            <p class="deskripsi-buku">
                                Bergenre <i>dark/school battle</i> 
                                novel awalnya populer di Wattpad sebelum diterbitkan secara resmi.
                            </p>
                        </div>
                        <img src="https://img.wattpad.com/cover/299897901-256-k532930.jpg" alt="Sampul THE KING">
                    </div>
                    
                    <!-- Buku 2 -->
                     <div class="buku-card">
                        <div class="buku-info">
                            <span class="nomor-buku">02</span>
                            <h4>Garis Waktu</h4>
                            <p class="penulis">Fiersa Besari</p>
                            <span class="kategori">Romansa</span>
                            <p class="deskripsi-buku">
                                Perjalanan emosional selama lima tahun mengenai pertemuan, jatuh cinta, patah hati, 
                                hingga fase mengikhlaskan dan menyembuhkan luka.
                            </p>
                        </div>
                        <img src="https://cdn.gramedia.com/uploads/items/9789797945251_garis_waktu_sebuah_perjalanan_menghapus_lupa.jpg"
                        alt="Sampul Garis Waktu">
                    </div>
                    
                    <!-- Buku 3 -->
                     <div class="buku-card">
                        <div class="buku-info">
                            <span class="nomor-buku">03</span>
                            <h4>Laut Bercerita</h4>
                            <p class="penulis">Leila S. Chudori</p>
                            <span class="kategori">Historical Fiction</span>
                            <p class="deskripsi-buku">
                                Mengisahkan Biru Laut Wibisono, seorang mahasiswa Sastra Inggris UGM dan aktivis 
                                yang memperjuangkan keadilan sosial serta membela petani Jagung di Blangguan.
                            </p>
                        </div>
                        <img src="https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1516602134i/36393774.jpg"
                        alt="Sampul Laut Bercerita">
                    </div> 
                    
                    <!-- Buku 4 -->
                     <div class="buku-card">
                        <div class="buku-info">
                            <span class="nomor-buku">04</span>
                            <h4>William</h4>
                            <p class="penulis">Risa Saraswati</p>
                            <span class="kategori">Fiksi Horor</span>
                            <p class="deskripsi-buku">
                               kisah hidup seorang anak keturunan Belanda bernama William Van Kemmen 
                               yang hidup pada masa kolonial Hindia Belanda tahun 1940-an.
                            </p>
                        </div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtjnzrpd_mJu7RV2J2mru78IeYIz2dDr9xO4MLXNDmZk0Mw1fQA0NvtJsS&s=10"
                        alt="Sampul William">
                    </div>


    </div>
</section>

        <!-- Audio -->
        <div class="musik-card">
            <h2>Musik Favorit 🎧</h2>
        <p class="musik-deskripsi">
            Musik yang menemani waktu santai dan aktivitas sehari-hari.
        </p>
        <!-- Musik Pertama -->
        <iframe
            style="border-radius: 12px"
            src="https://open.spotify.com/embed/track/35o9a4iAfLl5jRmqMX9c1D?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
        </iframe>

        <!-- Musik Kedua -->
        <iframe 
            data-testid="embed-iframe" 
            style="border-radius:12px" 
            src="https://open.spotify.com/embed/track/5Enpui55il1ZW0HgwRTSds?utm_source=generator&si=366c06c03fa14293" 
            width="100%" 
            height="152" 
            frameBorder="0" 
            allowfullscreen="" 
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
        </iframe>

        <!-- Musik Ketiga -->
        <iframe 
            data-testid="embed-iframe" 
            style="border-radius:12px" 
            src="https://open.spotify.com/embed/track/6v5RJuJ9yhvaXkMXMeMZBw?utm_source=generator&si=070bd105d5314490" 
            width="100%" 
            height="152" 
            frameBorder="0" 
            allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
        </iframe>
    </div>

        <!-- Video Karya -->
        <section class="video-section">
            <div class="video-heading">
                <div>
                    <p class="video-label">MY CREATIVE SPACE</p>
                    <h2>Video Karya</h2>
                    <p class="video-deskripsi">
                        Kumpulan karya, dokumentasi, dan perjalanan kreatif saya.
                    </p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-frame">
                    <iframe
                        src="https://www.youtube.com/embed/zMKWU5dMH_0"
                        title="Video Karya"
                        allowfullscreen
                        loading="lazy">
                    </iframe>
                </div>

                <div class="video-info">
                    <span class="video-tag">FEATURED PROJECT</span>
                    <h3>Karya Pilihan Saya</h3>
                    <p>
                        Sebuah karya yang menjadi bagian dari proses belajar,
                        eksplorasi ide, dan pengembangan kreativitas saya.
                    </p>
                </div>
            </div>
        </section>

        <!-- Link Media Sosial -->
        <section class="social-section">
            <div class="social-heading">
                <p class="social-label">LET'S CONNECT</p>
                <h2>Ikuti Saya</h2>
                <p class="social-description">
                    Temukan saya di media sosial dan ikuti perjalanan kreatif saya.
                </p>
            </div>

            <div class="social-container">

                <!-- Instagram -->
                <a href="https://www.instagram.com/wulannurftr"
                target="_blank"
                rel="noopener noreferrer"
                class="social-card">
                    <div class="social-icon instagram">
                        <svg viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="3" width="18" height="18" rx="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r="1" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="social-info">
                        <h3>Instagram</h3>
                        <p>Bagikan momen dan cerita</p>
                    </div>
                    <span class="social-arrow">↗</span>
                </a>

                <!-- YouTube -->
                <a href="https://youtube.com/@wulannurfitriani-n1x"
                target="_blank"
                rel="noopener noreferrer"
                class="social-card">
                    <div class="social-icon youtube">
                        <svg viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8">
                            <rect x="2.5" y="5" width="19" height="14" rx="4"/>
                            <path d="m10 9 5 3-5 3z"
                                fill="currentColor" stroke="none"/>
                        </svg>
                    </div>
                    <div class="social-info">
                        <h3>YouTube</h3>
                        <p>Video dan karya saya</p>
                    </div>
                    <span class="social-arrow">↗</span>
                </a>

                <!-- GitHub -->
                <a href="https://github.com/WulanNurfitriani"
                target="_blank"
                rel="noopener noreferrer"
                class="social-card">
                    <div class="social-icon github">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 .9a11.1 11.1 0 0 0-3.51 21.63c.55.1.76-.24.76-.54v-2.13c-3.1.67-3.76-1.32-3.76-1.32-.5-1.29-1.24-1.63-1.24-1.63-1.01-.69.08-.68.08-.68 1.12.08 1.71 1.15 1.71 1.15.99 1.7 2.6 1.21 3.23.92.1-.72.39-1.21.7-1.49-2.47-.28-5.07-1.24-5.07-5.5 0-1.22.44-2.22 1.15-3-.12-.28-.5-1.42.11-2.96 0 0 .94-.3 3.05 1.15a10.6 10.6 0 0 1 5.55 0c2.11-1.45 3.05-1.15 3.05-1.15.61 1.54.23 2.68.11 2.96.72.78 1.15 1.78 1.15 3.01 0 4.27-2.6 5.21-5.08 5.49.4.35.75 1.02.75 2.06v3.12c0 .3.2.65.77.54A11.1 11.1 0 0 0 12 .9z"/>
                        </svg>
                    </div>
                    <div class="social-info">
                        <h3>GitHub</h3>
                        <p>Jelajahi proyek dan kode saya</p>
                    </div>
                    <span class="social-arrow">↗</span>
                </a>

            </div>
        </section>
   

        <!-- Footer -->
         <footer>
            &copy; 2024 Portofolio Pribadi. Semua hak dilindungi
         </footer>
    </div>  
</body>
</html>
