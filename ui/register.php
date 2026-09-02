<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register - Zeith</title>
</head>

<body>
    <div class="register-container">
        <div class="register-card">
            <h1 class="register-title">Zeith</h1>
            <h2 class="register-header">Create Account</h2>
            <p class="register-subheader">Join our community to get the finest watches</p>

            <form action="" method="POST" class="register-form">
                <div class="register-grid">
                    <div>
                        <label class="register-label">First name</label>
                        <input type="text" name="firstname" placeholder="firstname" class="register-input">
                    </div>
                    <div>
                        <label class="register-label">Last name</label>
                        <input type="text" name="lastname" placeholder="lastname" class="register-input">
                    </div>
                </div>

                <div>
                    <label class="register-label">Email address</label>
                    <input type="email" name="email" placeholder="chibuikemnweze2020@gmail.com" class="register-input">
                </div>

                <div>
                    <label class="register-label">Password</label>
                    <input type="password" name="password" placeholder="your password" class="register-input">
                </div>

                <button type="submit" class="register-button">Create Account</button>
            </form>

            <p class="register-have-account">
                Already have an account? <a href="./login.php" class="register-link">Sign in here</a>
            </p>
        </div>
    </div>
</body>

</html>