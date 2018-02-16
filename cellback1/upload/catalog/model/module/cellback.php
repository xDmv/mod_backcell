<?php
class ModelModuleCellback extends Model {

  public function Add_insert_m ($id, $procent, $cheslo) {
    $data = date("d-m-Y H:i:s");

    $this->db->query("INSERT INTO " . DB_PREFIX . "editprice_manufacturer (`ID`, `Name_category`, `Procent`, `Cheslo`, `Date_insert`) VALUES
    ('".$id."', (Select distinct name From oc_manufacturer_description Where manufacturer_id = '".$id."'),'".$procent."','".$cheslo."','".$data."')");

    $this->db->query(" Update " . DB_PREFIX . "product set
    price = (price0 * (Select Procent From " . DB_PREFIX . "editprice_manufacturer where id = ".$id.") / 100 +
    (Select Cheslo From oc_editprice_manufacturer where id = ".$id.") + price0)
    Where manufacturer_id = ".$id.";");

    return 'addM';
  }

}

?>
