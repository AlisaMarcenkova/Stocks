<?php

require_once(__DIR__ . '/vendor/autoload.php');

$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'c82pa1qad3ia12599i8g');
$client = new Finnhub\Api\DefaultApi(
    new GuzzleHttp\Client(),
    $config
);

$search = strtoupper($_GET['search'] ?? '');

?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <form method="get" action="/">
        <input name="search" placeholder="search" value="">
        <button type="submit">Search</button>
    </form>
    <?php if ($search == $client->companyProfile2()): ?>
    <div class="container">
        <div class="containerOne">
            <?php echo $client->companyProfile2("$search")->getTicker() . " " . $client->quote("$search")->getC() . "<br>";
            if ($client->quote("$search")->getDp() < 0) {
                echo $client->quote("$search")->getDp() . "% (" . $client->quote("$search")->getD() . ")" . "&#x1F53B" . "<br>";
            } else {
                $client->quote("$search")->getDp() . "% (" . $client->quote("$search")->getD() . ")" . "<span style='color: green;'> &#x25B2</span>" . "<br>";
            }
            ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="containerOne">
        <?php echo $client->companyProfile2("AAPL")->getTicker() . " " . $client->quote("AAPL")->getC() . "<br>";
        if ($client->quote("AAPL")->getDp() < 0) {
            echo $client->quote("AAPL")->getDp() . "% (" . $client->quote("AAPL")->getD() . ")" . "&#x1F53B" . "<br>";
        } else {
            $client->quote("AAPL")->getDp() . "% (" . $client->quote("AAPL")->getD() . ")" . "<span style='color: green;'> &#x25B2</span>" . "<br>";
        }
        ?>
    </div>
    <div class="containerTwo">
        <?php echo $client->companyProfile2("AMZN")->getTicker() . " " . $client->quote("AMZN")->getC() . "<br>";
        if ($client->quote("AMZN")->getDp() < 0) {
            echo $client->quote("AMZN")->getDp() . "% (" . $client->quote("AMZN")->getD() . ")" . "&#x1F53B" . "<br>";
        } else {
            $client->quote("AMZN")->getDp() . "% (" . $client->quote("AMZN")->getD() . ")" . "<span style='color: green;'> &#x25B2</span>" . "<br>";
        }
        ?>
    </div>
</div>
<div class="container">
    <div class="containerThree">
        <?php echo $client->companyProfile2("MSFT")->getTicker() . " " . $client->quote("MSFT")->getC() . "<br>";
        if ($client->quote("MSFT")->getDp() < 0) {
            echo $client->quote("MSFT")->getDp() . "% (" . $client->quote("MSFT")->getD() . ")" . "&#x1F53B" . "<br>";
        } else {
            $client->quote("MSFT")->getDp() . "% (" . $client->quote("MSFT")->getD() . ")" . "<span style='color: green;'> &#x25B2</span>" . "<br>";
        }
        ?>
    </div>
    <div class="containerFour">
        <?php echo $client->companyProfile2("XOM")->getTicker() . " " . $client->quote("XOM")->getC() . "<br>";
        if ($client->quote("XOM")->getDp() > 0) {
            echo $client->quote("XOM")->getDp() . "% (" . $client->quote("XOM")->getD() . ")" . "<span style='color: green;'> &#x25B2</span>" . "<br>";
        } else {
            $client->quote("XOM")->getDp() . "% (" . $client->quote("XOM")->getD() . ")" . "&#x1F53B" . "<br>";
        }
        ?>
    </div>
</div>