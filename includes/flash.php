<?php if(isset($_SESSION['errors'])): ?>
    <div class="alert alert-<?= $_SESSION['errors']['type'] ?>">
        <ul class="list-unstyled">
            <?php foreach($_SESSION['errors']['messages'] as $msg): ?>
                <li><?= $msg ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>