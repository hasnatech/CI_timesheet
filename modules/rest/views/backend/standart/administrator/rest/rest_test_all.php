<style type="text/css">
   .file-styling input[type=file] {
      opacity: 0;
   }

   .file-styling .info-file {
      padding: 10px;
      padding-top: 20px;
      margin-top: 20px;
   }
</style>
<link rel="stylesheet" href="<?= BASE_ASSET; ?>/json-view/jquery.jsonview.css" />
<script type="text/javascript" src="<?= BASE_ASSET; ?>/json-view/jquery.jsonview.js"></script>

<div class="hide filter-item-template">
   <div class="col-md-12 filters-item">

      <div class="form-group ">
         <label for="status" class="col-sm-5 control-label">filters[0][co][{idx}}][fl]
         </label>
         <div class="col-sm-7">
            <select name="filters[0][co][{idx}][fl]" id="rest_field" class="form-control">
               <option value=""></option>

            </select>
            <smalll class="help-block">field</small>
         </div>
      </div>

      <div class="form-group ">
         <label for="status" class="col-sm-5 control-label">filters[0][co][{idx}][op]
         </label>
         <div class="col-sm-7">
            <select name="filters[0][co][{idx}][op]" id="" class="form-control">
               <option value="equal">equal (=)</option>
               <option value="not_equal">not_equal (!=)
               </option>
               <option value="greather">greather (>)
               </option>
               <option value="greather_equal">greather_equal (>=)
               </option>
               <option value="smaller_equal">smaller_equal (<=) </option>
               <option value="smaller">smaller (<) </option>
               <option value="is_null">is_null
               </option>
               <option value="not_null">not_null
               </option>
               <option value="where_in">where_in
               <option value="where_not_in">where_not_in
               </option>
               <option value="like">like
               </option>
            </select>

            <smalll class="help-block">operator</small>
         </div>
      </div>
      <div class="form-group ">
         <label for="status" class="col-sm-5 control-label">filters[0][co][{idx}][vl]
         </label>
         <div class="col-sm-7">
            <input type="text" name="filters[0][co][{idx}][vl]" class='form-control'>
            <smalll class="help-block">value</small>
         </div>
      </div>


      <div class="form-group ">
         <label for="status" class="col-sm-5 control-label">filters[0][co][{idx}][lg]
         </label>
         <div class="col-sm-7">
            <select name="filters[0][co][{idx}][lg]" id="" class="form-control">
               <option value="and">and
               </option>
               <option value="or">or
               </option>
            </select>
            <smalll class="help-block">logic</small>
         </div>
      </div>

      <a href="" class="btn-remove-filter btn btn-sm btn-danger pull-right" style="margin-top:-20px;"><i class="fa fa-trash"></i></a>

      <hr>
   </div>
</div>
<form class="form-horizontal form-add" name="form_rest" id="form_rest" enctype="multipart/form-data" action="<?= base_url('api/' . $rest->table_name . '/all'); ?>" method="GET">

   <table class="table table-responsive table table-bordered table-striped" id="diagnosis_list">
      <thead>
         <tr>
            <th width="25%" rowspan="2" valign="midle">HEADER</th>
            <th width="120" rowspan="2" valign="midle">Value</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>X-Api-Key</td>
            <td>
               <div class="col-md-6 padding-left-0">
                  <input type="text" id="x_api_key" name="X-Api-Key" class='form-control'>
               </div>
            </td>
         </tr>
         <?php if ($rest->x_token == 'yes') : ?>
            <tr>
               <td>X-Token</td>
               <td>
                  <div class="col-md-6 padding-left-0">
                     <input type="text" id="x_token" name="X-Token" class='form-control'>
                  </div>
               </td>
            </tr>
         <?php endif; ?>
      </tbody>

      <table class="table table-responsive table table-bordered table-striped" id="diagnosis_list">
         <thead>
            <tr>
               <th width="5%" rowspan="2" valign="midle">No</th>
               <th width="20%" rowspan="2" valign="midle">Field</th>
               <th width="200" rowspan="2" valign="midle">Value</th>
               <th width="200" rowspan="2" valign="midle">Validation</th>
            </tr>
         </thead>
         <tbody>

            <tr>
               <td>
                  1
               </td>
               <td>
                  Filter
               </td>
               <td>
                  <div class="col-md-12">
                     <div class="form-group ">
                        <input type="text" name="filter" class='form-control'>
                     </div>
                  </div>
               </td>
               <td></td>
            </tr>
            <tr>
               <td>
                  2
               </td>
               <td>
                  Field
               </td>
               <td>
                  <div class="col-md-12">
                     <div class="form-group ">
                        <input type="text" name="field" class='form-control'>
                     </div>
                  </div>
               </td>
               <td></td>
            </tr>
            <tr>
               <td>
                  3
               </td>
               <td>
                  Start

               </td>
               <td>
                  <div class="col-md-12">
                     <div class="form-group ">
                        <input type="text" name="start" class='form-control'>
                     </div>
                  </div>
               </td>
               <td></td>
            </tr>
            <tr>
               <td>
                  4
               </td>
               <td>
                  Limit
               </td>
               <td>
                  <div class="col-md-12">
                     <div class="form-group ">
                        <input type="text" name="limit" class='form-control'>
                     </div>
                  </div>
               </td>
               <td></td>
            </tr>
            <tr>
               <td>
                  5
               </td>
               <td>
                  Filters
               </td>
               <td>

                  <div class="filters-item-wrapper">

                  </div>

                  <a href="" class="btn-add-filter btn btn-primary">Add Filter</a>


               </td>
               <td></td>
            </tr>

            <tr>
               <td>
                  6
               </td>
               <td>
                  Sort Field
               </td>
               <td>
                  <div class="col-md-12">
                     <div class="form-group ">
                        <select type="text" name="sort_field" class='form-control' id="sort_field">
                           <option value=""></option>
                        </select>
                     </div>
                  </div>
               </td>
               <td></td>
            </tr>


            <tr>
               <td>
                  7
               </td>
               <td>
                  Sort Order
               </td>
               <td>
                  <div class="col-md-12">
                     <div class="form-group ">
                        <select type="text" name="sort_order" class='form-control'>
                           <option value="ASC">ASC</option>
                           <option value="DESC">DESC</option>
                        </select>
                     </div>
                  </div>
               </td>
               <td></td>
            </tr>

            <tr>
               <td>
                  8
               </td>
               <td>
                  Onlycount
               </td>
               <td>
                  <div class="col-md-12">
                     <div class="form-group ">
                        <input type="checkbox" name="onlycount">
                     </div>
                  </div>
               </td>
               <td></td>
            </tr>

            <!--  <tr>
               <td>
                  6
               </td>
               <td>
                  json
               </td>
               <td>
                  <?php $fields = $this->db->list_fields($rest->table_name) ?>
                  <div class="col-md-12">
                     <div class="form-group ">
                        <textarea name="json" class="display-none form-control" cols="30" rows="10">

                 </textarea>
                        <pre id="json" style="height: 300px" class="advance-mode">
[
   {
      "lg" : "and",
      "co": [
         {
            "fl": "<?= end($fields) ?>",
            "op": "equal",
            "vl": "technology",
            "lg": "and"
          },
          {
            "fl": "<?= end($fields) ?>",
            "op": "where_in",
            "vl": "val1, val2",
            "lg": "and"
         }
      ]
   },
   {
      "lg": "and",
      "co": [
         {
            "fl": "<?= end($fields) ?>",
            "op": "like",
            "vl": "%tech%",
            "lg": "and"
         }
      ]
   }
]
                 </pre>

                        Avaiable operator : <code>is_null, not_null, where_in, like, between, equal, not_equal, greather, greather_equal, smaller_equal, smaller</code>
                     </div>
                  </div>
               </td>
               <td></td>
            </tr> -->
         </tbody>
      </table>
      </div>

      <div class="row">
         <div class="col-md-3"><b>URL :</b> </div>
         <div class="col-md-8">
            <div class=" url-api">
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12">
            <div class="col-xs-3 padding-left-0"><b>Response</b></div>
            <div class="col-xs-4"><b>Status : </b><span class="status text-blue"></span></div>
            <div class="col-xs-5 padding-right-0">
               <input type="submit" value="Send" class="btn btn-lg btn-primary btn-flat pull-right">
               <span class="loading loading-hide pull-right padding-10"><img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> <i>Loading, Submitting Data</i></span>
            </div>
         </div>
      </div>
</form>

<div class="result-json">
</div>



<script src="<?= BASE_ASSET; ?>ace-master/build/src/ace.js"></script>
<script src="<?= BASE_ASSET; ?>ace-master/build/src/ext-language_tools.js"></script>
<script src="<?= BASE_ASSET; ?>ace-master/build/src/ext-beautify.js"></script>

<script type="text/javascript">
   $(document).ready(function() {

      /*      ace.require("ace/ext/language_tools");
           var beautify = ace.require("ace/ext/beautify"); // get reference to extension

           var editor = ace.edit('json');
           editor.setOptions({
              enableBasicAutocompletion: true,
              enableSnippets: true,
              enableLiveAutocompletion: true
           });
           editor.getSession().setMode("ace/mode/json");
      */


      var fileInput = $('.file-styling :file');

      fileInput.change(function() {
         $this = $(this);
         $(this).parent().find('.info-file').text($this.val());
      });

      var form = $('.form-add');

      form.submit(function() {
         $('.loading').show();
         var submitButton = $(this).find('input[type=submit]');
         var defaultValue = submitButton.val();

         submitButton.val('Submitting');

         /*  $('[name="json"]').val(editor.session.getValue()); */

         $('.url-api').html(form.attr('action') + '?' + decodeURIComponent(form.serialize()))
         $.ajax({
               url: form.attr('action'),
               type: form.attr('method'),
               dataType: 'JSON',
               data: form.serialize(),
               headers: {
                  'X-Api-Key': $('#x_api_key').val(),
                  'X-Token': $('#x_token').val(),
               }
            })
            .fail(function(response) {
               toastr['error']('Error API Request');
            })
            .always(function(response, status, xhr) {
               $('.loading').hide();
               submitButton.val(defaultValue);
               var responseReff = response;

               if (typeof xhr == 'object') {
                  responseReff = xhr;
               }

               if (typeof responseReff.statusText == 'undefined') {
                  responseReff.statusText = 'OK';
               }

               $('.status').html(responseReff.status + ' ' + responseReff.statusText);
               $('.result-json').JSONView(responseReff.responseJSON);
               $('.status').addClass('response-' + responseReff.status);

               $('html, body').animate({
                  scrollTop: $(document).height()
               }, 2000);
            });

         return false;
      });


      $.each(rest_fields, function(idx, item) {
         $('#rest_field').append(`
            <option value="${item.field_name}">${item.field_name}</option>
         `)
         $('#sort_field').append(`
            <option value="${item.field_name}">${item.field_name}</option>
         `)
      })


      var increment = 0;

      function addFilter() {
         var filter = $('.filter-item-template').html();
         filter = filter.replaceAll('{idx}', increment++)

         $('.filters-item-wrapper').append(filter);

      }
      $('.btn-add-filter').unbind('click')
      $('.btn-remove-filter').unbind('click')
      $(document).on('click', 'a.btn-add-filter', function(event) {
         event.preventDefault();
         addFilter();
      })
      $(document).on('click', 'a.btn-remove-filter', function(event) {
         event.preventDefault();
         $(this).parent().remove()
      })


      addFilter();

   })
</script>