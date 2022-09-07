
<script src="<?= BASE_ASSET; ?>js/custom.js"></script>


<?= form_open('', [
    'name'    => 'form_form_check', 
    'class'   => 'form-horizontal form_form_check', 
    'id'      => 'form_form_check',
    'enctype' => 'multipart/form-data', 
    'method'  => 'POST'
]); ?>
 
<div class="form-group  wrapper-options-crud">
    <label for="custom_option" class="col-sm-2 control-label">Custom Option 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="custom_option" value="hi" > hi            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="custom_option" value="hello" > hello            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="custom_option" value="hai" > hai            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>


<div class="row col-sm-12 message">
</div>
<div class="col-sm-2">
</div>
<div class="col-sm-8 padding-left-0">
    <button class="btn btn-flat btn-primary btn_save" id="btn_save" data-stype='stay'>
    Submit
    </button>
    <span class="loading loading-hide">
    <img src="http://cicool.me:80/asset//img/loading-spin-primary.svg"> 
    <i>Loading, Submitting data</i>
    </span>
</div>
</form></div>


<!-- Page script -->
<script>
    $(document).ready(function(){
          $('.form-preview').submit(function(){
        return false;
     });

     $('input[type="checkbox"].flat-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
     });


    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_form_check = $('#form_form_check');
        var data_post = form_form_check.serializeArray();
        var save_type = $(this).attr('data-stype');
    
        $('.loading').show();
    
        $.ajax({
          url: BASE_URL + 'form/form_check/submit',
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
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
            $('.message').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
          $('html, body').animate({ scrollTop: $(document).height() }, 1000);
        });
    
        return false;
      }); /*end btn save*/


      
             
           
    }); /*end doc ready*/
</script>