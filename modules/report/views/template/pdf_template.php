<page>

    <div>
        {php_open_tag}

        ${table_name} = $this->db->get_where('{table_name}', ['{primary_key}' => $id])->row();

        $data = [
        '{table_name}' => ${table_name},
        <?php foreach ($relations as $relation) : ?>
            '<?= $relation->relation_table ?>' => $this->db->get_where('<?= $relation->relation_table ?>', [
            '<?= $relation->relation_field_reference ?>' => ${table_name}-><?= $relation->field ?>

            ])-><?= $relation->relation_type == 'one_to_many' ? 'result_array()' : 'row_array()' ?>,

        <?php endforeach ?>

        ];

        echo $twig->render('{table_name}_content_{report_id}.php', $data);

        {php_close_tag}

    </div>
    <code></code>

</page>