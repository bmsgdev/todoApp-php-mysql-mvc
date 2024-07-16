        <?php
            require("../model/UserModel.php");
            $usersIstance = new Users();
            $users = $usersIstance->getAllUsers();
            foreach ($users as $user) { ?>
                <li><?php echo $user ?></li>
            <?php } ?>
