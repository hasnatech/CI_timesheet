<div style="border:2px solid #000000; padding:3px">
<p style="text-align:center"><span style="font-size:16px"><strong>Ringkasan Ketersediaan&nbsp;Arsip Digital</strong></span></p>

<p><br />
<span style="font-size:12px">Nama : {{ pegawai.nama_pegawai }}</span><br />
<span style="font-size:12px">NIP : {{ pegawai.nip }}</span></p>

<p>&nbsp;</p>

<table border="0" bordercolor="#ccc" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
	<tbody>
		<tr>
			<td style="text-align:center"><span style="font-size:14px"><strong>Nomor</strong></span></td>
			<td colspan="2" rowspan="1" style="text-align:center"><span style="font-size:14px"><strong><span style="color:#ffffff">....................</span>Klarifikasi Arsip<span style="color:#ffffff">....................</span></strong></span></td>
			<td colspan="2" rowspan="1" style="text-align:center"><span style="font-size:14px"><strong>Keterangan</strong></span></td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:12px"><strong>a</strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:12px"><strong>Status Kepegawaian</strong></span></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><span style="font-size:12px">&nbsp;&nbsp;</span></td>
			<td>
			<div><span style="font-size:12px"><span style="font-family:Calibri-Bold"><span style="color:#000000"><strong>SK Pegawai Negeri Sipil </strong></span></span></span></div>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for sk_pns in form_sk_pns %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ sk_pns.deskripsi_sk_pns }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for sk_cpns in form_sk_cpns %}</span></p>

			<p><span style="font-size:12px">{% if sk_cpns.berkas_sk_cpns %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for sk_cpns in form_sk_cpns %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if sk_cpns.berkas_sk_cpns %}<a href="http://dosir.reinovasi.com/uploads/form_sk_cpns/{{sk_cpns.berkas_sk_cpns}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><span style="font-family:Calibri-Bold"><span style="color:#000000"><strong>SK Calon Pegawai Negeri Sipil</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for sk_cpns in form_sk_cpns %}&nbsp;</em></span></p>

			<p><span style="font-size:12px"><em>{{ sk_cpns.deskripsi_sk_cpns }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for sk_cpns in form_sk_cpns %}</span></p>

			<p><span style="font-size:12px">{% if sk_cpns.berkas_sk_cpns %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for sk_cpns in form_sk_cpns %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if sk_cpns.berkas_sk_cpns %}<a href="http://dosir.reinovasi.com/uploads/form_sk_cpns/{{sk_cpns.berkas_sk_cpns}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><span style="font-family:Calibri-Bold"><span style="color:#000000"><strong>SK Pensiun</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for pensiun in form_pensiun %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ pensiun.tanggal_sk_pensiun }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for pensiun in form_pensiun %}</span></p>

			<p><span style="font-size:12px">{% if pensiun.berkas_sk_pensiun %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for pensiun in form_pensiun %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if pensiun.berkas_sk_pensiun %}<a href="http://dosir.reinovasi.com/uploads/form_pensiun/{{pensiun.berkas_sk_pensiun}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><span style="font-family:Calibri-Bold"><span style="color:#000000"><strong>SK Pemberhentian</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for sk_pemberhentian in form_sk_pemberhentian %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ sk_pemberhentian.deskripsi_sk_pemberhentian }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for sk_pemberhentian in form_sk_pemberhentian %}</span></p>

			<p><span style="font-size:12px">{% if sk_pemberhentian.berkas_sk_pemberhentian %}&nbsp;tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for sk_pemberhentian in form_sk_pemberhentian %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if sk_pemberhentian.berkas_sk_pemberhentian %}<a href="http://dosir.reinovasi.com/uploads/form_sk_pemberhentian/{{sk_pemberhentian.berkas_sk_pemberhentian}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a><br />
			{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><span style="font-family:Calibri-Bold"><span style="color:#000000"><strong>SK Alih Status Kepegawaian</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px">{% for sk_alih_status_kepegawaian in form_sk_alih_status_kepegawaian %}</span></p>

			<p><span style="font-size:12px">{{ sk_alih_status_kepegawaian.deskripsi_sk_alih_status_kepegawaian }}{% endfor %}&nbsp;</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for sk_alih_status_kepegawaian in form_sk_alih_status_kepegawaian %}</span></p>

			<p><span style="font-size:12px">{% if sk_alih_status_kepegawaian.berkas_sk_alih_status_kepegawaian %}<br />
			tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:right">
			<p style="text-align:right"><span style="font-size:12px">{% for sk_alih_status_kepegawaian in form_sk_alih_status_kepegawaian %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if sk_alih_status_kepegawaian.berkas_sk_alih_status_kepegawaian %}<a href="http://dosir.reinovasi.com/uploads/form_sk_alih_status_kepegawaian/{{sk_alih_status_kepegawaian.berkas_sk_alih_status_kepegawaian}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p>&nbsp;</p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for sk_alih_status_kepegawaian in form_sk_alih_status_kepegawaian %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if sk_alih_status_kepegawaian.berkas_sk_alih_status_kepegawaian %}<a href="http://dosir.reinovasi.com/uploads/form_sk_alih_status_kepegawaian/{{sk_alih_status_kepegawaian.berkas_sk_alih_status_kepegawaian}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><span style="font-family:Calibri-Bold"><span style="color:#000000"><strong>Peninjauan Masa Kerja</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for sk_peninjauan_masa_kerja in form_peninjauan_masa_kerja %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ sk_peninjauan_masa_kerja.deskripsi_surat_pmk }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for sk_peninjauan_masa_kerja in form_peninjauan_masa_kerja %}</span></p>

			<p><span style="font-size:12px">{% if sk_peninjauan_masa_kerja.berkas_surat_pmk %}<br />
			tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for sk_peninjauan_masa_kerja in form_peninjauan_masa_kerja %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if sk_peninjauan_masa_kerja.berkas_surat_pmk %}<br />
			<a href="http://dosir.reinovasi.com/uploads/form_peninjauan_masa_kerja/{{sk_peninjauan_masa_kerja.berkas_surat_pmk}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><span style="color:#000000; font-family:Calibri-Bold"><strong>Lain-Lain Kepegawaian</strong></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px">{% for status_kepegawaian in form_status_kepegawaian_lain %}</span></p>

			<p><span style="font-size:12px">{ status_kepegawaian_lain.deskripsi_arsip }}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for sk_status_kepegawaian_lain in form_status_kepegawaian_lain %}</span></p>

			<p><span style="font-size:12px">{% if sk_status_kepegawaian_lain.berkas_status_kepegawaian_lain %}<br />
			tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for sk_status_kepegawaian_lain in form_status_kepegawaian_lain %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if sk_status_kepegawaian_lain.berkas_status_kepegawaian_lain %}<a href="http://dosir.reinovasi.com/uploads/form_status_kepegawaian_lain/{{sk_status_kepegawaian_lain.berkas_status_kepegawaian_lain}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td colspan="5">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:12px"><strong>b</strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Calibri-Bold"><strong>Jabatan</strong></span></span></span></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><span style="color:#000000; font-family:Calibri-Bold"><strong>SK Jabatan</strong></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for sk_jabatan in form_sk_jabatan %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ sk_jabatan.nama_jabatan_baru }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p><span style="font-size:12px">{% if sk_jabatan.berkas_sk_jabatan %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if sk_jabatan.berkas_sk_jabatan %}<a href="http://dosir.reinovasi.com/uploads/form_sk_jabatan/{{sk_jabatan.berkas_sk_jabatan}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><span style="font-size:12px"><span style="color:#000000; font-family:Calibri-Bold"><strong>SPP</strong></span></span></td>
			<td>&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p><span style="font-size:12px">{% if sk_jabatan.berkas_spp %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if sk_jabatan.berkas_spp %}<a href="http://dosir.reinovasi.com/uploads/form_sk_jabatan/{{sk_jabatan.berkas_spp}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><span style="font-size:12px"><span style="color:#000000; font-family:Calibri-Bold"><strong>SPMT</strong></span></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p><span style="font-size:12px">{% if sk_jabatan.berkas_spmt %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p style="text-align:right"><span style="font-size:12px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if sk_jabatan.berkas_spmt %}<a href="http://dosir.reinovasi.com/uploads/form_sk_jabatan/{{sk_jabatan.berkas_spmt}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><span style="font-size:12px"><span style="color:#000000; font-family:Calibri-Bold"><strong>Berita&nbsp;Acara</strong></span></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p><span style="font-size:12px">{% if sk_jabatan.berkas_berita_acara %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:right"><span style="font-size:12px">{% for sk_jabatan in form_sk_jabatan %} {% if sk_jabatan.berkas_berita_acara %} <a href="http://dosir.reinovasi.com/uploads/form_sk_jabatan/{{sk_jabatan.berkas_spmt}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Calibri-Bold"><strong>SPMJ</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for sk_spmj in form_spmj %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ sk_spmj.tanggal_spmj }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for sk_spmj in form_spmj %}</span></p>

			<p><span style="font-size:12px">{% if sk_spmj.berkas_spmj %}<br />
			tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for sk_spmj in form_spmj %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if sk_spmj.berkas_spmj %}<br />
			<a href="http://dosir.reinovasi.com/uploads/form_spmj/{{sk_spmj.berkas_spmj}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><span style="color:#000000; font-family:Calibri-Bold"><strong>Pemberhentian Jabatan</strong></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for sk_pemberhentian_jabatan in form_pemberhentian_jabatan %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ sk_pemberhentian_jabatan.deskripsi_sk_pemberhentian_jabatan }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for sk_pemberhentian_jabatan in form_pemberhentian_jabatan %}</span></p>

			<p><span style="font-size:12px">{% if sk_pemberhentian_jabatan.berkas_sk_pemberhentian_jabatan %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for sk_pemberhentian_jabatan in form_pemberhentian_jabatan %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if sk_pemberhentian_jabatan.berkas_sk_pemberhentian_jabatan %}<a href="http://dosir.reinovasi.com/uploads/form_pemberhentian_jabatan/{{sk_pemberhentian_jabatan.berkas_sk_pemberhentian_jabatan}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Calibri-Bold"><strong>PLT</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for plt in form_plt %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ plt.deskripsi_sk_plt }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for plt in form_plt %}</span></p>

			<p><span style="font-size:12px">{% if plt.berkas_sk_plt %}&nbsp;<br />
			tersedia{%endif%}{% endfor %} </span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for plt in form_plt %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if plt.berkas_sk_plt %}&nbsp;<br />
			<a href="http://dosir.reinovasi.com/uploads/form_plt/{{plt.berkas_sk_plt}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><span style="color:#000000; font-family:Calibri-Bold"><strong>PLH</strong></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:right">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for plh in form_plh %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ plh.deskripsi_sk_plh }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for plh in form_plh %}</span></p>

			<p><span style="font-size:12px">{% if plh.berkas_sk_plh %}<br />
			tersedia{%endif%}{% endfor %} </span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for plh in form_plh %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if plh.berkas_sk_plh %}<br />
			<a href="http://dosir.reinovasi.com/uploads/form_plh/{{plh.berkas_sk_plh}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td colspan="5">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:12px"><strong><span style="color:#000000"><span style="font-family:Calibri-Bold">c</span></span></strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:12px"><span style="color:#000000; font-family:Calibri-Bold"><strong>Pangkat</strong></span></span></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for pangkat in form_pangkat %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ pangkat.jenis_kenaikan_pangkat }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for pangkat in form_pangkat %}</span></p>

			<p><span style="font-size:12px">{% if pangkat.berkas_sk_pangkat %}tersedia {%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for pangkat in form_pangkat %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if pangkat.berkas_sk_pangkat %}<a href="http://dosir.reinovasi.com/uploads/form_pangkat/{{pangkat.berkas_sk_pangkat}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:12px"><strong><span style="color:#000000; font-family:Calibri-Bold">d</span></strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Calibri-Bold"><strong>Penilaian Kinerja</strong></span></span></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for penilaian_kinerja_pns in form_penilaian_kinerja_pns %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ penilaian_kinerja_pns.periode_tanggal_akhir_penilaian_kinerja }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for penilaian_kinerja_pns in form_penilaian_kinerja_pns %}</span></p>

			<p><span style="font-size:12px">{% if penilaian_kinerja_pns.berkas_penilaian_kinerja_pns %}<br />
			tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for penilaian_kinerja_pns in form_penilaian_kinerja_pns %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if penilaian_kinerja_pns.berkas_penilaian_kinerja_pns %}<br />
			<a href="http://dosir.reinovasi.com/uploads/form_penilaian_kinerja_pns/{{penilaian_kinerja_pns.berkas_penilaian_kinerja_pns}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="color:#000000; font-family:Calibri-Bold"><span style="font-size:12px"><strong>e</strong></span></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:12px"><span style="color:#000000; font-family:Calibri-Bold"><strong>KP4</strong></span></span></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:12px">{% for kp4 in form_kp4 %}</span></p>

			<p><span style="font-size:12px">{{ kp4.deskripsi_kp4 }}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="font-size:12px">{% for kp4 in form_kp4 %}</span></p>

			<p style="text-align:center"><span style="font-size:12px">{% if kp4.berkas_kp4 %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for kp4 in form_kp4 %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if kp4.berkas_kp4 %}{%endif%}<a href="http://dosir.reinovasi.com/uploads/form_tugas_belajar/{{tugas_belajar.berkas_surat_tugas_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="color:#000000; font-family:Calibri-Bold"><span style="font-size:12px"><strong>f</strong></span></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:12px"><span style="color:#000000; font-family:Calibri-Bold"><strong>Pendidikan dan Pelatihan</strong></span></span></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><span style="color:#000000; font-family:Calibri-Bold"><strong>Tugas Belajar</strong></span></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for tugas_belajar in form_tugas_belajar %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ tugas_belajar.tingkat_pendidikan }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for tugas_belajar in form_tugas_belajar %}</span></p>

			<p><span style="font-size:12px">{% if tugas_belajar.berkas_surat_tugas_belajar %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p style="text-align:right"><span style="font-size:12px">{% for tugas_belajar in form_tugas_belajar %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if tugas_belajar.berkas_surat_tugas_belajar %}<a href="http://dosir.reinovasi.com/uploads/form_tugas_belajar/{{tugas_belajar.berkas_surat_tugas_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><span style="color:#000000; font-family:Calibri-Bold"><strong>Ijin Belajar</strong></span></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:12px"><em>{% for ijin_belajar in form_ijin_belajar %}</em></span></p>

			<p><span style="font-size:12px"><em>{{ ijin_belajar.tingkat_pendidikan }}{% endfor %}</em></span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for ijin_belajar in form_ijin_belajar %}</span></p>

			<p><span style="font-size:12px">{% if ijin_belajar.berkas_surat_ijin_belajar %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p style="text-align:right"><span style="font-size:12px">{% for ijin_belajar in form_ijin_belajar %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if ijin_belajar.berkas_surat_ijin_belajar %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><strong>Riwayat pendidikan</strong></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:12px">{% for riwayat_pendidikan in form_riwayat_pendidikan %}</span></p>

			<p><span style="font-size:12px">{{ riwayat_pendidikan.tingkat_pendidikan }}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for riwayat_pendidikan in form_riwayat_pendidikan %}</span></p>

			<p><span style="font-size:12px">{% if riwayat_pendidikan.berkas_ijazah %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p style="text-align:right"><span style="font-size:12px">{% for riwayat_pendidikan in form_riwayat_pendidikan %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if riwayat_pendidikan.berkas_ijazah %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><strong>Ujian Dinas</strong></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:12px">{% for ujian_dinas in form_ujian_dinas %}</span></p>

			<p><span style="font-size:12px">{{ ujian_dinas.deskripsi_ujian_dinas }}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for ujian_dinas in form_ujian_dinas %}</span></p>

			<p><span style="font-size:12px">{% if ujian_dinas.berkas_ujian_dinas %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p style="text-align:right"><span style="font-size:12px">{% for ujian_dinas in form_ujian_dinas %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if ujian_dinas.berkas_ujian_dinas %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><strong>Pelatihan</strong></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:12px">{% for pelatihan in form_pelatihan %}</span></p>

			<p><span style="font-size:12px">{{ pelatihan.tanggal_sertifikat_pelatihan }}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for pelatihan in form_pelatihan %}</span></p>

			<p><span style="font-size:12px">{% if pelatihan.berkas_pelatihan %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p style="text-align:right"><span style="font-size:12px">{% for pelatihan in form_pelatihan %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if pelatihan.berkas_pelatihan %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:12px"><strong>g</strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:12px"><strong>Disiplin</strong></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:12px">{% for disiplin in form_disiplin %}</span></p>

			<p><span style="font-size:12px">{{ disiplin.tanggal_surat_disiplin }}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for disiplin in form_disiplin %}</span></p>

			<p><span style="font-size:12px">{% if disiplin.berkas_surat_disiplin %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p style="text-align:right"><span style="font-size:12px">{% for disiplin in form_disiplin %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if disiplin.berkas_surat_disiplin %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:12px"><strong>h</strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:12px"><strong>Satyalencana</strong></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px">{% for penghargaan in form_penghargaan %}</span></p>

			<p><span style="font-size:12px">{{ penghargaan.jenis_penghargaan_satya_lencana }}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for penghargaan in form_penghargaan %}</span></p>

			<p><span style="font-size:12px">{% if penghargaan.berkas_sk_penghargaan %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p style="text-align:right"><span style="font-size:12px">{% for penghargaan in form_penghargaan %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if penghargaan.berkas_sk_penghargaan %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:12px"><strong>i</strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:12px"><strong>Penghargaan lainnya</strong></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px">{% for penghargaan_lainnya in form_penghargaan_lainya %}</span></p>

			<p><span style="font-size:12px">{{ penghargaan_lainnya.deskripsi_sk_penghargaan_lainnya }}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for penghargaan_lainnya in form_penghargaan_lainya %}</span></p>

			<p><span style="font-size:12px">{% if penghargaan_lainnya.berkas_sk_penghargaan_lainnya %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p style="text-align:right"><span style="font-size:12px">{% for penghargaan_lainnya in form_penghargaan_lainya %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if penghargaan_lainnya.berkas_sk_penghargaan_lainnya %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:12px"><strong>j</strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:12px"><strong>Asessment</strong></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:12px">{% for assesment_lain in form_assesment %}</span></p>

			<p><span style="font-size:12px">{{assesment_lain._tanggal_assesment }}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for assesment_lain in form_assesment %}</span></p>

			<p><span style="font-size:12px">{% if assesment_lain.berkas_assesment %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p style="text-align:right"><span style="font-size:12px">{% for assesment_lain in form_assesment %}</span></p>

			<p style="text-align:right"><span style="font-size:12px">{% if assesment_lain.berkas_assesment %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:12px"><strong>k</strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:12px"><strong>Lainnya</strong></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><strong>NPWP</strong></span></td>
			<td style="text-align:center"><span style="font-size:12px">{% if form_lainnya.berkas_npwp %}tersedia{%endif%}</span></td>
			<td style="text-align:right"><span style="font-size:12px">{% if form_lainnya.berkas_npwp %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}</span></td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><strong>NIK</strong></span></td>
			<td style="text-align:center"><span style="font-size:12px">{% if form_lainnya.nik %}tersedia{%endif%}</span></td>
			<td style="text-align:right"><span style="font-size:12px">{% if form_lainnya.nik %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}</span></td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><strong>Taspen</strong></span></td>
			<td style="text-align:center"><span style="font-size:12px">{% if form_lainnya.no_taspen %}tersedia{%endif%}</span></td>
			<td style="text-align:right"><span style="font-size:12px">{% if form_lainnya.no_taspen %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}</span></td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><strong>BPJS Kesehatan</strong></span></td>
			<td style="text-align:center"><span style="font-size:12px">{% if form_lainnya.no_bpjs_kesehatan %}tersedia{%endif%}</span></td>
			<td style="text-align:right"><span style="font-size:12px">{% if form_lainnya.no_bpjs_kesehatan %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}</span></td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><strong>Kartu Pegawai</strong></span></td>
			<td style="text-align:center"><span style="font-size:12px">{% if form_lainnya.no_kartu_pegawai %}tersedia{%endif%}</span></td>
			<td style="text-align:right"><span style="font-size:12px">{% if form_lainnya.no_kartu_pegawai %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}</span></td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><strong>ID Card</strong></span></td>
			<td style="text-align:center"><span style="font-size:12px">{% if form_lainnya.no_idcard %}tersedia{%endif%}</span></td>
			<td style="text-align:right"><span style="font-size:12px">{% if form_lainnya.no_idcard %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}</span></td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><strong>Kartu Keluarga</strong></span></td>
			<td style="text-align:center"><span style="font-size:12px">{% if form_lainnya.no_kartu_keluarga %}tersedia{%endif%}</span></td>
			<td style="text-align:right"><span style="font-size:12px">{% if form_lainnya.no_kartu_keluarga %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}</span></td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><strong>Akta Nikah</strong></span></td>
			<td style="text-align:center"><span style="font-size:12px">{% if form_lainnya.nomor_akta_nikah %}tersedia{%endif%}</span></td>
			<td style="text-align:right"><span style="font-size:12px">{% if form_lainnya.nomor_akta_nikah %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}</span></td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:12px"><strong>Akta Anak</strong></span></td>
			<td style="text-align:center"><span style="font-size:12px">{% if form_lainnya.no_akta_anak %}tersedia{%endif%}</span></td>
			<td style="text-align:right"><span style="font-size:12px">{% if form_lainnya.no_akta_anak %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}</span></td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:12px"><strong>l</strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:12px"><strong>Arsip Lainnya</strong></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:12px">{% for arsip_lainnya in form_arsip_lainnya %}</span></p>

			<p><span style="font-size:12px">{{ arsip_lainnya.deskripsi_arsip }}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:12px">{% for arsip_lainnya in form_arsip_lainnya %}</span></p>

			<p><span style="font-size:12px">{% if arsip_lainnya.nama_berkas %}<br />
			tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:right">
			<p><span style="font-size:12px">{% for arsip_lainnya in form_arsip_lainnya %}</span></p>

			<p><span style="font-size:12px">{% if arsip_lainnya.nama_berkas %}<br />
			{%endif%}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{% endfor %}</span></p>
			</td>
		</tr>
	</tbody>
</table>
</div>
