<?php

require_once('includes/functions.php');

$fromValue = '';
$fromUnit = '';
$toUnit = '';
$toValue = '';

if($_POST['submit']) {
  $fromValue = $_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];
  
  $toValue = convertArea($fromValue, $fromUnit, $toUnit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Area</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    
    <div id="main-content">
      
      <h1>Convert Area</h1>
      
      <form action="" method="post">
      
      <div class="entry">
        <label>From:</label>$nbsp;
        <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" />$nbsp;
        <select name="fromUnit">
          <option value="squareInches"<?php if($fromUnit == 'squareInches') {echo " selected"; } ?>>Square Inches</option>
          <option value="squareFeet"<?php if($fromUnit == 'squareFeet') {echo " selected"; } ?>>Square Feet</option>
          <option value="squareYards"<?php if($fromUnit == 'squareYards') {echo " selected"; } ?>>Square Yards</option>
          <option value="SquareMiles"<?php if($fromUnit == 'SquareMiles') {echo " selected"; } ?>>Square Miles</option>
          <option value="SquareMillimeters"<?php if($fromUnit ==  'SquareMillimeters') {echo " selected"; } ?>>Square Millimeters</option>
          <option value="SquareCentimeters"<?php if($fromUnit == 'SquareCentimeters') {echo " selected"; } ?>>Square Centimeters</option>
          <option value="SquareMeters"<?php if($fromUnit == 'SquareMeters') {echo " selected"; } ?>>Square Meters</option>
          <option value="SquareKilometers"<?php if($fromUnit == 'SquareKilometers') {echo " selected"; } ?>>Square Kilometers</option>
          <option value="acres"<?php if($fromUnit == 'acres') {echo " selected"; } ?>>acres</option>
          <option value="hectares"<?php if($fromUnit == 'hectares') {echo " selected"; } ?>>hectares</option>
        </select>
      </div>
      
      <div class="entry">
        <label>To:</label>$nbsp;
        <input type="text" name="to value" value="<?php echo $toValue; ?>" />$nbsp;
        <select name="toUnit">
           <option value="SquareInches"<?php if($toUnit == 'SquareInches') {echo " selected"; } ?>>Square Inches</option>
          <option value="SquareFeet"<?php if($toUnit == 'SquareFeet') {echo " selected"; } ?>>Square Feet</option>
          <option value="SquareYards"<?php if($toUnit == 'SquareYards') {echo " selected"; } ?>>Square Yards</option>
          <option value="SquareMiles"<?php if($toUnit == 'SquareMiles') {echo " selected"; } ?>>Square Miles</option>
          <option value="SquareMillimeters"<?php if($toUnit == 'SquareMillimeters') {echo " selected"; } ?>>Square Millimeters</option>
          <option value="SquareCentimeters"<?php if($toUnit == 'SquareCentimeters') {echo " selected"; } ?>>Square Centimeters</option>
          <option value="SquareMeters"<?php if($toUnit == 'SquareMeters') {echo " selected"; } ?>>Square Meters</option>
          <option value="SquareKilometers"<?php if($toUnit == 'SquareKilometers') {echo " selected"; } ?>>Square Kilometers</option>
          <option value="acres"<?php if($toUnit == 'acres') {echo " selected"; } ?>>acres</option>
          <option value="hectares"<?php if($toUnit == 'hectares') {echo " selected"; } ?>>hectares</option>
        </select>
      </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
      
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>