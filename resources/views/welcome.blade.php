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
         <h1 class="text-center">Portofolio Pribadi</h1>

         <!-- Gambar Profil -->
          <div class="text-center">
            <img src="Foto/foto.jpeg" alt="Gambar Profil">
          </div>

          <!-- Tentang Saya -->
           <h2 class="text-center">Tentang Saya</h2>
           <p class="text-center">Selamat Datang di Portofolio Saya!</p>
           <blockquote class="text-center">"Kreativitas adalah intelejensi yang bersenang-senang." -Albert Einstein </blockquote>

           <!-- Pengalaman Kerja -->
            <h2 class="text-center">Pengalaman Kerja</h2>
            <table>
                <tr>
                    <th>Posisi</th>
                    <th>Perusahaan</th>
                    <th>Tahun</th>
                </tr>
                <tr>
                    <td>Web Developer</td>
                    <td>PT. Teknologi</td>
                    <td>2020-2030</td>
                </tr>
            </table>

            <!-- Hobi -->
            <H2>Hobi Saya</H2>
            <ul>
                <li>Membaca</li>
                <li>Olahraga</li>
                <li>Fotografi</li>
            </ul>
            <ol>
                <l><li>Belajar Bahasa Asing</li>
                <li>Menulis Blog</li>
                <li>Melukis</li>
            </ol>

           <!-- Audio -->
            <h2 class="text-center">🎵 Lagu Favorit</h2>
            <audio controls>
                <source src="lagu.mp3" type="audio/mpeg">
                Browser Anda tidak mendukung pemutar audio.
            </audio>


            <!-- Embed Audio -->
            <div class="audio-embed">
                <iframe 
                    src="#"
                    style="display: block; border-radius: 10px; border: none; height: 204px; width: 100%;">
                </iframe>

                <a href="#">
                    🎧 Dengarkan Musik
                </a>
            </div>

        <!-- Video Karya -->
         <h2 class="text-center">Video Karya</h2>
         <iframe width="640" height="360" src="https://www.youtube.com/embed/VIDEO_I" allowfullscreen></iframe>

        <!-- Link Media Sosial -->
         <h2 class="text-center">Ikuti Saya</h2>
         <p class="text-center">
            <a href="https://www.instagram.com/username" target="_blank">Instagram </a>
            <a href="https://www.linkedin.com/in/username" target="_blank">LinkedIn </a></p>    

        <!-- Footer -->
         <footer>
            &copy; 2024 Portofolio Pribadi. Semua hak dilindungi
         </footer>
    </div>  
</body>
</html>
