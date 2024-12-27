<?php
// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'db.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Hash the password before storing it
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, mobile_number, password_hash, created_by) VALUES (?, ?, ?, ?, 'admin')");
    $stmt->bind_param("ssss", $first_name, $last_name, $mobile, $password_hash);
    $stmt->execute();

    // Redirect to the login page after successful registration
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            box-sizing: border-box;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .social-login-container {
    margin-top: 30px;
    text-align: center;
}

.social-login-container p {
    font-size: 16px;
    margin-bottom: 10px;
    color: #555;
}

.social-login {
    display: inline-block;
    margin: 10px;
    padding: 12px;
    border-radius: 50%;
    background-color: #ddd;
    cursor: pointer;
    transition: background-color 0.3s;
}

.social-login:hover {
    background-color: #ccc;
}

.social-login i {
    font-size: 24px;
    color: white;
}

/* Google Button Style */
.social-login.google {
    background-color: #db4437; /* Red color for Google */
}

/* Facebook Button Style */
.social-login.facebook {
    background-color: #3b5998; /* Blue color for Facebook */
}

/* Apple Button Style */
.social-login.apple {
    background-color: #000; /* Black color for Apple */
}

        .submit-btn {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Register</h1>
        <form action="reg.php" method="POST">
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="mobile" pattern="\d{10}" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-btn">Register</button>
            
        </form>
        <div class="social-login-container">
            <p>Or sign up with:</p>
            <!-- Google Login Icon -->
            <div class="social-login google">
                <i class="fab fa-google"></i>
               
            </div>

            <!-- Facebook Login Icon -->
            <div class="social-login facebook">
                <i class="fab fa-facebook-f"></i>
            </div>

            <!-- Apple Login Icon -->
            <div class="social-login apple">
                <i class="fab fa-apple"></i>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
