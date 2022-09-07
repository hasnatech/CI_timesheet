<div class="col-md-12">


    <div class="form-group ">

        <label for="report"><?= cclang('click_event') ?> <i class="required">*</i></label>
        <div>
            <select class="form-control " placeholder="" name="click_event" id="click_event" tabi-ndex="5">
                <option value="javascript">Javascript</option>
                <option value="function">Function</option>
                <option value="submit_and_action">Submit And Custom Action</option>
                <option value="url">Go To URL</option>
            </select>

        </div>
    </div>

    <div class="click_event_tab_type" data-type="url">

        <div class="form-group ">
            <label for="report"><?= cclang('link') ?> <i class="required">*</i></label>
            <div>
                <input class="form-control " placeholder="/administrator/other_module/{id}" name="click_event_link" id="link" tabi-ndex="5">

            </div>
        </div>
    </div>



    <div class="click_event_tab_type" data-type="function">

        <div class="form-group ">
            <label for="report"><?= cclang('select_function') ?> <i class="required">*</i></label>
            <div>
                <select class="form-control " placeholder="" name="click_event_function" id="click_event_function" tabi-ndex="5">
                </select>

            </div>
        </div>


    </div>


    <div class="click_event_tab_type" data-type="javascript">
        <div class="form-group ">
            <label for="report"><?= cclang('javascript') ?> <i class="required">*</i></label>
            <div>
                <pre class="form-control " id="click_event_javascript" rows="50" height="400px" tabi-ndex="5" style="height:100px">$('.btn_save_back').trigger('click')</pre>

                <textarea style="height: 0px;width:0px; position:absolute; left:-99999px" name="click_event_javascript" cols="30" rows="10"></textarea>

            </div>
        </div>

    </div>


    <div class="click_event_tab_type" data-type="submit_and_action">
        <div class="form-group ">
            <label for="report"><?= cclang('php') ?> <i class="required">*</i></label>
            <div>
                <pre class="form-control " id="click_event_submit_and_action" rows="50" height="400px" tabi-ndex="5" style="height:300px">
send_notification([
    'url' => '',
    'title' => 'Notification id data'.$id,
    'content' => 'Hello your form has been submitted thanks',
    'to' => [
        'admin',
        'analyst',
    ],
]);

save_log([
    'title' => 'Log id data'.$id,
    'message' => 'field value '.$this->input->post('nama_field'),
    'type' => 'module',
    'data' => [
        'user' => get_user_data('id')
    ],
]);


                </pre>

                <textarea style="height: 0px;width:0px; position:absolute; left:-99999px" name="click_event_submit_and_action" cols="30" rows="10"></textarea>

            </div>
        </div>

    </div>


    <div class="row">
        <hr>

    </div>


    <div class="form-group ">

        <label for="report"><?= cclang('label') ?> <i class="required">*</i></label>
        <div>
            <input class="form-control " placeholder="" name="label" id="label" tabi-ndex="5">

        </div>
    </div>

    <div class="form-group ">
        <label for="report"><?= cclang('button_placement') ?> <i class="required">*</i></label>
        <div>
            <select class="form-control " placeholder="" name="placement" id="placement" tabi-ndex="5">
                <option value="on_list">On Form</option>
            </select>

        </div>
    </div>

    <div class="form-group menu-only">
        <br>
        <br>

        <div class="row">
            <div class="col-md-12">


                <input type="hidden" name="icon" id="icon">

                <div class="icon-preview">
                    <span class="icon-preview-item"><i class="fa fa-rss fa-lg"></i></span>
                </div>
                <br>
                <br>

                <a class="btn btn-default btn-select-icon btn-flat"><?= cclang('select_icon') ?></a>

            </div>
            <hr>
        </div>
    </div>
</div>


<script>
    $(function() {


        function changeClickEventTemplate(val) {
            $('.click_event_tab_type').hide();
            $('.click_event_tab_type[data-type="' + val + '"]').show();

        }


        ace.require("ace/ext/language_tools");
        var beautify = ace.require("ace/ext/beautify"); // get reference to extension

        var click_event_javascript = ace.edit('click_event_javascript');

        click_event_javascript.setOptions({
            enableBasicAutocompletion: true,
            enableSnippets: true,
            enableLiveAutocompletion: true,
            fontSize: "11pt",
        });
        click_event_javascript.getSession().setMode("ace/mode/javascript");

        click_event_javascript.getSession().on('change', function() {
            var val = click_event_javascript.getSession().getValue();

            $('[name="click_event_javascript"]').val(val)
        });

        window.click_event_javascript = click_event_javascript;



        var click_event_submit_and_action = ace.edit('click_event_submit_and_action');
        window.click_event_submit_and_action = click_event_submit_and_action;

        click_event_submit_and_action.setOptions({
            enableBasicAutocompletion: true,
            enableSnippets: true,
            enableLiveAutocompletion: true,
            fontSize: "11pt",
        });
        click_event_submit_and_action.getSession().setMode("ace/mode/php");

        click_event_submit_and_action.getSession().on('change', function() {
            var val = click_event_submit_and_action.getSession().getValue();

            $('[name="click_event_submit_and_action"]').val(val)
        });






        changeClickEventTemplate($('[name="click_event"]').val());

        $('[name="click_event"]').change(function() {
            changeClickEventTemplate($(this).val());
        })

        $('.btn-select-icon').click(function(event) {
            event.preventDefault();

            $('#modalIcon').modal('show');
        });

        $('.icon-container').click(function(event) {
            $('#modalIcon').modal('hide');
            var icon = $(this).find('.icon-class').html();

            icon = $.trim(icon);

            $('#icon').val(icon);

            $('.icon-preview-item .fa').attr('class', 'fa fa-lg ' + icon);
        });


        function group_select() {
            var type = $('#category-icon-filter').val();
            $('.category-icon').hide();
            $('.category-icon#' + type).show();

            if (type == 'all') {
                $('.category-icon').show();
            }
        }

        $('#find-icon').keyup(function(event) {
            $('.icon-container').hide();
            $('.category-icon').show();
            $('#category-icon-filter').val('all')
            var search = $(this).val();

            $('.icon-class').each(function(index, el) {
                var str = $(this).html();
                var patt = new RegExp(search);
                var res = patt.test(str);

                if (res) {
                    $(this).parent('.icon-container').show();
                }
            });
            $('.category-icon').each(function(index, el) {
                if ($(this).find('.icon-container:visible').length) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });

        });

        $('.category-icon').each(function(index) {
            $('#category-icon-filter').append('<option value="' + $(this).attr('id') + '">' + $(this).attr('id') + '</option>');
        });

        $('#category-icon-filter').change(function(event) {
            group_select();
        });
    })
</script>