
$(document).ready(function () {

    function getField(callback) {

        var field_input = $('#primary_field');

        var table_name = $('[name="table_name"]').val();

        $.get(BASE_URL + '/administrator/reminder/get_list_field_id/' + table_name, function (data) {
            var res = (data);

            if (res.success) {
                $('.short-code-wrapper').html(res.short_code)
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

    function getFieldcondition(wrapper, callback) {

        var field_input = wrapper.find('.condition-field');


        var table_name = wrapper.find('#condition_table').val();

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


    $(document).on('change', '#condition_table', function () {

        getFieldcondition($(this).parents('.condition-data-item'), function () {

        })

    });

    function addNewcondition() {
        var item = $('.condition-data-tpl').clone();
        var uniq = getUnixId();

        item.find('.condition-data-item').attr('data-report-id', uniq);
        item.find('#condition_table_ref').attr('name', `condition[${uniq}][condition_table]`)
        item.find('#condition_field').attr('name', `condition[${uniq}][condition_field]`)
        item.find('#condition_operator').attr('name', `condition[${uniq}][condition_operator]`)
        item.find('#condition_value').attr('name', `condition[${uniq}][condition_value]`)


        $('.condition-data-wrapper').append(item.html())


        var container = $('.condition-data-wrapper').find('[data-report-id="' + uniq + '"]');
        /* 
                if (!container.find('#condition_table_ref').val().length) {
                    container.find('#condition_table_ref').val($('#table_name').val())
                } */

        return container;

    }

    $(document).on('click', 'a.btn-add-condition', function (event) {
        event.preventDefault();

        addNewcondition();
    })



    $(document).on('click', 'a.btn-remove-condition', function (event) {
        event.preventDefault();

        $(this).parents('.condition-data-item').remove();
    })


    if (typeof conditions != 'undefined') {

        setTimeout(function () {

            $.each(conditions, function (idx, val) {
                var item = addNewcondition()
                /* 
                    if (!item.find('#condition_table_ref').val().length) {
                        item.find('#condition_table_ref').val($('#table_name').val())
                    }
                    item.find('#condition_table_ref').val(val.cond_table)
                 */
                item.find('#condition_field').val(val.cond_field)
                item.find('#condition_operator').val(val.cond_operator)
                item.find('#condition_value').val(val.cond_value)
            });
        }, 100)
    }

    var receipent_custom_query = $('#receipent_custom_query');

})