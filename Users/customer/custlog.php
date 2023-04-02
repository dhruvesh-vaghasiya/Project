<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login page in HTML</title>
    <link rel="stylesheet" href="css/csslogin.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <form name="login" action="custverify.php" method="post" onsubmit="return validateForm()">
        <div class="heading">
            <h3>Customer</h3>
            <p>Login in with your username and password</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="Container1">
            Your Email
            <input type="email" placeholder="Enter Email id" name="name" required>

            <br><br>
            Your password
            <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required>

            <div class="Container2">
                <p class="fpwd"> <a href="forgot/verification.php">Forgot Password?</a></p>
            </div>

            <button type="submit">Login</button>
        </div>

    </form>
    <script src="js/validate_logindata.js"></script>
</body>
</html>
