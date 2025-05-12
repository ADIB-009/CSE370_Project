<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 350px;
            position: relative;
            z-index: 1;
        }
        
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 24px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        
        .btn {
            width: 100%;
            padding: 12px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        
        .login-btn {
            background-color: #45a049;
        }
        
        .login-btn:hover {
            background-color:  #4CAF50;
        }
        .delete-btn {
            background-color: #B22222;
        }
        
        .delete-btn:hover {
            background-color: #FF2400;
        }
        .forget-btn {
            background-color: #FCD12A;
        }
        
        .forget-btn:hover {
            background-color: #FCE205;
        }
        
        .signup-btn {
            background: none;
            border: none;
            color: #1a73e8;
            cursor: pointer;
            font-size: 14px;
            text-decoration: underline;
            padding: 0;
        }
        
        .signup-btn:hover {
            color: #0d5bba;
        }
        
        .signup-section {
            text-align: center;
            margin-top: 20px;
        }
        
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
            justify-content: center;
            align-items: center;
        }
        
        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            width: 350px;
            animation: modalopen 0.3s;
            max-height: 90vh;
            overflow-y: auto;
        }
        
        @keyframes modalopen {
            from {opacity: 0; transform: translateY(-50px)}
            to {opacity: 1; transform: translateY(0)}
        }
        
        .close-btn {
            float: right;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            color: #777;
        }
        
        .close-btn:hover {
            color: #333;
        }
        
        .signup-btn-submit {
            background-color: #4285f4;
        }
        
        .signup-btn-submit:hover {
            background-color: #3367d6;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action = "signin.php" method = "post" id="loginForm">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <!-- <button type="submit" class="btn login-btn">Login</button> -->
            <input type="submit" class="btn login-btn" value="Log in" name="login" />
        </form>
        <div class = "forget">
        <button class="btn forget-btn" onclick="openForgotPassword()">Forget Password ?</button>
        </div>
        <div class = "delete">
        <button class="btn delete-btn" onclick="openDeleteAccount()">Delete Account</button>
        </div>
        <div class="signup-section">
            <p>Don't have an account? <button class="signup-btn" id="signupBtn">Sign up</button></p>
        </div>
    </div>

    <!-- Signup Modal -->
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeModal">&times;</span>
            <h2>Create Account</h2>
            <form action = "insert.php" method = "post" id="signupForm">
                <div class="form-group">
                    <label for="signupName">Full Name</label>
                    <input type="text" id="signupName" name="name" required>
                </div>
                <div class="form-group">
                    <label for="signupEmail">Email</label>
                    <input type="email" id="signupEmail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="signupPhone">Contact Number</label>
                    <input type="tel" id="signupPhone" name="phone" pattern="[0-9]{10}" 
                           title="Please enter a 10-digit phone number" required>
                </div>
                <div class="form-group">
                    <label for="signupUsername">Username</label>
                    <input type="text" id="signupUsername" name="username" required>
                </div>
                <div class="form-group">
                    <label for="signupPassword">Password</label>
                    <input type="password" id="signupPassword" name="password" required>
                </div>
                <div class="form-group">
                    <label for="signupConfirmPassword">Confirm Password</label>
                    <input type="password" id="signupConfirmPassword" name="confirmPassword" required>
                </div>
                <input type="submit" class="btn signup-btn-submit" value="Sign Up" name="signup" />
            </form>
        </div>
    </div>

    <script>
        
        // Modal handling
        const modal = document.getElementById('signupModal');
        const signupBtn = document.getElementById('signupBtn');
        const closeBtn = document.getElementById('closeModal');
        
        // Open modal when signup button is clicked
        signupBtn.addEventListener('click', function() {
            modal.style.display = 'flex';
        });
        
        // Close modal when X is clicked
        closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });
        function openDeleteAccount() {
                window.location.href = "delete.php";
            }
        function openForgotPassword() {
                window.location.href = "forget.php";
            }
        
    </script>
</body>
</html>