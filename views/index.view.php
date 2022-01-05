<ul>
    <nav>

            <ul>
                <li><a href= "/about">Meist</a></li>
                <li><a href= "/contact">Kirjuta meile</a></li>
            </ul>
</nav>
<h1>Meie ülesanded</h1>

        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                    <?php else: ?>
                        <?= $task->description; ?>
                    <?php endif; ?>
                </li>
        <?php endforeach; ?>
    </ul>
