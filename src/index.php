<?php
require(__DIR__ . '/projects_helper.php');
?>

<!DOCTYPE HTML>
<html>

<?= file_get_contents(__DIR__ . '/head.html') ?>

<body>
    <header id="header" class="header-big">
        <div class="header-img">
            <div class="header-text noselect">
                <img src="img/logo2.svg" class="header-logo">
            </div>
        </div>
    </header>
    <div class="content">
        <div class="inner">
            <h1>Welcome</h1>
            <p>
                Hey! I'm Max. I started getting into programming late 2016<br>
                <br>
                I'm a backend developer experienced in Javascript, Typescript, PHP, Java, Python and SQL.
                I'm also quite alright at basic HTML, CSS and some light design work.
                As for frameworks, I've worked with Laravel, Angular, Fastify and jQuery.<br>
                <br>
                Check out my GitHub profile <a href="https://github.com/Exanlv" target="_blank">here!</a>
            </p>

            <h1 style="margin-top: 1.5em;">Projects Highlight</h1>
        </div>
    </div>

    <?php
    renderProjectGroup([
        $categories['Discord']['projects'][0], // Exan
        $categories['Discord']['projects'][1], // DHP
        $categories['Npm Packages']['projects'][0] // Parrot generator
    ]);
    ?>

    <div class="container text-center">
        <a href="./projects.html">More projects...</a>
    </div>
</body>

</html>
<script type="text/javascript"></script>