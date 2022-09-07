<div class="condition-data-tpl" style="display: none;">
    <div class="condition-data-item">

        <div class="row">

            <div class="col-md-12">

                <!-- 
                <div class="col-md-3">
                    <b>Table</b>
                    <input type="text" class="form-control" id="condition_table_ref">
                </div>
                -->

                <div class="col-md-3">
                    <b>Field</b>
                    <input type="text" class="form-control" id="condition_field">
                </div>

                <div class="col-sm-2 ">
                    <b>Operator</b>

                    <select class="form-control" name="cond_operator" id="condition_operator">
                        <?php foreach ([
                            '' => '',
                            '=' => 'equal =',
                            '>' => 'greater than >',
                            '<' => 'smaller than <',
                            '!=' => 'not equal !='
                        ] as $key => $val) : ?>
                            <option value="<?= $key ?>"><?= ucfirst($val) ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <b>Value</b>
                    <input type="text" class="form-control" id="condition_value">
                </div>
                <div class="col-md-1">
                    <a href="" class="btn btn-danger btn-xs margin-top-10 btn-remove-condition"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>
<hr>
<div class="row">

    <div class="condition-data-wrapper">

    </div>

</div>

<hr>
<a href="" class="btn btn-warning btn-xs btn-add-condition">Add condition</a>