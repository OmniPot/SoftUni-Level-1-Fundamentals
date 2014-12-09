<html>
<body>

<form method="post">
    <span>Enter Amount</span>
    <input type="text" name="amount"/><br>
    <input type="radio" name="currency" value="$"/>USD
    <input type="radio" name="currency" value="&#8364;"/>EUR
    <input type="radio" name="currency" value="&#x043B;&#x0432;"/>BGN<br>
    <span>Compound Interest Amount</span>
    <input type="number" name="interest"/><br>

    <select name="period" selected="6 months">
        <option value="6">6 months</option>
        <option value="12">1 year</option>
        <option value="24">2 years</option>
        <option value="60">5 years</option>
    </select>

    <input type="submit" name="submit"/>
</form>

</body>
</html>


<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['amount']) && isset($_POST['currency'])
        && isset($_POST['interest']) && isset($_POST['period'])
    ) {
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $interest = $_POST['interest'];
        $period = $_POST['period'];

        $percent = (100 + $interest / 12) / 100;

        for ($i = 0; $i < $period; $i += 1) {
            $amount = $amount * $percent;
        }
        echo htmlentities($currency . " " . round($amount, 2));
    }
}

?>