<?php

class ControllerModuleCellback extends Controller {
private $error = array(); // объявляем переменную - массив с возможными ошибками
public function index() {
    // подключаем языковой файл
    $this->load->language('module/cellback');
    //Зададим title для нашего модуля
    $this->document->setTitle($this->language->get('heading_title'));

    // регистрируем модуль
  $this->load->model('setting/setting');
   if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
    $this->model_setting_setting->editSetting('update_price', $this->request->post);
    $this->session->data['success'] = $this->language->get('text_success');
    $data['success'] = $this->session->data['success'] ;
   }
  // провр5ка прав пользователя
   protected function validate() {
   if (!$this->user->hasPermission('modify', 'module/cellback')) {
    $this->error['warning'] = $this->language->get('error_permission');
   }
   return !$this->error;
  }
  // переменные из файла language (дописать)
  $data['heading_title'] = $this->language->get('heading_title');
  $data['text_edit'] = $this->language->get('text_edit');
  $data['text_enabled'] = $this->language->get('text_enabled');
  $data['text_disabled'] = $this->language->get('text_disabled');
  $data['text_cellback'] = $this->language->get('text_cellback');

  // чтоб ссесия подключения не отвалилась
  $data['token'] = $this->session->data['token'];
  // И сообщения об ошибках:
  if (isset($this->error['warning'])) {
   $data['error_warning'] = $this->error['warning'];
  } else {
   $data['error_warning'] = '';
  }

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
   $data['import'] = $this->url->link('module/cellback', 'token=' . $this->session->data['token'], 'SSL');
  //его реальный статус module — включен или нет
   if (isset($this->request->post['update_price_status'])) {
    $data['update_price_status'] = $this->request->post['update_price_status'];
   } else {
    $data['update_price_status'] = $this->config->get('update_price_status');
   }
   // подключаем с админской части шапки колонки слева и футера
   $data['header'] = $this->load->controller('common/header');
   $data['column_left'] = $this->load->controller('common/column_left');
   $data['footer'] = $this->load->controller('common/footer');

   // передаем данные на отрисовку
  $this->response->setOutput($this->load->view('module/cellback.tpl', $data));

  //Решим для себя, что будет использовать метод POST для передачи данных из формы.
  //  $name = ($this->request->post['name']) ? $this->request->post['name']:'default';
  }
}
// обрабатываем форму
public function Formcellback(){
  //

}
// показываем данные которые занесены в БД
public function Updateprice(){
  // получаем значения
  $messing = array();
  $filename = ($this->request->post['uploadfiles']) ? $this->request->post['uploadfiles'] : 0;
  if (!$filename) {

  }
  $data = array();

  if( isset( $_GET['uploadfiles'] ) ){
      $error = false;
      $files = array();
      $text = "";
      $text3 = "";
      $text3 = $_GET['uploadfiles'];
      $text2 = array();
      $uploaddir = './uploads/'; // . - текущая папка где находится submit.php

  	// Создадим папку если её нет
  	 if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );
     $text2[] = $_FILES['userfile']['tmp_name'];
  	// переместим файлы из временной директории в указанную
  	foreach( $_FILES as $file ){
      //  $files[] =  $file['name'] ;
      $text =realpath($file['tmp_name']);
    //  $text2 = realpath(basename($file['name']));
          if( move_uploaded_file( $file['tmp_name'], $uploaddir . basename($file['name']) ) ){
              $files[] = realpath( $uploaddir . $file['name'] );
          }
          else{
              $error = true;
          }

      }

  $arrary_ = array();
  // пробуем обработать файл и выдать результат

    $fp = fopen($files[0], "r");
    $arrary_ = array();
    if ($fp)
    {
      while (!feof($fp))
      {
        $mytext = fgets($fp, 99999);
        $arr1 = explode(",", $mytext);
          if ($arr1[0]){
           $arrary_[$arr1[0]] = $arr1[1];
           $files[] = $arr1[1];
          }
      }
    }
      else echo "Error ";
      fclose($fp);
      $files[0] ='Файл загружен и обработан! ='.$files[0]." arr=".$text3." text=".$text;

      $data = $error ? array('error' => 'Ошибка загрузки файлов.') : array('files' => $files);

  	echo json_encode( $data );
