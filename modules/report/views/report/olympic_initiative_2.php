<page>

    <div>
        <?php

        $olympic_initiative = $this->db->get_where('olympic_initiative', ['id' => $id])->row();

        $data = [
        'olympic_initiative' => $olympic_initiative,
                    'olympic_cost_impact_fix' => $this->db->get_where('olympic_cost_impact_fix', [
            'initiative' => $olympic_initiative->id
            ])->row_array(),

                    'olympic_file_repository' => $this->db->get_where('olympic_file_repository', [
            'initiative' => $olympic_initiative->id
            ])->result_array(),

                    'olympic_tab_team_members' => $this->db->get_where('olympic_tab_team_members', [
            'initiative' => $olympic_initiative->id
            ])->result_array(),

                    'olympic_milestone' => $this->db->get_where('olympic_milestone', [
            'initiative' => $olympic_initiative->id
            ])->result_array(),

        
        ];

        echo $twig->render('olympic_initiative_content_2.php', $data);

        ?>

    </div>
    <code></code>

</page>