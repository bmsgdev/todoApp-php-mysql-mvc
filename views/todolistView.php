<?php
//username, mail,password,confirm password
?>
<?php
include_once("./partials/head.php");
?>

<body>
    <header>
        <?php
        include_once("../views/partials/nav.php");
        ?>
    </header>
    <main>
        <!-- Todo list  table-->
        <h1>Mes tâches</h1>
        <form action="" method="post">
            <input type="text" name="" id="" placeholder="ma nouvelle tâche...">
            <button>Add</button>
        </form>
        <ul>
            <?php
            require("../model/UserModel.php");
            $usersIstance = new Users();
            $users = $usersIstance->getAllUsers();
            foreach ($users as $user) { ?>
                <li>
                    <?php echo $user['username'] ?>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </li>
            <?php } ?>
        </ul>
    </main>
    <?php
    include_once("./partials/footer.php");
    ?>
</body>

</html>