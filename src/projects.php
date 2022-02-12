<?php
require(__DIR__ . '/projects_helper.php');
?>

<!DOCTYPE HTML>
<html>

<?= file_get_contents(__DIR__ . '/head.html') ?>

<body>

    <?= file_get_contents(__DIR__ . '/header_small.html') ?>

    <?php
    foreach ($categories as $category => $projectsInfo) {
    ?>

        <div class="content">
            <div class="inner">
                <h1 style="margin-top: 0.5em;"><?= $category ?></h1>

                <p><?= $projectsInfo['summary'] ?></p>
            </div>
        </div>


    <?php
        renderProjectGroup($projectsInfo['projects']);
    } // End categories foreach
    ?>

    <div class="content">
        <div class="inner">
            <p>
                For the credits for images/icons used, check <a href="./credits.html">here</a>
            </p>
            <p>
                All images released under the <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">CC BY-SA 4.0 license</a>
            </p>
        </div>
    </div>


</body>