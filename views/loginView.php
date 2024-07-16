<?php
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
    <form action="" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <p class="have-account">Vous ne possédez pas un compte ?<a href="./registerView.php">S'inscrire</a></p>
    <?php
    include_once("./partials/footer.php");
    ?>
</body>

</html>