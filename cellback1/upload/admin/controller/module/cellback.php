<?php

class ControllerCellback extends Controller {
	private $error = array(); // объявляем переменную - массив с возможными ошибками
	public function index() {
		$this->load->language('module/cellback');
		$this->document->setTitle($this->language->get('heading_title'));
		// регистрируем модуль
		$this->load->model('setting/setting');
		$data['ok'] = 1;
	if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('cellback', $this->request->post);
			$data['ok'] = 2;
			$this->session->data['success'] = $this->language->get('text_success');
			$data['success'] = $this->session->data['success'] ;

		//	$this->response->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
		}
		// определяем переменные
		//$data['mod_id'] = $this->request->get['module_id'];
		$data['heading_title']  			= $this->language->get('heading_title');
// закладки
		$data['tab_message'] 					= $this->language->get( 'tab_message' );
		$data['tab_setting'] 					= $this->language->get( 'tab_setting' );
// таблица
		$data['table_header'] 				= $this->language->get( 'table_header' );
		$data['table_id'] 						= $this->language->get( 'table_id' );
		$data['table_date_creature'] 	= $this->language->get( 'table_date_creature' );
		$data['table_date_cellback'] 	= $this->language->get( 'table_date_cellback' );
		$data['table_name'] 					= $this->language->get( 'table_name' );
		$data['table_telepfon'] 			= $this->language->get( 'table_telepfon' );
		$data['table_comment'] 				= $this->language->get( 'table_comment' );
		$data['table_del'] 						= $this->language->get( 'table_del' );
		$data['mail'] 								= $this->language->get( 'mail' );
		$data['bg_form'] 							= $this->language->get( 'bg_form' );
		$data['capcha'] 							= $this->language->get( 'capcha' );
		$data['capcha1key'] 					= $this->language->get( 'capcha1key' );
		$data['capcha2key'] 					= $this->language->get( 'capcha2key' );

// текстовка


// другие возможно удалить
		$data['text_edit'] 				= $this->language->get('text_edit');
		$data['text_enabled'] 		= $this->language->get('text_enabled');
		$data['text_disabled'] 		= $this->language->get('text_disabled');
		$data['table_image'] 			= $this->language->get('table_image');
		$data['table_name'] 			= $this->language->get('table_name');
		$data['table_text'] 			= $this->language->get('table_text');
		$data['button_save'] 			= $this->language->get('button_save');
		$data['button_cancel'] 		= $this->language->get('button_cancel');


		$data['table_edit'] 			= $this->language->get('table_edit');
		$data['table_delete'] 		= $this->language->get('table_delete');
		$data['table_id'] 				= $this->language->get('table_id');
		$data['token'] 						= $this->session->data['token'];
		$data['title_add'] 				= $this->language->get('title_add');

		$data['button_prim'] 			= $this->language->get( 'button_prim' );
		$data['button_del'] 			= $this->language->get( 'button_del' );
		$data['button_red'] 			= $this->language->get( 'button_red' );

		$data['text_etap0'] 			= $this->language->get( 'text_etap0' );
		$data['text_etap1m'] 			= $this->language->get( 'text_etap1m' );
		$data['text_etap1c'] 			= $this->language->get( 'text_etap1c' );
		$data['text_etap2'] 			= $this->language->get( 'text_etap2' );
		$data['text_etap3'] 			= $this->language->get( 'text_etap3' );
		$data['text_cheslo'] 			= $this->language->get( 'text_cheslo' );
		$data['text_procent'] 		= $this->language->get( 'text_procent' );
		$data['text_procent'] 		= $this->language->get( 'text_procent' );
    $data['text_no_data'] 		= $this->language->get( 'text_no_data' );
		$data['del_help'] 				= $this->language->get('del_help');

		$data['$m_del'] 						= array();
		$data['$temp_m'] 						= array();
		$data['$c_del'] 						= array();
		$data['$temp_c'] 						= array();
		$data['$table_m'] 					= array();
		$data['$table_c'] 					= array();
		$data['$manufacture_name'] 	= array();
		$data['$category_name'] 		= array();

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		// хлебные крошки, нужны для оформления модуля "как все"
		$data['breadcrumbs'] = array();
		// Добавляем по одной крошки, сначала ссылка на главную страницу
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'), // text_home по всей видимости доступен отовсюду
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
		);
		// добавляем ссылку на список с модулями, прописано в своем языковом файле
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL')
		);

		// кнопки

		$data['action'] = $this->url->link('module/cellback', 'token=' . $this->session->data['token'], 'SSL');

		$data['cancel'] = $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], $this->ssl);
		if (isset($this->request->post['cellback_status'])) {
			$data['cellback_status'] = $this->request->post['cellback_status'];
		} else {
			$data['cellback_status'] = $this->config->get('cellback_status');
		}
		// получение коментов

		$data['commets'] = array();
		$this->load->model('module/cellback');
		//$data['cellback'] = $this->model_comments_comments->getAll();

		$data['n_manufacture'] = $this->model_module_cellback->getNManufacture();
		$data['n_category'] = $this->model_module_cellback->getNCategory();
		$data['name_manufacture'] = $this->model_module_cellback->getNameManufacture();
		$data['name_category'] = $this->model_module_cellback->getNameCategory();

		// подключаем с админской части шапки колонки слева и футера
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
// передаем данные на отрисовку
		$this->response->setOutput($this->load->view('module/cellback.tpl', $data));
	}
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'module/cellback')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function deleteManufacture(){
		// получаем значения
		$text = ($this->request->post['id_m']) ? $this->request->post['id_m'] : 0;
		// массив вывода
		$json = array();
		if (!$text) {
			$json['error'] = 'no id';
		} else {
			$this->load->model('module/cellback');
			$json['manufacture'] = $this->model_module_cellback->delManufacture($text);
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function deleteCategory(){
		// получаем значения
		$text = ($this->request->post['id_c']) ? $this->request->post['id_c'] : 0;
		// массив вывода
		$json = array();
		if (!$text) {
			$json['error'] = 'no id';
		} else {
			$this->load->model('module/cellback');
			$json['manufacture'] = $this->model_module_cellback->delCategory($text);
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function addManufacture(){
		// получаем значения
		$id = isset($this->request->post['manufacturer_id']) ? $this->request->post['manufacturer_id']:8;
		$procent = isset($this->request->post['procent']) ? $this->request->post['procent']:0;
		$cheslo = isset($this->request->post['cheslo']) ? $this->request->post['cheslo']:0;

		// массив вывода
		$json = array();
		$this->load->model('module/cellback');
		$json['manufacture-add'] = $this->model_module_cellback->Add_insert_m($id, $procent, $cheslo);
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function addCategory(){
		// получаем значения
		$id = isset($this->request->post['category_id']) ? $this->request->post['category_id']:28;
		$procent = isset($this->request->post['procent']) ? $this->request->post['procent']:0;
		$cheslo = isset($this->request->post['cheslo']) ? $this->request->post['cheslo']:0;
		// массив вывода
		$json = array();
		$this->load->model('module/cellback');
		$json['manufacture-add'] = $this->model_module_cellback->Add_insert_c($id, $procent, $cheslo);
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

}
