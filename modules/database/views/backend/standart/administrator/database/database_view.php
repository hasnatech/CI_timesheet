
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+e', function assets() {
      $('#btn_edit').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
      $('#btn_back').trigger('click');
       return false;
   });
    
}


jQuery(document).ready(domo);
</script>

<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Database      <small><?= cclang('detail', ['Database']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/database'); ?>">Database</a></li>
      <li class="active"><?= cclang('detail'); ?></li>
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
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/view.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Database</h3>
                     <h5 class="widget-user-desc">Detail Database</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal form-step" name="form_database" id="form_database" >


                  <div class="col-md-12">
                     <form action="<?= base_url('administrator/database/update_table_name/'.ccencrypt($table_name)) ?>">

                     <div class="row">
                     <label>Table</label>

                        <div class="form-group">
                           <div class="col-md-4">
                              <div class="input-group ">
   
                                 <input type="text" class="form-control" value="<?= ($table_name) ?>" name="table_name_change">
                                 <span class="input-group-btn">
                                    <button type="" class="btn btn-info btn-flat">Update table Name</button>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                      
                        <hr>
                     </form>

                     <form action="<?= base_url('administrator/database/add/'.ccencrypt($table_name)) ?>">

                     <div class="row">
                     <label>Add Field</label>

                        <div class="form-group">
                           <div class="col-md-2">
                              <select class="form-control" name="position" id="">
                                 <option value="after">After</option>
                              </select>
                           </div>
                           <div class="col-md-2">
                              <select class="form-control" name="field" id="">
                                 <?php foreach($fields as $field): ?>
                                 <option value="<?= $field->name ?>"><?= $field->name ?></option>
                                 <?php endforeach ?>
                              </select>
                           </div>
                           
                           <div class="col-md-1">
                              <button class="btn btn-default">ok</button>
                           </div>
                        </div>
                     </div>
                      
                        <hr>
                     </form>
                  </div>
                  

                  <table class="table table-striped table-bordered">
                     <thead>
                     <tr>
                        <th width="1"></th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Default</th>
                        <th>Null</th>
                        <th>Extra</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody class="table-field-wrapper">
                     <?php foreach($fields as $field): ?>
                     <tr data-field-name="<?= $field->name ?>">
                        <td><i style="cursor: move;" class="fa fa-bars dragable fa-lg text-muted"></i><br></td>
                        <td><?= $field->name ?>
                        <?php if ($field->primary_key): ?>
                           <i class="fa fa-key text-yellow"></i>
                        <?php endif ?>
                        </td>
                        <td><?= $field->detail->Type ?></td>
                        <td><?= $field->detail->Default ?></td>
                        <td><?= $field->detail->Null ?></td>
                        <td><?= $field->detail->Extra ?></td>
                        <td>
                           
                           <div class="btn-group">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                 <?= cclang('action') ?>
                                 <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                    <?php if ($field->primary_key): ?>
                                 <li><a href="<?= base_url('administrator/database/remove_key/'.ccencrypt($table_name).'?field='.$field->name) ?>">  <i class="fa  fa-key"></i>  Remove Primary Key</a></li>
                                 <?php endif ?>
                                 <li><a href="<?= site_url('administrator/database/change_field/'.ccencrypt($table_name).'?'.http_build_query(['field' => $field->name])); ?>" class=""><i class="fa fa-edit "></i> <?= cclang('update_button'); ?></a></li>
                                 <li><a href="javascript:void(0);" data-href="<?= site_url('administrator/database/remove_field/'.ccencrypt($table_name).'?field='.$field->name); ?>" class=" remove-data"><i class="fa fa-close"></i> <?= cclang('drop'); ?></a></li>
                                 </ul>
                              </div>
                        </td>
                     </tr>
                     <?php endforeach ?>
                     </tbody>
                  </table>
                    <div class="view-nav">
                       <!--  <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit database (Ctrl+e)" href="<?= site_url('administrator/database/edit/'); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Database']); ?> </a> -->
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/database/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Database']); ?></a>
                     </div>
                    
                  </div>
               </div>
            </div>
            <!--/box body -->
         </div>
         <!--/box -->

      </div>
   </div>
</section>
<!-- /.content -->
<script>
$(document).ready(function(){
   $('.remove-data').click(function(){

var url = $(this).attr('data-href');

swal({
    title: "<?= cclang('are_you_sure'); ?>",
    text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
    cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
    closeOnConfirm: true,
    closeOnCancel: true
  },
  function(isConfirm){
    if (isConfirm) {
      document.location.href = url;            
    }
  });

return false;
});



    $(document).find("table tbody").sortable({
        helper: fixHelperModified,
        handle: '.fa-bars',
        start: function() {
            $(this).addClass('target-area');
        },
        stop: function(event, ui) {
           var position = '';
           var target = '';
           var field = $(ui.item[0]).data('field-name');


           var fields = [];
           $('table tbody tr').each(function(){
            fields.push($(this).data('field-name'))
           })

           if(fields.indexOf(field) == 0) {
              position = 'before';
              target = fields[fields.indexOf(field)+ 1]
           } else {
              position = 'after';
              target = fields[fields.indexOf(field) -1]
           }
           $.ajax({
              type: "GET",
              url: BASE_URL + 'administrator/database/move_column/<?= ccencrypt($table_name) ?>/?',
              data: {
               position : position,
               target : target,
               field : field,
              },
              dataType: "JSON",
              success: function (response) {
                 if(response.message.length) {
                    toastr['error'](response.message)
                 }

                 if (response.success !== true) {
                  toastr['error']('Error when move field')
                 }
              }
           });
        }
    });

      var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });
        return $helper;
    };

    //Renumber table rows
    function renumber_table(tableID) {
        $(tableID + " tr").each(function() {
            count = $(this).parent().children().index($(this)) + 1;
            $(this).find('.priority').val(count);
        });
    }

   });
</script>