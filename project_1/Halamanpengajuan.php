<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan</title>
    <style> 
        body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    width: 100vw;
}

header {
    background: linear-gradient(to right, red, red);
    color: white;
    padding: 10px;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

header img {
    width: 30px;
    margin-right: 15px;
    margin-left: 20px;
}

h1 {
    font-size: 28px;
    font-weight: bold;
    color: red;
    text-shadow: 2px 2px 4px black;
    margin: 0;
}

main {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    width: 100%;
    max-width: 800px;
    margin-top: 700px;
    transition: transform 0.3s ease-in-out;
    img{
        width: 100px;
    }
}

main:hover {
    transform: scale(1.02);
}

h2 {
    font-size: 20px;
    font-weight: normal;
    color: gray;
    margin-bottom: 25px;
}

form label {
    font-weight: bold;
    display: block;
    margin-top: 20px;
    font-size: 18px;
}

form input[type="text"],
form input[type="email"],
form input[type="file"] {
    width: 100%;
    padding: 15px;
    margin-top: 5px;
    border: 1px solid #bbb;
    border-radius: 10px;
    background-color: #f4f4f4;
    font-size: 16px;
    transition: all 0.3s ease;
}

form input:focus {
    border-color: gray;
    box-shadow: 0 0 10px rgba(128, 128, 128, 0.5);
    outline: none;
}

form input::placeholder {
    color: #aaa;
    font-size: 14px;
}

input[type="submit"] {
    margin-top: 25px;
    width: 100%;
    background: red;
    color: white;
    border: none;
    padding: 15px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 10px;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

input[type="submit"]:hover {
    background: maroon;
    transform: scale(1.05);
}

footer {
    background: red;
    color: white;
    padding: 15px;
    width: 100%;
    
    position: fixed;
    bottom: 0;
    left: 0;
    font-size: 16px;

    label{
        position: ri;
    }
}
    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="Logo">
    </header>

    <main>
        <div id="atas">
            <img src="tpm.png" alt="TPM">
            <h1>Lamar ke <span>SPG & SPB WIFI (Malang)</span></h1>
        </div>
        
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            
            <label for="whatsapp">Nomor WhatsApp</label>
            <input type="text" id="whatsapp" name="whatsapp" placeholder="Masukan nomor WhatsApp aktif" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukan email kamu" required>
            
            <label for="lokasi">Lokasi</label>
            <input type="text" id="lokasi" name="lokasi" placeholder="Input nama kota/kabupaten,e.g. jakarta Barat, indramayu" required>
            
            <label for="pendidikan">Institusi Pendidikan Terakhir</label>
            <input type="text" id="pendidikan" name="pendidikan" placeholder="Cth: Universitas Indonesia" required>
            
            <label for="jurusan">Jurusan/Peminatan</label>
            <input type="text" id="jurusan" name="jurusan" placeholder="Ex: Ekonomi, Ilmu Komputer, Sastra Inggris" required>
            
            <label for="pengalaman">Tingkat Pengalaman</label>
            <input type="text" id="pengalaman" name="pengalaman" required>
            
            <label for="cv">CV</label>
            <input type="file" id="cv" name="cv" required>
            
            <label for="portofolio">Portofolio (Opsional)</label>
            <input type="file" id="portofolio" name="portofolio">
            
            <input type="submit" value="kirim">
        </form>
    </main>

    <footer>
        <label>Kontak</label>
        <!-- Tambahkan konten footer jika diperlukan -->
    </footer>
</body>
</html>
