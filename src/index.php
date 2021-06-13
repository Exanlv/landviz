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

    <div class="container">
        <div class="card-deck">
            <div class="card project-card">
                <h5 class="card-header">Exan</h5>
                <div class="project-card-img-container" style="padding: 2em;">
                    <img class="card-img project-card-image" src="./img/exan.webp" alt="Exan Logo">
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Exan is an open source Discord bot to handle self-assignable roles.
                        This bot has multi language support and has seen great success.
                        It has grown to being used in several hundred Discord servers.
                    </p>
                    <p class="card-text card-text-small"><small class="text-muted">Project language: Typescript</small></p>
                </div>
            </div>

            <div class="card project-card">
                <h5 class="card-header">DHP Core</h5>
                <div class="project-card-img-container" style="padding: 2em;">
                    <img class="card-img project-card-image" src="./img/dhp.png" alt="Exan Logo">
                </div>
                <div class="card-body">
                    <p class="card-text">
                        DHP Core is a client library I've created to interact with the Discord websocket API.
                        This client authenticates and then keeps the connection alive with the use of heartbeats.
                        As my goal for this project was simplicity, therefore this does not use ReactPHP.
                        This project is archived and will not receive updates.
                    </p>
                    <p class="card-text card-text-small"><small class="text-muted">Project language: PHP</small></p>
                </div>
            </div>

            <div class="card project-card">
                <h5 class="card-header">Parrot Generator</h5>
                <div class="project-card-img-container" style="padding: 2em;">
                    <img class="card-img project-card-image" src="./img/parrot.png" alt="Exan Logo">
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Parrot generator is a fun <a href="https://www.npmjs.com/package/party-parrots" target="_blank">NPM package</a> I've created.
                        This package generates an animated party parrot gif based on the input image.
                    </p>
                    <p class="card-text card-text-small"><small class="text-muted">Project language: Typescript</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <a href="./projects.html">More projects...</a>
    </div>
</body>

</html>
<script type="text/javascript"></script>