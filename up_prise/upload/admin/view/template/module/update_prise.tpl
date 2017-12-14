<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
      <!--  <button type="submit" form="form-y" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button> -->
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="" data-original-title="<?php echo $button_back; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
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
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-download" class="form-horizontal">
        <div class="form-group">
          <span class="add_com">
      <!--      <form action="#" method="post" enctype="multipart/form-data" id="up_prise" class="form-horizontal"> -->
            <!--  <div class="form-group"> -->
                  <label for="exampleInputFile" class="text-default"><p><?php echo $text_etap1m; ?></p></label>
            <!--
                  <input type="file" class="form-control-file" name="filename" value="" aria-describedby="fileHelp">
            </div>  -->
              <button type="button" class="btn btn-primary" id="button-upload" style="margin-top: 10px;"><?php echo $download; ?></button><br>
        <!--    </form> -->
          </span>
        </div>
        </form>
        <div class="form-group">
          <label for="exampleInputFile" class="text-default"><p><?php echo $text_etap2; ?></p></label>
          <div class="form-group">
              <button type="button" class="btn btn-primary" name="button_m" id="button_m"><?php echo $button_m; ?></button>
          </div>
          <div class="form-group">
              <button type="button" class="btn btn-primary" name="button_c" id="button_c"><?php echo $button_c; ?></button>
          </div>
        </div>
<!--
          <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-download" class="form-horizontal">

          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-filename"><span data-toggle="tooltip" >Имя загружаемого файла</span></label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" name="filename" value="<?php echo $filename; ?>" placeholder="<?php echo $entry_filename; ?>" id="input-filename" class="form-control" />
                <span class="input-group-btn">
                  <button type="button" id="button-upload" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary"><i class="fa fa-upload"></i>Загрузить</button>
                </span>
              </div>
            </div>
          </div>

        </form>
-->
<script type="text/javascript"><!--

$('#button-upload').on('click', function() {
	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}
  var regVr22 = "<div><img style='margin-bottom:-4px;' src='http://oilplus.bestwatch.in.ua/catalog/view/theme/oilplus/image/load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Информация обрабатывается...</span></div><br/>";
	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=module/update_prise/upload&token=<?php echo $token; ?>',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$('#button-upload').button('loading');
				},
				complete: function() {
					$('#button-upload').button('reset');
				},
				success: function(json) {
					if (json['error']) {
						alert(json['error']);
					}

					if (json['success']) {
						//alert(json['success']);
            $("#loadBar").html(json['success']).show();
//						$('input[name=\'filename\']').val(json['filename']);
//						$('input[name=\'mask\']').val(json['mask']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});

-->
</script>

<script type="text/javascript"><!--
          $(document).ready(function() {



  /*
          $('#up').click(function(){})(jQuery)
          	DelC = $('#InputFile').val();
          	$("#loadBar").html(DelC).show();
          	$.ajax({
          		url: 'index.php?route=module/comments/addUpload&token=<?php echo $token; ?>',
          		type: 'post',
          		data: DelC,
          		dataType: 'json',
          		beforeSend: function() {
          			console.log('отослано');
          			console.log(DelC);
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
          gems = "$(this).find('button')";
          $("#loadBar").html(regVr22).show();
          	$.ajax({
          		url: 'index.php?route=module/update_prise/ManufactureUp&token=<?php echo $token; ?>',
          		type: 'post',
          		//data: gems,
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
          gems = "$(this).find('button')";
          $("#loadBar").html(regVr22).show();
          	$.ajax({
          		url: 'index.php?route=module/update_prise/CategoryUp&token=<?php echo $token; ?>',
          		type: 'post',
          		//data: gems,
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


        //(function($){
          var files;
          $('input[type=file]').change(function(){
            files = this.files;
          });

          $('#up').click(function(){
            event.stopPropagation(); // Остановка происходящего
            event.preventDefault();  // Полная остановка происходящего
            var data = new FormData();
            $.each( files, function( key, value ){
              data.append( key, value );
            });
            var regVr22 = "<div><img style='margin-bottom:-4px;' src='http://oilplus.bestwatch.in.ua/catalog/view/theme/oilplus/image/load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Информация обрабатывается...</span></div><br/>";

            if(typeof data != ''){
              console.log('Yes');
            }else{
              $("#loadBar").html(regVr22).show();
            }

            $.ajax({
          		url: './submit.php?uploadfiles',
          		type: 'POST',
          		data: data,
          		cache: false,
          		dataType: 'json',
          		processData: false, // Не обрабатываем файлы (Don't process the files)
          		contentType: false, // Так jQuery скажет серверу что это строковой запрос
              beforeSend: function() {
                console.log('отослано!');
              },
          		success: function( respond, textStatus, jqXHR ){
          			// Если все ОК
          			if( typeof respond.error === 'undefined' ){

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
        //});

      });
        //--></script>


    </div>
  </div>
</div>
<?php echo $footer; ?>
