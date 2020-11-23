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
  
  $toValue = convertLength($fromValue, $fromUnit, $toUnit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Length</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    
    <div id="main-content">
      
      <h1>Convert length</h1>
      
      <form action="" method="post">
      
      <div class="entry">
        <label>From:</label>$nbsp;
        <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" />$nbsp;
        <select name="fromUnit">
          <option value="inches"<?php if($fromUnit == 'inches') {echo " selected"; } ?>>Inches</option>
          <option value="feet"<?php if($fromUnit == 'feet') {echo " selected"; } ?>>Feet</option>
          <option value="yards"<?php if($fromUnit == 'yards') {echo " selected"; } ?>>Yards</option>
          <option value="miles"<?php if($fromUnit == 'miles') {echo " selected"; } ?>>Miles</option>
          <option value="millimeters"<?php if($fromUnit == 'millimeters') {echo " selected"; } ?>>Millimeters</option>
          <option value="centimeters"<?php if($fromUnit == 'centimeters') {echo " selected"; } ?>>Centimeters</option>
          <option value="meters"<?php if($fromUnit == 'meters') {echo " selected"; } ?>>Meters</option>
          <option value="kilometers"<?php if($fromUnit == 'kilometers') {echo " selected"; } ?>>Kilometers</option>
        </select>
      </div>
      
      <div class="entry">
        <label>To:</label>$nbsp;
        <input type="text" name="to value" value="<?php echo $toValue; ?>" />$nbsp;
        <select name="toUnit">
           <option value="inches"<?php if($toUnit == 'inches') {echo " selected"; } ?>>Inches</option>
          <option value="feet"<?php if($toUnit == 'feet') {echo " selected"; } ?>>Feet</option>
          <option value="yards"<?php if($toUnit == 'yards') {echo " selected"; } ?>>Yards</option>
          <option value="miles"<?php if($toUnit == 'miles') {echo " selected"; } ?>>Miles</option>
          <option value="millimeters"<?php if($toUnit == 'millimeters') {echo " selected"; } ?>>Millimeters</option>
          <option value="centimeters"<?php if($toUnit == 'centimeters') {echo " selected"; } ?>>Centimeters</option>
          <option value="meters"<?php if($toUnit == 'meters') {echo " selected"; } ?>>Meters</option>
          <option value="kilometers"<?php if($toUnit == 'kilometers') {echo " selected"; } ?>>Kilometers</option>
        </select>
      </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
      
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>