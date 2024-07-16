<?php //username, mail,password,confirm password
    require "../model/UserModel.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $username =htmlspecialchars(trim($_POST["username"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = htmlspecialchars($_POST["password"]);
    $confirmPassword = htmlspecialchars($_POST["confirmPassword"]);
    
    // Validation
    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "Tous les champs doivent être remplis.";
        exit();
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Veuillez entrer une adresse email valide.";
        exit();
    }
    
    if ($password!== $confirmPassword) {
        echo "Les mots de passe ne correspondent pas.";
        exit();
    } 
    $user = new Users();
    $data = [$username, $email, password_hash($password, PASSWORD_DEFAULT)];  
    $user->createUser($data);
}

?>
<?php
include_once("../views/partials/head.php");
?>

<body>
    <header>
        <?php
        include_once("../views/partials/nav.php");
        ?>
    </header>
    <main>
        <form action="/register" method="POST">
            <h2>Inscription</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
            <input type="submit" value="Register" id="registerForm" name="submit"><br>
             <input type="reset" value="Reset">
        </form>
        <p class="have-account">Vous possédez déjà un compte ?<a href="/login">Se connecter</a></p>
    </main>
    <?php
    include_once("../views/partials/footer.php");
    ?>
</body>

</html>