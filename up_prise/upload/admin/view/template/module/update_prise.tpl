<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-y" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
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
          <form action="#" method="post" enctype="multipart/form-data" id="up_prise" class="form-horizontal">
            <label for="exampleInputFile" class="text-default"><p><?php echo $text_etap1m; ?></p></label>
            <input type="file" class="form-control-file" id="InputFile" aria-describedby="fileHelp">
          </form>
        </div>
        <input type="submit" class="btn btn-primary" id="up" value="Загрузить"><br>
        <div class="form-group">
          <label for="exampleInputFile" class="text-default"><p><?php echo $text_etap2; ?></p></label>
          <div class="form-group">
              <button type="button" class="btn btn-primary" id="button_m"><?php echo $button_m; ?></button>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary" id="button_c"><?php echo $button_c; ?></button>
            </div>
        </div>

          <script type="text/javascript"><!--
        $(document).ready(function() {
        $('#up').click(function(){
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

        $('#send_m').click(function(){
        var regVr22 = "<div><img style='margin-bottom:-4px;' src='http://oilplus.bestwatch.in.ua/catalog/view/theme/oilplus/image/load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Информация обрабатывается...</span></div><br/>";
        $("#loadBar").html(regVr22).show();
          $.ajax({
            url: 'index.php?route=module/comments/addManufacture&token=<?php echo $token; ?>',
            type: 'post',
            data: $('form#form_manufacture').serialize(),
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

        $('#send_c').click(function(){
          var regVr22 = "<div><img style='margin-bottom:-4px;' src='http://oilplus.bestwatch.in.ua/catalog/view/theme/oilplus/image/load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Информация обрабатывается...</span></div><br/>";
          $("#loadBar").html(regVr22).show();
            $.ajax({
              url: 'index.php?route=module/comments/addCategory&token=<?php echo $token; ?>',
              type: 'post',
              data: $('form#form_category').serialize(),
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
