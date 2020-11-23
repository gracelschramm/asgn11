<?php

const LengthToMeter = array(
  "inches" => 0.0254,
  "feet" => 0.3048,
  "yards" => 0.9144,
  "miles" => 1609.344,
  "millimeters" => 0.001,
  "centimeters" => 0.01,
  "meters" => 1,
  "kilometers" => 1000,
  "acres" => 63.614907234075,
  "hectares" => 100
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