<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form inputs
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $confirm_password = trim($_POST['confirm_password'] ?? '');

    // Validate inputs
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $error = "Email already registered.";
        } else {
            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Insert new user
            $stmt = $conn->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $hashedPassword);
            
            if ($stmt->execute()) {
                header("Location: halamanberanda.php");
                exit();
            } else {
                $error = "Registration failed. Please try again.";
            }
        }
        $stmt->close();
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - CareerGate</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
    }
    
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }
    
    .signup-container {
      width: 100%;
      max-width: 400px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    
    .signup-header {
      text-align: center;
      margin-bottom: 30px;
    }
    
    h1 {
      font-size: 24px;
      font-weight: 600;
      color: #001b91;
      margin-bottom: 8px;
    }
    
    .subtitle {
      font-size: 14px;
      color: #666;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-weight: 500;
      margin-bottom: 8px;
      color: #333;
    }
    
    .input-field {
      width: 100%;
      padding: 12px 16px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 14px;
      transition: border-color 0.3s;
    }
    
    .input-field:focus {
      outline: none;
      border-color: #001b91;
    }
    
    .password-container {
      position: relative;
    }
    
    .toggle-password {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      cursor: pointer;
      color: #666;
      font-size: 18px;
      padding: 5px;
    }
    
    .divider {
      height: 1px;
      background-color: #eee;
      margin: 25px 0;
      position: relative;
    }
    
    .divider::after {
      content: "or";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: white;
      padding: 0 10px;
      color: #999;
      font-size: 12px;
    }
    
    .btn {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      font-size: 15px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s;
    }
    
    .btn-primary {
      background-color: #e74c3c;
      color: white;
      border: none;
    }
    
    .btn-primary:hover {
      background-color: #c0392b;
    }
    
    .btn-google {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      background: white;
      color: #333;
      border: 1px solid #ddd;
    }
    
    .btn-google:hover {
      background: #f9f9f9;
    }
    
    .login-text {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: #666;
    }
    
    .login-text a {
      color: #001b91;
      font-weight: 500;
      text-decoration: none;
    }
    
    .login-text a:hover {
      text-decoration: underline;
    }
    
    .error-message {
      color: #e74c3c;
      font-size: 13px;
      margin-top: 5px;
      display: block;
      text-align: center;
    }
    
    .field-error {
      color: #e74c3c;
      font-size: 13px;
      margin-top: 5px;
      display: none;
    }
  </style>
</head>
<body>
  <div class="signup-container">
    <div class="signup-header">
      <h1>Sign Up</h1>
      <p class="subtitle">Create your account to start your journey with CareerGate</p>
    </div>

    <?php if (!empty($error)): ?>
      <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form id="signupForm" action="register.php" method="post">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" class="input-field" placeholder="Enter your full name" required value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
        <div class="field-error" id="name-error">Please fill out this field.</div>
      </div>
      
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="input-field" placeholder="Enter your email" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
        <div class="field-error" id="email-error">Please fill out this field.</div>
      </div>
      
      <div class="form-group">
        <label for="password">Password</label>
        <div class="password-container">
          <input type="password" id="password" name="password" class="input-field" placeholder="Create a password" required>
          <button type="button" class="toggle-password" onclick="togglePassword('password')">👁️</button>
        </div>
        <div class="field-error" id="password-error">Please fill out this field.</div>
      </div>
      
      <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <div class="password-container">
          <input type="password" id="confirm_password" name="confirm_password" class="input-field" placeholder="Confirm your password" required>
          <button type="button" class="toggle-password" onclick="togglePassword('confirm_password')">👁️</button>
        </div>
        <div class="field-error" id="confirm-error">Please fill out this field.</div>
      </div>

      <button type="submit" class="btn btn-primary">Sign Up</button>
      
      <div class="divider"></div>
      
      <button type="button" class="btn btn-google">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22.56 12.25C22.56 11.47 22.49 10.72 22.36 10H12V14.26H17.92C17.66 15.63 16.88 16.79 15.71 17.57V20.34H19.28C21.36 18.42 22.56 15.6 22.56 12.25Z" fill="#4285F4"/>
          <path d="M12 23C14.97 23 17.46 22.02 19.28 20.34L15.71 17.57C14.73 18.23 13.48 18.63 12 18.63C9.14 18.63 6.72 16.7 5.84 14.1H2.18V16.94C4 20.53 7.7 23 12 23Z" fill="#34A853"/>
          <path d="M5.84 14.1C5.62 13.43 5.49 12.73 5.49 12C5.49 11.27 5.62 10.57 5.84 9.9V7.06H2.18C1.42 8.55 1 10.22 1 12C1 13.78 1.42 15.45 2.18 16.94L5.84 14.1Z" fill="#FBBC05"/>
          <path d="M12 5.38C13.62 5.38 15.06 5.94 16.21 7.02L19.36 3.87C17.45 2.09 14.97 1 12 1C7.7 1 4 3.47 2.18 7.06L5.84 9.9C6.72 7.3 9.14 5.38 12 5.38Z" fill="#EA4335"/>
        </svg>
        Sign Up with Google
      </button>
    </form>

    <p class="login-text">Already have an account? <a href="login.html">Sign In</a></p>
  </div>

  <script>
    // Toggle password visibility
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

    // Form validation
    document.getElementById('signupForm').addEventListener('submit', function(e) {
      let isValid = true;
      
      // Validate required fields
      ['name', 'email', 'password', 'confirm_password'].forEach(field => {
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
      
      // Validate password match
      const password = document.getElementById('password');
      const confirm = document.getElementById('confirm_password');
      const confirmError = document.getElementById('confirm-error');
      
      if (password.value !== confirm.value && confirm.value) {
        confirmError.textContent = 'Passwords do not match';
        confirmError.style.display = 'block';
        confirm.style.borderColor = '#e74c3c';
        isValid = false;
      }
      
      if (!isValid) {
        e.preventDefault();
      }
    });

    // Clear errors when typing
    document.querySelectorAll('.input-field').forEach(input => {
      input.addEventListener('input', function() {
        const error = document.getElementById(`${this.id}-error`);
        error.style.display = 'none';
        this.style.borderColor = '#ddd';
      });
    });
  </script>
</body>
</html>