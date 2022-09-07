<page>

    <div>
        <?php

        $form_sk_cpns = $this->db->get_where('form_sk_cpns', ['id' => $id])->row();

        $data = [
        'form_sk_cpns' => $form_sk_cpns,
                    'data_pegawai' => $this->db->get_where('data_pegawai', [
            'nip' => $form_sk_cpns->id
            ])->row_array(),

                    'data_pegawai' => $this->db->get_where('data_pegawai', [
            'nama_pegawai' => $form_sk_cpns->id
            ])->row_array(),

                    'form_sk_cpns' => $this->db->get_where('form_sk_cpns', [
            'deskripsi_sk_cpns' => $form_sk_cpns->id
            ])->result_array(),

                    'form_sk_pns' => $this->db->get_where('form_sk_pns', [
            'deskripsi_sk_pns' => $form_sk_cpns->id
            ])->result_array(),

                    'form_pensiun' => $this->db->get_where('form_pensiun', [
            'no_sk_pensiun' => $form_sk_cpns->id
            ])->result_array(),

                    'form_sk_pemberhentian' => $this->db->get_where('form_sk_pemberhentian', [
            'deskripsi_sk_pemberhentian' => $form_sk_cpns->id
            ])->result_array(),

                    'form_sk_alih_status_kepegawaian' => $this->db->get_where('form_sk_alih_status_kepegawaian', [
            'deskripsi_sk_alih_status_kepegawaian' => $form_sk_cpns->id
            ])->result_array(),

                    'form_peninjauan_masa_kerja' => $this->db->get_where('form_peninjauan_masa_kerja', [
            'deskripsi_surat_pmk' => $form_sk_cpns->id
            ])->result_array(),

                    'form_arsip_lainnya' => $this->db->get_where('form_arsip_lainnya', [
            'deskripsi_arsip' => $form_sk_cpns->id
            ])->result_array(),

                    'form_sk_jabatan' => $this->db->get_where('form_sk_jabatan', [
            'deskripsi_sk_jabatan' => $form_sk_cpns->id
            ])->result_array(),

                    'form_spmj' => $this->db->get_where('form_spmj', [
            'no_spmj' => $form_sk_cpns->id
            ])->result_array(),

                    'form_sk_pemberhentian' => $this->db->get_where('form_sk_pemberhentian', [
            'deskripsi_sk_pemberhentian' => $form_sk_cpns->id
            ])->result_array(),

                    'form_plt' => $this->db->get_where('form_plt', [
            'deskripsi_sk_plt' => $form_sk_cpns->id
            ])->result_array(),

                    'form_plh' => $this->db->get_where('form_plh', [
            'deskripsi_sk_plh' => $form_sk_cpns->id
            ])->result_array(),

                    'form_pangkat' => $this->db->get_where('form_pangkat', [
            'deskripsi_sk_pangkat' => $form_sk_cpns->id
            ])->result_array(),

                    'form_penilaian_kinerja_pns' => $this->db->get_where('form_penilaian_kinerja_pns', [
            'id_pegawai' => $form_sk_cpns->id
            ])->result_array(),

                    'form_kp4' => $this->db->get_where('form_kp4', [
            'deskripsi_kp4' => $form_sk_cpns->id
            ])->result_array(),

                    'form_tugas_belajar' => $this->db->get_where('form_tugas_belajar', [
            'id_pegawai' => $form_sk_cpns->id
            ])->result_array(),

                    'form_ijin_belajar' => $this->db->get_where('form_ijin_belajar', [
            'id_pegawai' => $form_sk_cpns->id
            ])->result_array(),

                    'form_riwayat_pendidikan' => $this->db->get_where('form_riwayat_pendidikan', [
            'tingkat_pendidikan' => $form_sk_cpns->id
            ])->result_array(),

                    'form_ujian_dinas' => $this->db->get_where('form_ujian_dinas', [
            'deskripsi_ujian_dinas' => $form_sk_cpns->id
            ])->result_array(),

                    'form_pelatihan' => $this->db->get_where('form_pelatihan', [
            'deskripsi_pelatihan' => $form_sk_cpns->id
            ])->result_array(),

                    'form_disiplin' => $this->db->get_where('form_disiplin', [
            'deskripsi_surat_disiplin' => $form_sk_cpns->id
            ])->result_array(),

                    'form_penghargaan' => $this->db->get_where('form_penghargaan', [
            'deskripsi_sk_penghargaan' => $form_sk_cpns->id
            ])->result_array(),

                    'form_penghargaan_lainya' => $this->db->get_where('form_penghargaan_lainya', [
            'deskripsi_sk_penghargaan_lainnya' => $form_sk_cpns->id
            ])->result_array(),

                    'form_assesment' => $this->db->get_where('form_assesment', [
            'no_assesment' => $form_sk_cpns->id
            ])->result_array(),

                    'form_lainnya' => $this->db->get_where('form_lainnya', [
            'no_npwp' => $form_sk_cpns->id
            ])->row_array(),

                    'form_lainnya' => $this->db->get_where('form_lainnya', [
            'nik' => $form_sk_cpns->id
            ])->row_array(),

                    'form_lainnya' => $this->db->get_where('form_lainnya', [
            'no_taspen' => $form_sk_cpns->id
            ])->row_array(),

                    'form_lainnya' => $this->db->get_where('form_lainnya', [
            'no_bpjs_kesehatan' => $form_sk_cpns->id
            ])->row_array(),

                    'form_lainnya' => $this->db->get_where('form_lainnya', [
            'no_kartu_pegawai' => $form_sk_cpns->id
            ])->row_array(),

                    'form_lainnya' => $this->db->get_where('form_lainnya', [
            'no_idcard' => $form_sk_cpns->id
            ])->row_array(),

                    'form_lainnya' => $this->db->get_where('form_lainnya', [
            'no_kartu_keluarga' => $form_sk_cpns->id
            ])->row_array(),

                    'form_lainnya' => $this->db->get_where('form_lainnya', [
            'nomor_akta_nikah' => $form_sk_cpns->id
            ])->row_array(),

                    'form_lainnya' => $this->db->get_where('form_lainnya', [
            'no_akta_anak' => $form_sk_cpns->id
            ])->result_array(),

        
        ];

        echo $twig->render('form_sk_cpns_content_1.php', $data);

        ?>

    </div>
    <code></code>

</page>