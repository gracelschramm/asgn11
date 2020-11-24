<?php

require_once('includes/functions.php');

$fromValue = '';
$fromUnit = '';
$toUnit = '';
$toValue = '';
$pageTitle= "Outdated Irish Length Measurements";

if($_POST['submit']) {
  $fromValue = $_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];
  
  $toValue = convertArea($fromValue, $fromUnit, $toUnit);
}

?>
<!DOCTYPE html>
<html>
<?php include_once 'includes/header.php'; ?>
    <body>
    <div id="main-content">
      
      <h1>Convert Outdated Irish Length Measurements</h1>
      
      <form action="" method="post">
      
      <div class="entry">
        <label>From:</label>$nbsp;
        <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" />$nbsp;
        <select name="fromUnit">
          <option value="grain"<?php if($fromUnit == 'grain') {echo " selected"; } ?>>Grain</option>
          <option value="thumbLength"<?php if($fromUnit == 'thumbLength') {echo " selected"; } ?>>Thumb Length</option>
          <option value="palm"<?php if($fromUnit == 'palm') {echo " selected"; } ?>>Palm</option>
          <option value="fist"<?php if($fromUnit == 'fist') {echo " selected"; } ?>>Fist</option>
          <option value="foot"<?php if($fromUnit ==  'foot') {echo " selected"; } ?>>foot</option>
          <option value="step"<?php if($fromUnit == 'step') {echo " selected"; } ?>>Step</option>
          <option value="doubleStep"<?php if($fromUnit == 'doubleStep') {echo " selected"; } ?>>Double Step</option>
          <option value="rod"<?php if($fromUnit == 'rod') {echo " selected"; } ?>>Rod</option>
        </select>
      </div>
      
      <div class="entry">
        <label>To:</label>$nbsp;
        <input type="text" name="to value" value="<?php echo $toValue; ?>" />$nbsp;
        <select name="toUnit">
           <option value="grain"<?php if($fromUnit == 'grain') {echo " selected"; } ?>>Grain</option>
          <option value="thumbLength"<?php if($fromUnit == 'thumbLength') {echo " selected"; } ?>>Thumb Length</option>
          <option value="palm"<?php if($fromUnit == 'palm') {echo " selected"; } ?>>Palm</option>
          <option value="fist"<?php if($fromUnit == 'fist') {echo " selected"; } ?>>Fist</option>
          <option value="foot"<?php if($fromUnit ==  'foot') {echo " selected"; } ?>>foot</option>
          <option value="step"<?php if($fromUnit == 'step') {echo " selected"; } ?>>Step</option>
          <option value="doubleStep"<?php if($fromUnit == 'doubleStep') {echo " selected"; } ?>>Double Step</option>
          <option value="rod"<?php if($fromUnit == 'rod') {echo " selected"; } ?>>Rod</option>
        </select>
      </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
      
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
<?php include_once 'includes/footer.php'; ?>
  </body>
</html>