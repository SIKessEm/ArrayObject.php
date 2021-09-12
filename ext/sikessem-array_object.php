<?php namespace SIKessEm\ArrayObject;

function map(string $keys_type, string $values_type): Map {

  return new Map($keys_type, $values_type);
}

function enum(int $items_size, string $items_type): Enum {

  return new Enum($items_size, $items_type);
}