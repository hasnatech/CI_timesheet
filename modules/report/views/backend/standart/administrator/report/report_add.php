<link href="<?= BASE_ASSET; ?>/fine-upload/fine-uploader-gallery.min.css" rel="stylesheet">
<script src="<?= BASE_ASSET; ?>/fine-upload/jquery.fine-uploader.js"></script>
<link rel="stylesheet" href="<?= BASE_ASSET; ?>editor/dist/css/medium-editor.css">
<link rel="stylesheet" href="<?= BASE_ASSET; ?>editor/dist/css/themes/beagle.css">

<script src="<?= BASE_ASSET; ?>/fine-upload/jquery.fine-uploader.js"></script>
<?php $this->load->view('core_template/fine_upload'); ?>
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<link rel="stylesheet" type="text/css" href="<?= BASE_ASSET; ?>spectrum/spectrum.css">
<link rel="stylesheet" type="text/css" href="<?= BASE_ASSET; ?>css/report.css">

<script src="<?= BASE_ASSET; ?>ace-master/build/src/ace.js"></script>
<script src="<?= BASE_ASSET; ?>ace-master/build/src/ext-language_tools.js"></script>
<script src="<?= BASE_ASSET; ?>ace-master/build/src/ext-beautify.js"></script>

<script src="<?= BASE_ASSET; ?>iframe-auto/release/jquery.browser.js"></script>
<script src="<?= BASE_ASSET; ?>iframe-auto/src/jquery-iframe-auto-height.js"></script>

<script type="text/javascript" src="<?= BASE_ASSET; ?>spectrum/spectrum.js"></script>
<script type="text/javascript" src="<?= BASE_ASSET; ?>js/page.js"></script>
<script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>

<script type="text/javascript">
  function domo() {

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


<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= cclang('report') ?> <small><?= cclang('new', cclang('report')); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> <?= cclang('home'); ?></a></li>
    <li class=""><a href="<?= site_url('administrator/report'); ?>"><?= cclang('report') ?></a></li>
    <li class="active"><?= cclang('new'); ?></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-page" style="border-top: none; overflow: hidden">
        <div class="box-body  padding-left-0 padding-right-0">



          <!-- Custom Tabs -->
          <div class="nav-tabs-custom padding-left-0 tab-page ">
            <ul class="nav nav-tabs">
              <li class="active"><a class=" active tab_animation" href="#tab_1" data-toggle="tab"><i class="fa fa-gear text-green"></i> <?= cclang('report_settings'); ?></a></li>
              <li><a class=" active btn-form-preview tab_animation" href="#tab_2" data-toggle="tab"><i class="fa fa-code text-green"></i> <?= cclang('report_designer'); ?></a></li>

              <li class="pull-right"><a href="#tab_preview" data-toggle="tab" class="text-muted btn-danger btn-mode-preview btn text-green"><?= cclang('preview'); ?></a></li>
              <li class="pull-right">
                <span class="loading2 loading-hide">
                  <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg">
                  <i><?= cclang('loading_generating_preview'); ?></i>
                  <input type="hidden" id="preview_page_name">
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane rest-page-test active" id="tab_1" style="margin-top:20px;">
                <div class="box box-widget widget-user-2">

                  <?= form_open('', [
                    'name'    => 'form_page',
                    'class'   => 'form-horizontal',
                    'id'      => 'form_page',
                    'enctype' => 'multipart/form-data',
                    'method'  => 'POST'
                  ]); ?>

                  <div class="form-group ">
                    <label for="title" class="col-sm-2 control-label"><?= cclang('title'); ?>
                      <i class="required">*</i>
                    </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?= set_value('title'); ?>">
                      <small class="info help-block">
                        <b>Format Title must</b> Alpha Numeric Spaces.</small>
                    </div>
                  </div>


                  <div class="form-group ">
                    <label for="table_name" class="col-sm-2 control-label"><?= cclang('table_name') ?> <i class="required">*</i></label>
                    <div class="col-sm-8">

                      <select class="form-control chosen chosen-select chosen-select-with-deselect" name="table_name" id="table_name" tabi-ndex="5" data-placeholder="Select Table">
                        <option value=""></option>
                        <?php foreach ($tables as $row) : ?>
                          <option value="<?= $row; ?>"><?= $row; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <small class="info help-block">
                        <?= cclang('table_is_being_for_generate'); ?>
                      </small>
                      <span class="loading2 loading-hide"><img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> <i><?= cclang('loading_field_data'); ?></i></span>

                      <?= $this->load->view('backend/standart/administrator/report/report_relation_template') ?>

                    </div>
                  </div>

                  <!--   <div class="form-group ">
                    <label for="description" class="col-sm-2 control-label"><?= cclang('description'); ?>
                    </label>
                    <div class="col-sm-8">
                      <textarea id="description" name="description" rows="5" class="textarea form-control"><?= set_value('description'); ?></textarea>
                      <small class="info help-block">
                        Description for meta data.
                      </small>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="template" class="col-sm-2 control-label"><?= cclang('template'); ?>
                      <i class="required">*</i>
                    </label>
                    <div class="col-sm-8">

                      <label>
                        <div class="layout-icon-wrapper">
                          <div class="layout-icon">

                          </div>
                          <div class="layout-info"><?= cclang('blank'); ?> </div>
                          <input type="radio" name="template" value="blank" checked>
                        </div>
                      </label>
                      <label>
                        <div class="layout-icon-wrapper">
                          <div class="layout-icon layout-icon-default">
                            <div class="square-vertical">
                            </div>
                            <div class="square-horizontal">
                            </div>
                          </div>
                          <div class="layout-info"><?= cclang('default'); ?> </div>
                          <input type="radio" name="template" value="default">
                        </div>
                      </label>
                      <small class="info help-block">
                      </small>
                    </div>
                  </div> -->


                  <div class="message"></div>
                  <div class="row-fluid col-md-7">
                    <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save" data-stype='stay' title="save (Ctrl+s)"><i class="fa fa-save"></i> <?= cclang('save_button'); ?></button>
                    <a class="btn btn-flat btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back' title="<?= cclang('save_and_go_the_list_button'); ?> (Ctrl+d)"><i class="ion ion-ios-list-outline"></i> <?= cclang('save_and_go_the_list_button'); ?></a>
                    <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="<?= cclang('cancel_button'); ?> (Ctrl+x)"><i class="fa fa-undo"></i> <?= cclang('cancel_button'); ?></a>
                    <span class="loading loading-hide"><img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> <i><?= cclang('loading_saving_data'); ?></i></span>
                  </div>
                  <?= form_close(); ?>

                </div>
              </div><!-- end tab1 -->

              <div class="tab-pane" id="tab_preview">
                <div class="windows">
                  <div class="win-bar">
                    <div class="win-bar-responsive">
                      <div class="win-icon bg-red btn-close"></div>
                      <div class="win-icon bg-yellow btn-full-screen"></div>
                      <div class="win-icon bg-green btn-minimize"></div>
                    </div>
                  </div>
                </div>
                <iframe class="iframe-page-preview" scrolling="no" width="100%" style="overflow: none; border:none"></iframe>
              </div>

              <div class="tab-pane" id="tab_2">
                <div class=" page-content">
                  <div class="windows ">
                    <div class="win-bar">
                      <div class="win-icon bg-red btn-close"></div>
                      <div class="win-icon bg-yellow btn-full-screen"></div>
                      <div class="win-icon bg-green btn-minimize"></div>
                    </div>
                    <div>
                      <div class="win-content-loading-container display-none ">
                        <div class="win-content-loading no-select" contenteditable="false">
                          <div id="fountainG">
                            <div id="fountainG_1" class="fountainG"></div>
                            <div id="fountainG_2" class="fountainG"></div>
                            <div id="fountainG_3" class="fountainG"></div>
                            <div id="fountainG_4" class="fountainG"></div>
                            <div id="fountainG_5" class="fountainG"></div>
                            <div id="fountainG_6" class="fountainG"></div>
                            <div id="fountainG_7" class="fountainG"></div>
                            <div id="fountainG_8" class="fountainG"></div>
                          </div>
                        </div>
                      </div>
                      <!-- 
                      <div class="document-editor">
                        <div class="document-editor__toolbar"></div>
                        <div class="document-editor__editable-container">
                          <div class="document-editor__editable">
                          </div>
                        </div>
                      </div> -->
                      <textarea name="content" id="content"></textarea>



                    </div>
                  </div>

                  <div class="btn-round-element noselect " title="<?= cclang('add_block_element'); ?>" data-toggle="control-sidebar">
                    <span>+</span>
                  </div>
                </div><!-- end content -->
              </div>
            </div>
          </div>
        </div>
        <!--/box body -->
      </div>
      <!--/box -->
    </div>
  </div>
  </div>
  </div>
</section>
<!-- /.content -->
<aside class="control-sidebar control-sidebar-dark toolbox-form" style="height: 100%; overflow-y: auto;">
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="#tab-element" data-toggle="tab" aria-expanded="true"><i class="fa fa-code text-green"></i> <?= cclang('element'); ?></a></li>
    <li class=""><a href="#tab-component" data-toggle="tab" aria-expanded="false"><i class="fa  fa-puzzle-piece text-green"></i> <?= cclang('component'); ?></a></li>

  </ul>
  <div class="tab-content" style="height: 100%">
    <div class="tab-pane padding-left-0 active" id="tab-element">
      <h4 class="control-sidebar-heading"><i class="fa fa-bars"></i> <?= cclang('block'); ?></h4>
      <div class="tool-wrapper">
        <ul class="block-list">
          <li><a href="#" id="btn-all-element"> <?= cclang('all_elements'); ?></a></li>
          <?= $this->cc_page_element->displayPageElement(); ?>

        </ul>
      </div>
    </div>
    <div class="tab-pane padding-left-0" id="tab-component">
      <h4 class="control-sidebar-heading"><i class="fa fa-bars"></i> <?= cclang('component'); ?></h4>
      <div class="component-wrapper">
      </div>
    </div>


  </div>
</aside>
<!--  -->


<script type="text/javascript" src="<?= BASE_ASSET; ?>js/report.js"></script>

<!-- 
<script>
  var myEditor;


  DecoupledEditor
    .create(document.querySelector('.document-editor__editable'), {
      cloudServices: {
        //  ....
      }
    })
    .then(editor => {
      const toolbarContainer = document.querySelector('.document-editor__toolbar');

      toolbarContainer.appendChild(editor.ui.view.toolbar.element);
      myEditor = editor;

    })
    .catch(err => {
      console.error(err);
    });
</script>
 -->

<!-- Page script -->
<script>
  $(document).ready(function() {


    CKEDITOR.config.height = 600;
    CKEDITOR.replace('content', {
      height: 800,
      contentsCss: ['https://cdn.ckeditor.com/4.8.0/full-all/contents.css', '<?= BASE_ASSET; ?>css/report.css'],
      bodyClass: 'document-editor',
      format_tags: 'p;h1;h2;h3;pre',
      removeDialogTabs: 'image:advanced;link:advanced',

    });

    var content = CKEDITOR.instances.content;

    $('.btn_save').click(function() {
      $('.message').fadeOut();

      var form_page = $('#form_page');
      var data_post = form_page.serializeArray();
      var save_type = $(this).attr('data-stype');

      var plate = $('.win-content ul').html();

      data_post.push({
        name: 'save_type',
        value: save_type
      });
      data_post.push({
        name: 'content',
        value: content.getData()
      });
      data_post.push({
        name: 'plate',
        value: plate
      });

      $('.loading').show();

      $.ajax({
          url: BASE_URL + '/administrator/report/add_save',
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          if (res.success) {
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }

            $('.message').printMessage({
              message: res.message
            });
            $('.message').fadeIn();
            resetForm();
            $('.chosen option').prop('selected', false).trigger('chosen:updated');
          } else {
            $('.message').printMessage({
              message: res.message,
              type: 'warning'
            });
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

    /*load editors*/
    //loadEditors();

    /*adding holder on canvas*/
    addHolderOnCanvas();

    /*load spectrum*/
    loadSpectrum();

    /*load spectrum*/
    updateLayoutType();

  }); /*end doc ready*/
</script>