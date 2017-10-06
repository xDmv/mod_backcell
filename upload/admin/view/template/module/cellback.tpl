<?php echo $header; ?><?php echo $column_left; ?>
// start code
<div id="content">
	<div class="page-header">
		<div class="container-fluid">
			<div class="pull-right">
				<a href="<?php echo $back; ?>" data-toggle="tooltip" title="<?php echo $button_back; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
			</div>
			<h1><?php echo $heading_title; ?></h1>
			<ul class="breadcrumb">
				<?php foreach ($breadcrumbs as $breadcrumb) { ?>
				<li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
<div class="container-fluid">
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <?php if ($success) { ?>
  <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <?php if ((!$error_warning) && (!$success)) { ?>
  <div id="export_import_notification" class="alert alert-info"><i class="fa fa-info-circle"></i>
    <div id="export_import_loading"><img src="view/image/export-import/loading.gif" /><?php echo $text_loading_notifications; ?></div>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <div><?php print_r($data) ?></div>
  <div style="position: fixed; top: 90px; right: 5px; z-index: 120;">
    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal" style="font-size: 14px;">&nbsp;Обратный званок</button>
  </div>
    <div>
      <div class="modal" id="modal" >
          <?php $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  ?>
          <div class="modal-dialog" style="margin-top: 30px; ">
              <div class="col-sm-12" style="color: #0000CD; background-color: #ffffff;">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                  <h4 class="modal-title" ><center style="color: #0000CD;">Заказать обратный званок</center></h4>
          <form id="cForm2">
          <div class="form-group required">
              <label for="input-name"><b style="color: #FF0000;">*</b>Ваше Имя</label>
              <input type="text" id="fio"  class="form-control" placeholder="Укажите как к Вам обращаться"/>
          </div>
          <div class="form-group required">
              <label  for="input-name"><b style="color: #FF0000;">*</b>Телефон для связи с Вами</label>
              <input type="tel" id="tel"  pattern="+38-[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="Введите в формате: +38 0ХХ ХХХ ХХХХ"/>
          </div>
          <div class="form-group required">
              <label  for="input-name">В какое время Вам перезвонить?</label>
              <p>C
              <select class="form-control" id="timecellbacks">
                  <option value="Выбирите время">Выбиретие время c</option>
                  <option value="9-00">9-00</option>
                  <option value="10-00">10-00</option>
                  <option value="11-00">11-00</option>
                  <option value="13-00">13-00</option>
                  <option value="14-00">14-00</option>
                  <option value="15-00">15-00</option>
                  <option value="16-00">16-00</option>
              </select>до
              <select class="form-control" id="timecellbackd">
                  <option value="Выбирите время">Выбиретие время до</option>
                  <option value="10-00">10-00</option>
                  <option value="11-00">11-00</option>
                  <option value="12-00">12-00</option>
                  <option value="14-00">14-00</option>
                  <option value="15-00">15-00</option>
                  <option value="16-00">16-00</option>
                  <option value="17-00">17-00</option>
              </select>
              </p>
          </div>
          <div class="form-group ">
              <label  for="input-name" class="required">Комментарий</label>
              <textarea id="coment" rows="5" class="form-control"></textarea>
          </div>
          <p style="color: #FF0000;">* - поля которые обязательны для заполнения</p>
          <p>
              <input name="url" type="hidden" value=<?php echo $url; ?> />
              <input class="btn btn-primary" type="submit" />
              <button type="button" class="btn btn-primary" data-dismiss="modal" >Закрыть</button>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    // Форма обратной связи................................./
    var regVr22 = "<div><img style='margin-bottom:-4px;' src='http://oilplus.com.ua/catalog/view/theme/oilplus/image/load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Сообщение обрабатывается...</span></div><br />";
    $("#send").click(function(){
          $("#loadBar").html(regVr22).show();
    var posName = $("#fio").val();
    $("#cForm2").submit(function() { //устанавливаем событие отправки для формы с id=form
      var form_data = $(this).serialize(); //собераем все данные из формы
      $.ajax({
        type: "POST",
        url: "index.php?route=module/update_price/Formcellback&token=<?php echo $token; ?>",
        data: form_data,
        cache: false,
        success: function(response){
      var messageResp = "<p style='font-family:Verdana; font-size:11px; color:green; border:1px solid #00CC00; padding:10px; margin:20px; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; background-color:#fff;'>Спасибо, <b>";
      var resultStat = "</b> за обращение!</br>Мы свяжемся с Вами в ближайшее время!";
      var oll = (messageResp + posName + resultStat);
          if(response == 1){
            $("#loadBar").html(oll).fadeIn(3000);
            $("#fio").val("");
            $("#tel").val("");
            $("#timecellbacks").val("");
            $("#timecellbackd").val("");
            $("#coment").val("");
          }
          else {
            $("#loadBar").html(response).fadeIn(3000);
          }
      }
      });
      return false;
    });
  });
});
</script>
// end code
<?php echo $footer; ?>
