<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php foreach ($items as $item): ?>
    <article>
        <h1><?php echo $item->title; ?></h1>
        <div><?php echo $item->text; ?></div>

    </article>
<?php endforeach; ?>

<footer style="background-color: gray">
    <?php foreach ($this as $name => $value) : ?>
        <?php  echo ($name); ?>
    <?php endforeach; ?> = <?php var_dump($value); ?>

</footer>

</body>
</html>