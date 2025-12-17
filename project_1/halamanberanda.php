<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        body {
            background-image: url('beranda7.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding-bottom: 100px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .header-small {
            background-color: #001b91;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 15px;
        }

        .header-small img {
            width: 40px;
        }

        .nav-left {
            display: flex;
            align-items: center;
        }

        .nav-menu {
            display: flex;
            margin-left: 20px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-size: 12px;
            margin-right: 10px;
        }

        .nav-menu a:hover {
            text-decoration: underline;
        }

        .nav-right {
            display: flex;
            align-items: center;
        }

        .language {
            display: flex;
            align-items: center;
            font-size: 14px;
        }

        .separator {
            margin: 0 10px;
            font-size: 14px;
        }

        .auth-link {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .auth-link:hover {
            text-decoration: underline;
        }

        .company-btn {
            background-color: #FFD700;
            color: black;
            border: none;
            font-weight: bold;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 20px;
            cursor: pointer;
            margin-left: 15px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .company-btn:hover {
            background-color: #FFC107;
        }

        .company-logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 2px solid #e0e0e0;
        }

        .job-header {
            display: flex;
            align-items: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .main-header {
            text-align: center;
            padding: 20px;
        }

        .main-header img {
            max-width: 150px;
        }

        .main-header h1 {
            margin-top: 10px;
            font-size: 24px;
            color: #FFC107;
        }

        /* Container untuk search dan filter */
        .search-filter-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            max-width: 800px;
            gap: 5px; /* Jarak lebih rapat */
        }

        .search-container {
            display: flex;
            flex-grow: 1;
            max-width: 600px; /* Search bar lebih panjang */
        }

        .search-bar {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .search-button {
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            background-color: #001b91;
            color: white;
            border-radius: 5px;
            margin-left: 5px; /* Jarak lebih rapat */
            cursor: pointer;
            white-space: nowrap;
        }

        .search-button:hover {
            background-color: darkred;
        }

        .job-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            padding: 20px;
        }

        .job-card-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .job-card-link:hover {
            cursor: pointer;
        }

        .job-card {
            background: whitesmoke;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .badge {
            background: orange;
            color: whitesmoke;
            font-size: 12px;
            padding: 5px;
            border-radius: 5px;
            display: inline-block;
        }

        .job-title {
            font-weight: bold;
            font-size: 16px;
            margin-top: 10px;
        }

        .company {
            color: #666;
            font-size: 14px;
        }

        .type {
            font-weight: bold;
            color: purple;
        }

        .location, .experience, .salary {
            font-size: 14px;
            margin-top: 5px;
        }

        footer {
            background-color: #001b91;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            position: fixed;
            width: 100%;
            bottom: 0;
            left: 0;
            font-weight: bold;
        }

        /* Dropdown Perusahaan */
        .company-dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1000;
            border-radius: 5px;
            overflow: hidden;
        }

        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 14px;
            border-bottom: 1px solid #eee;
            transition: all 0.3s;
        }

        .dropdown-content a:hover {
            background-color: #001b91;
            color: white;
        }

        .dropdown-content a i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        /* Tampilkan dropdown saat hover */
        .company-dropdown:hover .dropdown-content {
            display: block;
        }

        /* Animasi arrow */
        .company-btn::after {
            content: "▼";
            font-size: 10px;
            margin-left: 5px;
            transition: transform 0.2s;
        }

        .company-dropdown:hover .company-btn::after {
            transform: rotate(180deg);
        }

        /* CSS untuk filter dropdown */
        .filter-dropdown {
            position: relative;
            display: inline-block;
        }

        .filter-btn {
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            background-color: #001b91;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            white-space: nowrap;
        }

        .filter-btn:hover {
            background-color: #0030d4;
        }

        .filter-btn i {
            font-size: 14px;
        }

        .filter-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .filter-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 14px;
            border-bottom: 1px solid #eee;
        }

        .filter-content a:hover {
            background-color: #001b91;
            color: white;
        }

        .filter-content a.active {
            background-color: #001b91;
            color: white;
        }

        .filter-dropdown:hover .filter-content {
            display: block;
        }

        @media (max-width: 768px) {
            .nav-menu, .auth-link, .separator {
                display: none;
            }

            .job-container {
                flex-direction: column;
                align-items: center;
            }

            .company-dropdown:hover .dropdown-content {
                display: none;
            }
            
            .company-dropdown.active .dropdown-content {
                display: block;
            }

            .search-filter-container {
                flex-direction: column;
                align-items: stretch;
                padding: 0 15px;
                gap: 10px;
            }
            
            .search-container {
                width: 100%;
                max-width: 100%;
            }
            
            .search-bar {
                width: 100%;
            }
            
            .filter-dropdown {
                width: 100%;
            }
            
            .filter-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <!-- Header Kecil -->
    <header class="header-small">
        <div class="nav-left">
            <img src="logo.png" alt="">
            <nav class="nav-menu">
                <a href="#">Loker</a>
                <a href="#">Mentoring</a>
                <a href="#">Perusahaan</a>
                <a href="#">Events</a>
                <a href="#">AI CV Analyzer</a>
            </nav>
        </div>

        <div class="nav-right">
            <div class="language">
                <span>IDN ▼</span>
            </div>
            <span class="separator">|</span>
            <a href="login.php" class="auth-link">Masuk</a>
            <span class="separator">|</span>
            <a href="register.php" class="auth-link">Daftar</a>
            
            <div class="company-dropdown">
                <button class="company-btn">Untuk Perusahaan</button>
                <div class="dropdown-content">
                    <a href="#"><i class="fas fa-building"></i> Daftar Perusahaan</a>
                    <a href="#"><i class="fas fa-plus-circle"></i> Pasang Lowongan</a>
                    <a href="#"><i class="fas fa-tasks"></i> Kelola Lowongan</a>
                    <a href="#"><i class="fas fa-chart-bar"></i> Analisis Kandidat</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Header Utama -->
    <header class="main-header">
        <h1>Lowongan Pekerjaan</h1>
        <div class="search-filter-container">
            <div class="search-container">
                <input type="text" placeholder="Cari lowongan pekerjaan..." class="search-bar" id="searchInput">
                <button class="search-button">🔍 Cari</button>
            </div>
            
            <div class="filter-dropdown">
                <button class="filter-btn">
                    <i class="fas fa-filter"></i> Kategori
                </button>
                <div class="filter-content">
                    <a href="#" data-category="all" class="active">Semua Kategori</a>
                    <a href="#" data-category="management">Managemen</a>
                    <a href="#" data-category="it">IT</a>
                    <a href="#" data-category="accounting">Akuntansi</a>
                </div>
            </div>
        </div>
    </header>
    
    <main>
        <div class="job-container">
            <!-- Kartu 1 - IT -->
            <a href="detail.php" class="job-card-link">
                <div class="job-card" data-category="it">
                    <div class="badge">🔥 Loker Butuh Cepat</div>
                    <div class="job-header">
                        <img src="tpm.png" alt="Logo TPM Group" class="company-logo">
                        <div>
                            <div class="job-title">Marketing Wifi My Republic</div>
                            <div class="company">TPM Group ✅</div>
                        </div>
                    </div>
                    <div class="type">Penuh waktu</div>
                    <div class="location">📍 On-site • Bandung</div>
                    <div class="experience">📂 Min. Freshgrad</div>
                    <div class="salary">💰 Rp3.000.000 – 12.500.000</div>
                </div>
            </a>

            <!-- Kartu 2 - Managemen -->
            <div class="job-card" data-category="management">
                <div class="badge">🔥 Loker Butuh Cepat</div>
                <div class="job-header">
                    <img src="tpm.png" alt="Logo TPM Group" class="company-logo">
                    <div>
                        <div class="job-title">Promotor (Bekasi)</div>
                        <div class="company">TPM Group ✅</div>
                    </div>
                </div>
                <div class="type">Kontrak</div>
                <div class="location">📍 On-site • Bekasi</div>
                <div class="experience">📂 Min. Freshgrad</div>
                <div class="salary">💰 Rp2.800.000 – 3.500.000</div>
            </div>

            <!-- Kartu 3 - Managemen -->
            <div class="job-card" data-category="management">
                <div class="badge">🔥 Loker Butuh Cepat</div>
                <div class="job-header">
                    <img src="tpm.png" alt="Logo TPM Group" class="company-logo">
                    <div>
                        <div class="job-title">Team Leader Sales Wifi</div>
                        <div class="company">TPM Group ✅</div>
                    </div>
                </div>
                <div class="type">Penuh waktu</div>
                <div class="location">📍 On-site • Bandung Regency</div>
                <div class="experience">📂 Min. 1 years of experience</div>
                <div class="salary">💰 Rp7.000.000 – 12.500.000</div>
            </div>

            <!-- Kartu 4 - Akuntansi -->
            <div class="job-card" data-category="accounting">
                <div class="badge">🔥 Loker Butuh Cepat</div>
                <div class="job-header">
                    <img src="tpm.png" alt="Logo TPM Group" class="company-logo">
                    <div>
                        <div class="job-title">Customer Service Indihome</div>
                        <div class="company">TPM Group ✅</div>
                    </div>
                </div>
                <div class="type">Penuh waktu</div>
                <div class="location">📍 On-site • Surabaya</div>
                <div class="experience">📂 Min. Freshgrad</div>
                <div class="salary">💰 Rp3.200.000 – 5.000.000</div>
            </div>

            <!-- Kartu 5 - IT -->
            <div class="job-card" data-category="it">
                <div class="badge">🔥 Loker Butuh Cepat</div>
                <div class="job-header">
                    <img src="tpm.png" alt="Logo TPM Group" class="company-logo">
                    <div>
                        <div class="job-title">Sales Internet Provider</div>
                        <div class="company">TPM Group ✅</div>
                    </div>
                </div>
                <div class="type">Kontrak</div>
                <div class="location">📍 On-site • Tangerang</div>
                <div class="experience">📂 Min. 1 tahun pengalaman</div>
                <div class="salary">💰 Rp3.000.000 – 4.000.000</div>
            </div>

            <!-- Kartu 6 - IT -->
            <div class="job-card" data-category="it">
                <div class="badge">🔥 Loker Butuh Cepat</div>
                <div class="job-header">
                    <img src="tpm.png" alt="Logo TPM Group" class="company-logo">
                    <div>
                        <div class="job-title">Admin Sosial Media</div>
                        <div class="company">TPM Group ✅</div>
                    </div>
                </div>
                <div class="type">Remote</div>
                <div class="location">📍 Work From Home</div>
                <div class="experience">📂 Min. Freshgrad</div>
                <div class="salary">💰 Rp3.500.000 – 6.000.000</div>
            </div>
        </div>
    </main>

    <footer>
        <p>© 2025 Career Gate. All Rights Reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Untuk dropdown perusahaan
            const companyDropdown = document.querySelector('.company-dropdown');
            
            // Untuk touch devices
            companyDropdown.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    const dropdown = this.querySelector('.dropdown-content');
                    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                    e.preventDefault();
                }
            });
            
            // Tutup dropdown saat klik di luar
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.company-dropdown')) {
                    const dropdowns = document.querySelectorAll('.dropdown-content');
                    dropdowns.forEach(dropdown => {
                        dropdown.style.display = 'none';
                    });
                }
            });

            // Filter Kategori dan Pencarian
            const filterLinks = document.querySelectorAll('.filter-content a');
            const jobCards = document.querySelectorAll('.job-card');
            const searchInput = document.getElementById('searchInput');
            
            // Fungsi untuk memfilter lowongan
            function filterJobs(category, searchTerm = '') {
                jobCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category') || 'all';
                    const cardText = card.textContent.toLowerCase();
                    const searchMatch = cardText.includes(searchTerm.toLowerCase());
                    const categoryMatch = category === 'all' || cardCategory === category;
                    
                    if (categoryMatch && searchMatch) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
            
            // Event listener untuk filter kategori
            filterLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const category = this.getAttribute('data-category');
                    filterJobs(category, searchInput.value);
                    
                    // Update teks tombol filter
                    document.querySelector('.filter-btn').innerHTML = 
                        `<i class="fas fa-filter"></i> ${this.textContent}`;
                });
            });
            
            // Event listener untuk pencarian
            searchInput.addEventListener('input', function() {
                const activeFilter = document.querySelector('.filter-content a.active') || 
                                     document.querySelector('.filter-content a[data-category="all"]');
                const category = activeFilter.getAttribute('data-category');
                filterJobs(category, this.value);
            });
            
            // Tambahkan class active ke filter yang dipilih
            filterLinks.forEach(link => {
                link.addEventListener('click', function() {
                    filterLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // Inisialisasi - tampilkan semua lowongan
            filterJobs('all');
        });
    </script>
</body>
</html>