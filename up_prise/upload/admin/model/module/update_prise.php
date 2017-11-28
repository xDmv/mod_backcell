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
		// print_r("ManufactureUp"); up

		$this->db->query("
			Update " . DB_PREFIX . "product, " . DB_PREFIX . "editprice_manufacturer set
			price = (price * (Select Procent From " . DB_PREFIX . "editprice_manufacturer where id = " . DB_PREFIX . "product.manufacturer_id) / 100 +
			(Select Cheslo From " . DB_PREFIX . "editprice_manufacturer where id = " . DB_PREFIX . "product.manufacturer_id) + price)
			Where " . DB_PREFIX . "product.manufacturer_id = " . DB_PREFIX . "editprice_manufacturer.id
		");
		return 'Manufacture Up';

	}

	public function NCategory() {
		$id = array();
		$query = $this->db->query("Select id From " . DB_PREFIX . "editprice_category");
		foreach ($query->rows as $result) {
			$id[] = $result;
		}
		// print_r($id);
		// exit;
		foreach ($id as $key => $result) {
			foreach ($result as $key => $val){
				//print_r($val);
				$this->db->query("
					Update " . DB_PREFIX . "product, " . DB_PREFIX . "product_to_category Set
					" . DB_PREFIX . "product.price = " . DB_PREFIX . "product.price * (Select Procent From " . DB_PREFIX . "editprice_category where id = ".$val.") / 100
					+ (Select Cheslo From " . DB_PREFIX . "editprice_category where id = ".$val.") + " . DB_PREFIX . "product.price
					Where " . DB_PREFIX . "product.product_id = " . DB_PREFIX . "product_to_category.product_id and " . DB_PREFIX . "product_to_category.category_id = ".$val.";
				");
			}
			/*
			print_r("
			Update " . DB_PREFIX . "product, " . DB_PREFIX . "product_to_category Set
			" . DB_PREFIX . "product.price = " . DB_PREFIX . "product.price * (Select Procent From " . DB_PREFIX . "editprice_category where id = ".$result.") / 100
			+ (Select Cheslo From " . DB_PREFIX . "editprice_category where id = ".$result.") + " . DB_PREFIX . "product.price
			Where " . DB_PREFIX . "product.product_id = " . DB_PREFIX . "product_to_category.product_id and " . DB_PREFIX . "product_to_category.category_id = ".$result.";
			");
			/*
		$this->db->query("
			Update " . DB_PREFIX . "product, " . DB_PREFIX . "product_to_category Set
			" . DB_PREFIX . "product.price = " . DB_PREFIX . "product.price * (Select Procent From " . DB_PREFIX . "editprice_category where id = ".$result.") / 100
			+ (Select Cheslo From " . DB_PREFIX . "editprice_category where id = ".$result.") + " . DB_PREFIX . "product.price
			Where " . DB_PREFIX . "product.product_id = " . DB_PREFIX . "product_to_category.product_id and " . DB_PREFIX . "product_to_category.category_id = ".$result.";
		");
		*/
		}

		return 'Category Up';
	}

}
?>
