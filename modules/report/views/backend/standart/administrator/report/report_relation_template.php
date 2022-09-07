<div class="relation-data-tpl" style="display: none;">
    <div class="relation-data-item">

        <div class="row">

            <div class="col-md-12">



                <div class="col-md-2">
                    <b>Relation type</b>
                    <select class="form-control " name="relation_type" id="relation_type" tabi-ndex="5" data-placeholder="Select Relation Type">
                        <option value=""></option>
                        <option value="one_to_one">One to one</option>
                        <option value="one_to_many">One to many</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <b>Field</b>
                    <select class="form-control field-table" name="field" id="field" tabi-ndex="5" data-placeholder="Select field">
                        <option value=""></option>
                    </select>
                </div>
                <div class="col-md-3">
                    <b>Relation table</b>
                    <select class="form-control " name="relation_table" id="relation_table" tabi-ndex="5" data-placeholder="Select table to relation">
                        <option value=""></option>
                        <?php foreach ($tables as $row) : ?>
                            <option value="<?= $row; ?>"><?= $row; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <b>Relation field reference</b>
                    <select class="form-control relation-field" name="relation_field" id="relation_field" tabi-ndex="5" data-placeholder="Select relation field">
                        <option value=""></option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="" class="btn btn-danger margin-top-20 btn-remove-relation"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>
<hr>
<div class="row">

    <div class="relation-data-wrapper">

    </div>

</div>

<hr>
<a href="" class="btn btn-warning btn-xs btn-add-relation">Add relation</a>