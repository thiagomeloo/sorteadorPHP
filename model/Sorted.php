<?php

declare(strict_types=1);

class Sorted
{

  public $elementSorted = null;
  public $elementSortedBefore;
  public $intervalMin;
  public $intervalMax;



  function __construct(int $intervalMin, int $intervalMax)
  {
    if ($intervalMin > 0 && $intervalMin < $intervalMax) {
      $this->setIntervalMin($intervalMin);
      $this->setIntervalMax($intervalMax);
      return;
    }
    $this->setIntervalMin(1);
    $this->setIntervalMax(100);
  }

  function sort(): int
  {
    $this->setElementSortedBefore();
    $element = rand($this->intervalMin, $this->intervalMax);
    $this->setElementSorted($element);

    return (int) $element;
  }


  private function setIntervalMin($value)
  {
    $this->intervalMin = $value;
  }

  private function setIntervalMax($value)
  {
    $this->intervalMax = $value;
  }

  private function setElementSorted($value)
  {
    $this->elementSorted = $value;
  }

  private function setElementSortedBefore()
  {
    $this->elementSortedBefore = $this->elementSorted;
  }
}
