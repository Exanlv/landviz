<?php
require(__DIR__ . '/projects_helper.php');
?>

<!DOCTYPE HTML>
<html>

<?= file_get_contents(__DIR__ . '/head.html') ?>

<body>

    <?= file_get_contents(__DIR__ . '/header_small.html') ?>

    <div class="content">
        <div class="inner">
            <h1>Credits</h1>
            <p>
                Credits for the artwork used in some of the logos for projects listed on this site.
            </p>

            <p>
                Links to websites mentioned:
            </p>
            <ul style="list-style:none;">
                <?php
                foreach (getUniqueLinks($categories) as $link) {
                ?>
                    <li><a href="<?= $link ?>" target="_blank"><?= $link ?></a></li>
                <?php
                }
                ?>
            </ul>

            <h1 style="margin-top: 1.5em;">Project Specific Credits</h1>
            <table class="table" id="credits-table">
                <tbody>
                    <?php
                    foreach ($categories as $category) {
                        foreach ($category['projects'] as $project) {
                    ?>
                            <tr>
                                <td><?= $project['name'] ?></td>
                                <td><?= $project['image_credits'] ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>

            </table>

            <p>
                All images released under the <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">CC BY-SA 4.0 license</a>
            </p>

        </div>
    </div>

</body>