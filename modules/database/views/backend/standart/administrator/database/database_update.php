
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script type="text/javascript">
    function domo(){
     
       // Binding keys
       $('*').bind('keydown', 'Ctrl+s', function assets() {
          $('#btn_save').trigger('click');
           return false;
       });
    
       $('*').bind('keydown', 'Ctrl+x', function assets() {
          $('#btn_cancel').trigger('click');
           return false;
       });
    
      $('*').bind('keydown', 'Ctrl+d', function assets() {
          $('.btn_save_back').trigger('click');
           return false;
       });
        
    }
    
    jQuery(document).ready(domo);
</script>

<style>
  .table-field-item:first .btn-remove-field {
    display: none;
  }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Database        <small><?= cclang('edit', ['field']); ?> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/database'); ?>">Database</a></li>
        <li class="active"><?= cclang('edit'); ?></li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row" >
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-body ">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header ">
                            <div class="widget-user-image">
                                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                            </div>
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">Database</h3>
                            <h5 class="widget-user-desc"><?= cclang('edit', ['field']); ?></h5>
                            <hr>
                        </div>
                        <div class="field-wrapper-template" style="display: none;">
                        <table>
                          <tr class="table-field-item">
                            <td><input type="text"  name="table[{id}][name]" class="name form-control field-auto-name"></td>
                            <td>
                              <select class="form-control field-auto-type" name="table[{id}][type]" id="">
                                <?php foreach($field_type as $group => $types): ?>
                                  <optgroup label="<?= ucwords($group) ?>">
                                      <?php foreach($types as $type): ?>
                                      <option value="<?= $type ?>"><?= $type ?></option>
                                      <?php endforeach ?>
                                    </optgroup>
                                <?php endforeach ?>
                              </select>
                            </td>
                            <td><input type="text"  name="table[{id}][length]" class="form-control field-auto-length" ></td>
                            <td>
                            <select class="form-control table-default" name="table[{id}][default]" id="default"  name="table[{id}][default]" class="field-auto-default">
                                  <option value="">none</option>
                                  <option value="null">null</option>
                                  <option value="as_defined">as defined</option>
                            </select>
                            <div class="defined-value-wrapper" style="display: none;">
                              <input type="text" name="table[{id}][defined_value]" class="defined-value form-control">
                            </div>
                            </td>
                            <td>
                              <input  name="table[{id}][null]" type="checkbox" class="field-auto-null" value="true">
                            </td>
                            <td>
                              <input  name="table[{id}][auto_increment]" class="field-auto-increment" type="checkbox" value="true">
                            </td>
                            <td>
                            </td>
                          </tr>
                        </table>
                        </div>

                        <?= form_open('', [
                            'name'    => 'form_database', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_database', 
                            'enctype' => 'multipart/form-data', 
                            'method'  => 'POST'
                            ]); ?>
                     
                                                 
                        <div class="form-group ">

                        <div class="col-md-12">
                          <table class="table table-striped table-bordered ">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Length / Value</th>
                                <th>Default</th>
                                <th>Null</th>
                                <th>Auto Increment / Primary Key</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="table-field-wrapper table-edit">
                             
                            </tbody>
                          </table>
                        </div>
                        </div>
                                                
                        
                        <div class="message"></div>
                        <div class="row-fluid col-md-7 container-button-bottom">
                        
                            <a class="btn btn-flat btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back' title="<?= cclang('save_and_go_the_list_button'); ?> (Ctrl+d)">
                            <i class="ion ion-ios-list-outline" ></i> <?= cclang('save_button'); ?>
                            </a>
                            <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="<?= cclang('cancel_button'); ?> (Ctrl+x)">
                            <i class="fa fa-undo" ></i> <?= cclang('cancel_button'); ?>
                            </a>
                            <span class="loading loading-hide">
                            <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> 
                            <i><?= cclang('loading_saving_data'); ?></i>
                            </span>
                        </div>
                                                 <?= form_close(); ?>
                    </div>
                </div>
                <!--/box body -->
            </div>
            <!--/box -->
        </div>
    </div>
</section>
<!-- /.content -->
<!-- Page script -->

<script src="<?= BASE_ASSET ?>js/database-manager.js"></script>
<script>
    $(document).ready(function(){

      var field = <?= json_encode($fields[$field]) ?>

      console.log(field)

      var selected = $('.table-field-item');

      selected.find('.field-auto-name').val(field.name);
      selected.find('.field-auto-type').val(field.type.toUpperCase());
      var value = String(field.detail.Type).match(/\w\(([\w\W]+)\)/);

      if ( value != null) {
        selected.find('.field-auto-length').val(value[1]);
      }


      selected.find('.field-auto-null').prop('checked', field.detail.Null != 'NO')
      if (field.detail.Default != null ) {
        selected.find('.table-default').val('as_defined').trigger('change')
        selected.find('.defined-value').val(field.detail.Default)
      } else {
        selected.find('.table-default').val(field.detail.Default )
      }
      selected.find('.field-auto-increment').prop('checked', field.detail.Extra == 'auto_increment')

                          
      $('#btn_cancel').click(function(){
    
          window.location.href = BASE_URL + 'administrator/database/view/<?= ccencrypt($table_name) ?>';

    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_database = $('#form_database');
        var data_post = form_database.serializeArray();
        var save_type = $(this).attr('data-stype');

        data_post.push({name: 'save_type', value: save_type});
        data_post.push({name: 'field_before', value: field.name});
    
        $('.loading').show();
    
        $.ajax({
          url: BASE_URL + '/administrator/database/change_field_save/<?= ccencrypt($table_name) ?>',
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('.steps li').removeClass('error');
          $('form').find('.error-input').remove();
          if(res.success) {
            
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }
    
            $('.message').printMessage({message : res.message});
            $('.message').fadeIn();
            resetForm();
            $('.chosen option').prop('selected', false).trigger('chosen:updated');
                
          } else {
            if (res.errors) {
                
                $.each(res.errors, function(index, val) {
                    $('form #'+index).parents('.form-group').addClass('has-error');
                    $('form #'+index).parents('.form-group').find('small').prepend(`
                      <div class="error-input">`+val+`</div>
                      `);
                });
                $('.steps li').removeClass('error');
                $('.content section').each(function(index, el) {
                    if ($(this).find('.has-error').length) {
                        $('.steps li:eq('+index+')').addClass('error').find('a').trigger('click');
                    }
                });
            }
            $('.message').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
          $('html, body').animate({ scrollTop: $(document).height() }, 2000);
        });
    
        return false;
      }); /*end btn save*/
      
       
 
       

      
    
    
    }); /*end doc ready*/
</script>