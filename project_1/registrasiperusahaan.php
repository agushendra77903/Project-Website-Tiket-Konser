<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Perusahaan - CareerGate</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
    }
    
    body {
      background-color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }
    
    .register-container {
      width: 100%;
      max-width: 500px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    
    h1 {
      font-size: 24px;
      font-weight: 600;
      color: #000000;
      margin-bottom: 10px;
    }

    .subtitle {
      font-size: 14px;
      color: #666666;
      margin-bottom: 20px;
    }
    
    h2 {
      color: #333;
      font-size: 18px;
      margin: 25px 0 15px;
      padding-bottom: 5px;
      border-bottom: 1px solid #eee;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      font-size: 14px;
      font-weight: 500;
      color: #333;
      margin-bottom: 8px;
    }
    
    label.required:after {
      content: " *";
      color: #e74c3c;
    }
    
    input {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 14px;
      transition: border 0.3s;
    }
    
    input:focus {
      outline: none;
      border-color: #e74c3c;
    }
    
    .password-container {
      position: relative;
    }
    
    .toggle-password {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      cursor: pointer;
      color: #666;
      font-size: 18px;
      padding: 5px;
    }
    
    .show-password {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .show-password input {
      width: auto;
      margin-right: 10px;
      margin-bottom: 0;
    }
    
    .btn-register {
      background-color: #e74c3c;
      color: white;
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.3s;
    }
    
    .btn-register:hover {
      background-color: #c0392b;
    }
    
    .login-link {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: #666;
    }
    
    .login-link a {
      color: #e74c3c;
      font-weight: 500;
      text-decoration: none;
    }
    
    .login-link a:hover {
      text-decoration: underline;
    }
    
    .error-message {
      color: #e74c3c;
      font-size: 13px;
      margin-top: 5px;
      display: none;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h1>Registrasi Perusahaan</h1>
    <p class="subtitle">Create your account to start your journey with CareerGate</p>

    <form id="companyForm" action="register_company.php" method="post">
      <h2>Info Perusahaan</h2>
      
      <div class="form-group">
        <label for="company_name" class="required">Nama Perusahaan (Usaha)</label>
        <input type="text" id="company_name" name="company_name" placeholder="Masukkan nama perusahaan" required>
        <div class="error-message" id="company-error">Harap isi nama perusahaan</div>
      </div>
      
      <div class="form-group">
        <label for="contact_person" class="required">Nama Penanggung Jawab</label>
        <input type="text" id="contact_person" name="contact_person" placeholder="Masukkan nama penanggung jawab" required>
        <div class="error-message" id="contact-error">Harap isi nama penanggung jawab</div>
      </div>
      
      <div class="form-group">
        <label for="phone" class="required">Nomor HP/Telepon</label>
        <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon" required>
        <div class="error-message" id="phone-error">Harap isi nomor telepon</div>
      </div>
      
      <h2>Info Login</h2>
      
      <div class="form-group">
        <label for="email" class="required">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Masukkan alamat email" required>
        <div class="error-message" id="email-error">Harap isi alamat email</div>
      </div>
      
      <div class="form-group">
        <label for="password" class="required">Password</label>
        <div class="password-container">
          <input type="password" id="password" name="password" placeholder="Buat password" required>
          <button type="button" class="toggle-password" onclick="togglePassword('password')">👁️</button>
        </div>
        <div class="error-message" id="password-error">Harap buat password</div>
      </div>
      
      <div class="form-group">
        <label for="password_verify" class="required">Password Verify</label>
        <div class="password-container">
          <input type="password" id="password_verify" name="password_verify" placeholder="Ulangi password" required>
          <button type="button" class="toggle-password" onclick="togglePassword('password_verify')">👁️</button>
        </div>
        <div class="error-message" id="confirm-error">Harap konfirmasi password</div>
      </div>
      
      <div class="show-password">
        <input type="checkbox" id="show_passwords" onclick="toggleAllPasswords()">
        <label for="show_passwords">Show Password</label>
      </div>
      
      <button type="submit" class="btn-register">REGISTER</button>
    </form>
    
    <p class="login-link">Sudah punya akun? <a href="login_company.php">Sign in</a></p>
  </div>

  <script>
    function togglePassword(fieldId) {
      const field = document.getElementById(fieldId);
      const icon = field.nextElementSibling;
      
      if (field.type === 'password') {
        field.type = 'text';
        icon.textContent = '🙈';
      } else {
        field.type = 'password';
        icon.textContent = '👁️';
      }
    }

    function toggleAllPasswords() {
      const showPasswords = document.getElementById('show_passwords').checked;
      document.getElementById('password').type = showPasswords ? 'text' : 'password';
      document.getElementById('password_verify').type = showPasswords ? 'text' : 'password';
      
      // Update icons
      const passwordIcon = document.querySelector('#password + .toggle-password');
      const confirmIcon = document.querySelector('#password_verify + .toggle-password');
      
      passwordIcon.textContent = showPasswords ? '🙈' : '👁️';
      confirmIcon.textContent = showPasswords ? '🙈' : '👁️';
    }

    // Form validation
    document.getElementById('companyForm').addEventListener('submit', function(e) {
      let isValid = true;
      
      // Check required fields
      ['company_name', 'contact_person', 'phone', 'email', 'password', 'password_verify'].forEach(field => {
        const input = document.getElementById(field);
        const error = document.getElementById(`${field}-error`);
        
        if (!input.value.trim()) {
          error.style.display = 'block';
          input.style.borderColor = '#e74c3c';
          isValid = false;
        } else {
          error.style.display = 'none';
          input.style.borderColor = '#ddd';
        }
      });
      
      // Check password match
      const password = document.getElementById('password');
      const confirm = document.getElementById('password_verify');
      const confirmError = document.getElementById('confirm-error');
      
      if (password.value !== confirm.value && confirm.value) {
        confirmError.textContent = 'Password tidak sama';
        confirmError.style.display = 'block';
        confirm.style.borderColor = '#e74c3c';
        isValid = false;
      }
      
      if (!isValid) {
        e.preventDefault();
      }
    });

    // Clear errors when typing
    document.querySelectorAll('input').forEach(input => {
      input.addEventListener('input', function() {
        const error = document.getElementById(`${this.id}-error`);
        if (error) {
          error.style.display = 'none';
          this.style.borderColor = '#ddd';
        }
      });
    });
  </script>
</body>
</html>