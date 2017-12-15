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
		$data['button_back'] = $this->language->get('button_back');
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

		$data['action'] = $this->url->link('module/update_prise', 'token=' . $this->session->data['token'], $this->ssl);
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

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

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
		if(isset( $_GET['uploadfiles'] )){
			$data[0] = "заходим в процедуру";
		}


		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($data));

	}

	public function ManufactureUp(){

		$this->load->model('module/update_prise');
		$json = array();
		$json['Manufacture'] = $this->model_module_update_prise->NManufacture();

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}

	public function CategoryUp(){

		$this->load->model('module/update_prise');
		$json = array();
		$json['Category'] = $this->model_module_update_prise->NCategory();

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}

	public function upload() {
// читаем какие товары у нас в базе


// подготовка к обработке файла
//		$this->load->language('catalog/download');

		$json = array();

		// Check user has permission
		if (!$this->user->hasPermission('modify', 'catalog/download')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			if (!empty($this->request->files['file']['name']) && is_file($this->request->files['file']['tmp_name'])) {
				// Sanitize the filename
				$filename = basename(html_entity_decode($this->request->files['file']['name'], ENT_QUOTES, 'UTF-8'));
				// Return any upload error
				if ($this->request->files['file']['error'] != UPLOAD_ERR_OK) {
					$json['error'] = $this->language->get('error_upload_' . $this->request->files['file']['error']);
				}
			} else {
				$json['error'] = $this->language->get('error_upload');
			}
		}

		if (!$json) {
			$file = $filename;

			move_uploaded_file($this->request->files['file']['tmp_name'], DIR_DOWNLOAD . $file);
			$xxx[] = DIR_DOWNLOAD . $file;
// читаем содержимое файла
			$fp = fopen($xxx[0], "r");
			$newprice = array();
			if ($fp)
			{
				while (!feof($fp))
				{
					$mytext = fgets($fp, 99999);
					$arr1 = explode(",", $mytext);
						if ($arr1[0]){
						 $newprice[$arr1[0]] = $arr1[1];
						 $files[] = $arr1[1];
						}
				}
			}
			else echo "Error ";
			fclose($fp);
// в массиве все данные с файла $arrary_
	$this->load->model('module/update_prise');
	$oldprice = array();
	$oldprice = $this->model_module_update_prise->Oldprice();
// создаем массивы которые потом будем заливать на сервер
// updp - массив где изменилась цена
// equally - массив где  цена осталась не изменной
	$updp = array();
	$equally = array();

// ищем что из массива oldprice нужно обновить ($updp) и что осталос не изменным ($equally),
// а из массива $newprice будем удалять эти значения, чтоб у нас в нем остались только новые товары
$ff1 = array();
$ff2 = array();
	foreach ($oldprice as $key => $value) {
		foreach ($newprice as $key2 => $value2) {
			if($key === $key2 ){
/*
				$ff1 = $key . "= key==key2 =" . $key2;
				$ff2 = $value . "= value==value2 =" . $value2;
				print_r($ff1);
				print_r("\n");
				print_r($ff2);
*/
				if(floatval($value) === floatval($value2)){
					$equally[$key2] = $value2;
					unset($newprice[$key2]);
				}
				else{
					$updp[$key2] = $value2;
					unset($newprice[$key2]);
				}

			}
		}
	}
/*
	print_r("\nUpdp:\n");
	print_r($updp);
	print_r("\n");
	print_r("\nequally:");
	print_r($equally);
	print_r("\n");
	print_r("\nnewprice:\n");
	print_r($newprice);
	print_r("\n");
*/
// теперь когда получены масивы данных, заносим в БД
// вначале сделаем все товары что их нет в наличии
$this->model_module_update_prise->Status0();
// обновим статус товаров которые не изменились
$this->model_module_update_prise->Up0($equally);
// обновим цены товаров, где изменилась цена
$this->model_module_update_prise->UpNewprise($updp);
// добавим новые товары
$this->model_module_update_prise->InsertNew($newprice);

//			$json['filename'] = $file;
//			$json['mask'] = $filename;
//			$json['success'] = $this->request->files['file']['error'];
			$json['success'] = $this->language->get('text_upload');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

}
