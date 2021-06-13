<?php

$categories = [
    'Npm Packages' => [
        'summary' => 'These are the NPM packages I\'ve created',
        'projects' => [
            [
                'name' => 'Parrot Generator',
                'image' => './img/parrot.png',
                'description' => 'Parrot generator is a fun NPM package to generate party parrots based on your input image. '
                    . 'It supports both local files and remote images. ',
                'languages' => ['Typescript'],
            ],
            [
                'name' => 'Timing Service',
                'image' => './img/clock.png',
                'description' => 'A library to easily schedule tasks at certain times of day. '
                    . 'Works like cron during runtime, emits events at the desired times',
                'languages' => ['Typescript'],
            ],
        ]
    ],
    'Api' => [
        'summary' => 'The following projects make use of web APIs or are web APIs themselves.',
        'projects' => [
            [
                'name' => 'Forum',
                'image' => './img/forum.png',
                'description' => 'This is meant as a replacement for traditional forums like XenForo. '
                    . 'This is a project I chip away at every once in a while. '
                    . 'It is made using fastify and works via an API rather than generating HTML output.'
                    . '<!-- Icon derived from https://openmoji.org/ -->',
                'languages' => ['Typescript']
            ],
            [
                'name' => 'GoDaddy DNS Update',
                'image' => './img/dns_update.png',
                'description' => 'Automatically updates the ipv4 address on a domain registered through GoDaddy. '
                    . 'Used while I was hosting some minor things from home.'
                    . '<!-- Icon derived from https://openmoji.org/ -->',
                'languages' => ['Javascript']
            ],
        ]
    ],
    'Injection' => [
        'summary' => 'Projects listed here involve some kind of code injection',
        'projects' => [
            [
                'name' => 'Discord Color Changer',
                'image' => './img/parrot.png', // Todo
                'description' => 'This project allows you to inject a custom color scheme into the Discord desktop app. '
                    . 'This makes use of the chrome devtools protocol and only makes modification at runtime. ',
                'languages' => ['Javascript']
            ],
            [
                'name' => 'Electron Inject',
                'image' => './img/parrot.png', // Todo
                'description' => 'A more generic way of injecting JS/CSS into electron/chromium based applications. '
                    . 'This makes use of the chrome devtools protocol and only makes modification at runtime. ',
                'languages' => ['Javascript']
            ]
        ]
    ],
    'Discord' => [
        'summary' => 'These are the Discord related projects I\'ve worked on. '
            . 'Most of these projects rely on a library to function but are easy to port over to another library may the one in use get discontinued. ',
        'projects' => [
            [
                'name' => 'Exan',
                'image' => './img/exan.webp',
                'description' => 'Exan is an open source Discord bot to handle self-assignable roles. '
                    . 'This bot has multi language support and has seen great success. '
                    . 'It has grown to being used in several hundred Discord servers. ',
                'languages' => ['Typescript']
            ],
            [
                'name' => 'DHP Core',
                'image' => './img/dhp.png',
                'description' => 'DHP Core is a client library I\'ve created to interact with the Discord websocket API. '
                    . 'This client authenticates and then keeps the connection alive with the use of heartbeats. '
                    . 'As my goal for this project was simplicity, therefore this does not use ReactPHP. '
                    . 'This project is archived and will not receive updates. ',
                'languages' => ['PHP']
            ],
            [
                'name' => 'Bread Bot',
                'image' => './img/bread.png',
                'description' => 'Bread bot is a simple discord bot that allows you to collect points (called bread). '
                    . 'These points can then be used to gamble and play minigames with. '
                    . '<!-- Icon derived from https://openmoji.org/ -->',
                'languages' => ['Java']
            ],
            [
                'name' => 'Ionsfwcord',
                'image' => './img/exan.webp',
                'description' => 'This bot allows you to create a conglomerate of channels that stay in sync with each other through the use of webhooks. ',
                'languages' => ['PHP']
            ],
            [
                'name' => 'Shellcord',
                'image' => './img/shellcord.png',
                'description' => 'This is meant to be a wrapper around the Serenity Discord crate. '
                    . 'It allows you to write discord bots in shell languages using env and stdout. '
                    . 'Currently it only supports sending/receiving messages. ',
                'languages' => ['Rust', 'Shell']
            ]
        ]
    ],
    'Miscellaneous' => [
        'summary' => 'Miscellaneous projects',
        'projects' => [
            [
                'name' => 'Scripts',
                'image' => './img/scripts.png',
                'description' => 'A collection of command line automations scripts I\'ve made and use. ',
                'languages' => ['Python']
            ],
            [
                'name' => 'Landviz.nl',
                'image' => './img/landviz_nl.png',
                'description' => 'This site was made using PHP in a non-standard way. '
                    . 'Since the content on here is not dynamic, it uses PHP to generate static files. '
                    . 'This way it can still be templated with ease, without a performance penalty.',
                'languages' => ['PHP', 'HTML', 'CSS']
            ],
            [
                'name' => 'Simple Notes',
                'image' => './img/simple_notes.png',
                'description' => 'Simple notes is a discontinued note-taking desktop application made with Electron.',
                'languages' => ['Typescript', 'HTML', 'CSS']
            ],
            [
                'name' => 'Inventory Management',
                'image' => './img/parrot.png', // Todo
                'description' => 'A simple inventory management tool I made. '
                    . 'This tool was made with Laravel as a learning project. ',
                'languages' => ['PHP', 'HTML', 'CSS', 'SQL']
            ],
        ]
    ]

];


?>

<!DOCTYPE HTML>
<html>

<?= file_get_contents(__DIR__ . '/head.html') ?>

<body>

    <?php
    foreach ($categories as $category => $projectsInfo) {
    ?>

        <div class="content">
            <div class="inner">
                <h1 style="margin-top: 0.5em;"><?= $category ?></h1>

                <p><?= $projectsInfo['summary'] ?></p>
            </div>
        </div>

        <div class="container" style="margin-bottom: 0">
            <div class="row">
                <?php
                foreach ($projectsInfo['projects'] as $project) {
                ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="padding-bottom: 2em">
                        <div class="card project-card">
                            <h5 class="card-header"><?= $project['name'] ?> </h5>
                            <div class="project-card-img-container" style="padding: 2em;">
                                <img class="card-img project-card-image" src="<?= $project['image'] ?>" alt="<?= $project['name'] ?>">
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?= $project['description'] ?></p>
                                <p class="card-text card-text-small"><small class="text-muted"><?= (count($project['languages']) === 1 ? 'Project language: ' : 'Project languages: ') . implode(', ', $project['languages']) ?></small></p>
                            </div>
                        </div>
                    </div>
                <?php
                } // End projects foreach
                ?>
            </div>
        </div>
    <?php
    } // End categories foreach
    ?>

</body>