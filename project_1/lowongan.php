<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posting Lowongan - Career Gate</title>
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
            display: flex;
            max-width: 1000px;
            margin: 80px auto 30px;
            gap: 20px;
        }

        .form-container {
            flex: 2;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .benefits-checklist {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            height: fit-content;
            position: sticky;
            top: 90px;
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

        .form-control[type="file"] {
            padding: 8px;
            border: 1px dashed #ddd;
            background-color: #f9f9f9;
        }

        textarea.form-control {
            min-height: 100px;
            resize: vertical;
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

        .btn-primary:hover {
            background-color: #0030d4;
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid #001b91;
            color: #001b91;
            margin-right: 10px;
        }

        .btn-outline:hover {
            background-color: #f0f0f0;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 30px;
        }

        /* Preview Section */
        .preview-section {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .preview-section h2 {
            color: #001b91;
            margin-bottom: 15px;
        }

        .job-preview {
            background: whitesmoke;
            padding: 20px;
            border-radius: 10px;
            margin-top: 15px;
        }

        /* Preview Header Styles */
        .preview-header {
            margin-bottom: 15px;
        }

        .preview-header h3 {
            color: #333;
            font-size: 20px;
            margin: 0 0 5px 0;
        }

        .preview-header h4 {
            color: #555;
            font-size: 16px;
            margin: 0 0 15px 0;
            font-weight: normal;
        }

        .preview-logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #001b91;
            background-color: #f5f5f5;
            display: none;
            float: left;
            margin-right: 15px;
        }

        /* Job Details Styles */
        .job-details {
            margin: 15px 0;
            padding: 0;
            list-style: none;
        }

        .job-details li {
            margin-bottom: 8px;
            font-size: 14px;
            color: #555;
            position: relative;
            padding-left: 20px;
        }

        .job-details li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #001b91;
        }

        /* Section Styles */
        .preview-section-title {
            color: #333;
            font-size: 18px;
            margin: 20px 0 10px 0;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }

        .preview-subsection-title {
            color: #333;
            font-size: 16px;
            margin: 15px 0 10px 0;
        }

        .preview-content {
            margin-left: 15px;
        }

        .preview-content ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .preview-content li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .preview-content li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: red;
        }

        /* Benefit Table Styles */
        .benefit-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .benefit-table th {
            background-color: #001b91;
            color: white;
            padding: 10px;
            text-align: left;
        }

        .benefit-table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .benefit-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .benefit-table tr:hover {
            background-color: #f1f1f1;
        }

        .input-hint {
            font-size: 12px;
            color: #666;
            font-style: italic;
            margin-bottom: 5px;
        }

        /* Benefit Checklist Styles */
        .benefit-checkbox {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 8px 10px;
            background-color: #f5f5f5;
            border-radius: 5px;
        }
        
        .benefit-checkbox input {
            margin-right: 10px;
        }
        
        .benefit-checkbox.checked {
            background-color: #e9f5ff;
            border-left: 3px solid #001b91;
        }
        
        .benefit-section-title {
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
            font-size: 16px;
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

        main {
            padding-bottom: 60px;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            
            .benefits-checklist {
                position: static;
                order: -1;
                margin-bottom: 20px;
            }
            
            nav ul {
                display: none;
            }
            
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
                <li><a href="#"><i class="fas fa-chart-line"></i> Analitik</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> Pengaturan</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <!-- Left Side - Main Form -->
            <div class="form-container">
                <h1><i class="fas fa-plus-circle"></i> Posting Lowongan Baru</h1>
                
                <form id="jobPostForm">
                    <div class="form-group">
                        <label for="jobTitle">Judul Pekerjaan *</label>
                        <input type="text" id="jobTitle" class="form-control" placeholder="Contoh: Marketing Wifi My Republic Bandung" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="companyName">Nama Perusahaan *</label>
                        <input type="text" id="companyName" class="form-control" placeholder="Contoh: TPM Group" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="companyLogo">Logo Perusahaan</label>
                        <input type="file" id="companyLogo" class="form-control" accept="image/*">
                        <p class="input-hint">Ukuran maksimal 2MB (format: JPG, PNG)</p>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="salaryRange">Kisaran Gaji *</label>
                                <input type="text" id="salaryRange" class="form-control" placeholder="Contoh: 3.000.000 – 12.500.000" required>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="jobType">Jenis Pekerjaan *</label>
                                <select id="jobType" class="form-control" required>
                                    <option value="">Pilih Jenis Pekerjaan</option>
                                    <option value="fulltime">Penuh waktu</option>
                                    <option value="parttime">Paruh waktu</option>
                                    <option value="contract">Kontrak</option>
                                    <option value="internship">Magang</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="workArrangement">Pengaturan Kerja *</label>
                        <select id="workArrangement" class="form-control" required>
                            <option value="">Pilih Pengaturan Kerja</option>
                            <option value="onsite">On-site</option>
                            <option value="hybrid">Hybrid</option>
                            <option value="remote">Work from Home</option>
                        </select>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-col" id="locationCol" style="display: none;">
                            <div class="form-group">
                                <label for="location">Lokasi *</label>
                                <input type="text" id="location" class="form-control" placeholder="Contoh: Bandung">
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="experienceLevel">Tingkat Pengalaman *</label>
                                <select id="experienceLevel" class="form-control" required>
                                    <option value="">Pilih Tingkat Pengalaman</option>
                                    <option value="freshgraduate">Fresh Graduate</option>
                                    <option value="1-3">1-3 Tahun</option>
                                    <option value="3-5">3-5 Tahun</option>
                                    <option value="5+">5+ Tahun</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="urgency">Prioritas Lowongan</label>
                        <select id="urgency" class="form-control">
                            <option value="normal">Normal</option>
                            <option value="urgent">Butuh Cepat (🔥 Akan ditandai khusus)</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="jobDescription">Deskripsi Pekerjaan *</label>
                        <textarea id="jobDescription" class="form-control" placeholder="Jelaskan tanggung jawab dan deskripsi pekerjaan secara detail" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Kualifikasi</label>
                        <div class="qualification-section">
                            <h3>Kualifikasi :</h3>
                            <p class="input-hint">Masukkan satu kualifikasi per baris (akan ditampilkan sebagai bullet point)</p>
                            <textarea id="qualifications" class="form-control" placeholder="Contoh: 
- Pria / Wanita - Umur maksimal 40 Tahun
- Pendidikan Minimal SMA
- mempunyai Motor untuk mobilitas kerja" required></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Benefit</label>
                        <div class="benefit-section">
                            <h3>Dengan benefit :</h3>
                            <p class="input-hint">Masukkan satu benefit per baris (akan ditampilkan sebagai bullet point)</p>
                            <textarea id="benefits" class="form-control" placeholder="Contoh: 
- Gaji pokok + insentif
- BPJS Kesehatan
- Bonus tahunan"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="button" class="btn btn-outline">Simpan Draft</button>
                        <button type="submit" class="btn btn-primary">Posting Lowongan</button>
                    </div>
                </form>
                
                <!-- Preview Section -->
                <div class="preview-section">
                    <h2><i class="fas fa-eye"></i> Pratinjau Lowongan</h2>
                    
                    <div class="job-preview">
                        <div class="preview-header">
                            <img id="previewLogo" src="placeholder-logo.png" alt="Company Logo" class="preview-logo">
                            <div>
                                <h3 id="previewTitle">Judul Lowongan</h3>
                                <h4 id="previewCompany">Nama Perusahaan</h4>
                            </div>
                        </div>
                        
                        <ul class="job-details">
                            <li id="previewJobType">-</li>
                            <li id="previewWorkArrangement">Pilih Pengaturan Kerja</li>
                            <li id="previewExperience">-</li>
                            <li id="previewSalary">Rp0 – 0</li>
                        </ul>
                        
                        <div class="preview-content">
                            <h3 class="preview-section-title">Deskripsi Pekerjaan</h3>
                            <ul id="previewDescription">
                                <li>Deskripsi pekerjaan akan muncul di sini...</li>
                            </ul>
                            
                            <h3 class="preview-section-title">Kualifikasi</h3>
                            <ul id="previewQualifications">
                                <li>Kualifikasi akan muncul di sini...</li>
                            </ul>
                            
                            <h3 class="preview-section-title">Benefit</h3>
                            <ul id="previewBenefits">
                                <li>Benefit akan muncul di sini...</li>
                            </ul>
                            
                            <h3 class="preview-section-title">Benefit Perusahaan</h3>
                            <table class="benefit-table">
                                <thead>
                                    <tr>
                                        <th>Benefit Perusahaan</th>
                                    </tr>
                                </thead>
                                <tbody id="previewCompanyBenefits">
                                    <tr><td>Competitive Salary</td></tr>
                                    <tr><td>Medical Insurance</td></tr>
                                    <tr><td>THR / Bonus System</td></tr>
                                    <tr><td>Period Leave</td></tr>
                                    <tr><td>Transportation</td></tr>
                                    <tr><td>Free Food / Snacks</td></tr>
                                    <tr><td>Casual Dress Code</td></tr>
                                    <tr><td>Company Outings</td></tr>
                                    <tr><td>Professional Development</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side - Benefits Checklist -->
            <div class="benefits-checklist">
                <h3 class="benefit-section-title">Benefit Perusahaan</h3>
                <div class="benefit-checkboxes">
                    <label class="benefit-checkbox">
                        <input type="checkbox" name="companyBenefits" value="salary"> Competitive Salary
                    </label>
                    <label class="benefit-checkbox checked">
                        <input type="checkbox" name="companyBenefits" value="insurance" checked> Medical Insurance
                    </label>
                    <label class="benefit-checkbox">
                        <input type="checkbox" name="companyBenefits" value="thr"> THR / Bonus System
                    </label>
                    <label class="benefit-checkbox checked">
                        <input type="checkbox" name="companyBenefits" value="leave" checked> Period Leave
                    </label>
                    <label class="benefit-checkbox">
                        <input type="checkbox" name="companyBenefits" value="transport"> Transportation
                    </label>
                    <label class="benefit-checkbox">
                        <input type="checkbox" name="companyBenefits" value="food"> Free Food / Snacks
                    </label>
                    <label class="benefit-checkbox">
                        <input type="checkbox" name="companyBenefits" value="dress"> Casual Dress Code
                    </label>
                    <label class="benefit-checkbox">
                        <input type="checkbox" name="companyBenefits" value="outings"> Company Outings
                    </label>
                    <label class="benefit-checkbox checked">
                        <input type="checkbox" name="companyBenefits" value="development" checked> Professional Development
                    </label>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <span>© 2025 Career Gate. All Rights Reserved.</span>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all form elements
            const formElements = {
                title: document.getElementById('jobTitle'),
                company: document.getElementById('companyName'),
                logo: document.getElementById('companyLogo'),
                description: document.getElementById('jobDescription'),
                salary: document.getElementById('salaryRange'),
                jobType: document.getElementById('jobType'),
                workArrangement: document.getElementById('workArrangement'),
                location: document.getElementById('location'),
                experience: document.getElementById('experienceLevel'),
                qualifications: document.getElementById('qualifications'),
                benefits: document.getElementById('benefits'),
                urgency: document.getElementById('urgency')
            };
            
            // Get all preview elements
            const previewElements = {
                title: document.getElementById('previewTitle'),
                company: document.getElementById('previewCompany'),
                logo: document.getElementById('previewLogo'),
                description: document.getElementById('previewDescription'),
                salary: document.getElementById('previewSalary'),
                jobType: document.getElementById('previewJobType'),
                workArrangement: document.getElementById('previewWorkArrangement'),
                location: document.getElementById('previewLocation'),
                experience: document.getElementById('previewExperience'),
                qualifications: document.getElementById('previewQualifications'),
                benefits: document.getElementById('previewBenefits'),
                companyBenefits: document.getElementById('previewCompanyBenefits')
            };
            
            // Function to process bullet points from textarea
            function processBulletPoints(text) {
                return text.split('\n')
                    .map(line => line.trim())
                    .filter(line => line.length > 0)
                    .map(line => line.replace(/^-\s*/, '').trim());
            }
            
            // Function to update preview
            function updatePreview() {
                // Update logo preview
                if (formElements.logo.files && formElements.logo.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewElements.logo.src = e.target.result;
                        previewElements.logo.style.display = 'block';
                    };
                    reader.readAsDataURL(formElements.logo.files[0]);
                } else {
                    previewElements.logo.style.display = 'none';
                }
                
                // Update basic info
                previewElements.title.textContent = formElements.title.value || 'Judul Lowongan';
                previewElements.company.textContent = formElements.company.value || 'Nama Perusahaan';
                
                // Update salary (format like in example)
                if (formElements.salary.value) {
                    const salaryText = formElements.salary.value
                        .replace(/Rp/g, '') // Remove existing Rp if any
                        .replace(/\s/g, ''); // Remove spaces
                    previewElements.salary.textContent = 'Rp' + salaryText.replace(/-/g, ' – ');
                } else {
                    previewElements.salary.textContent = 'Rp0 – 0';
                }
                
                // Update job type
                const jobTypeText = formElements.jobType.options[formElements.jobType.selectedIndex].text;
                previewElements.jobType.textContent = formElements.jobType.value ? 
                    jobTypeText : '-';
                
                // Update work arrangement and location
                const workArrangement = formElements.workArrangement.value;
                const workArrangementText = formElements.workArrangement.options[formElements.workArrangement.selectedIndex].text;
                
                if (workArrangement === 'remote') {
                    previewElements.workArrangement.textContent = 'Work from Home';
                } else if (workArrangement === 'onsite') {
                    previewElements.workArrangement.textContent = 'On-site - ' + (formElements.location.value || '');
                } else if (workArrangement === 'hybrid') {
                    previewElements.workArrangement.textContent = 'Hybrid - ' + (formElements.location.value || '');
                } else {
                    previewElements.workArrangement.textContent = 'Pilih Pengaturan Kerja';
                }
                
                // Update experience level
                const experienceText = formElements.experience.options[formElements.experience.selectedIndex].text;
                previewElements.experience.textContent = formElements.experience.value ? 
                    experienceText : '-';
                
                // Update description
                const descriptionLines = processBulletPoints(formElements.description.value);
                previewElements.description.innerHTML = descriptionLines.length > 0 
                    ? descriptionLines.map(line => `<li>${line}</li>`).join('')
                    : '<li>Deskripsi pekerjaan akan muncul di sini...</li>';
                
                // Update qualifications
                const qualifications = processBulletPoints(formElements.qualifications.value);
                previewElements.qualifications.innerHTML = qualifications.length > 0 
                    ? qualifications.map(q => `<li>${q}</li>`).join('')
                    : '<li>Kualifikasi akan muncul di sini...</li>';
                
                // Update benefits
                const benefits = processBulletPoints(formElements.benefits.value);
                previewElements.benefits.innerHTML = benefits.length > 0 
                    ? benefits.map(b => `<li>${b}</li>`).join('')
                    : '<li>Benefit akan muncul di sini...</li>';
                
                // Update company benefits
                const checkboxes = document.querySelectorAll('input[name="companyBenefits"]:checked');
                let html = '';
                checkboxes.forEach(checkbox => {
                    const label = checkbox.parentElement.textContent.trim();
                    html += `<tr><td>${label}</td></tr>`;
                });
                previewElements.companyBenefits.innerHTML = html || '<tr><td>Tidak ada benefit yang dipilih</td></tr>';
                
                // Add urgent tag if selected
                if (formElements.urgency.value === 'urgent') {
                    previewElements.title.textContent += ' 🔥';
                }
            }
            
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
            
            // Add event listeners to all form elements
            Object.values(formElements).forEach(element => {
                if (element !== formElements.workArrangement) { // Already added above
                    element.addEventListener('input', updatePreview);
                    element.addEventListener('change', updatePreview);
                }
            });
            
            // Add event listeners to benefit checkboxes
            document.querySelectorAll('input[name="companyBenefits"]').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    // Toggle class 'checked' on parent label
                    this.parentElement.classList.toggle('checked', this.checked);
                    updatePreview();
                });
            });
            
            // Initialize checkboxes
            document.querySelectorAll('.benefit-checkbox input[checked]').forEach(checkbox => {
                checkbox.parentElement.classList.add('checked');
            });
            
            // Initial update
            updatePreview();
            
            // Form submission
            document.getElementById('jobPostForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validate required fields
                if (!formElements.title.value || 
                    !formElements.company.value || 
                    !formElements.salary.value || 
                    !formElements.jobType.value || 
                    !formElements.workArrangement.value || 
                    !formElements.experience.value || 
                    !formElements.description.value || 
                    !formElements.qualifications.value) {
                    alert('Harap lengkapi semua field yang wajib diisi!');
                    return;
                }
                
                // Additional validation for location if onsite/hybrid
                if ((formElements.workArrangement.value === 'onsite' || 
                     formElements.workArrangement.value === 'hybrid') && 
                    !formElements.location.value) {
                    alert('Harap isi lokasi untuk pekerjaan on-site/hybrid!');
                    return;
                }
                
                alert('Lowongan berhasil diposting!');
                // Here you would typically send the data to the server
            });
        });
    </script>
</body>
</html>