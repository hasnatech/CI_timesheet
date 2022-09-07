<?php
if (!isset($display)) {
   $display = false;
}
?>

<div <?php if ($display == false) : ?>style="display:none" <?php endif ?> class="container-groups">
   <div class="form-group ">
      <div class="col-sm-12">
         <select class="form-control strict-group <?= @$class ?>" name="group[]" id="group" multiple data-placeholder="Select groups">
            <?php foreach (db_get_all_data('aauth_groups') as $row) : ?>
               <option <?= array_search($row->id, []) !== false ? 'selected="selected"' : ''; ?> value="<?= $row->id; ?>"><?= ucwords($row->name); ?></option>
            <?php endforeach; ?>
         </select>
         <small>Only selected group can see this field</small>
      </div>
   </div>
</div>


<div class="modal modal-add-action" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Action</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <?= form_open('', [
               'name'    => 'form_action',
               'class'   => '',
               'id'      => 'form_action',
               'method'  => 'POST'
            ]); ?>
            <div class="row">

               <div class="col-sm-8">

                  <input name="crud_id" type="hidden" value="<?= $this->uri->segment(4) ?>">
                  <input name="action_id" type="hidden" value="">
                  <!-- 
                  <label>
                     <div class="layout-icon-wrapper">
                        <div class="layout-icon">
                           <i class="fa fa-file-pdf-o"></i>
                        </div>
                        <div class="layout-info">Report </div>
                        <input type="radio" name="action" value="report">
                     </div>
                  </label> -->


                  <label>
                     <div class="layout-icon-wrapper">
                        <div class="layout-icon">
                           <i class="fa fa-send-o "></i>
                        </div>
                        <div class="layout-info">Button </div>
                        <input type="radio" name="action" value="button">
                     </div>
                  </label>

               </div>
               <div class="row">
                  <div class="col-md-12">
                     <hr>
                  </div>
               </div>

               <div class="action-form-wrapper">

               </div>

               <?= form_close()  ?>




            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-save-action btn-primary">Save changes</button>
         </div>
      </div>
   </div>
</div>





<div class="modal modal-add-function" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Function</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">

            <div class="row">


               <div class="col-sm-8">

                  <input name="crud_id" type="hidden" value="<?= $this->uri->segment(4) ?>">
                  <label>
                     <div class="layout-icon-wrapper" data-toggle="tab" href="#tab_event">
                        <div class="layout-icon">
                           <i class="fa fa-flash"></i>
                        </div>
                        <div class="layout-info">Event </div>
                        <input type="radio" name="function" value="hook">
                     </div>
                  </label>


                  <!--    <label>
                     <div class="layout-icon-wrapper" data-toggle="tab" href="#tab_notification">
                        <div class="layout-icon">
                           <i class="fa  fa-bell-o "></i>
                        </div>
                        <div class="layout-info">Notification </div>
                        <input type="radio" name="function" value="button">
                     </div>
                  </label> -->


               </div>
               <div class="row">
                  <div class="col-md-12">
                     <hr>
                  </div>
               </div>


               <div class="tab-content">



                  <div class="tab-pane " id="tab_event">

                     <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                           <li class="active"><a href="#function_create" data-toggle="tab">Create</a></li>
                           <li><a href="#function_update" data-toggle="tab">Update</a></li>

                           <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                        </ul>
                        <div class="tab-content">

                           <div class="tab-pane active" id="function_create">
                              <pre style="height:600px" name="function_setting_create" class="function_setting_create" id="function_setting_create" cols="30" rows="10"><?= _ent(@$function['function_setting_create']) ?> </pre>
                           </div>

                           <div class="tab-pane " id="function_update">
                              <pre style="height:600px" name="function_setting_update" class="function_setting_update" id="function_setting_update" cols="30" rows="10"><?= _ent(@$function['function_setting_update']) ?> </pre>
                           </div>

                        </div>
                     </div>


                  </div>

                  <div class="tab-pane " id="tab_notification">

                     <?php if (isset($crud)) : ?>
                        <div class="callout callout-info">
                           <small>Shortcode : <code>{<?= implode($this->db->list_fields($crud->table_name), '}</code> <code>{') ?>}</code></small>
                        </div>


                        <div class="box-body">
                           <div class="form-group">
                              <label for="notification_title">Title</label>
                              <input type="text" class="form-control" id="notification_title" name="notification_title" placeholder="Enter title">
                           </div>
                           <div class="form-group">
                              <label for="notification_message">Message</label>
                              <textarea type="text" class="form-control" id="notification_message" name="notification_message" placeholder="Enter message"></textarea>
                           </div>
                           <div class="form-group">
                              <label for="notification_url">URL</label>
                              <input type="text" class="form-control" id="notification_url" name="notification_url" placeholder="Enter URL">
                           </div>

                           <div class="form-group">
                              <label for="notification_group">Groups</label>
                              <select multiple class="form-control strict-group chosen chosen-select-deselect" name="notification_group[]" id="notification_group" multiple data-placeholder="Select groups">
                                 <?php foreach (db_get_all_data('aauth_groups') as $row) : ?>
                                    <option value="<?= $row->id; ?>"><?= ucwords($row->name); ?></option>
                                 <?php endforeach; ?>
                              </select>
                              <small>Only selected group can receive notification</small>
                           </div>

                        </div>
                     <?php endif ?>
                  </div>



               </div>



            </div>
         </div>
         <!--  <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-save-action btn-primary">Save changes</button>
         </div> -->
      </div>
   </div>
</div>


<div class="modal modal-style-setting" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Style</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-sm-12">
                  <input name="crud_id" type="hidden" value="<?= $this->uri->segment(4) ?>">
                  <pre style="height:600px" name="style_setting" class="style_setting" id="style_setting" cols="30" rows="10"></pre>


               </div>

            </div>
         </div>
         <!--  <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-save-action btn-primary">Save changes</button>
         </div> -->
      </div>
   </div>
</div>


<div class="modal modal-javascript-setting" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">

         <div class="modal-body">
            <div class="row">
               <div class="col-sm-12">

                  <div class="nav-tabs-custom">
                     <ul class="nav nav-tabs">
                        <li class="active"><a href="#list" data-toggle="tab">List</a></li>
                        <li><a href="#create" data-toggle="tab">Create</a></li>
                        <li><a href="#update" data-toggle="tab">Update</a></li>
                        <li><a href="#detail" data-toggle="tab">Detail</a></li>

                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active" id="list">
                           <pre style="height:600px" name="javascript_setting_list" class="javascript_setting_list" id="javascript_setting_list" cols="30" rows="10"><?= $crud->javascript_setting_list ?> </pre>
                        </div>

                        <div class="tab-pane " id="create">
                           <pre style="height:600px" name="javascript_setting_create" class="javascript_setting_create" id="javascript_setting_create" cols="30" rows="10"><?= $crud->javascript_setting_create ?> </pre>
                        </div>

                        <div class="tab-pane " id="update">
                           <pre style="height:600px" name="javascript_setting_update" class="javascript_setting_update" id="javascript_setting_update" cols="30" rows="10"><?= $crud->javascript_setting_update ?> </pre>
                        </div>

                        <div class="tab-pane " id="detail">
                           <pre style="height:600px" name="javascript_setting_detail" class="javascript_setting_detail" id="javascript_setting_detail" cols="30" rows="10"><?= $crud->javascript_setting_detail ?> </pre>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
         <!--  <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-save-action btn-primary">Save changes</button>
         </div> -->
      </div>
   </div>
</div>



<div class="modal modal-javascript-field-setting" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Javascript</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-sm-12">

                  <div class="nav-tabs-custom">
                     <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Tab 1</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>

                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                           <pre style="height:600px" name="javascript_field_setting" class="javascript_field_setting" id="javascript_field_setting" cols="30" rows="10"></pre>


                        </div>

                        <!-- /.tab-pane -->
                     </div>
                     <!-- /.tab-content -->
                  </div>
                  <input name="crud_id" type="hidden" value="<?= $this->uri->segment(4) ?>">


               </div>
               <div class="row">
                  <div class="col-md-12">
                     <hr>
                  </div>
               </div>

            </div>
         </div>
         <!--  <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-save-action btn-primary">Save changes</button>
         </div> -->
      </div>
   </div>
</div>



<div class="modal  " tabindex="-1" role="dialog" id="modalIcon">
   <div class="modal-dialog full-width" role="document">
      <div class="modal-content">

         <div class="modal-body">
            <?php $this->load->view('menu/backend/standart/administrator/menu/partial_icon', ['cols' => 'col-md-3', 'max_height' => '350px']); ?>


         </div>
         <div class="modal-footer">
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
   $(function() {
      /* $('.modal-add-action').modal('show') */




      $('[name="action"]').change(function() {
         var action = $(this).val()

         $('.layout-icon-wrapper').removeClass('active');
         $(this).parents('.layout-icon-wrapper').addClass('active');

         changeAction(action);
      })




      $('[name="function"]').change(function() {
         var action = $(this).val()

         $('.layout-icon-wrapper').removeClass('active');
         $(this).parents('.layout-icon-wrapper').addClass('active');

      })

      function changeAction(action, after) {
         $('.action-form-wrapper').html('')

         $.ajax({
               url: BASE_URL + '/administrator/crud/get_action_form/' + action,
               type: 'GET',
               dataType: 'json',
            })
            .done(function(res) {
               if (res.success) {

                  $('.action-form-wrapper').html(res.html)
                  if (typeof after != 'undefined') {
                     after(res.data)
                  }
               } else {

               }

            })
            .fail(function() {

            })
            .always(function() {

            });

         return false;

      }


      $(document).on('click', 'a.remove-action-item', function(event) {
         event.preventDefault();

         var parent = $(this).parents('.action-item');

         $.ajax({
               url: BASE_URL + '/administrator/crud/remove_action/' + parent.data('id'),
               type: 'GET',
               dataType: 'json',
            })
            .done(function(res) {
               if (res.success) {
                  $(`.action-item[data-id="${parent.data('id')}"]`).remove();
                  toastr['success'](`Action removed `)
               } else {
                  toastr['error'](res.message)
               }

            })
            .fail(function() {

            })
            .always(function() {

            });
      });

      $(document).on('click', 'a.update-action-item', function(event) {
         event.preventDefault();

         var parent = $(this).parents('.action-item');
         var modal = $('.modal-add-action')
         modal.modal('show')

         $.ajax({
               url: BASE_URL + '/administrator/crud/get_action/' + parent.data('id'),
               type: 'GET',
               dataType: 'json',
            })
            .done(function(res) {

               var data = res.data;
               if (res.success) {

                  $.each(data, function(idx, val) {

                     if (idx == 'action') {
                        modal.find('.layout-icon-wrapper').removeClass('active')
                        var action = modal.find(`.layout-icon-wrapper [value="${val}"]`)
                        action.prop('checked', true)
                        action.parent('.layout-icon-wrapper').addClass('active')

                        changeAction(val,
                           function() {
                              var meta = data.meta
                              $.each(meta, function(meta_key, meta_val) {
                                 var input = modal.find(`[name="${meta_key}"]`);
                                 if (meta_key == 'click_event') {
                                    input.val(meta_val)

                                    input.trigger('change')

                                    if (meta_val == 'javascript') {
                                       console.log(window.click_event_javascript)
                                       window.click_event_javascript.setValue(meta.click_event_javascript)
                                    } else if (meta_val == 'submit_and_action') {
                                       window.click_event_submit_and_action.setValue(meta.click_event_submit_and_action)
                                    } else {
                                       input.val(meta_val)
                                    }
                                 } else if (meta_key == 'icon') {
                                    modal.find('.icon-preview-item').html(`
                                    <i class="fa ${meta_val}  fa-lg"></i>
                                    `)
                                    input.val(meta_val)


                                 } else if (meta_key == 'action') {

                                 } else {
                                    input.val(meta_val)

                                 }
                              });

                              modal.find(`[name="action_id"]`).val(data.id)


                           });
                     } else if (idx == 'meta') {

                     } else {

                     }
                  });



               } else {
                  toastr['error'](res.message)
               }

            })
            .fail(function() {

            })
            .always(function() {

            });
      });



      $(document).on('click', 'a.btn-select-icon', function(event) {
         event.preventDefault();

         $('#modalIcon').modal('show');
      });


      $('.btn-save-action').click(function() {
         $('.message').hide();

         var form_action = $('#form_action');
         var data_post = form_action.serialize();

         $('.loading').show();

         $.ajax({
               url: BASE_URL + '/administrator/crud/save_action',
               type: 'POST',
               dataType: 'json',
               data: data_post,
            })
            .done(function(res) {
               if (res.success) {
                  $('.modal-add-action').modal('hide')

                  if (res.action_id == '') {
                     var html = ` 
                     <div class="action-item" data-id="${res.action.id}">
                        ${res.action.action}
                        <a href="" class="remove-action-item"><i class="fa fa-trash"></i> </a>
                        <a href="" class="update-action-item"><i class="fa fa-edit"></i> </a>
                     </div>`;

                     $('.action-item-wrapper').append(html)
                     saveReorderAction();
                  }

                  $('.btn_save[data-stype="stay"]').trigger('click')
                  toastr['success']('Action saved')

               } else {
                  toastr['error'](res.message)

               }

            })
            .fail(function() {
               $('.message').printMessage({
                  message: 'Error save data',
                  type: 'warning'
               });
            })
            .always(function() {
               $('.loading').hide();

            });

         return false;
      }); /*end btn save*/


      function saveReorderAction() {
         var params = {};
         params[csrf] = token;

         params['actions'] = {};
         $('.action-item').each(function(sort, el) {
            var id = $(el).attr('data-id');

            params['actions'][id] = sort;
         });

         $.ajax({
               url: BASE_URL + 'administrator/crud/save_reorder_action',
               type: 'POST',
               dataType: 'JSON',
               data: params,
            })
            .done(function(response) {
               if (response.status) {

               } else {
                  toastr['error']('Error', 'Error when load from server..')
               }
            })
            .fail(function() {
               toastr['error']('Error', 'Error when load from server..')
            })
            .always(function() {

            });
      }

      $(".action-item-wrapper").sortable({
         beforeStop: function(event, ui) {
            setTimeout(saveReorderAction, 1000);
         },
         handle: '.action-dragable',

         start: function(item, event) {
            $(document).css('cursor', 'move');
         },
         cancel: '.disable-sort-item'
      });



   })
</script>