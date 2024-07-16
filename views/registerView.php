<?php //username, mail,password,confirm password 
?>
<?php
include_once("./partials/head.php");
?>

<body>
    <header>
        <?php
        include_once("./partials/nav.php");
        ?>
    </header>
    <main>
        <form action="" method="post">
            <h2>Inscription</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
            <input type="submit" value="Register">
        </form>
        <p class="have-account">Vous possédez déjà un compte ?<a href="./loginView.php">Se connecter</a></p>
    </main>
    <?php
    include_once("./partials/footer.php");
    ?>
</body>

</html>