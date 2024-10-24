list of users:
<ul>
    <?php foreach ($users as $user): ?>
    <li><?= $user->name ?> (<?= $user->email ?>)</li>
</ul>

<?php endforeach; ?>