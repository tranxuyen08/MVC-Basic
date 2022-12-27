<?php
class Group_Model extends Model{
  public function __construct()
  {
    parent::__construct();
  }

  public function listItems($option = null) {
    $query[] 	= "SELECT p.id,p.name,p.amount,p.category_id, COUNT(p.id) AS total";
		$query[] 	= "FROM products AS p LEFT JOIN product_orders AS po ON p.id = po.product_id";
		$query[] 	= "GROUP BY p.id";
		$query		= implode(" ", $query);
		$result		= $this->listRecord($query);
		return $result;
  }
}