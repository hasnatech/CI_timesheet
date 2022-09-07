<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?= get_option('site_description'); ?>">
  <meta name="keywords" content="<?= get_option('keywords'); ?>">
  <meta name="author" content="<?= get_option('author'); ?>">

  <title><?= get_user_first_group()->name ?> | <?= get_option('site_name'); ?> | <?= $template['title']; ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/plugins/morris/morris.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/plugins/iCheck/all.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/sweet-alert/sweetalert.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/toastr/build/toastr.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/fancy-box/source/jquery.fancybox.css?v=2.1.5" media="screen" />
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/chosen/chosen.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/css/custom.css?timestamp=201803311528">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>datetimepicker/jquery.datetimepicker.css" />
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>js-scroll/style/jquery.jscrollpane.css" rel="stylesheet" media="all" />
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>flag-icon/css/flag-icon.css" rel="stylesheet" media="all" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <?= $this->cc_html->getCssFileTop(); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script src="<?= BASE_ASSET; ?>/admin-lte/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="<?= BASE_ASSET; ?>/admin-lte/plugins/iCheck/icheck.min.js"></script>
  <script src="<?= BASE_ASSET; ?>/sweet-alert/sweetalert-dev.js"></script>
  <script src="<?= BASE_ASSET; ?>/admin-lte/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="<?= BASE_ASSET; ?>/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="<?= BASE_ASSET; ?>/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <script src="<?= BASE_ASSET; ?>/toastr/toastr.js"></script>
  <script src="<?= BASE_ASSET; ?>/fancy-box/source/jquery.fancybox.js?v=2.1.5"></script>
  <script src="<?= BASE_ASSET; ?>/datetimepicker/build/jquery.datetimepicker.full.js"></script>
  <script src="<?= BASE_ASSET; ?>/editor/dist/js/medium-editor.js"></script>
  <script src="<?= BASE_ASSET; ?>js/cc-extension.js"></script>
  <script src="<?= BASE_ASSET; ?>/js/cc-page-element.js"></script>

  <script src="<?= BASE_ASSET; ?>/stepper/jquery.steps.min.js"></script>
  <link href="<?= BASE_ASSET; ?>/stepper/css/jquery.steps.css" rel="stylesheet">
  <script>
    var BASE_URL = "<?= base_url(); ?>";
    var HTTP_REFERER = "<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/'; ?>";
    var csrf = '<?= $this->security->get_csrf_token_name(); ?>';
    var token = '<?= $this->security->get_csrf_hash(); ?>';

    $(document).ready(function() {

      toastr.options = {
        "positionClass": "toast-top-center",
      }

      var f_message = '<?= $this->session->flashdata('f_message'); ?>';
      var f_type = '<?= $this->session->flashdata('f_type'); ?>';

      if (f_message.length > 0) {
        toastr[f_type](f_message);
      }

      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      });
    });
  </script>
  <?= $this->cc_html->getScriptFileTop(); ?>
</head>

<body class="sidebar-mini skin-black fixed web-body">
  <div class="wrapper" id="app">

    <header class="main-header">

      <?php
      $logo =  get_option('logo');
      if ($logo) {
        $logo = 'uploads/setting/' . get_option('logo');
      } else {
        $logo = 'asset/img/icon-wide.png';
      }

      if (!is_file(FCPATH . '/' . $logo)) {
        $logo = 'asset/img/icon-wide.png';
      }
      ?>

      <a href="<?= site_url('/'); ?>" class="logo">
        <span class="logo-mini"><b><img src="<?= BASE_ASSET ?>img/icon-small.png" height="40px"></b></span>
        <span class="logo-lg"><b><img src="<?= base_url($logo) ?>" height="40px"></b></span>
      </a>
      <nav class="navbar navbar-static-top">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>


        <?php if ($this->aauth->get_user()) : ?>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">



              <?php
              app()->load->model('notification/model_notification');

              // app()->db->where(['read' => 0]);
              $notifications = app()->model_notification->get(null, null, 20, 0);
              app()->db->where(['read' => 0]);

              $total = app()->model_notification->count_all(null, 'read', 0);

              ?>
              <!-- Notifications: style can be found in dropdown.less -->


              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span style="<?= $total == 0 ? 'background: #ccc !important; color#fff !important;' : '' ?>" class="label label-<?= $total > 0 ? 'warning' : '' ?>"><?= $total ?></span>
                </a>
                <ul class="dropdown-menu">

                  <li class="header"><?= $total ?> Notification
                    <!-- <?php if ($total > 0) { ?> -->
                    <span class="pull-right">
                      <a href="#" class="mark-all-as-read-button">Mark all as read</a>
                    </span>
                    <!-- <?php } ?> -->
                  </li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <?php
                      foreach ($notifications as $notif) :
                      ?>
                        <li>
                          <a href="<?= base_url('administrator/notification/view/' . $notif->id) ?>" data-id="<?= $notif->id ?>" class="<?= $notif->read == 0 ? 'unread-notification' : '' ?>">
                            <i class="fa fa-circle-o text-aqua"></i> <?= $notif->title ?>
                          </a>
                        </li>
                      <?php endforeach ?>
                    </ul>
                  </li>
                  <li class="footer text-center" style="padding: 7px">
                    <?php //if($total>0) { 
                    ?>
                    <span class="">
                      <a href="<?php echo base_url(ADMIN_NAMESPACE_URL . '/' . 'notification') ?>" class="">See All</a>
                    </span>
                    <?php //} 
                    ?>
                  </li>
                </ul>
              </li>
              <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <span class="flag-icon <?= get_current_initial_lang(); ?>"></span> <?= get_current_lang(); ?> </a>
                <ul class="dropdown-menu" role="menu">
                  <?php foreach (get_langs() as $lang) : ?>
                    <li><a href="<?= site_url('web/switch_lang/' . $lang['folder_name']); ?>"><span class="flag-icon <?= $lang['icon_name']; ?>"></span> <?= $lang['name']; ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </li>

              <script>
                $(document).on('click', 'a.notif-detail', function(event) {
                  event.preventDefault();

                  $('#modalAlert').modal('show')
                  $.ajax({
                      url: BASE_URL + 'administrator/devices/get_alert_detail',
                      type: 'GET',
                      dataType: 'JSON',
                      data: {
                        event_id: $(this).data('id')
                      },
                    })
                    .done(function(res) {
                      if (res.status) {
                        $('#modalAlert .modal-body').html(res.view);
                      }
                    })
                    .fail(function() {})
                    .always(function() {});

                });
              </script>


              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?= BASE_URL . 'uploads/user/' . (!empty(get_user_data('avatar')) ? get_user_data('avatar') : 'default.png'); ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?= _ent(ucwords(clean_snake_case(get_user_data('full_name')))); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="<?= BASE_URL . 'uploads/user/' . (!empty(get_user_data('avatar')) ? get_user_data('avatar') : 'default.png'); ?>" class="img-circle" alt="User Image">

                    <p>
                      <?= _ent(ucwords(clean_snake_case($this->aauth->get_user()->full_name))); ?>
                      <small>Last Login, <?= date('Y-M-D', strtotime(get_user_data('last_login'))); ?></small>
                    </p>
                  </li>

                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?= site_url('administrator/user/profile'); ?>" class="btn btn-default btn-flat"><?= cclang('profile'); ?></a>
                    </div>
                    <div class="pull-right">
                      <a href="<?= site_url('administrator/auth/logout'); ?>" class="btn btn-default btn-flat"><?= cclang('sign_out'); ?></a>
                    </div>
                  </li>
                </ul>
              </li>
              <!--          <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <span class="flag-icon <?= get_current_initial_lang(); ?>"></span> <?= get_current_lang(); ?> </a>
                <ul class="dropdown-menu" role="menu">
                  <?php foreach (get_langs() as $lang) : ?>
                    <li><a href="<?= site_url('web/switch_lang/' . $lang['folder_name']); ?>"><span class="flag-icon <?= $lang['icon_name']; ?>"></span> <?= $lang['name']; ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </li> -->
            </ul>
          </div>
        <?php endif ?>


      </nav>
    </header>
    <aside class="main-sidebar">

      <section class="sidebar" style="padding-top:0% !important">
        <ul class="sidebar-menu  sidebar-admin tree" data-widget="tree">

          <?= display_menu_admin(0, 1); ?>
        </ul>
      </section>

    </aside>

    <div class="content-wrapper">
      <?php cicool()->eventListen('backend_content_top'); ?>
      <?= $template['partials']['content']; ?>
      <?php cicool()->eventListen('backend_content_bottom'); ?>

      <div class="modal fade  " id="modalPopUp">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"> <span class="popup-title"></span></h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>

    </script>
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b><?= cclang('version') ?></b> <?= VERSION ?>
      </div>
      <strong>Copyright &copy; 2016-<?= date('Y'); ?> <a href="#"><?= get_option('site_name'); ?></a>.</strong> All rights
      reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
  </div>

  <?= $this->cc_html->getHtmlFileBottom(); ?>

  <?= $this->cc_html->getCssFileBottom(); ?>
  <?= $this->cc_html->getScriptFileBottom(); ?>
  <script>
    var AdminLTEOptions = {
      sidebarExpandOnHover: false,
      navbarMenuSlimscroll: false,
    };
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.6.2/chosen.jquery.min.js" type="text/javascript"></script>
  <script src="<?= BASE_ASSET; ?>jquery-ui/jquery-ui.js"></script>
  <script src="<?= BASE_ASSET; ?>jquery-switch-button/jquery.switchButton.js"></script>
  <script src="<?= BASE_ASSET; ?>/js/jquery.ui.touch-punch.js"></script>
  <script src="<?= BASE_ASSET; ?>/admin-lte/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= BASE_ASSET; ?>/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="<?= BASE_ASSET; ?>/admin-lte/plugins/fastclick/fastclick.js"></script>
  <script src="<?= BASE_ASSET; ?>/admin-lte/dist/js/app.min.js"></script>
  <script src="<?= BASE_ASSET; ?>/admin-lte/dist/js/adminlte.js"></script>
  <script src="<?= BASE_ASSET; ?>js-scroll/script/jquery.jscrollpane.min.js"></script>
  <script src="<?= BASE_ASSET; ?>jquery-switch-button/jquery.switchButton.js"></script>




  <script src="<?= BASE_ASSET; ?>/js/custom.js"></script>
</body>

</html>