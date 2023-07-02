<div class="hero-section">
    <h2 class="H-heading"><?= $name ?></h2>
    <?php if ($type === "") { ?>
        <p>
            <a href="/">Home</a> / <?= $name ?>
        </p>
    <?php } else if ($type !== "") { ?>
        <p>
            <a href="/">Home</a> / <a href="<?=$type?>"> <?=$type?></a> / <?=$name?>
        </p>
    <?php } ?>
</div>
