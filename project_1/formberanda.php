<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Beranda - Career Gate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        
        header {
            background: #001b91;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 50px;
            padding: 0 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        
        nav {
            display: flex;
            align-items: center;
            background-color: #001b91;
            width: 100%;
            height: 50px;
            padding: 0 20px;
        }
        
        .website-logo {
            width: 40px;
            float: left;
        }
        
        nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
            padding: 0;
            margin: 0;
        }
        
        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 12px;
        }
        
        .container {
            max-width: 1000px;
            margin: 80px auto 30px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        h1 {
            color: #001b91;
            border-bottom: 2px solid #001b91;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        
        .form-row {
            display: flex;
            gap: 20px;
        }
        
        .form-col {
            flex: 1;
        }
        
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
        }
        
        .btn-primary {
            background-color: #001b91;
            color: white;
        }
        
        .btn-outline {
            background-color: transparent;
            border: 1px solid #001b91;
            color: #001b91;
            margin-right: 10px;
        }
        
        .form-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 30px;
        }
        
        .preview-section {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .preview-card {
            background: whitesmoke;
            padding: 15px;
            border-radius: 10px;
            width: 300px;
            margin: 20px auto;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .badge {
            background: orange;
            color: white;
            font-size: 12px;
            padding: 5px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 10px;
        }
        
        .job-header {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 10px;
        }
        
        .company-logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .job-title {
            font-weight: bold;
            font-size: 16px;
            margin: 0;
        }
        
        .company {
            color: #666;
            font-size: 14px;
            margin: 3px 0;
        }
        
        .job-detail {
            font-size: 14px;
            margin: 5px 0;
        }
        
        .type {
            color: purple;
            font-weight: bold;
        }
        
        .input-hint {
            font-size: 12px;
            color: #666;
            font-style: italic;
            margin-top: 5px;
        }
        
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <img src="logo.png" alt="Career Gate" class="website-logo">
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="#"><i class="fas fa-briefcase"></i> Lowongan Saya</a></li>
                <li><a href="#"><i class="fas fa-chart-line"></i> Analitik</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> Pengaturan</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <div class="container">
            <h1><i class="fas fa-columns"></i> Form Data Tampilan Beranda</h1>
            
            <form id="berandaDataForm">
                <!-- Data untuk Card Beranda -->
                <div class="form-group">
                    <label for="cardJobTitle">Judul Pekerjaan (untuk Beranda) *</label>
                    <input type="text" id="cardJobTitle" class="form-control" placeholder="Contoh: Marketing Wifi My Republic" required>
                    <p class="input-hint">Judul yang akan muncul di card beranda (lebih singkat dari judul lengkap)</p>
                </div>
                
                <div class="form-group">
                    <label for="cardCompanyName">Nama Perusahaan (untuk Beranda) *</label>
                    <input type="text" id="cardCompanyName" class="form-control" placeholder="Contoh: TPM Group" required>
                </div>
                
                <div class="form-group">
                    <label for="cardLogo">Logo Perusahaan (untuk Beranda)</label>
                    <input type="file" id="cardLogo" class="form-control" accept="image/*">
                    <p class="input-hint">Ukuran maksimal 2MB (format: JPG, PNG). Logo akan ditampilkan bulat di beranda.</p>
                </div>
                
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="cardJobType">Jenis Pekerjaan (untuk Beranda) *</label>
                            <select id="cardJobType" class="form-control" required>
                                <option value="">Pilih Jenis Pekerjaan</option>
                                <option value="Penuh waktu">Penuh waktu</option>
                                <option value="Paruh waktu">Paruh waktu</option>
                                <option value="Kontrak">Kontrak</option>
                                <option value="Magang">Magang</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="workArrangement">Pengaturan Kerja *</label>
                            <select id="workArrangement" class="form-control" required>
                                <option value="">Pilih Pengaturan Kerja</option>
                                <option value="onsite">On-site</option>
                                <option value="hybrid">Hybrid</option>
                                <option value="remote">Work from Home</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-col" id="locationCol" style="display: none;">
                        <div class="form-group">
                            <label for="cardLocation">Lokasi (untuk Beranda) *</label>
                            <input type="text" id="cardLocation" class="form-control" placeholder="Contoh: Bandung">
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="cardExperience">Tingkat Pengalaman *</label>
                            <select id="cardExperience" class="form-control" required>
                                <option value="">Pilih Tingkat Pengalaman</option>
                                <option value="freshgraduate">Fresh Graduate</option>
                                <option value="1-3">1-3 Tahun</option>
                                <option value="3-5">3-5 Tahun</option>
                                <option value="5+">5+ Tahun</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="cardSalary">Gaji (untuk Beranda) *</label>
                            <input type="text" id="cardSalary" class="form-control" placeholder="Contoh: Rp3.000.000 – 12.500.000" required>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="isUrgent">Prioritas Lowongan</label>
                            <select id="isUrgent" class="form-control">
                                <option value="0">Normal</option>
                                <option value="1">Butuh Cepat (Tampilkan badge 🔥)</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="button" class="btn btn-outline">Kembali</button>
                    <button type="submit" class="btn btn-primary">Simpan Data Beranda</button>
                </div>
                
                <!-- Preview Section -->
                <div class="preview-section">
                    <h2><i class="fas fa-eye"></i> Pratinjau Card Beranda</h2>
                    <p>Ini adalah tampilan card lowongan Anda di halaman beranda</p>
                    
                    <div class="preview-card" id="cardPreview">
                        <div class="badge" id="previewBadge" style="display: none;">🔥 Loker Butuh Cepat</div>
                        <div class="job-header">
                            <img id="previewLogo" src="placeholder-logo.png" alt="Company Logo" class="company-logo">
                            <div>
                                <div class="job-title" id="previewJobTitle">Judul Pekerjaan</div>
                                <div class="company" id="previewCompany">Nama Perusahaan</div>
                            </div>
                        </div>
                        <div class="job-detail type" id="previewJobType">-</div>
                        <div class="job-detail" id="previewWorkArrangement">-</div>
                        <div class="job-detail" id="previewExperience">📂 -</div>
                        <div class="job-detail" id="previewSalary">💰 -</div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    
    <footer>
        <span>© 2025 Career Gate. All Rights Reserved.</span>
    </footer>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen form
            const formElements = {
                jobTitle: document.getElementById('cardJobTitle'),
                company: document.getElementById('cardCompanyName'),
                logo: document.getElementById('cardLogo'),
                jobType: document.getElementById('cardJobType'),
                workArrangement: document.getElementById('workArrangement'),
                location: document.getElementById('cardLocation'),
                experience: document.getElementById('cardExperience'),
                salary: document.getElementById('cardSalary'),
                isUrgent: document.getElementById('isUrgent')
            };
            
            // Ambil elemen preview
            const previewElements = {
                badge: document.getElementById('previewBadge'),
                jobTitle: document.getElementById('previewJobTitle'),
                company: document.getElementById('previewCompany'),
                logo: document.getElementById('previewLogo'),
                jobType: document.getElementById('previewJobType'),
                workArrangement: document.getElementById('previewWorkArrangement'),
                experience: document.getElementById('previewExperience'),
                salary: document.getElementById('previewSalary')
            };
            
            // Handle work arrangement change
            formElements.workArrangement.addEventListener('change', function() {
                const locationCol = document.getElementById('locationCol');
                if (this.value === 'onsite' || this.value === 'hybrid') {
                    locationCol.style.display = 'block';
                    formElements.location.required = true;
                } else {
                    locationCol.style.display = 'none';
                    formElements.location.required = false;
                }
                updatePreview();
            });
            
            // Fungsi untuk update preview
            function updatePreview() {
                // Update logo preview
                if (formElements.logo.files && formElements.logo.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewElements.logo.src = e.target.result;
                    };
                    reader.readAsDataURL(formElements.logo.files[0]);
                }
                
                // Update teks preview
                previewElements.jobTitle.textContent = formElements.jobTitle.value || 'Judul Pekerjaan';
                previewElements.company.textContent = formElements.company.value || 'Nama Perusahaan';
                previewElements.jobType.textContent = formElements.jobType.value || '-';
                
                // Update work arrangement preview
                const workArrangement = formElements.workArrangement.value;
                if (workArrangement === 'remote') {
                    previewElements.workArrangement.textContent = '📍 Work from Home';
                } else if (workArrangement === 'onsite') {
                    previewElements.workArrangement.textContent = '📍 On-site • ' + (formElements.location.value || '');
                } else if (workArrangement === 'hybrid') {
                    previewElements.workArrangement.textContent = '📍 Hybrid • ' + (formElements.location.value || '');
                } else {
                    previewElements.workArrangement.textContent = '-';
                }
                
                // Update experience
                const experienceText = formElements.experience.options[formElements.experience.selectedIndex].text;
                previewElements.experience.textContent = '📂 ' + (formElements.experience.value ? experienceText : '-');
                
                // Update salary
                previewElements.salary.textContent = '💰 ' + (formElements.salary.value || '-');
                
                // Update badge urgent
                previewElements.badge.style.display = formElements.isUrgent.value === '1' ? 'block' : 'none';
            }
            
            // Tambahkan event listener untuk semua input
            Object.values(formElements).forEach(element => {
                if (element !== formElements.workArrangement) { // Already added above
                    element.addEventListener('input', updatePreview);
                    element.addEventListener('change', updatePreview);
                }
            });
            
            // Form submission
            document.getElementById('berandaDataForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validasi
                if (!formElements.jobTitle.value || 
                    !formElements.company.value || 
                    !formElements.jobType.value || 
                    !formElements.workArrangement.value || 
                    !formElements.experience.value || 
                    !formElements.salary.value) {
                    alert('Harap lengkapi semua field yang wajib diisi!');
                    return;
                }
                
                // Validasi tambahan untuk lokasi jika onsite/hybrid
                if ((formElements.workArrangement.value === 'onsite' || 
                     formElements.workArrangement.value === 'hybrid') && 
                    !formElements.location.value) {
                    alert('Harap isi lokasi untuk pekerjaan on-site/hybrid!');
                    return;
                }
                
                // Simpan data (bisa ke localStorage atau kirim ke server)
                const berandaData = {
                    jobTitle: formElements.jobTitle.value,
                    company: formElements.company.value,
                    jobType: formElements.jobType.value,
                    workArrangement: formElements.workArrangement.value,
                    location: formElements.location.value,
                    experience: formElements.experience.value,
                    salary: formElements.salary.value,
                    isUrgent: formElements.isUrgent.value === '1'
                };
                
                // Untuk contoh, kita simpan ke localStorage
                localStorage.setItem('berandaData', JSON.stringify(berandaData));
                
                // Jika ada file logo, simpan sebagai data URL
                if (formElements.logo.files && formElements.logo.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        localStorage.setItem('berandaLogo', e.target.result);
                        alert('Data beranda berhasil disimpan!');
                        // window.location.href = 'lowongan.php'; // Redirect jika perlu
                    };
                    reader.readAsDataURL(formElements.logo.files[0]);
                } else {
                    alert('Data beranda berhasil disimpan!');
                    // window.location.href = 'lowongan.php'; // Redirect jika perlu
                }
            });
            
            // Load data yang sudah ada jika ada
            const savedData = localStorage.getItem('berandaData');
            if (savedData) {
                const data = JSON.parse(savedData);
                
                formElements.jobTitle.value = data.jobTitle || '';
                formElements.company.value = data.company || '';
                formElements.jobType.value = data.jobType || '';
                formElements.workArrangement.value = data.workArrangement || '';
                formElements.location.value = data.location || '';
                formElements.experience.value = data.experience || '';
                formElements.salary.value = data.salary || '';
                formElements.isUrgent.value = data.isUrgent ? '1' : '0';
                
                // Trigger change event untuk work arrangement
                if (formElements.workArrangement.value) {
                    formElements.workArrangement.dispatchEvent(new Event('change'));
                }
                
                const savedLogo = localStorage.getItem('berandaLogo');
                if (savedLogo) {
                    previewElements.logo.src = savedLogo;
                }
            }
            
            // Initial update
            updatePreview();
        });
    </script>
</body>
</html>