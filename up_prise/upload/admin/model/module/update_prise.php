<?php

class ModelModuleUpdateprise extends Model {

	public function Status0() {
		$this->db->query("
			UPDATE " . DB_PREFIX . "product SET status = 0;
		");
		return 'Status 0';
	}

	public function InsertNew($model,$sku,$price) {
		$this->db->query("
			Insert Into " . DB_PREFIX . "product set
			model = '".$model."',
			sku = '".$sku."',
			price = '".$price."',
			status = 1,
			shipping = 1;
		");
		$this->db->query("
			Insert Into " . DB_PREFIX . "product_description set
			product_id = (Select max(product_id) From " . DB_PREFIX . "product),
			language_id = 1,
			name = '' ;
		");
		$this->db->query("
			Insert Into " . DB_PREFIX . "product_to_store set
			product_id = (Select max(product_id) From " . DB_PREFIX . "product),
			store_id = 0;
		");
		return 'Insert new product';
	}

	public function Up0($model) {
		$this->db->query("
			UPDATE " . DB_PREFIX . "product SET
			status = 1,
			shipping = 1
			Where model = '".$model."';
		");
		return 'Update 0';
	}

	public function UpNewprise($model,$price) {
		$this->db->query("
			UPDATE " . DB_PREFIX . "product SET
			price = '".$price."',
			status = 1,
			shipping = 1
			Where model = '".$model."';
		");
		return 'Update new price';
	}
	public function NManufacture() {
		$id_manufacture = array();
		$query = $this->db->query("Select id From " . DB_PREFIX . "editprice_manufacturer;");
		foreach ($query->rows as $result) {
			$id_manufacture[] = $result;
		}
		foreach ($id_manufacture->rows as $id) {
			echo $id."<br>";
		}
		exit;
		foreach ($id_manufacture->rows as $id) {
			$this->db->query("
				Update " . DB_PREFIX . "product set
				price = (price * (Select Procent From " . DB_PREFIX . "editprice_manufacturer where id = ".$id.") / 100 +
				(Select Cheslo From " . DB_PREFIX . "editprice_manufacturer where id = ".$id.") + price)
				Where manufacturer_id = ".$id.";
			");
		}

		return 'Manufacture';
	}
	public function NCategory() {
		$this->db->query("

		");
		return 'Category';
	}

}
?>
