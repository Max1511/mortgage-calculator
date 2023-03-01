<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ипотечный калькулятор</title>
</head>
<body>

<?php
$mortgageData = require __DIR__ . '/logic/calc.php';

?>

<h1>Ипотечный калькулятор</h1>

<form action="" method="post">
    <p>Стоимость недвижимости</p>
    <input name="realEstateValue" type="number" inputmode="numeric" min="100000" max="100000000" value="<?= $mortgageData->realEstateValue ?>"/>

    <p>Первоначальный взнос</p>
    <input name="initialFee" type="number" inputmode="numeric" min="0" max="100000000" value="<?= $mortgageData->initialFee ?>"/>

    <p>Срок ипотеки</p>
    <input name="years" type="number" inputmode="numeric" min="1" max="30" value="<?= $mortgageData->years ?>"/>

    <p>Процентная ставка</p>
    <input name="interestRate" type="number" min="0.1" max="30.0" step="0.1" value="<?= $mortgageData->interestRate ?>"/>
    <p></p>
    <input type="submit" name="submit" value="Посчитать">
</form>
<p>Ваш ежемесячный платеж</p>
<?= round($mortgageData->result, 2) ?>

</body>
</html>