<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowongan Saya - Career Gate</title>
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
            max-width: 1200px;
            margin: 70px auto 30px;
            padding: 0 20px;
        }
        
        .action-buttons {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
            gap: 10px;
        }
        
        .action-btn {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .add-btn {
            background-color: #28a745;
            color: white;
        }
        
        .edit-btn {
            background-color: #ffc107;
            color: black;
        }
        
        .delete-btn {
            background-color: #dc3545;
            color: white;
        }
        
        .job-table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-radius: 5px;
            overflow: hidden;
        }
        
        .job-table th, .job-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        .job-table th {
            background-color: #001b91;
            color: white;
            font-weight: bold;
        }
        
        .job-table tr:hover {
            background-color: #f5f5f5;
        }
        
        .job-table tr:last-child td {
            border-bottom: none;
        }
        
        .applicants-link {
            color: #001b91;
            text-decoration: none;
            font-weight: bold;
        }
        
        .applicants-link:hover {
            text-decoration: underline;
        }
        
        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }
        
        .status-active {
            background-color: #d4edda;
            color: #155724;
        }
        
        .status-inactive {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .action-cell {
            display: flex;
            gap: 5px;
        }
        
        .table-btn {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 12px;
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
        
        .checkbox-cell {
            width: 30px;
        }
        
        @media (max-width: 768px) {
            .dashboard-nav span {
                display: none;
            }
            
            .dashboard-nav a i {
                font-size: 18px;
            }
            
            .action-buttons {
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .job-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <!-- Dashboard Header -->
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

    <!-- Main Content -->
    <div class="container">
        <div class="action-buttons">
            <button class="action-btn add-btn" id="addJobBtn" onclick="window.location.href='lowongan.php'">
                <i class="fas fa-plus"></i> Tambah Lowongan
            </button>
            <button class="action-btn edit-btn" id="editJobBtn" disabled onclick="editSelectedJob()">
                <i class="fas fa-edit"></i> Edit Lowongan
            </button>
            <button class="action-btn delete-btn" id="deleteJobBtn" disabled onclick="deleteSelectedJobs()">
                <i class="fas fa-trash"></i> Hapus Lowongan
            </button>
        </div>

        <table class="job-table">
            <thead>
                <tr>
                    <th class="checkbox-cell"><input type="checkbox" id="selectAll"></th>
                    <th>Judul Lowongan</th>
                    <th>Kategori</th>
                    <th>Tipe</th>
                    <th>Lokasi</th>
                    <th>Status</th>
                    <th>Pelamar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" class="job-checkbox" data-id="1"></td>
                    <td>Marketing Wifi My Republic</td>
                    <td>IT</td>
                    <td>Penuh waktu</td>
                    <td>Bandung</td>
                    <td><span class="status-badge status-active">Aktif</span></td>
                    <td><a href="#" class="applicants-link">15 Pelamar</a></td>
                    <td class="action-cell">
                        <button class="table-btn edit-btn" onclick="editJob(1)"><i class="fas fa-edit"></i></button>
                        <button class="table-btn delete-btn" onclick="deleteJob(1)"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="job-checkbox" data-id="2"></td>
                    <td>Promotor (Bekasi)</td>
                    <td>Managemen</td>
                    <td>Kontrak</td>
                    <td>Bekasi</td>
                    <td><span class="status-badge status-active">Aktif</span></td>
                    <td><a href="#" class="applicants-link">8 Pelamar</a></td>
                    <td class="action-cell">
                        <button class="table-btn edit-btn" onclick="editJob(2)"><i class="fas fa-edit"></i></button>
                        <button class="table-btn delete-btn" onclick="deleteJob(2)"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="job-checkbox" data-id="3"></td>
                    <td>Team Leader Sales Wifi</td>
                    <td>Managemen</td>
                    <td>Penuh waktu</td>
                    <td>Bandung Regency</td>
                    <td><span class="status-badge status-active">Aktif</span></td>
                    <td><a href="#" class="applicants-link">22 Pelamar</a></td>
                    <td class="action-cell">
                        <button class="table-btn edit-btn" onclick="editJob(3)"><i class="fas fa-edit"></i></button>
                        <button class="table-btn delete-btn" onclick="deleteJob(3)"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="job-checkbox" data-id="4"></td>
                    <td>Customer Service Indihome</td>
                    <td>Akuntansi</td>
                    <td>Penuh waktu</td>
                    <td>Surabaya</td>
                    <td><span class="status-badge status-inactive">Nonaktif</span></td>
                    <td><a href="#" class="applicants-link">5 Pelamar</a></td>
                    <td class="action-cell">
                        <button class="table-btn edit-btn" onclick="editJob(4)"><i class="fas fa-edit"></i></button>
                        <button class="table-btn delete-btn" onclick="deleteJob(4)"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="job-checkbox" data-id="5"></td>
                    <td>Sales Internet Provider</td>
                    <td>IT</td>
                    <td>Kontrak</td>
                    <td>Tangerang</td>
                    <td><span class="status-badge status-active">Aktif</span></td>
                    <td><a href="#" class="applicants-link">12 Pelamar</a></td>
                    <td class="action-cell">
                        <button class="table-btn edit-btn" onclick="editJob(5)"><i class="fas fa-edit"></i></button>
                        <button class="table-btn delete-btn" onclick="deleteJob(5)"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="job-checkbox" data-id="6"></td>
                    <td>Admin Sosial Media</td>
                    <td>IT</td>
                    <td>Remote</td>
                    <td>Work From Home</td>
                    <td><span class="status-badge status-active">Aktif</span></td>
                    <td><a href="#" class="applicants-link">18 Pelamar</a></td>
                    <td class="action-cell">
                        <button class="table-btn edit-btn" onclick="editJob(6)"><i class="fas fa-edit"></i></button>
                        <button class="table-btn delete-btn" onclick="deleteJob(6)"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer>
        <p>© 2025 Career Gate. All Rights Reserved.</p>
    </footer>

    <script>
        // Fungsi untuk mengedit lowongan yang dipilih
        function editSelectedJob() {
            const checkedBoxes = document.querySelectorAll('.job-checkbox:checked');
            if (checkedBoxes.length === 1) {
                const jobId = checkedBoxes[0].getAttribute('data-id');
                editJob(jobId);
            }
        }

        // Fungsi untuk menghapus lowongan yang dipilih
        function deleteSelectedJobs() {
            const checkedBoxes = document.querySelectorAll('.job-checkbox:checked');
            if (checkedBoxes.length > 0) {
                if (confirm('Apakah Anda yakin ingin menghapus lowongan yang dipilih?')) {
                    const jobIds = Array.from(checkedBoxes).map(checkbox => checkbox.getAttribute('data-id'));
                    // Di sini Anda bisa mengirim permintaan AJAX untuk menghapus data
                    alert(`Lowongan dengan ID: ${jobIds.join(', ')} berhasil dihapus!`);
                    // Setelah penghapusan, refresh halaman atau hapus baris dari tabel
                    window.location.reload();
                }
            }
        }

        // Fungsi untuk mengedit lowongan
        function editJob(jobId) {
            // Simpan ID lowongan yang akan diedit di localStorage
            localStorage.setItem('editJobId', jobId);
            
            // Redirect ke halaman lowongan.php dengan parameter edit
            window.location.href = 'lowongan.php?edit=true';
        }

        // Fungsi untuk menghapus lowongan
        function deleteJob(jobId) {
            if (confirm('Apakah Anda yakin ingin menghapus lowongan ini?')) {
                // Di sini Anda bisa mengirim permintaan AJAX untuk menghapus data
                alert(`Lowongan dengan ID: ${jobId} berhasil dihapus!`);
                // Setelah penghapusan, refresh halaman atau hapus baris dari tabel
                window.location.reload();
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Select all checkboxes
            const selectAll = document.getElementById('selectAll');
            const jobCheckboxes = document.querySelectorAll('.job-checkbox');
            
            // Select all checkboxes
            selectAll.addEventListener('change', function() {
                jobCheckboxes.forEach(checkbox => {
                    checkbox.checked = this.checked;
                });
                updateActionButtons();
            });
            
            // Update action buttons based on selection
            function updateActionButtons() {
                const checkedBoxes = document.querySelectorAll('.job-checkbox:checked');
                document.getElementById('editJobBtn').disabled = checkedBoxes.length !== 1;
                document.getElementById('deleteJobBtn').disabled = checkedBoxes.length === 0;
            }
            
            jobCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateActionButtons);
            });
            
            // Inisialisasi tombol aksi
            updateActionButtons();
        });
    </script>
</body>
</html>