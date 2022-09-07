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
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Reminder <small>Edit Reminder</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a href="<?= site_url('administrator/reminder'); ?>">Reminder</a></li>
        <li class="active">Edit</li>
    </ol>
</section>

<style>


</style>
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
                            <h5 class="widget-user-desc">Edit Reminder</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/reminder/edit_save/' . $this->uri->segment(4)), [
                            'name' => 'form_reminder',
                            'class' => 'form-horizontal form-step',
                            'id' => 'form_reminder',
                            'method' => 'POST'
                        ]); ?>

                        <?php
                        $user_groups = $this->model_group->get_user_group_ids();
                        ?>



                        <h3>Reminder</h3>
                        <section>



                            <div class="form-group group-type  ">
                                <label for="type" class="col-sm-2 control-label">Table Name <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control" name="table_name" id="table_name" placeholder="" value="<?= set_value('table', $reminder->table); ?>">
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>


                            <div class="form-group group-type  ">
                                <label for="type" class="col-sm-2 control-label">Primary Field <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control" name="primary_field" id="primary_field" placeholder="" value="<?= set_value('primary_field', $reminder->primary_field); ?>">
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>



                            <div class="form-group group-title  ">
                                <hr>
                                <div class="callout callout-info">
                                    <small>Shortcode : <code>{{<?= implode($this->db->list_fields($reminder->table), '}}</code> <code>{{') ?>}}</code></small>
                                </div>

                                <label for="title" class="col-sm-2 control-label">Title <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="" value="<?= set_value('title', $reminder->title); ?>">
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>




                            <div class="form-group group-message  ">
                                <label for="message" class="col-sm-2 control-label">Message <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <textarea id="message" name="message" rows="10" cols="80"> <?= set_value('message', $reminder->message); ?></textarea>
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>

                            <div class="form-group group-title ">
                                <label for="url" class="col-sm-2 control-label">URL <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="url" id="url" placeholder="url" value="<?= set_value('url', $reminder->url); ?>">
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>



                            <div class="form-group group-type  ">
                                <label for="type" class="col-sm-2 control-label">Type <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="type" id="type" placeholder="" value="<?= set_value('type', $reminder->type); ?>">
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>




                            <div class="form-group group-receipent">
                                <label for="receipent" class="col-sm-2 control-label">Receipent <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">
                                    <div> <b>Group</b> </div>
                                    <select class="form-control chosen chosen-select" name="receipent[]" id="receipent" data-placeholder="Select Receipent" multiple>
                                        <option value=""></option>
                                        <?php foreach (db_get_all_data('aauth_groups') as $row) : ?>
                                            <option <?= in_array($row->id, explode(',', $reminder->receipent)) ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
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
                                            <option <?= in_array($row->id, explode(',', $reminder->receipent_department)) ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->Department; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="info help-block">
                                    </small>
                                </div>


                                <div class="col-sm-8 col-md-offset-2">
                                    <div> <b>Custom Query</b> </div>
                                    <textarea class="form-control " name="receipent_custom_query" id="receipent_custom_query" data-placeholder="Select Receipent"><?= $reminder->receipent_custom_query ?></textarea>
                                    <small class="info help-block">
                                    </small>
                                </div>
                            </div>


                            <div class="form-group group-repeat_frequency  ">
                                <label for="repeat_frequency" class="col-sm-2 control-label">Repeat Every <i class="required">*</i>
                                </label>
                                <div class="col-sm-8">

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="repeat_frequency" id="repeat_frequency" placeholder="" value="<?= set_value('repeat_frequency', $reminder->repeat_frequency); ?>">
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
<script>
    var conditions = <?= json_encode($conditions) ?>;
</script>
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
            var type = $('#type');
            var datetime = $('#datetime');

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
                    title: "Are you sure?",
                    text: "the data that you have created will be in the exhaust!",
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

            (function() {
                data_post.push({
                    name: '_example',
                    value: 'value_of_example',
                })
            })()


            data_post.push({
                name: 'event_submit_and_action',
                value: window.event_submit_and_action
            });

            $('.loading').show();

            $.ajax({
                    url: form_reminder.attr('action'),
                    type: 'POST',
                    dataType: 'json',
                    data: data_post,
                })
                .done(function(res) {
                    $('form').find('.form-group').removeClass('has-error');
                    $('form').find('.error-input').remove();
                    $('.steps li').removeClass('error');
                    if (res.success) {
                        var id = $('#reminder_image_galery').find('li').attr('qq-file-id');
                        if (save_type == 'back') {
                            window.location.href = res.redirect;
                            return;
                        }

                        $('.message').printMessage({
                            message: res.message
                        });
                        $('.message').fadeIn();
                        $('.data_file_uuid').val('');

                    } else {
                        if (res.errors) {
                            parseErrorField(res.errors);
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





        async function chain() {}

        chain();




    }); /*end doc ready*/
</script>