<?php

const LengthToMeter = array(
  "grain" => 0.7,
  "thumbLength" => 2.1,
  "palm" => 3.3,
  "fist" => 10.4,
  "foot" => 25.0,
  "step" => 62.5,
  "doubleStep" => 1500,
  "rod" => 3000
);

//Length
function convertToMeters($value, $fromUnit) {
  if(array_key_exists($fromUnit, LengthToMeter)){
   return $value * LengthToMeter[$fromUnit]; 
  } else {
    return "Unsupported unit.";
  }
}

function convertFromMeters($value, $toUnit) {
 if(array_key_exists($toUnit, LengthToMeter)){
   return $value / LengthToMeter[$toUnit]; 
  } else {
    return "Unsuported unit.";
  }
}

function convertLength($value, $fromUnit, $toUnit) {
  $meterValue = convertToMeters($value, $fromUnit);
  $newValue = convertFromMeters($meterValue, $toUnit);
  return $newValue;
  
}

//Area
function convertToSquareMeters($value, $fromUnit) {
  $fromUnit = str_replace('Square', '', $fromUnit);
  if(array_key_exists($fromUnit, LengthToMeter)){
   return $value * pow(LengthToMeter[$fromUnit], 2); 
  } else {
    return "Unsupported unit.";
  }
}

function convertFromSquareMeters($value, $toUnit) {
  $toUnit = str_replace('Square', '', $toUnit);
  if(array_key_exists($toUnit, LengthToMeter)){
   return $value / pow(LengthToMeter[$toUnit], 2); 
  } else {
    return "Unsupported unit.";
  }
}

function convertArea($value, $fromUnit, $toUnit) {
  $meterValue = convertToSquareMeters($value, $fromUnit);
  $newValue = convertFromSquareMeters($meterValue, $toUnit);
  return $newValue;
}

?>