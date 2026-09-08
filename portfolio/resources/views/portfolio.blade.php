<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio Muhammad Ridho Syapnur</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: white;
        }

        /* ================= NAVBAR ================= */

        .navbar {
            height: 80px;
            padding: 0 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            background: #0f172a;
            z-index: 1000;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #38bdf8;
        }

        .nav-menu {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            transition: 0.3s;
            font-weight: 500;
        }

        .nav-menu a:hover {
            color: #38bdf8;
        }


        /* ================= HOME ================= */

        .home {
            min-height: calc(100vh - 80px);
            padding: 50px 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
        }

        .home-content {
            max-width: 650px;
        }

        .greeting {
            color: #38bdf8;
            letter-spacing: 3px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .home-content h1 {
            font-size: 65px;
            line-height: 1.1;
            margin-bottom: 10px;
        }

        .home-content h2 {
            font-size: 30px;
            color: #94a3b8;
            margin-bottom: 25px;
        }

        .description {
            color: #cbd5e1;
            line-height: 1.8;
            font-size: 17px;
            margin-bottom: 30px;
        }


        /* ================= BUTTON ================= */

        .btn {
            display: inline-block;
            padding: 14px 28px;
            background: #38bdf8;
            color: #0f172a;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            transform: translateY(-3px);
            background: #7dd3fc;
        }


        /* ================= FOTO ================= */

        .home-image {
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translateY(-70px);
        }

        .image-box {
            width: 350px;
            height: 350px;
            border-radius: 50%;
            padding: 8px;
            background: #38bdf8;
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 8px solid #0f172a;
        }


        /* ================= SECTION ================= */

        .section {
            min-height: 100vh;
            padding: 100px 8%;
        }

        .section-title {
            text-align: center;
            font-size: 45px;
            margin-bottom: 20px;
        }

        .section-title span {
            color: #38bdf8;
        }


        /* ================= ABOUT ================= */

        .about-content {
            max-width: 1000px;
            margin: 50px auto 0;
            text-align: center;
        }

        .about-content > p {
            color: #cbd5e1;
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 45px;
        }

        .about-info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .info-box {
            background: #1e293b;
            padding: 30px 20px;
            border-radius: 12px;
            border: 1px solid #334155;
            transition: 0.3s;
        }

        .info-box:hover {
            transform: translateY(-5px);
            border-color: #38bdf8;
        }

        .info-box h3 {
            color: #38bdf8;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .info-box p {
            color: #e2e8f0;
            margin: 0;
        }


        /* ================= SKILLS ================= */

        .skills-container {
            max-width: 1000px;
            margin: 50px auto 0;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .skill-box {
            background: #1e293b;
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #334155;
            transition: 0.3s;
        }

        .skill-box:hover {
            transform: translateY(-5px);
            border-color: #38bdf8;
        }

        .skill-box h3 {
            color: #38bdf8;
            margin-bottom: 15px;
            font-size: 21px;
        }

        .skill-box p {
            color: #cbd5e1;
            line-height: 1.7;
        }


        /* ================= EXPERIENCE ================= */

        .experience-container {
            max-width: 1000px;
            margin: 50px auto 0;
        }

        .experience-box {
            background: #1e293b;
            padding: 35px;
            border-radius: 15px;
            border: 1px solid #334155;
            transition: 0.3s;
        }

        .experience-box:hover {
            border-color: #38bdf8;
            transform: translateY(-5px);
        }

        .experience-box h3 {
            color: #38bdf8;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .experience-box h4 {
            color: #94a3b8;
            margin-bottom: 25px;
            font-size: 17px;
        }

        .experience-box ul {
            color: #cbd5e1;
            line-height: 2;
            padding-left: 25px;
        }


        /* ================= PROJECT ================= */

        .project-container {
            max-width: 1000px;
            margin: 50px auto 0;
        }

        .project-box {
            background: #1e293b;
            padding: 35px;
            border-radius: 15px;
            border: 1px solid #334155;
            transition: 0.3s;
        }

        .project-box:hover {
            transform: translateY(-5px);
            border-color: #38bdf8;
        }

        .project-box h3 {
            color: #38bdf8;
            font-size: 28px;
            margin-bottom: 12px;
        }

        .project-tech {
            color: #7dd3fc;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .project-box p {
            color: #cbd5e1;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .project-box ul {
            color: #cbd5e1;
            line-height: 2;
            padding-left: 25px;
        }


        /* ================= SERTIFIKAT ================= */

        .certificate-container {
            max-width: 1100px;
            margin: 50px auto 0;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .certificate-box {
            background: #1e293b;
            border: 1px solid #334155;
            border-radius: 15px;
            padding: 20px;
            transition: 0.3s;
            overflow: hidden;
        }

        .certificate-box:hover {
            transform: translateY(-7px);
            border-color: #38bdf8;
        }

        .certificate-image {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
            display: block;
        }

        .certificate-type {
            color: #38bdf8;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .certificate-box h3 {
            color: white;
            font-size: 22px;
            margin-bottom: 12px;
        }

        .certificate-box p {
            color: #94a3b8;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .certificate-btn {
            display: inline-block;
            padding: 10px 18px;
            border: 1px solid #38bdf8;
            border-radius: 7px;
            color: #38bdf8;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .certificate-btn:hover {
            background: #38bdf8;
            color: #0f172a;
        }


        /* ================= FOOTER ================= */

        footer {
            padding: 30px;
            text-align: center;
            background: #020617;
            color: #94a3b8;
        }


        /* ================= MOBILE ================= */

        @media (max-width: 768px) {

            .navbar {
                height: auto;
                padding: 20px 5%;
                flex-direction: column;
                gap: 20px;
            }

            .nav-menu {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .home {
                flex-direction: column-reverse;
                text-align: center;
                padding: 60px 5%;
            }

            .home-image {
                transform: translateY(0);
            }

            .image-box {
                width: 250px;
                height: 250px;
            }

            .home-content h1 {
                font-size: 45px;
            }

            .home-content h2 {
                font-size: 25px;
            }

            .section {
                padding: 80px 5%;
            }

            .section-title {
                font-size: 35px;
            }

            .about-info {
                grid-template-columns: 1fr;
            }

            .skills-container {
                grid-template-columns: 1fr;
            }

            .certificate-container {
                grid-template-columns: 1fr;
            }

            .certificate-image {
                height: auto;
            }

            .experience-box,
            .project-box,
            .certificate-box {
                padding: 25px;
            }
        }
    </style>

</head>


<body>


    <!-- ================= NAVBAR ================= -->

    <nav class="navbar">

        <div class="logo">
            IDO.
        </div>

        <ul class="nav-menu">

            <li>
                <a href="#home">Home</a>
            </li>

            <li>
                <a href="#about">About</a>
            </li>

            <li>
                <a href="#skills">Skills</a>
            </li>

            <li>
                <a href="#experience">Experience</a>
            </li>

            <li>
                <a href="#project">Project</a>
            </li>

            <li>
                <a href="#certificate">Sertifikat</a>
            </li>

        </ul>

    </nav>



    <!-- ================= HOME ================= -->

    <section class="home" id="home">

        <div class="home-content">

            <p class="greeting">
                HALO, SAYA
            </p>

            <h1>
                Muhammad<br>
                Ridho Syapnur
            </h1>

            <h2>
                Web Developer
            </h2>

            <p class="description">
                Saya adalah siswa SMK Hasanah jurusan Rekayasa
                Perangkat Lunak (RPL) yang memiliki minat dalam
                bidang pemrograman dan pengembangan website.
                Saya senang mempelajari teknologi baru dan terus
                mengembangkan kemampuan saya di dunia teknologi.
            </p>

            <a href="#project" class="btn">
                Lihat Project
            </a>

        </div>


        <!-- FOTO -->

        <div class="home-image">

            <div class="image-box">

                <img
                    src="/images/profile.jpg"
                    alt="Foto Muhammad Ridho Syapnur"
                >

            </div>

        </div>

    </section>



    <!-- ================= ABOUT ================= -->

    <section class="section" id="about">

        <h2 class="section-title">
            Tentang <span>Saya</span>
        </h2>

        <div class="about-content">

            <p>
                Saya adalah Muhammad Ridho Syapnur, siswa SMK Hasanah
                jurusan Rekayasa Perangkat Lunak (RPL). Saya memiliki
                minat dalam bidang pemrograman dan pengembangan website.
                Saya memiliki pengalaman dalam pembuatan website
                menggunakan framework Laravel serta aktif dalam
                kegiatan sekolah di bidang media dan dokumentasi.
            </p>


            <div class="about-info">

                <div class="info-box">
                    <h3>🎓 Pendidikan</h3>
                    <p>SMK Hasanah</p>
                </div>

                <div class="info-box">
                    <h3>💻 Jurusan</h3>
                    <p>Rekayasa Perangkat Lunak (RPL)</p>
                </div>

                <div class="info-box">
                    <h3>📍 Domisili</h3>
                    <p>Pekanbaru, Indonesia</p>
                </div>

            </div>

        </div>

    </section>



    <!-- ================= SKILLS ================= -->

    <section class="section" id="skills">

        <h2 class="section-title">
            <span>Skills</span> Saya
        </h2>


        <div class="skills-container">

            <div class="skill-box">

                <h3>
                    💻 Web Development
                </h3>

                <p>
                    Mengembangkan website menggunakan framework
                    Laravel dan memahami struktur aplikasi web.
                </p>

            </div>


            <div class="skill-box">

                <h3>
                    🗄️ Database Management
                </h3>

                <p>
                    Memahami pengelolaan database menggunakan
                    MySQL untuk kebutuhan aplikasi.
                </p>

            </div>


            <div class="skill-box">

                <h3>
                    📱 Manajemen Media Sosial
                </h3>

                <p>
                    Mengelola media sosial serta membantu publikasi
                    dan dokumentasi kegiatan.
                </p>

            </div>


            <div class="skill-box">

                <h3>
                    🎨 Desain Konten Digital
                </h3>

                <p>
                    Membuat konten digital dan dokumentasi untuk
                    kebutuhan informasi dan publikasi.
                </p>

            </div>


            <div class="skill-box">

                <h3>
                    🤝 Kerja Tim & Komunikasi
                </h3>

                <p>
                    Mampu bekerja dalam tim, berkomunikasi dengan
                    baik, dan bertanggung jawab terhadap tugas.
                </p>

            </div>


            <div class="skill-box">

                <h3>
                    📚 Cepat Belajar
                </h3>

                <p>
                    Memiliki semangat belajar dan mampu beradaptasi
                    dengan teknologi serta tugas baru.
                </p>

            </div>

        </div>

    </section>



    <!-- ================= EXPERIENCE ================= -->

    <section class="section" id="experience">

        <h2 class="section-title">
            <span>Experience</span> Saya
        </h2>


        <div class="experience-container">

            <div class="experience-box">

                <h3>
                    IKes Payung Negeri Pekanbaru
                </h3>

                <h4>
                    Praktik Kerja Lapangan (PKL) / Magang
                    | 2026 – Sekarang
                </h4>


                <ul>

                    <li>
                        Mengembangkan sistem digital untuk membantu
                        proses peminjaman dan pengelolaan alat atau barang.
                    </li>

                    <li>
                        Membuat website sistem peminjaman barang
                        untuk memudahkan pengguna dalam mengajukan
                        peminjaman.
                    </li>

                    <li>
                        Mengembangkan fitur pengelolaan data barang,
                        peminjaman, pengembalian, dan persetujuan oleh admin.
                    </li>

                </ul>

            </div>

        </div>

    </section>



    <!-- ================= PROJECT ================= -->

    <section class="section" id="project">

        <h2 class="section-title">
            <span>Project</span> Saya
        </h2>


        <div class="project-container">

            <div class="project-box">

                <h3>
                    Sistem Peminjaman Alat dan Barang Berbasis Web
                </h3>

                <p class="project-tech">
                    Laravel • PHP • MySQL • Bootstrap
                </p>

                <p>
                    Sistem berbasis web yang dibuat untuk membantu
                    proses peminjaman dan pengelolaan alat atau barang
                    agar lebih terstruktur dan mudah dikelola.
                </p>


                <ul>

                    <li>
                        Fitur pengajuan peminjaman barang.
                    </li>

                    <li>
                        Pengelolaan data barang dan stok.
                    </li>

                    <li>
                        Fitur pengembalian barang.
                    </li>

                    <li>
                        Persetujuan peminjaman oleh admin.
                    </li>

                    <li>
                        Pembuatan laporan peminjaman.
                    </li>

                    <li>
                        Membuat proses pencatatan peminjaman
                        lebih terstruktur dan mudah dikelola.
                    </li>

                </ul>

            </div>

        </div>

    </section>



    <!-- ================= SERTIFIKAT ================= -->

    <section class="section" id="certificate">

        <h2 class="section-title">
            <span>Sertifikat</span> Saya
        </h2>


        <div class="certificate-container">


            <!-- SERTIFIKAT 1 -->

            <div class="certificate-box">

                <img
                    src="/images/sertifikat-rumpi-it.jpg"
                    alt="Sertifikat Rumpi IT"
                    class="certificate-image"
                >

                <p class="certificate-type">
                    Sertifikat
                </p>

                <h3>
                    Peserta Rumpi IT 2025
                </h3>

                <p>
                    Sertifikat sebagai peserta Rumpi IT
                    "Exploring the Frontiers of Artificial
                    Intelligence and Technology" yang
                    diselenggarakan oleh Jurusan Ilmu Komputer
                    FMIPA Universitas Riau.
                </p>

                <a
                    href="/images/sertifikat-rumpi-it.jpg"
                    target="_blank"
                    class="certificate-btn"
                >
                    Lihat Sertifikat
                </a>

            </div>


        </div>

    </section>



    <!-- ================= FOOTER ================= -->

    <footer>

        <p>
            © 2026 Muhammad Ridho Syapnur. All Rights Reserved.
        </p>

    </footer>


</body>

</html>