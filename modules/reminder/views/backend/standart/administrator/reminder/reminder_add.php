<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
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
<style>
    /* .group-title */
    .group-title {}

    .group-title .control-label {}

    .group-title .col-sm-8 {}

    .group-title .form-control {}

    .group-title .help-block {}

    /* end .group-title */



    /* .group-message */
    .group-message {}

    .group-message .control-label {}

    .group-message .col-sm-8 {}

    .group-message .form-control {}

    .group-message .help-block {}

    /* end .group-message */



    /* .group-type */
    .group-type {}

    .group-type .control-label {}

    .group-type .col-sm-8 {}

    .group-type .form-control {}

    .group-type .help-block {}

    /* end .group-type */



    /* .group-datetime */
    .group-datetime {}

    .group-datetime .control-label {}

    .group-datetime .col-sm-8 {}

    .group-datetime .form-control {}

    .group-datetime .help-block {}

    /* end .group-datetime */
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Reminder <small><?= cclang('new', ['Reminder']); ?> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a href="<?= site_url('administrator/reminder'); ?>">Reminder</a></li>
        <li class="active"><?= cclang('new'); ?></li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
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
                            <h3 class="widget-user-username">Reminder</h3>
                            <h5 class="widget-user-desc"><?= cclang('new', ['Reminder']); ?></h5>
                            <hr>
                        </div>
                        <?= form_open('', [
                            'name' => 'form_reminder',
                            'class' => 'form-horizontal form-step',
                            'id' => 'form_reminder',
                            'enctype' => 'multipart/form-data',
                            'method' => 'POST'
                        ]); ?>
                        <?php
                        $user_groups = $this->model_group->get_user_group_ids();
                        ?>

                        <h3>Reminder</h3>
                        <section>

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
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="table_name" class="col-sm-2 control-label"><?= cclang('primary_field') ?> <i class="required">*</i></label>
                                <div class="col-sm-8">

                                    <select class="form-control chosen chosen-select chosen-select-with-deselect" name="primary_field" id="primary_field" tabi-ndex="5" data-placeholder="Select Primary Field">
                                        <option value=""></option>
                                    </select>
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>

                            <div class="form-group group-title ">
                                <hr>

                                <div class="callout callout-info">
                                    <small>Shortcode : <span class="short-code-wrapper"></span></small>
                                </div>

                                <label for="title" class="col-sm-2 control-label">Title <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?= set_value('title'); ?>">
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>


                            <div class="form-group group-message ">
                                <label for="message" class="col-sm-2 control-label">Message <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <textarea id="message" name="message" rows="5" cols="80"><?= set_value('Message'); ?></textarea>
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>

                            <div class="form-group group-title ">
                                <label for="url" class="col-sm-2 control-label">URL <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="url" id="url" placeholder="url" value="<?= set_value('url'); ?>">
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>

                            <div class="form-group group-type ">
                                <label for="type" class="col-sm-2 control-label">Type <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="<?= set_value('type'); ?>">
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>


                            <div class="form-group group-receipent ">
                                <label for="receipent" class="col-sm-2 control-label">Receipent <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <div> <b>Group</b> </div>
                                    <select class="form-control chosen chosen-select" name="receipent[]" id="receipent" data-placeholder="Select Receipent" multiple>
                                        <option value=""></option>
                                        <?php foreach (db_get_all_data('aauth_groups') as $row) : ?>
                                            <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="info help-block">
                                    </small>
                                </div>


                                <div class="col-sm-8 col-md-offset-2">
                                    <div> <b>Departement</b> </div>
                                    <select class="form-control chosen chosen-select" name="receipent_department[]" id="receipent_department" data-placeholder="Select Receipent" multiple>
                                        <option value=""></option>
                                        <?php foreach (db_get_all_data('olympic_master_department') as $row) :  ?>
                                            <option value="<?= $row->id ?>"><?= $row->Department; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="info help-block">
                                    </small>
                                </div>


                                <div class="col-sm-8 col-md-offset-2">
                                    <div> <b>Custom Query</b> </div>
                                    <textarea class="form-control " name="receipent_custom_query" id="receipent_custom_query" data-placeholder="Select Receipent"></textarea>
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>


                            <div class="form-group group-repeat_frequency ">
                                <label for="repeat_frequency" class="col-sm-2 control-label">Repeat Every <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="repeat_frequency" id="repeat_frequency" placeholder="Repeat Frequency" value="<?= set_value('repeat_frequency'); ?>">
                                        <span class="input-group-addon">minutes</span>
                                    </div>

                                </div>
                            </div>

                        </section>
                        <h3>Conditions</h3>
                        <section>




                            <div class="form-group group-repeat_frequency ">
                                <label for="repeat_frequency" class="col-sm-2 control-label">condition<i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <?= $this->load->view('backend/standart/administrator/reminder/reminder_condition_template') ?>

                                </div>
                            </div>




                            <div class="row-fluid col-md-7 container-button-bottom">
                                <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                                    <i class="fa fa-save"></i> <?= cclang('save_button'); ?>
                                </button>
                                <a class="btn btn-flat btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back' title="<?= cclang('save_and_go_the_list_button'); ?> (Ctrl+d)">
                                    <i class="ion ion-ios-list-outline"></i> <?= cclang('save_and_go_the_list_button'); ?>
                                </a>

                                <div class="custom-button-wrapper">

                                </div>


                                <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="<?= cclang('cancel_button'); ?> (Ctrl+x)">
                                    <i class="fa fa-undo"></i> <?= cclang('cancel_button'); ?>
                                </a>

                                <span class="loading loading-hide">
                                    <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg">
                                    <i><?= cclang('loading_saving_data'); ?></i>
                                </span>
                            </div>
                        </section>
                        <!-- 
                        <h3>Action</h3>
                        <section>
                        </section> -->
                        <div class="message"></div>
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
<script src="<?= BASE_ASSET; ?>ckeditor/ckeditor.js"></script>
<script src="<?= BASE_ASSET; ?>js/reminder.js"></script>
<!-- Page script -->

<script>
    $(document).ready(function() {

        window.event_submit_and_action = '';

        (function() {
            var title = $('#title');
            /* 
             title.on('change', function() {});
             */
            var message = $('#message');
            var datetime = $('#datetime');


            setTimeout(function() {

                var type = $('#type');
                type.val('sla_reminder')
            }, 100);


        })()





        $('.container-button-bottom').hide();
        $('.form-step').steps({
            headerTag: 'h3',
            bodyTag: 'section',
            autoFocus: true,
            enableAllSteps: true,
            onFinishing: function() {
                $('.btn_save_back').trigger('click')
            },
            labels: {
                finish: 'save'
            }
        });
        $('.custom-button-wrapper').appendTo('.actions')

        CKEDITOR.replace('message');
        var message = CKEDITOR.instances.message;

        $('#btn_cancel').click(function() {
            swal({
                    title: "<?= cclang('are_you_sure'); ?>",
                    text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes!",
                    cancelButtonText: "No!",
                    closeOnConfirm: true,
                    closeOnCancel: true
                },
                function(isConfirm) {
                    if (isConfirm) {
                        window.location.href = BASE_URL + 'administrator/reminder';
                    }
                });

            return false;
        }); /*end btn cancel*/

        $('.btn_save').click(function() {
            $('.message').fadeOut();
            $('#message').val(message.getData());

            var form_reminder = $('#form_reminder');
            var data_post = form_reminder.serializeArray();
            var save_type = $(this).attr('data-stype');

            data_post.push({
                name: 'save_type',
                value: save_type
            });

            data_post.push({
                name: 'event_submit_and_action',
                value: window.event_submit_and_action
            });

            (function() {

            })()


            $('.loading').show();

            $.ajax({
                    url: BASE_URL + '/administrator/reminder/add_save',
                    type: 'POST',
                    dataType: 'json',
                    data: data_post,
                })
                .done(function(res) {
                    $('form').find('.form-group').removeClass('has-error');
                    $('.steps li').removeClass('error');
                    $('form').find('.error-input').remove();
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
                        message.setData('');


                    } else {
                        if (res.errors) {

                            $.each(res.errors, function(index, val) {
                                $('form #' + index).parents('.form-group').addClass('has-error');
                                $('form #' + index).parents('.form-group').find('small').prepend(`
                      <div class="error-input">` + val + `</div>
                      `);
                            });
                            $('.steps li').removeClass('error');
                            $('.content section').each(function(index, el) {
                                if ($(this).find('.has-error').length) {
                                    $('.steps li:eq(' + index + ')').addClass('error').find('a').trigger('click');
                                }
                            });
                        }
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
                    $('html, body').animate({
                        scrollTop: $(document).height()
                    }, 2000);
                });

            return false;
        }); /*end btn save*/








    }); /*end doc ready*/
</script>