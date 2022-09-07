
$(document).ready(function () {

    function getField(callback) {

        var field_input = $('.field-table');

        var table_name = $('[name="table_name"]').val();

        $.get(BASE_URL + '/administrator/crud/get_list_field_id/' + table_name, function (data) {
            var res = (data);

            if (res.success) {
                field_input.html(res.html);
                field_input.trigger('chosen:updated');

                callback()

            } else {
                $('.message').printMessage({ message: res.message, type: 'warning' });
                $('.message').fadeIn();
            }
        })
            .fail(function () {
                $('.message').printMessage({ message: 'Error getting data', type: 'warning' });
            })
            .always(function () {
                $('.loading').hide();
            });

    }

    $(document).on('change', '#table_name', function () {
        getField(function () {

        })
    });

    function getFieldRelation(wrapper, callback) {

        var field_input = wrapper.find('.relation-field');


        var table_name = wrapper.find('#relation_table').val();

        $.get(BASE_URL + '/administrator/crud/get_list_field_id/' + table_name, function (data) {
            var res = (data);

            if (res.success) {
                field_input.html(res.html);
                field_input.trigger('chosen:updated');

                callback()

            } else {
                $('.message').printMessage({ message: res.message, type: 'warning' });
                $('.message').fadeIn();
            }
        })
            .fail(function () {
                $('.message').printMessage({ message: 'Error getting data', type: 'warning' });
            })
            .always(function () {
                $('.loading').hide();
            });

    }


    $(document).on('change', '#relation_table', function () {

        getFieldRelation($(this).parents('.relation-data-item'), function () {

        })

    });

    function addNewRelation() {
        var item = $('.relation-data-tpl').clone();
        var uniq = getUnixId();

        item.find('select').addClass('chosen chosen-select chosen-select-with-deselect');

        item.find('.relation-data-item').attr('data-report-id', uniq);

        item.find('#relation_type').attr('name', `relation[${uniq}][relation_type]`)
        item.find('#relation_table').attr('name', `relation[${uniq}][relation_table]`)
        item.find('#relation_field').attr('name', `relation[${uniq}][relation_field]`)
        item.find('#field').attr('name', `relation[${uniq}][field]`)

        $('.relation-data-wrapper').append(item.html())
        initChosen()

        return $('.relation-data-wrapper').find('[data-report-id="' + uniq + '"]');
    }

    $('.btn-add-relation').click(function (event) {
        event.preventDefault();

        addNewRelation();
    })

    $(document).on('click', 'a.btn-remove-relation', function (event) {
        event.preventDefault();

        $(this).parents('.relation-data-item').remove();
    })

    if (typeof relations != 'undefined') {

        getField(function () {
            $.each(relations, function (indexInArray, val) {
                var obj = addNewRelation()

                obj.find('#relation_type').val(val.relation_type)
                obj.find('#field').val(val.field)
                obj.find('#relation_table').val(val.relation_table);

                getFieldRelation(obj, function () {
                    obj.find('#relation_field').val(val.relation_field_reference).trigger('chosen:updated');
                })

                obj.find('.chosen').trigger('chosen:updated')

            });
        })
    }



    if ($('#advance_editor').length) {

        var report_controller_text = $('#report_controller');
        var report_view_text = $('#report_view');

        report_controller_text.val('')
        report_view_text.val('')

        ace.require("ace/ext/language_tools");
        var beautify = ace.require("ace/ext/beautify"); // get reference to extension

        var editor = ace.edit('advance_editor');
        editor.setOptions({
            enableBasicAutocompletion: true,
            enableSnippets: true,
            enableLiveAutocompletion: true,
        });
        editor.getSession().setMode("ace/mode/php");
        beautify.beautify(editor.session);

        editor.setValue($('#advance_editor_html').val());

        var intervalEditor = null;

        function getFile(type, updateeditor) {
            var content = '';
            if (type == 'view') {
                if (report_view_text.val().length) {
                    content = report_view_text.val();
                }
            } else {
                if (report_controller_text.val().length) {
                    content = report_controller_text.val();
                }
            }
            if (content.length) {

                editor.setValue(content);

                return;
            } else {

                $.ajax({
                    type: "GET",
                    url: `${BASE_URL}/administrator/report/get_file_html`,
                    data: {
                        type: type,
                        report_id: window.report.id
                    },
                    dataType: "JSON",
                    success: function (response) {
                        if (response.success) {

                            if (typeof updateeditor != 'undefined') {
                                if (updateeditor == true) {
                                    editor.setValue(response.content);
                                }
                            } else {
                                editor.setValue(response.content);
                            }


                            if (type == 'view') {
                                report_view = response.content;
                                report_view_text.val(response.content)
                            } else {
                                report_controller = response.content;
                                report_controller_text.val(response.content)
                            }

                        } else {
                            toastr['warning']('Error getting data')
                        }

                    }
                });
            }
        }

        $('.file-item').click(function () {
            var type = $(this).data('type');


            var current = $('.file-item.btn-default').data('type');

            content = editor.session;
            if (current == 'view') {
                report_view = content;
                report_view_text.val(content)
            } else {
                report_controller = content;
                report_controller_text.val(content)
            }



            $('.file-item').removeClass('btn-default');
            $(this).addClass('btn-default');

            var current = $('.file-item.btn-default').data('type');

            getFile(type)

        })

        getFile('controller', false)
        getFile('view')
        function livePreview() {
            var params = {}

            params[csrf] = token;
            params['report_controller'] = report_controller_text.val();
            params['report_view'] = report_view_text.val();
            params['report_id'] = window.report.id;

            $.ajax({
                type: "POST",
                url: `${BASE_URL}/administrator/report/live_preview`,
                data: params,
                dataType: "JSON",
                success: function (response) {
                    if (response.success) {

                        $('.report-live-preview-wrapper').html(response.content)

                    } else {
                        toastr['warning']('Error getting data')
                    }

                }
            });
        }


        editor.getSession().on('change', function () {
            clearInterval(intervalEditor);


            var current = $('.file-item.btn-default').data('type');

            content = editor.session;
            if (current == 'view') {
                report_view = content;
                report_view_text.val(content)
            } else {
                report_controller = content;
                report_controller_text.val(content)
            }


            intervalEditor = setTimeout(function () {
                livePreview();
            }, 500);
        });



    }

})