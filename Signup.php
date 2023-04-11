<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup Form</title>
    <!-- CSS -->
    <link rel = "stylesheet" href="Sign-up-sheet.css">
    
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <section class = "container forms">
        <div class = "form signup2">
            <div class = "form-content">
                <header>Signup</header>
                
                <!-- Sign Up Form -->
                
                <form action="SignUpback.php" method="post">

                    <div class = "field input-field">
                        <input type = "name" placeholder = "Name" name = "Name" class = "input">
                    </div>
                    
                    <div class = "field input-field">
                        <input type = "email" placeholder = "Email" name = "Email" class = "input">
                    </div>

                    <div class = "field input-field">
                        <input type = "password" placeholder = "Password"  name = "Password" class = "password">
                    </div>
                    <br>

                    <div class = "field input-field">
                        <input type = "password" placeholder = "Confirm Password"  name = "Confirm_Password" class = "password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    
                    <input class = "field button-field" type="submit" value="Submit">
                </form>
                <div class="form-link">
                    <span>Already have an account?<a href = "SignIn.php">Login</a></span>
                </div>
                </div>
            </section>
        </div>
         <!-- JavaScript -->
    <script src = "script.js"></script>

</body>
</html>


