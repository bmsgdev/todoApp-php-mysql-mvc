<?php
require "../model/Taskmodel.php";
$taskModel = new TaskModel();
// recuperation des données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add"])) {
    $task = $_POST["task"];
    $taskModel->addTask([$task]);
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
        <!-- Todo list  table-->
        <h1>Mes tâches</h1>
        <form action="/todo-list" method="post" class="task-form">
            <input type="text" name="task" id="" placeholder="ma nouvelle tâche...">
            <button class="btn-add" name="add">add </button>
            <!-- <input type="submit" value="Add" class="btn-add" name="add"> -->
        </form>
        <ul class="tasks-container">
            
                <?php
                $ist = new taskModel();
                $tasks = $ist->getAllTask();
                foreach ($tasks as $task) {
                ?>
                    <li class="task"><?php echo $task['task_text'] ?>
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