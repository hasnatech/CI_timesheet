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
        
        $i=0;
        $team = [];
        foreach($data['olympic_tab_team_members'] as $team_member){
        $i++;
        $membernya = $team_member['member'];
        $team[$i] = $this->db->get_where('olympic_master_team_members', ['id' => $membernya])->row();
        }
        $data['team'] = $team;
        
        $j=0;
        foreach($data['olympic_milestone'] as $key => $milestone){
        $j++;
        $statusnya = $data['olympic_milestone'][$key]['status'];
        $statusnya_milestone = $this->db->get_where('olympic_status_milestone', ['id' => $statusnya])->row();
        $data['olympic_milestone'][$key]['status'] = $statusnya_milestone->status_name;
        $pic1nya = $data['olympic_milestone'][$key]['pic_1'];
        $pic1nya_milestone = $this->db->get_where('olympic_tab_team_members', ['id' => $pic1nya])->row();
        $data['olympic_milestone'][$key]['pic_1'] = $pic1nya_milestone->name_member;
        $pic2nya = $data['olympic_milestone'][$key]['pic_2'];
        $pic2nya_milestone = $this->db->get_where('olympic_tab_team_members', ['id' => $pic2nya])->row();
        $data['olympic_milestone'][$key]['pic_2'] = $pic2nya_milestone->name_member;
        }
        $data['statusnya_milestone'] = $statusnya_milestone;
        $data['pic1nya_milestone'] = $pic1nya_milestone;
        $data['pic2nya_milestone'] = $pic2nya_milestone;

        
        //satuan
        $departmentnya = $this->db->get_where('olympic_master_department', ['id' => $olympic_initiative->department])->row();
        $data['department'] = $departmentnya;
        $ownernya = $this->db->get_where('aauth_users', ['id' => $olympic_initiative->owner])->row();
        $data['owner'] = $ownernya;

        
        $editornya = $this->db->get_where('aauth_users', ['id' => $olympic_initiative->editor])->row();
        $data['editor'] = $editornya;
    
        $sponsornya = $this->db->get_where('aauth_users', ['id' => $olympic_initiative->sponsor])->row();
        $data['sponsor'] = $sponsornya;
        
        $categoriesnya = $this->db->get_where('olympic_master_category', ['id' => $olympic_initiative->category])->row();
        $data['category'] = $categoriesnya;
        
        $impact_typenya = $this->db->get_where('olympic_impact_type', ['id' => $olympic_initiative->impact_type])->row();
        $data['impact_type'] = $impact_typenya;
        $data['print_date'] = date("Y/m/d");
      
        echo $twig->render('olympic_initiative_content_3.php', $data);

        ?>

    </div>
    <code></code>

</page>