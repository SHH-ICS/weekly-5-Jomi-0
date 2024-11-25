!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <title>Pizza Price Calculation</title>
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Pizza Price</span>
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content" style="text-align: center; margin-top: 50px;">
        <?php
        if (isset($_POST['pizzasize']) && isset($_POST['toppings'])) {
          $pizzasize = escapeshellarg($_POST['pizzasize']);
          $toppings = intval($_POST['toppings']);

          $output = shell_exec("python3 assignment.py $pizzasize $toppings");

          echo "<p>The total price of your pizza is: $" . htmlspecialchars($output) . "</p>";
        } else {
          echo "<p>Error: Please select a pizza size and the number of toppings.</p>";
        }
        ?> <a href="javascript:history.back()" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
          Go Back
        </a>
        <a href="Thankyou.html" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Proceed</a>

      </div>
    </main>
  </div>
</body>

</html>