<?php
class ModelCellback extends Model {

  public function getAll () {
  		$update_price = array();
  		$query = $this->db->query("SELECT product_id, sku, price FROM " . DB_PREFIX . "product ORDER BY product_id");
  		foreach ($query->rows as $result) {
  			$update_price[] = $result;
  		}
  		return $update_price;
  	}

    public function addNew ($product_id, $sku, $model, $price){
    		$this->db->query("INSERT INTO " . DB_PREFIX . "product (`product_id`, `sku`, `model`,`price`) VALUES
        ('".$product_id."','".$sku."','".$model."','".$price."')");
    	return 'added';
    	}

    public function updateRow ($sku, $price){
      		$this->db->query("UPDATE " . DB_PREFIX . "product SET price = '".$price."' WHERE sku = '" . $sku . "'");
    	return 'updated';
    }
    public function maxId ($maxproduct_id){
      $maxproduct_id;
      $query = $this->db->query("SELECT max(`product_id`) FROM " . DB_PREFIX . "product ");
      return $maxproduct_id;
    }
