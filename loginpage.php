<?php
session_start();
$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System - Login & Registration</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="form-container">
        <!-- Error Message -->
        <?php if ($error): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>

        <!-- Login Form -->
        <div class="form-box" id="loginForm">
            <h2>Login</h2>
            <form method="POST" action="Registation.php">
                <div class="input-box">
                    <input type="email" name="email" class="input-box" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" class="input-box" placeholder="Password" required>
                </div>
                <div class="button-box">
                    <button type="submit" name="login" class="login-btn">Login</button>
                </div>
                <div class="toggle-link">
                    <p>Don't have an account? <a href="#" onclick="switchForm('registerForm', 'REGISTRATION')">Register Here</a></p>
                </div>
            </form>
        </div>

        <!-- Registration Form -->
        <div class="form-box" id="registerForm" style="display: none;">
            <h2>Register</h2>
            <div class="form-content">
                <form method="POST" action="Registation.php" enctype="multipart/form-data">
                    <input type="text" name="first_name" class="input-box" placeholder="First Name" required>
                    <input type="text" name="last_name" class="input-box" placeholder="Last Name" required>
                    <input type="text" name="contact_number" class="input-box" placeholder="Contact Number" required>
                    <input type="email" name="email" class="input-box" placeholder="Email" required>
                    <input type="password" name="password" class="input-box" placeholder="Password" required>
                    <input type="password" name="confirm_password" class="input-box" placeholder="Confirm Password" required>
                    <select name="event" class="input-box" required>
                        <option value="">Select Event</option>
                        <option value="Dance">Dance</option>
                        <option value="Music">Music</option>
                        <option value="Poetry">Poetry</option>
                        <option value="Art">Art</option>
                        <option value="Drama">Drama</option>
                        <option value="Singing">Singing</option>
                        <option value="Photography">Photography</option>
                        <option value="Painting">Painting</option>
                        <option value="Sports">Sports</option>
                        <option value="Quiz">Quiz</option>
                    </select>
                    <input type="file" name="profile_pic" class="input-box" accept="image/*">
                    <button type="submit" name="register" class="login-btn">Register</button>
                </form>
            </div>
            <div class="toggle-link">
                <p>Already have an account? <a href="#" onclick="switchForm('loginForm', 'LOGIN')">Login Here</a></p>
            </div>
        </div>
    </div>

    <script>
        function switchForm(formId, formType) {
            document.getElementById('loginForm').style.display = formType === 'LOGIN' ? 'block' : 'none';
            document.getElementById('registerForm').style.display = formType === 'REGISTRATION' ? 'block' : 'none';
        }
    </script>
</body>
</html>
