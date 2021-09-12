<?php namespace SIKessEm\ArrayObject;

class Enum {

  public function __construct(int $items_size, string $items_type) {

    if($items_size <= 0) throw new Error("Invalid size ($items_size) given", Error::INVALID_SIZE);
    $this->items_size = $items_size;

    $items_type = Filter::sanitize($items_type);
    if(!Filter::validate($items_type)) throw new Error("Unknown type $items_type", Error::INVALID_TYPE);
    $this->items_type = $items_type;
  }

  protected int $items_size;
  protected string $items_type;
  protected array $items_list = [];

  public function add(mixed $item): static {

    if(count($this->items_list) === $this->items_size) throw new Error("Cannot exceed the size of items ($this->items_size)", Error::SIZE_REACHED);

    $item_type = Filter::sanitize(gettype($item));
    if($item_type !== 'mixed' && $item_type !== $this->items_type) throw new Error("Invalid item type ($item_type) given", Error::INVALID_ITEM);

    $this->items_list[] = $item;

    return $this;
  }

  public function get(mixed $index): mixed {

    return $this->items_list[$index] ?? null;
  }
}