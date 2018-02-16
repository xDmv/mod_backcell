<?php

class ControllerExtensionModuleCellback extends Controller {
  public $registry;
  private $data = array();

  public function __construct($registry) {
    $this->registry = $registry;

    $this->load->language('extension/module/cellback');

  	$this->load->model('module/cellback');

    private $error = array(); // объявляем переменную - массив с возможными ошибками

    protected function validate() {
      if (!$this->user->hasPermission('modify', 'module/cellback')) {
        $this->error['warning'] = $this->language->get('error_permission');
      }

      return !$this->error;
    }

    public function Cellback(){
      // получаем значения
      $id = isset($this->request->post['manufacturer_id']) ? $this->request->post['manufacturer_id']:0;
      $procent = isset($this->request->post['procent']) ? $this->request->post['procent']:0;
      $cheslo = isset($this->request->post['cheslo']) ? $this->request->post['cheslo']:0;

      // массив вывода
      $json = array();
      $this->load->model('module/mark_ups');
      $json['manufacture-add'] = $this->model_module_mark_ups->Add_insert_m($id, $procent, $cheslo);
      $this->response->addHeader('Content-Type: application/json');
      $this->response->setOutput(json_encode($json));
    }

  }
}
