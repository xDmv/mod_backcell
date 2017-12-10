<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
      <!--  <button type="submit" form="form-y" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button> -->
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
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
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-cogs"></i> <?php echo $heading_title; ?></h3>
      </div>
      <div class="panel-body">
        <div align="center"  id='loadBar'></div>
        <div class="text-default"><p><strong><?php echo $text_etap0; ?></strong></p></div>
        <div class="form-group">
          <span class="add_com">
      <!--      <form action="#" method="post" enctype="multipart/form-data" id="up_prise" class="form-horizontal"> -->
            <!--  <div class="form-group">  -->
                  <label for="exampleInputFile" class="text-default"><p><?php echo $text_etap1m; ?></p></label>
                  <input type="file" class="form-control-file" name="filename" value="" aria-describedby="fileHelp">
            <!--  </div>  -->
              <button type="button" class="btn btn-primary" id="up" style="margin-top: 10px;"><?php echo $download; ?></button><br>
        <!--    </form> -->
          </span>
        </div>
        <div class="form-group">
          <label for="exampleInputFile" class="text-default"><p><?php echo $text_etap2; ?></p></label>
          <div class="form-group">
              <button type="button" class="btn btn-primary" name="button_m" id="button_m"><?php echo $button_m; ?></button>
          </div>
          <div class="form-group">
              <button type="button" class="btn btn-primary" name="button_c" id="button_c"><?php echo $button_c; ?></button>
          </div>
        </div>

          <script type="text/javascript"><!--
    (function($){
      var files;
      $('input[type=file]').change(function(){
      	files = this.files;
      });

      $('#up').click(function( event ){
      	event.stopPropagation(); // Остановка происходящего
      	event.preventDefault();  // Полная остановка происходящего

      	// Содадим данные формы и добавим в них данные файлов из files
      	var data = new FormData();
      	$.each( files, function( key, value ){
      		data.append( key, value );
      	});

      	// Отправляем запрос
      	$.ajax({
      		url: 'index.php?route=module/comments/addUpload&token=<?php echo $token; ?>',
      		type: 'POST',
      		data: data,
      		cache: false,
      		dataType: 'json',
      		processData: false, // Не обрабатываем файлы (Don't process the files)
      		contentType: false, // Так jQuery скажет серверу что это строковой запрос
      		success: function( respond, textStatus, jqXHR ){
      			// Если все ОК
      			if( typeof respond.error === 'undefined' ){
      				// Файлы успешно загружены, делаем что нибудь здесь

      				// выведем пути к загруженным файлам в блок '.ajax-respond'
      				var files_path = respond.files;
      				var html = '';
      				$.each( files_path, function( key, val ){ html += val +'<br>'; } )
      				$('#loadBar').html( html );
      			}
      			else{
      				console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
      			}
      		},
      		error: function( jqXHR, textStatus, errorThrown ){
      			console.log('ОШИБКИ AJAX запроса: ' + textStatus );
      		}
      	});

      });


      })(jQuery)
        $(document).ready(function() {

          /*
          $('#my_form').on('submit', function(e){
            e.preventDefault();
            var $that = $(this),
            formData = new FormData($that.get(0)); // создаем новый экземпляр объекта и передаем ему нашу форму (*)
            $.ajax({
              url: $that.attr('action'),
              type: $that.attr('method'),
              contentType: false, // важно - убираем форматирование данных по умолчанию
              processData: false, // важно - убираем преобразование строк по умолчанию
              data: formData,
              dataType: 'json',
              success: function(json){
                if(json){
                  $that.replaceWith(json);
                }
              }
            });
          });
          */
          /*
      //  $(function(){
          $('#up').click(function(e){
            var regVr22 = "<div><img style='margin-bottom:-4px;' src='http://oilplus.bestwatch.in.ua/catalog/view/theme/oilplus/image/load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Информация обрабатывается...</span></div><br/>";
            $("#loadBar").html(regVr22).show();

            e.preventDefault();
            var $that = $(this),
            formData = new FormData($that.get(0)); // создаем новый экземпляр объекта и передаем ему нашу форму (*)
            $.ajax({
              url: 'index.php?route=module/comments/addUpload&token=<?php echo $token; ?>',
              type: 'post',
              contentType: false,
              processData: false,
              data: formData,
              dataType: 'json',
              beforeSend: function() {
                console.log('отослано');
                console.log(json);
              },
              error: function (json) {
                console.log(json);
              },
              success: function(json){
                if(json){$that.replaceWith(json);}
                location.reload();
              }
            });

          });
      //  });


        $('#up').click(function(){
        var regVr22 = "<div><img style='margin-bottom:-4px;' src='http://oilplus.bestwatch.in.ua/catalog/view/theme/oilplus/image/load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Информация обрабатывается...</span></div><br/>";
        $("#loadBar").html(regVr22).show();
          $.ajax({
            url: 'index.php?route=module/update_prise/addUpload&token=<?php echo $token; ?>',
            type: 'post',
            contentType: false,
            processData: false,
            data: $('form#up_prise').serialize(),
            dataType: 'json',
            beforeSend: function() {
              console.log('отослано');
              console.log($('.add_com input[type=\'file\']'));
            },
            error: function (json) {
              console.log(json);
            },
            success: function(json) {
              console.log('обработано');
              console.log(json);
              location.reload();
            }
          });
            return false;
        });

*/

        $('#button_m').click(function(){
          var regVr22 = "<div><img style='margin-bottom:-4px;' src='http://oilplus.bestwatch.in.ua/catalog/view/theme/oilplus/image/load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Информация обрабатывается...</span></div><br/>";
          $("#loadBar").html(regVr22).show();
          $.ajax({
            url: 'index.php?route=module/update_prise/ManufactureUp&token=<?php echo $token; ?>',
            type: 'post',
            dataType: 'json',
            beforeSend: function() {
              console.log('отослано');
              //console.log(json);
            },
            error: function (_e) {
              console.log(_e);
              //console.log(json);
            },
            success: function(response) {
              console.log('обработано');
              console.log(response);
              location.reload();
            }
          });
          return false;
        });

        $('#button_c').click(function(){
        var regVr22 = "<div><img style='margin-bottom:-4px;' src='http://oilplus.bestwatch.in.ua/catalog/view/theme/oilplus/image/load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Информация обрабатывается...</span></div><br/>";
        $("#loadBar").html(regVr22).show();
          $.ajax({
            url: 'index.php?route=module/update_prise/CategoryUp&token=<?php echo $token; ?>',
            type: 'post',
            dataType: 'json',
            beforeSend: function() {
              console.log('отослано');
              //console.log(json);
            },
            error: function (_e) {
              console.log(_e);
              //console.log(json);
            },
            success: function(response) {
              console.log('обработано');
              console.log(response);
              location.reload();
            }
          });
          return false;
        });

        });
        //--></script>


    </div>
  </div>
</div>
<?php echo $footer; ?>
