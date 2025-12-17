<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    if (empty($email) || empty($password)) {
    die("Email dan password harus diisi.");
}

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        header("Location: halamanberanda.php");
        exit();
    } else {
        echo "Login gagal: Email atau password salah.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign In</title>
  <style> 
    * {
    box-sizing: border-box;
  }
  
  body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #fff;
    color: #000;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .container {
    width: 100%;
    max-width: 400px;
    padding: 20px;
  }
  
  h1 {
    margin-bottom: 5px;
  }
  
  .subtitle {
    color: gray;
    margin-bottom: 30px;
  }
  
  .form {
    display: flex;
    flex-direction: column;
  }
  
  label {
    font-weight: 600;
    margin-bottom: 5px;
  }
  
  input {
    padding: 12px;
    margin-bottom: 20px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 16px;
    width: 100%;
  }
  
  .password-label {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .password-wrapper {
    position: relative;
  }
  
  .password-wrapper input {
    padding-right: 40px;
  }
  
  .eye-icon {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
  }
  
  .forgot {
    font-size: 14px;
    color: red;
    text-decoration: none;
  }
  
  .btn-primary {
    background-color: red;
    color: #fff;
    padding: 14px;
    border: none;
    border-radius: 30px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    margin-top: 10px;
  }
  
  .btn-google {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background-color: white;
    color: #333;
    padding: 14px;
    border: 1px solid #ddd;
    border-radius: 30px;
    font-size: 16px;
    margin-top: 16px;
    cursor: pointer;
  }
  
  .btn-google img {
    width: 20px;
    height: 20px;
  }
  
  .signup-text {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
  }
  
  .signup-text a {
    color: red;
    text-decoration: none;
    font-weight: 600;
  }
  .btn-primary {
    display: block; /* agar seperti tombol */
    text-align: center;
    background-color: red;
    color: #fff;
    padding: 14px;
    border: none;
    border-radius: 30px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    margin-top: 10px;
    text-decoration: none; /* hilangkan underline */
  }
  </style>
</head>
<body>
  <div class="container">
    <h1>Sign In</h1>

    <form class="form" action="login.php" method="post">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required />

      <div class="password-label">
        <label for="password">Password</label>
        <a href="#" class="forgot">Forgot Password?</a>
      </div>
      <div class="password-wrapper">
        <input type="password" id="password" name="password" placeholder="Enter your password" required />
        <span class="eye-icon"></span>
      </div>

      <button class="btn-primary" type="submit">Sign In</button>

      <button class="btn-google" type="button">
        <img src="https://www.google.com/favicon.ico" alt="Google logo" />
        Sign In with Google
      </button>
    </form>

    <p class="signup-text">New to Dealls? <a href="signup.html">Sign Up</a></p>
  </div>
</body>
</html>

