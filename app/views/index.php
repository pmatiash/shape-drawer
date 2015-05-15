<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Drawing with Pavel Matyash ;)</title>
</head>

<body>

<?php $maxTries = rand(3,10); ?>

<?php for ($i = 0; $i <= $maxTries; $i++):?>
    <?= $i . '. ' . (new \app\ShapeBuilder())->getRandomFactory()->generateRandomShape()->draw();?><br />
<?php endfor; ?>

</body>
</html>
