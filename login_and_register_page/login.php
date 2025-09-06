<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Log In Page
    </title>
    <link rel="stylesheet" href="../frontend_design/login.css">
</head>
<body>
    <div class = "sign_up">
        <a href = "create_account.php">No account? Click here.</a>
    </div>
    <div class = "login_page">
        <h1>LOGIN</h1>
        <div class = "fields">
            <form action = "" method = "POST">
                <p>Enter E-mail:</p>
                <input type = "text"  name = "email_username" placeholder="example@example.com"
                minlength="10" maxlength="40" required>
                <p>Enter Password:</p>
                <input type="password" name="entered_pass" minlength="8" maxlength="16" required>
                <button type = "submit" name = "login_button">Enter</button>
                <a href = "forgot_pass.php">Forgot password?</a>
            </form>
        </div>
    </div>
</body>
</html>
