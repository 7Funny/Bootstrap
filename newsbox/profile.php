<?php include("header.php");?>

<div class="aside_main">
    <div class="aside">
        <img src="<?=$_SESSION['user']['avatar']?>" alt="<?= $_SESSION['user']['full_name'] ?>" class="photo">
        <p><?= $_SESSION['user']['full_name'] ?><p>
    </div>
    <div class="main">
        <p>Логин: <?= $_SESSION['user']['login'] ?></p>
        <p>Пароль: <?= $_SESSION['user']['password'] ?></p>
    </div>
</div>

<?php include("footer.php"); ?>
