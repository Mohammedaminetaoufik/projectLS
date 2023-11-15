<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 100px;
        }

        .login-container {
            display: flex;
            justify-content: space-between;
            max-width: 800px;
            margin: auto;
        }

        .form-group {
            width: 45%;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Signup Form -->
        <div id="signup-form" class="form-group">
            <h2>Signup</h2>
            <form id="signup-form" class="form-group">
                <label for="signup-username">Username:</label>
                <input type="text" id="signup-username" name="signup-username" required>

                <label for="signup-password">Password:</label>
                <input type="password" id="signup-password" name="signup-password" required>

                <button type="button" onclick="signup()">Signup</button>
            </form>
        </div>

        <!-- Login Form -->
        <div id="login-form" class="form-group">
            <h2>Login</h2>
            <form id="login-form" class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="checkbox" onclick="showPass()"> SHOW PASSWORD <br><br>

                <button type="button" onclick="login()">Login</button>
            </form>
        </div>
    </div>

    <script>
        function login() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Check if the entered credentials are for the admin
            if (username === 'admin' && password === 'admin') {
                // Redirect to the admin page (replace 'admin-page.html' with the actual admin page URL)
                window.location.href = 'adminepage.html';
            } else {
                // For simplicity, show an alert for unsuccessful login
                window.location.href = 'clientpage.html';;
            }
        }

        function signup() {
            var username = document.getElementById('signup-username').value;
            var password = document.getElementById('signup-password').value;

            // Implement signup logic (replace with your logic)
            alert('Signup successful!\nUsername: ' + username);

            // Redirect to the login section after signup
            document.getElementById('login-form').scrollIntoView();
        }

        function showPass() {
            const passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>
</body>
</html>
