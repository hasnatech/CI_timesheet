<page>

    <div>
        <?php

        $pegawai = $this->db->get_where('pegawai', ['id' => $id])->row();

        $data = [
        'pegawai' => $pegawai,
                    'data_pegawai' => $this->db->get_where('data_pegawai', [
            'nip' => $pegawai->id
            ])->row_array(),

                    'data_pegawai' => $this->db->get_where('data_pegawai', [
            'nama_pegawai' => $pegawai->id
            ])->row_array(),

                    'form_sk_cpns' => $this->db->get_where('form_sk_cpns', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_sk_pns' => $this->db->get_where('form_sk_pns', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_pensiun' => $this->db->get_where('form_pensiun', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_sk_pemberhentian' => $this->db->get_where('form_sk_pemberhentian', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_sk_alih_status_kepegawaian' => $this->db->get_where('form_sk_alih_status_kepegawaian', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_peninjauan_masa_kerja' => $this->db->get_where('form_peninjauan_masa_kerja', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_arsip_lainnya' => $this->db->get_where('form_arsip_lainnya', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_sk_jabatan' => $this->db->get_where('form_sk_jabatan', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_spmj' => $this->db->get_where('form_spmj', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_pemberhentian_jabatan' => $this->db->get_where('form_pemberhentian_jabatan', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_plt' => $this->db->get_where('form_plt', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_plh' => $this->db->get_where('form_plh', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_pangkat' => $this->db->get_where('form_pangkat', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_penilaian_kinerja_pns' => $this->db->get_where('form_penilaian_kinerja_pns', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_kp4' => $this->db->get_where('form_kp4', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_tugas_belajar' => $this->db->get_where('form_tugas_belajar', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_ijin_belajar' => $this->db->get_where('form_ijin_belajar', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_riwayat_pendidikan' => $this->db->get_where('form_riwayat_pendidikan', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_ujian_dinas' => $this->db->get_where('form_ujian_dinas', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_pelatihan' => $this->db->get_where('form_pelatihan', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_disiplin' => $this->db->get_where('form_disiplin', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_penghargaan' => $this->db->get_where('form_penghargaan', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_penghargaan_lainya' => $this->db->get_where('form_penghargaan_lainya', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_assesment' => $this->db->get_where('form_assesment', [
            'id_pegawai' => $pegawai->id
            ])->result_array(),

                    'form_lainnya' => $this->db->get_where('form_lainnya', [
            'id_pegawai' => $pegawai->id
            ])->row_array(),

        
        ];

        echo $twig->render('pegawai_content_1.php', $data);

        ?>

    </div>
    <code></code>

</page>