<?php namespace SIKessEm\ArrayObject;

class Error extends \Exception {

  public const INVALID_TYPE = 0x00001;
  public const INVALID_KEY = 0x00002;
  public const INVALID_VALUE = 0x00003;
  public const INVALID_SIZE = 0x00004;
  public const INVALID_ITEM = 0x00005;
  public const SIZE_REACHED = 0x00006;
}