<?php
//username, mail,password,confirm password
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
        <!-- Todo list  table-->
        <h1>Mes tâches</h1>
        <form action="" method="post" class="task-form">
            <input type="text" name="" id="" placeholder="ma nouvelle tâche...">
            <button class="btn-add">Add</button>
        </form>
        <ul class="tasks-container">
            <?php
            require("../model/UserModel.php");
            $usersIstance = new Users();
            $users = $usersIstance->getAllUsers();
            foreach ($users as $user) { ?>
                <li class="task">
                    <?php echo $user['username'] ?>
                    <span>
                        <a href="" class="btn-edit-task">Edit</a>
                        <a href="" class="btn-delete-task">Delete</a>
                    </span>
                </li>
            <?php } ?>
        </ul>
    </main>
    <?php
    include_once("../views/partials/footer.php");
    ?>
</body>

</html>