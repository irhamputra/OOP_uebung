<nav>
    <ul>
        <?php foreach ($app->frontend_nav as $param => $name) : ?>
            <li>
                <a href="<?= $_SERVER["PHP_SELF"] ?>?p=<?= $param ?>">
                    <?= $name?>
                </a>
            </li>
        <?php endforeach;?>
    </ul>
</nav>