<?php

namespace App\Core\Model\Relationship;

interface RelationshipInterface
{
  public function add($relationship = array());
  public function get($field);
  public function exists($field);
}
