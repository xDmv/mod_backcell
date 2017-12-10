<?php

class ControllerModuleUpdateprise extends Controller {
	private $error = array(); // объявляем переменную - массив с возможными ошибками
	public function index() {
		$this->load->language('module/update_prise');
		$this->document->setTitle($this->language->get('heading_title'));
		// регистрируем модуль
		$this->load->model('setting/setting');
		$data['ok'] = 1;
	if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('update_prise', $this->request->post);
			$data['ok'] = 2;
			$this->session->data['success'] = $this->language->get('text_success');
			$data['success'] = $this->session->data['success'] ;

			$this->response->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
		}
		// определяем переменные

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['table_image'] = $this->language->get('table_image');
		$data['table_name'] = $this->language->get('table_name');
		$data['table_text'] = $this->language->get('table_text');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['table_header'] = $this->language->get('table_header');
		$data['table_edit'] = $this->language->get('table_edit');
		$data['table_delete'] = $this->language->get('table_delete');
		$data['table_id'] = $this->language->get('table_id');
		$data['token'] = $this->session->data['token'];
		$data['title_add'] = $this->language->get('title_add');

		$data['table_header'] = $this->language->get( 'table_header' );
		$data['table_id'] = $this->language->get( 'table_id' );
		$data['table_name'] = $this->language->get( 'table_name' );
		$data['table_procent'] = $this->language->get( 'table_procent' );
		$data['table_cheslo'] = $this->language->get( 'table_cheslo' );
		$data['table_del'] = $this->language->get( 'table_del' );
		$data['table_up'] = $this->language->get( 'table_up' );
		$data['table_prin'] = $this->language->get( 'table_prin' );

		$data['tab_manufacture'] = $this->language->get( 'tab_manufacture' );
		$data['tab_category'] = $this->language->get( 'tab_category' );

		$data['button_prim'] = $this->language->get( 'button_prim' );
		$data['button_del'] = $this->language->get( 'button_del' );
		$data['button_red'] = $this->language->get( 'button_red' );
		$data['button_m'] = $this->language->get( 'button_m' );
		$data['button_c'] = $this->language->get( 'button_c' );

		$data['text_etap0'] = $this->language->get( 'text_etap0' );
		$data['text_etap1m'] = $this->language->get( 'text_etap1m' );
		$data['text_etap1c'] = $this->language->get( 'text_etap1c' );
		$data['text_etap2'] = $this->language->get( 'text_etap2' );
		$data['text_etap3'] = $this->language->get( 'text_etap3' );
		$data['text_cheslo'] = $this->language->get( 'text_cheslo' );
		$data['text_procent'] = $this->language->get( 'text_procent' );
		$data['text_procent'] = $this->language->get( 'text_procent' );
    $data['text_no_data'] = $this->language->get( 'text_no_data' );
		$data['del_help'] = $this->language->get('del_help');
		$data['download'] = $this->language->get('download');

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

		$data['action'] = $this->url->link('module/update_prise', 'token=' . $this->session->data['token'], 'SSL');
		$data['cancel'] = $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], $this->ssl);
/*
		$data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');
		if (isset($this->request->post['update_prise_status'])) {
			$data['update_prise_status'] = $this->request->post['update_prise_status'];
		} else {
			$data['update_prise_status'] = $this->config->get('update_prise_status');
		}
*/
		// подключаем с админской части шапки колонки слева и футера
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
// передаем данные на отрисовку
		$this->response->setOutput($this->load->view('module/update_prise.tpl', $data));
	}
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'module/update_prise')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function addUpload(){
		$data = array();
		$data[0] = "заходим в процедуру";

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($data));

	}

	public function ManufactureUp(){

		$this->load->model('module/update_prise');
		$json = array();
		$json['Manufacture'] = $this->model_module_update_prise->NManufacture();

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($data));

	}

	public function CategoryUp(){

		$this->load->model('module/update_prise');
		$json = array();
		$json['Category'] = $this->model_module_update_prise->NCategory();

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}


}
