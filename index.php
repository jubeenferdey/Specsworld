<?php
include('libs/loading.php');
$email = $_POST['email'];
$password = $_POST['password'];
$adminAuthResult = validateAdmin($email, $password);
$userAuthResult = validateUser($email, $password);
if( isset($email,$password) and $userAuthResult){
    header("Location: home.php");
}
else{
    loadTemplate("head");
?>
<main>
<body>
<section class="heading">
    <h1>Login</h1>
    <p> <a href="home.html">home</a> >> login </p>
</section>
<section class="login-form">  
<form method="POST">
        <h3>Login to Continue</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="email"  placeholder="Email" name="email">
        </div>
        <div class="inputBox">
            <span class="fas fa-lock"></span>
            <input type="password" placeholder="Password" name="password">
        </div>
        <input type="submit" value="sign in" class="btn">
        <div class="flex">
            <input type="checkbox"  id="remember-me">
            <label for="remember-me">Remember me</label>
            <a href="#">Forgot password?</a>
        </div>
        <a href="pages/userReg.php" class="btn">Create an Account</a>
    </form>
    </section>
</main>
<section class="footer">
<!-- footer relies here -->
<div class="credit"> created by <span>Klint Shay</span>, with ❤️ </div>
</section>
<!-- footer section ends -->

</body>
</html>
<?php } ?>
