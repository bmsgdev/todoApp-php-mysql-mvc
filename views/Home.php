<?php
?>

<?php
require_once("../views/partials/head.php");
?>
<body>
    <header>
        <?php
        require_once("../views/partials/nav.php");
        ?>
    </header>
    <main>
         <!-- Welcome message and    CTA  creat task  in html-->
          <h1 class="home-title">Bienvenue sur TodoList!</h1>
          <p class="home-p">Créez et gérer vos tâches avec TodoList.</p>
          <a href="/todo-list" class="home-button">Créer une nouvelle tâche</a>
    </main>
    <?php
    require_once("../views/partials/footer.php");
    ?>
</body>

</html>