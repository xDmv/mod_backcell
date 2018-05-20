<?php

class ModelModuleUpdateprise extends Model {
	public function Oldprice() {
		$oldprice = array();
		$query = $this->db->query("
			Select sku, price From " . DB_PREFIX . "product ;
		");
		foreach ($query->rows as $result) {
			$oldprice[$result['sku']] = $result['price'];
		}
		return $oldprice;
	}

	public function Status0() {
		$this->db->query("
			UPDATE " . DB_PREFIX . "product SET status = 0;
		");
		return 'Status 0';
	}

	public function InsertNew($newprice) {
		$i = 0;
		$sql_st = '';

		foreach ($newprice as $sku => $price) {
			/*
			$this->db->query("
				Insert Into " . DB_PREFIX . "product set
				model = CONCAT('us', ".$sku." ),
				sku = ".$sku.",
				price0 = ".$price.",
				status = 1,
				shipping = 1,
				minimum = 1,
				quantity = 10;
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
			*/
			$sql_st = $sql_st." Insert Into " . DB_PREFIX . "product set model = CONCAT('us', ".$sku." ), sku = ".$sku.", price0 = ".$price.", status = 1, shipping = 1, minimum = 1, quantity = 10;"."Insert Into " . DB_PREFIX . "product_description set product_id = (Select max(product_id) From " . DB_PREFIX . "product), language_id = 1, name = '' ;"."Insert Into " . DB_PREFIX . "product_to_store set product_id = (Select max(product_id) From " . DB_PREFIX . "product), store_id = 0;"
			/*
			$this->db->query("
				Update " . DB_PREFIX . "product Set
				model =  product_id
				Where sku = ".$sku.";
			");
			*/
			$i++;
		}

		$this->db->query($sql_st);

		return "Добавлено: $i";
	}

	public function Up0($equally) {
		$i = 0;
		$sql_st = '';
		foreach ($equally as $sku => $value) {
			$sql_st = $sql_st."
			UPDATE " . DB_PREFIX . "product SET
			status = 1,
			shipping = 1
			Where sku = '".$sku."';
			";
			/*
		$this->db->query("
			UPDATE " . DB_PREFIX . "product SET
			status = 1,
			shipping = 1
			Where sku = '".$sku."';
		");
		*/
		$i++;
	}
		$this->db->query($sql_st);
		return "Без изменений: $i";
	}

	public function UpNewprise($updp) {
		$i = 0;
		foreach ($updp as $sku => $price) {
		$this->db->query("
			UPDATE " . DB_PREFIX . "product SET
			price0 = ".$price.",
			status = 1,
			shipping = 1
			Where sku = '".$sku."';
		");
		$i++;
		}
		return "Обновлено: $i";
	}

	public function NManufacture() {

		$this->db->query("
			Update " . DB_PREFIX . "product, " . DB_PREFIX . "editprice_manufacturer set
			price = (price0 * (Select Procent From " . DB_PREFIX . "editprice_manufacturer where id = " . DB_PREFIX . "product.manufacturer_id) / 100 +
			(Select Cheslo From " . DB_PREFIX . "editprice_manufacturer where id = " . DB_PREFIX . "product.manufacturer_id) + price0)
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
		foreach ($id as $key => $result) {
			foreach ($result as $key => $val){
				$this->db->query("
					Update " . DB_PREFIX . "product, " . DB_PREFIX . "product_to_category Set
					" . DB_PREFIX . "product.price = " . DB_PREFIX . "product.price0 * (Select Procent From " . DB_PREFIX . "editprice_category where id = ".$val.") / 100
					+ (Select Cheslo From " . DB_PREFIX . "editprice_category where id = ".$val.") + " . DB_PREFIX . "product.price0
					Where " . DB_PREFIX . "product.product_id = " . DB_PREFIX . "product_to_category.product_id and " . DB_PREFIX . "product_to_category.category_id = ".$val.";
				");
			}
		}
		return 'Category Up';
	}

}
?>
