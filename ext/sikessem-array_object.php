<?php namespace SIKessEm\ArrayObject;

function map(string $key_type, string $value_type): Map {

  return new Map($key_type, $value_type);
}