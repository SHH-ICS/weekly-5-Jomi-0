!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <title></title>
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title"></span>
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content" style="text-align: center; margin-top: 50px;">
        <?php
        if (isset($_POST['digits'])) {
          $digits = intval($_POST['digits']); 

          if ($digits > 0) {
            $output = shell_exec("python3 assignment.py " . escapeshellarg($digits)); 
            echo "<p>Approximation of Pi with $digits terms: " . htmlspecialchars($output) . "</p>"; 
          } else {
            echo "<p>Error: Please enter a positive integer.</p>";
          }
        } else {
          echo "<p>Error: No input received.</p>";
        }
        ?>
<html>