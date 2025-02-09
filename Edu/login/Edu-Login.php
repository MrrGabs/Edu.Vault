<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>EduVault - Login & Sign Up</title>
</head>
<body>
    <header class="nav-bar">
        <img src="logo.png" alt="EduVault Logo" class="logo">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button><i class="fas fa-search"></i></button>
        </div>
    </header>

    <div class="container">
        <div class="form-container">
            <h1 id="welcome-message">Welcome Back to EduVault</h1> <!-- Moved to the top -->
            <form method="post" action="Edu-Login.php" id="login-form" class="form" onsubmit="return validateLogin()">
                <input type="text" name="username" id="login-username" placeholder="Username" required>
                <input type="password" name="password" id="login-password" placeholder="Password" required>
                <button type="submit"  name="login_Btn"  >Login</button>
                <p class="switch-form">Don't have an account? <a href="#" onclick="showSignUp()">Sign Up</a></p>
            </form>
            <form id="signup-form" class="form" onsubmit="return validateSignUp()">
                <h1 id="welcome-message">Join EduVault Today</h1> <!-- Moved to the top -->
                <input type="text" id="signup-username" placeholder="Username" required>
                <input type="email" id="signup-email" placeholder="Email" required>
                <input type="password" id="signup-password" placeholder="Password" required>
                <input type="password" id="signup-confirm-password" placeholder="Confirm Password" required>
                <button type="submit">Sign Up</button>
                <p class="switch-form">Already have an account? <a href="#" onclick="showLogin()">Login</a></p>
            </form>
        </div>
    </div>

    <footer>
        <div class="social-media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <p>&copy; 2024 EduVault. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root","");

if(isset($_POST['login_Btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql= "SELECT * FROM logindata.logindeatles WHERE Username = '$username'";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['Password'];

        if($password == $resultPassword){
            header('Location: http://localhost/Edu/index.html'); 
            exit(); 
        }else{
            echo "<script> alert('Login unsuccessful'); </script>";
        }
    }
}
?>



