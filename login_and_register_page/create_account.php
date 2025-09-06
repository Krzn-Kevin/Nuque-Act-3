<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account Page</title>
    <link rel="stylesheet" href="../frontend_design/create_account.css">
</head>
<body>
    <div class="create_page">
        <h1>CREATE ACCOUNT</h1>
        <form action="" method="POST">
            <div class="fields">
                <div class="form_sections">
                    <div class="credentials">
                        <h2>Enter Account Credentials:</h2>
                        <p>Enter E-mail:</p>
                        <input type="text" name="email_username" placeholder="example@example.com" minlength="10" maxlength="40" required>
                        <p>Create Password:</p>
                        <input type="password" name="entered_pass" minlength="8" maxlength="16" required>
                        <p>Select Role</p>
                        <select name="Roles" id="roles">
                            <option value="Librarian">Librarian</option>
                            <option value="Student">Student</option>
                        </select><br>

                        <button type="submit" name="create_button">Create</button>
                        <a href="login.php">Return to Log In Page</a>
                    </div>

                    <div class="personal_information">
                        <h2>Enter Personal Information:</h2>
                        <p>Name:</p>
                        <input type="text" name="name" placeholder="Name" minlength="2" maxlength="100" required>

                        <p>Address:</p>
                        <input type="text" name="address" placeholder="Address" minlength="10" maxlength="100" required>

                        <p>Age:</p>
                        <input type="number" name="age" placeholder="Age" min="1" max="100" required>

                        <p>Phone Number:</p>
                        <input type="text" name="phone_number" placeholder="Phone Number" minlength="10" maxlength="15" required>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>



