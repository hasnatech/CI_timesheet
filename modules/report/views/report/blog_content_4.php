<div style="border:2px solid #000000; padding:3px">
<p style="text-align:center"><strong>KETERSEDIAN ARSIP DIGITAL</strong></p>

<p><br />
<span style="font-size:12px"><img alt="" src="/uploads/pegawai/{{pegawai.pas_foto_terbaru}}" style="float:right; height:100px; width:89px" />Nama : {{ pegawai.nama_pegawai }}</span><br />
<span style="font-size:12px">NIP : {{ pegawai.nip }}</span></p>

<p>&nbsp;</p>

<table border="0" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse">
	<tbody>
		<tr>
			<td style="text-align:center"><span style="font-size:12px"><strong>Nomor</strong></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center"><span style="font-size:12px"><strong>Klarifikasi Arsip</strong></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center"><span style="font-size:12px"><strong>Keterangan</strong></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:11px"><strong>1</strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:11px"><strong>Status Kepegawaian</strong></span></td>
			<td rowspan="1">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			<td>
			<div><span style="font-size:10px"><span style="font-family:Calibri-Bold"><span style="color:#000000"><strong>SK Pegawai Negeri Sipil </strong></span></span></span></div>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for sk_pns in form_sk_pns %}</span></em></p>

			<p><em><span style="font-size:9px">{{ sk_pns.deskripsi_sk_pns }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p style="text-align:center"><span style="font-size:9px">{% for sk_pns in form_sk_pns %}</span></p>

			<p style="text-align:center"><span style="font-size:9px">{% if sk_pns.berkas_sk_pns %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for sk_pns in form_sk_pns %}</span></p>

			<p><span style="font-size:8px">{% if sk_pns.berkas_sk_pns %}<a href="http://dosir.reinovasi.com/uploads/form_sk_pns/{{sk_pns.berkas_sk_pns}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:9px"><span style="font-family:Calibri-Bold"><span style="color:#000000"><strong>SK Calon Pegawai Negeri Sipil</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for sk_cpns in form_sk_cpns %}</span></em></p>

			<p><em><span style="font-size:9px">{{ sk_cpns.deskripsi_sk_cpns }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for sk_cpns in form_sk_cpns %}</span></p>

			<p><span style="font-size:9px">{% if sk_cpns.berkas_sk_cpns %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for sk_cpns in form_sk_cpns %}</span></p>

			<p><span style="font-size:8px">{% if sk_cpns.berkas_sk_cpns %}<a href="http://dosir.reinovasi.com/uploads/form_sk_cpns/{{sk_cpns.berkas_sk_cpns}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:10px"><span style="font-family:Calibri-Bold"><span style="color:#000000"><strong>SK Pensiun</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for pensiun in form_pensiun %}</span></em></p>

			<p><em><span style="font-size:9px">{{ pensiun.tanggal_sk_pensiun }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for pensiun in form_pensiun %}</span></p>

			<p><span style="font-size:9px">{% if pensiun.berkas_sk_pensiun %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for pensiun in form_pensiun %}</span></p>

			<p><span style="font-size:8px">{% if pensiun.berkas_sk_pensiun %}<a href="http://dosir.reinovasi.com/uploads/form_pensiun/{{pensiun.berkas_sk_pensiun}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:10px"><span style="font-family:Calibri-Bold"><span style="color:#000000"><strong>SK Pemberhentian</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for sk_pemberhentian in form_sk_pemberhentian %}</span></em></p>

			<p><em><span style="font-size:9px">{{ sk_pemberhentian.deskripsi_sk_pemberhentian }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for sk_pemberhentian in form_sk_pemberhentian %}</span></p>

			<p><span style="font-size:9px">{% if sk_pemberhentian.berkas_sk_pemberhentian %}&nbsp;tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for sk_pemberhentian in form_sk_pemberhentian %}</span></p>

			<p><span style="font-size:8px">{% if sk_pemberhentian.berkas_sk_pemberhentian %}<a href="http://dosir.reinovasi.com/uploads/form_sk_pemberhentian/{{sk_pemberhentian.berkas_sk_pemberhentian}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a><br />
			{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:9px"><span style="font-family:Calibri-Bold"><span style="color:#000000"><strong>SK Alih Status Kepegawaian</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for sk_alih_status_kepegawaian in form_sk_alih_status_kepegawaian %}<br />
			{{ sk_alih_status_kepegawaian.deskripsi_sk_alih_status_kepegawaian }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for sk_alih_status_kepegawaian in form_sk_alih_status_kepegawaian %}</span></p>

			<p><span style="font-size:9px">{% if sk_alih_status_kepegawaian.berkas_sk_alih_status_kepegawaian %}<br />
			tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for sk_alih_status_kepegawaian in form_sk_alih_status_kepegawaian %}</span></p>

			<p><span style="font-size:8px">{% if sk_alih_status_kepegawaian.berkas_sk_alih_status_kepegawaian %}<a href="http://dosir.reinovasi.com/uploads/form_sk_alih_status_kepegawaian/{{sk_alih_status_kepegawaian.berkas_sk_alih_status_kepegawaian}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:10px"><span style="font-family:Calibri-Bold"><span style="color:#000000"><strong>Peninjauan Masa Kerja</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for sk_peninjauan_masa_kerja in form_peninjauan_masa_kerja %}</span></em></p>

			<p><em><span style="font-size:9px">{{ sk_peninjauan_masa_kerja.deskripsi_surat_pmk }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for sk_peninjauan_masa_kerja in form_peninjauan_masa_kerja %}</span></p>

			<p><span style="font-size:9px">{% if sk_peninjauan_masa_kerja.berkas_surat_pmk %}<br />
			tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for sk_peninjauan_masa_kerja in form_peninjauan_masa_kerja %}</span></p>

			<p><span style="font-size:8px">{% if sk_peninjauan_masa_kerja.berkas_surat_pmk %}<br />
			<a href="http://dosir.reinovasi.com/uploads/form_peninjauan_masa_kerja/{{sk_peninjauan_masa_kerja.berkas_surat_pmk}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:10px"><span style="color:#000000; font-family:Calibri-Bold"><strong>Lain-Lain Kepegawaian</strong></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:9px">{% for status_kepegawaian in form_status_kepegawaian_lain %}</span></p>

			<p><span style="font-size:9px">{ status_kepegawaian_lain.deskripsi_arsip }}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for sk_status_kepegawaian_lain in form_status_kepegawaian_lain %}</span></p>

			<p><span style="font-size:9px">{% if sk_status_kepegawaian_lain.berkas_status_kepegawaian_lain %}<br />
			tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for sk_status_kepegawaian_lain in form_status_kepegawaian_lain %}</span></p>

			<p><span style="font-size:8px">{% if sk_status_kepegawaian_lain.berkas_status_kepegawaian_lain %}<a href="http://dosir.reinovasi.com/uploads/form_status_kepegawaian_lain/{{sk_status_kepegawaian_lain.berkas_status_kepegawaian_lain}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:11px"><strong>2</strong></span></td>
			<td colspan="2" rowspan="1"><span style="color:#000000"><span style="font-family:Calibri-Bold"><span style="font-size:11px"><strong>Jabatan</strong></span></span></span></td>
			<td rowspan="1">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:10px"><span style="color:#000000; font-family:Calibri-Bold"><strong>SK Jabatan</strong></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center"><span style="color:#000000; font-family:Calibri-Bold"><span style="font-size:11px"><strong>SPP</strong></span></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center"><span style="color:#000000; font-family:Calibri-Bold"><span style="font-size:11px"><strong>S</strong></span><span style="font-size:11px"><strong>PMT</strong></span></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center"><span style="color:#000000; font-family:Calibri-Bold"><span style="font-size:11px"><strong>B</strong></span><span style="font-size:11px"><strong>A</strong></span></span></td>
			<td style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for sk_jabatan in form_sk_jabatan %}</span></em></p>

			<p><em><span style="font-size:9px">{{ sk_jabatan.nama_jabatan_baru }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p><span style="font-size:9px">{% if sk_jabatan.berkas_sk_jabatan %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p><span style="font-size:8px">{% if sk_jabatan.berkas_sk_jabatan %}<a href="http://dosir.reinovasi.com/uploads/form_sk_jabatan/{{sk_jabatan.berkas_sk_jabatan}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p><span style="font-size:9px">{% if sk_jabatan.berkas_spp %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:9px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p><span style="font-size:9px">{% if sk_jabatan.berkas_spp %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_sk_jabatan/{{sk_jabatan.berkas_spp}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p><span style="font-size:9px">{% if sk_jabatan.berkas_spmt %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p><span style="font-size:9px">{% if sk_jabatan.berkas_spmt %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_sk_jabatan/{{sk_jabatan.berkas_spmt}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for sk_jabatan in form_sk_jabatan %}</span></p>

			<p><span style="font-size:9px">{% if sk_jabatan.berkas_berita_acara %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center"><span style="font-size:9px">{% for sk_jabatan in form_sk_jabatan %} {% if sk_jabatan.berkas_berita_acara %} <a href="http://dosir.reinovasi.com/uploads/form_sk_jabatan/{{sk_jabatan.berkas_spmt}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:10px"><span style="color:#000000"><span style="font-family:Calibri-Bold"><strong>SPMJ</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for sk_spmj in form_spmj %}</span></em></p>

			<p><em><span style="font-size:9px">{{ sk_spmj.tanggal_spmj }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for sk_spmj in form_spmj %}</span></p>

			<p><span style="font-size:9px">{% if sk_spmj.berkas_spmj %}<br />
			tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for sk_spmj in form_spmj %}</span></p>

			<p><span style="font-size:8px">{% if sk_spmj.berkas_spmj %}<br />
			<a href="http://dosir.reinovasi.com/uploads/form_spmj/{{sk_spmj.berkas_spmj}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:10px"><span style="color:#000000; font-family:Calibri-Bold"><strong>Pemberhentian Jabatan</strong></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for sk_pemberhentian_jabatan in form_pemberhentian_jabatan %}</span></em></p>

			<p><em><span style="font-size:9px">{{ sk_pemberhentian_jabatan.deskripsi_sk_pemberhentian_jabatan }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for sk_pemberhentian_jabatan in form_pemberhentian_jabatan %}</span></p>

			<p><span style="font-size:9px">{% if sk_pemberhentian_jabatan.berkas_sk_pemberhentian_jabatan %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for sk_pemberhentian_jabatan in form_pemberhentian_jabatan %}</span></p>

			<p><span style="font-size:8px">{% if sk_pemberhentian_jabatan.berkas_sk_pemberhentian_jabatan %}<a href="http://dosir.reinovasi.com/uploads/form_pemberhentian_jabatan/{{sk_pemberhentian_jabatan.berkas_sk_pemberhentian_jabatan}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:10px"><span style="color:#000000"><span style="font-family:Calibri-Bold"><strong>PLT</strong></span></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for plt in form_plt %}</span></em></p>

			<p><em><span style="font-size:9px">{{ plt.deskripsi_sk_plt }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for plt in form_plt %}</span></p>

			<p><span style="font-size:9px">{% if plt.berkas_sk_plt %}&nbsp;<br />
			tersedia{%endif%}{% endfor %} </span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for plt in form_plt %}</span></p>

			<p><span style="font-size:8px">{% if plt.berkas_sk_plt %}&nbsp;<br />
			<a href="http://dosir.reinovasi.com/uploads/form_plt/{{plt.berkas_sk_plt}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:10px"><span style="color:#000000; font-family:Calibri-Bold"><strong>PLH</strong></span></span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for plh in form_plh %}</span></em></p>

			<p><em><span style="font-size:9px">{{ plh.deskripsi_sk_plh }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for plh in form_plh %}</span></p>

			<p><span style="font-size:9px">{% if plh.berkas_sk_plh %}<br />
			tersedia{%endif%}{% endfor %} </span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for plh in form_plh %}</span></p>

			<p><span style="font-size:8px">{% if plh.berkas_sk_plh %}<br />
			<a href="http://dosir.reinovasi.com/uploads/form_plh/{{plh.berkas_sk_plh}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:11px"><strong><span style="color:#000000"><span style="font-family:Calibri-Bold">3</span></span></strong></span></td>
			<td colspan="2" rowspan="1"><span style="color:#000000; font-family:Calibri-Bold"><span style="font-size:11px"><strong>Pangkat</strong></span></span></td>
			<td rowspan="1">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for pangkat in form_pangkat %}</span></em></p>

			<p><em><span style="font-size:9px">{{ pangkat.jenis_kenaikan_pangkat }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for pangkat in form_pangkat %}</span></p>

			<p><span style="font-size:9px">{% if pangkat.berkas_sk_pangkat %}tersedia {%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for pangkat in form_pangkat %}</span></p>

			<p><span style="font-size:8px">{% if pangkat.berkas_sk_pangkat %}<a href="http://dosir.reinovasi.com/uploads/form_pangkat/{{pangkat.berkas_sk_pangkat}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:11px"><strong><span style="color:#000000; font-family:Calibri-Bold">4</span></strong></span></td>
			<td colspan="2" rowspan="1"><span style="color:#000000"><span style="font-family:Calibri-Bold"><span style="font-size:11px"><strong>Penilaian Kinerja</strong></span></span></span></td>
			<td rowspan="1">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for penilaian_kinerja_pns in form_penilaian_kinerja_pns %}</span></em></p>

			<p><em><span style="font-size:9px">{{ penilaian_kinerja_pns.periode_tanggal_akhir_penilaian_kinerja }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for penilaian_kinerja_pns in form_penilaian_kinerja_pns %}</span></p>

			<p><span style="font-size:9px">{% if penilaian_kinerja_pns.berkas_penilaian_kinerja_pns %}<br />
			tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for penilaian_kinerja_pns in form_penilaian_kinerja_pns %}</span></p>

			<p><span style="font-size:8px">{% if penilaian_kinerja_pns.berkas_penilaian_kinerja_pns %}<br />
			<a href="http://dosir.reinovasi.com/uploads/form_penilaian_kinerja_pns/{{penilaian_kinerja_pns.berkas_penilaian_kinerja_pns}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:11px"><strong><span style="color:#000000; font-family:Calibri-Bold">5</span></strong></span></td>
			<td colspan="2" rowspan="1"><span style="color:#000000; font-family:Calibri-Bold"><span style="font-size:11px"><strong>KP4</strong></span></span></td>
			<td rowspan="1">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:9px">{% for kp4 in form_kp4 %}</span></p>

			<p><span style="font-size:9px">{{ kp4.deskripsi_kp4 }}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p>&nbsp;</p>
			</td>
			<td>
			<p><span style="font-size:9px">{% for kp4 in form_kp4 %}</span></p>

			<p><span style="font-size:9px">{% if kp4.berkas_kp4 %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:9px">{% for kp4 in form_kp4 %}</span></p>

			<p><span style="font-size:9px">{% if kp4.berkas_kp4 %}{%endif%}<a href="http://dosir.reinovasi.com/uploads/form_tugas_belajar/{{tugas_belajar.berkas_surat_tugas_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:11px"><strong><span style="color:#000000"><span style="font-family:Calibri-Bold">6</span></span></strong></span></td>
			<td colspan="2" rowspan="1"><span style="color:#000000; font-family:Calibri-Bold"><span style="font-size:11px"><strong>Pendidikan dan Pelatihan</strong></span></span></td>
			<td rowspan="1">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:10px"><span style="color:#000000; font-family:Calibri-Bold"><strong>Tugas Belajar</strong></span></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center"><span style="font-size:9px"><span style="color:#000000; font-family:Calibri-Bold">Surat Tugas Belajar</span></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center"><span style="font-size:8px"><span style="color:#000000; font-family:Calibri-Bold">Laporan Selesai Pendidikan</span></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for tugas_belajar in form_tugas_belajar %}</span></em></p>

			<p><em><span style="font-size:9px">{{ tugas_belajar.tingkat_pendidikan }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for tugas_belajar in form_tugas_belajar %}</span></p>

			<p><span style="font-size:9px">{% if tugas_belajar.berkas_surat_tugas_belajar %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for tugas_belajar in form_tugas_belajar %}</span></p>

			<p><span style="font-size:8px">{% if tugas_belajar.berkas_surat_tugas_belajar %}<a href="http://dosir.reinovasi.com/uploads/form_tugas_belajar/{{tugas_belajar.berkas_surat_tugas_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for tugas_belajar in form_tugas_belajar %}</span></p>

			<p><span style="font-size:9px">{% if tugas_belajar.berkas_laporan_selesai_pendidikan %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:9px">{% for tugas_belajar in form_tugas_belajar %}</span></p>

			<p><span style="font-size:9px">{% if tugas_belajar.berkas_laporan_selesai_pendidikan %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_tugas_belajar/{{tugas_belajar.berkas_laporan_selesai_pendidikan}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="color:#000000; font-family:Calibri-Bold"><span style="font-size:11px"><strong>Ijin Belajar</strong></span></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center"><span style="color:#000000; font-family:Calibri-Bold"><span style="font-size:11px">Surat Ijin Belajar</span></span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center"><span style="font-size:9px"><span style="color:#000000; font-family:Calibri-Bold">Sertifikat UPKP</span></span></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><em><span style="font-size:9px">{% for ijin_belajar in form_ijin_belajar %}</span></em></p>

			<p><em><span style="font-size:9px">{{ ijin_belajar.tingkat_pendidikan }}{% endfor %}</span></em></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for ijin_belajar in form_ijin_belajar %}</span></p>

			<p><span style="font-size:9px">{% if ijin_belajar.berkas_surat_ijin_belajar %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p style="text-align:left"><span style="font-size:8px">{% for ijin_belajar in form_ijin_belajar %}</span></p>

			<p style="text-align:left"><span style="font-size:8px">{% if ijin_belajar.berkas_surat_ijin_belajar %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for ijin_belajar in form_ijin_belajar %}</span></p>

			<p><span style="font-size:9px">{% if ijin_belajar.berkas_sertifikat_upkp %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td>
			<p><span style="font-size:8px">{% for ijin_belajar in form_ijin_belajar %}</span></p>

			<p><span style="font-size:8px">{% if ijin_belajar.berkas_sertifikat_upkp %}{%endif%}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_sertifikat_upkp}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{% endfor %}</span></p>
			</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:10px"><strong>Riwayat pendidikan</strong></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center"><span style="font-size:9px">Ijazah</span></td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center"><span style="font-size:8px">Penyetaraan DIKTI</span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:9px">{% for riwayat_pendidikan in form_riwayat_pendidikan %}</span></p>

			<p><span style="font-size:9px">{{ riwayat_pendidikan.tingkat_pendidikan }}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for riwayat_pendidikan in form_riwayat_pendidikan %}</span></p>

			<p><span style="font-size:9px">{% if riwayat_pendidikan.berkas_ijazah %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p style="text-align:left"><span style="font-size:9px">{% for riwayat_pendidikan in form_riwayat_pendidikan %}</span></p>

			<p style="text-align:left"><span style="font-size:9px">{% if riwayat_pendidikan.berkas_ijazah %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for riwayat_pendidikan in form_riwayat_pendidikan %}</span></p>

			<p><span style="font-size:9px">{% if riwayat_pendidikan.berkas_riwayat_dkti %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p style="text-align:left"><span style="font-size:9px">{% for riwayat_pendidikan in form_riwayat_pendidikan %}</span></p>

			<p style="text-align:left"><span style="font-size:9px">{% if riwayat_pendidikan.berkas_riwayat_dkti %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:10px"><strong>Ujian Dinas</strong></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:9px">{% for ujian_dinas in form_ujian_dinas %}</span></p>

			<p><span style="font-size:9px">{{ ujian_dinas.deskripsi_ujian_dinas }}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for ujian_dinas in form_ujian_dinas %}</span></p>

			<p><span style="font-size:9px">{% if ujian_dinas.berkas_ujian_dinas %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for ujian_dinas in form_ujian_dinas %}</span></p>

			<p><span style="font-size:9px">{% if ujian_dinas.berkas_ujian_dinas %}<a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a>{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:10px"><strong>Pelatihan</strong></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:9px">{% for pelatihan in form_pelatihan %}</span></p>

			<p><span style="font-size:9px">{{ pelatihan.tanggal_sertifikat_pelatihan }}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for pelatihan in form_pelatihan %}</span></p>

			<p><span style="font-size:9px">{% if pelatihan.berkas_pelatihan %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for pelatihan in form_pelatihan %}</span></p>

			<p><span style="font-size:9px">{% if pelatihan.berkas_pelatihan %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:10px"><strong>7</strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:10px"><strong>Disiplin</strong></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>
			<p><span style="font-size:9px">{% for disiplin in form_disiplin %}</span></p>

			<p><span style="font-size:9px">{{ disiplin.tanggal_surat_disiplin }}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for disiplin in form_disiplin %}</span></p>

			<p><span style="font-size:9px">{% if disiplin.berkas_surat_disiplin %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for disiplin in form_disiplin %}</span></p>

			<p><span style="font-size:9px">{% if disiplin.berkas_surat_disiplin %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><strong><span style="font-size:10px">8</span></strong></td>
			<td colspan="2" rowspan="1"><span style="font-size:10px"><strong>Satyalencana</strong></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:9px">{% for penghargaan in form_penghargaan %}</span></p>

			<p><span style="font-size:9px">{{ penghargaan.jenis_penghargaan_satya_lencana }}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for penghargaan in form_penghargaan %}</span></p>

			<p><span style="font-size:9px">{% if penghargaan.berkas_sk_penghargaan %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for penghargaan in form_penghargaan %}</span></p>

			<p><span style="font-size:9px">{% if penghargaan.berkas_sk_penghargaan %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:10px"><strong>9</strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:10px"><strong>Penghargaan lainnya</strong></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td><span style="font-size:9px">{% for penghargaan_lainnya in form_penghargaan_lainya %}{{ penghargaan_lainnya.deskripsi_sk_penghargaan_lainnya }}{% endfor %}</span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for penghargaan_lainnya in form_penghargaan_lainya %}</span></p>

			<p><span style="font-size:9px">{% if penghargaan_lainnya.berkas_sk_penghargaan_lainnya %}tersedia{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for penghargaan_lainnya in form_penghargaan_lainya %}</span></p>

			<p><span style="font-size:9px">{% if penghargaan_lainnya.berkas_sk_penghargaan_lainnya %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><strong><span style="font-size:10px">10</span></strong></td>
			<td colspan="2" rowspan="1"><span style="font-size:10px"><strong>Asessment</strong></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<p><span style="font-size:9px">{% for assesment_lain in form_assesment %}</span></p>

			<p><span style="font-size:9px">{{assesment_lain._tanggal_assesment }}{% endfor %}</span></p>
			</td>
			<td>&nbsp;</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for assesment_lain in form_assesment %}</span></p>

			<p><span style="font-size:9px">{% if assesment_lain.berkas_assesment %}tersedia</span><span style="font-size:9px">{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">
			<p><span style="font-size:9px">{% for assesment_lain in form_assesment %}</span></p>

			<p><span style="font-size:9px">{% if assesment_lain.berkas_assesment %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}{% endfor %}</span></p>
			</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><strong><span style="font-size:10px">11</span></strong></td>
			<td colspan="2" rowspan="1"><span style="font-size:10px"><strong>Lainnya</strong></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td><strong><span style="font-size:9px">NPWP</span></strong></td>
			<td>&nbsp;</td>
			<td><span style="font-size:9px">{{ form_lainnya.no_npwp }}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.berkas_npwp %}tersedia{%endif%}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.berkas_npwp %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}</span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><strong><span style="font-size:9px">NIK</span></strong></td>
			<td>&nbsp;</td>
			<td><span style="font-size:9px">{{ form_lainnya.nik }}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.nik %}tersedia{%endif%}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.nik %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}</span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><strong><span style="font-size:9px">Taspen</span></strong></td>
			<td>&nbsp;</td>
			<td><span style="font-size:9px">{{ form_lainnya.no_taspen }}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.no_taspen %}tersedia{%endif%}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.no_taspen %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}</span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><strong><span style="font-size:9px">BPJS Kesehatan</span></strong></td>
			<td>&nbsp;</td>
			<td><span style="font-size:9px">{{ form_lainnya.no_bpjs_kesehatan }}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.no_bpjs_kesehatan %}tersedia{%endif%}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.no_bpjs_kesehatan %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}</span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><strong><span style="font-size:9px">Kartu Pegawai</span></strong></td>
			<td>&nbsp;</td>
			<td><span style="font-size:9px">{{ form_lainnya.no_kartu_pegawai }}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.no_kartu_pegawai %}tersedia{%endif%}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.no_kartu_pegawai %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}</span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><strong><span style="font-size:9px">ID Card</span></strong></td>
			<td>&nbsp;</td>
			<td><span style="font-size:9px">{{ form_lainnya.no_idcard }}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.no_idcard %}tersedia{%endif%}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.no_idcard %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}</span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><strong><span style="font-size:9px">Kartu Keluarga</span></strong></td>
			<td>&nbsp;</td>
			<td><span style="font-size:9px">{{ form_lainnya.no_kartu_keluarga }}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.no_kartu_keluarga %}tersedia{%endif%}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.no_kartu_keluarga %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}</span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><strong><span style="font-size:9px">Akta Nikah</span></strong></td>
			<td>&nbsp;</td>
			<td><span style="font-size:9px">{{ form_lainnya.nomor_akta_nikah }}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.nomor_akta_nikah %}tersedia{%endif%}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.nomor_akta_nikah %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}</span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><strong><span style="font-size:9px">Akta Anak</span></strong></td>
			<td>&nbsp;</td>
			<td><span style="font-size:9px">{{ form_lainnya.no_akta_anak }}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.no_akta_anak %}tersedia{%endif%}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% if form_lainnya.no_akta_anak %}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{%endif%}</span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:10px"><strong>12</strong></span></td>
			<td colspan="2" rowspan="1"><span style="font-size:10px"><strong>Arsip Lainnya</strong></span></td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td><span style="font-size:9px">{% for arsip_lainnya in form_arsip_lainnya %}<br />
			{{ arsip_lainnya.deskripsi_arsip }}{% endfor %}</span></td>
			<td>&nbsp;</td>
			<td style="text-align:center"><span style="font-size:9px">{% for arsip_lainnya in form_arsip_lainnya %}<br />
			{% if arsip_lainnya.nama_berkas %}<br />
			tersedia{%endif%}{% endfor %}</span></td>
			<td style="text-align:center"><span style="font-size:9px">{% for arsip_lainnya in form_arsip_lainnya %}<br />
			{% if arsip_lainnya.nama_berkas %}<br />
			{%endif%}</span><span style="font-size:8px"><a href="http://dosir.reinovasi.com/uploads/form_ijin_belajar/{{ijin_belajar.berkas_surat_ijin_belajar}}"><span style="color:#e74c3c"><img src="https://i.ibb.co/rMsTB7P/index.png" style="height:15px; width:15px" /></span></a></span><span style="font-size:9px">{% endfor %}</span></td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan="2" rowspan="1">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>
</div>
