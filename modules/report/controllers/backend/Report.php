<?php

use Symfony\Component\VarDumper\VarDumper;

defined('BASEPATH') or exit('No direct script access allowed');

/**
 *| --------------------------------------------------------------------------
 *| Report Controller
 *| --------------------------------------------------------------------------
 *| Report site
 *|
 */
class Report extends Admin
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_report');
	}

	/**
	 * show all Reports
	 *
	 * @var $offset String
	 */
	public function index($offset = 0)
	{
		$this->is_allowed('report_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['reports'] = $this->model_report->get($filter, $field, $this->limit_page, $offset);
		$this->data['report_counts'] = $this->model_report->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/report/index/',
			'total_rows'   => $this->model_report->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Report List');
		$this->render('backend/standart/administrator/report/report_list', $this->data);
	}


	/**
	 * Add new reports
	 *
	 */
	public function add()
	{
		$this->is_allowed('report_add');

		$this->template->title('Report New');
		$this->data['tables'] = $this->db->list_tables();
		$this->render('backend/standart/administrator/report/report_add', $this->data);
	}

	/**
	 * Add New Reports
	 *
	 * @return JSON
	 */
	public function add_save()
	{
		if (!$this->is_allowed('report_add', false)) {
			return $this->response([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
			]);
		}

		$content = $this->input->post('content');
		$fresh_content = $this->input->post('plate');

		$this->form_validation->set_rules('title', 'Title', 'trim|required|alpha_numeric_spaces|is_unique[report.title]');
		// $this->form_validation->set_rules('report_image_name', 'Image', 'trim');
		// $this->form_validation->set_rules('content', 'Content', 'trim|required');

		if ($this->form_validation->run()) {

			$content = $this->cc_page_element->parseHtml($content);
			$date = new Datetime;

			$save_data = [
				'title' => $this->input->post('title'),
				'type' => '',
				'link' => '',
				'content' => $content,
				'fresh_content' => $fresh_content,
				'keyword' => '',
				'description' => $this->input->post('description'),
				'table_name' => $this->input->post('table_name'),
				'template' => $this->input->post('template'),
				'created_at' => $date->format('Y-m-d H:i:s')
			];

			$save_report = $this->model_report->store($save_data);

			if ($save_report) {

				$this->_save_relation($save_report);
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_report;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/report/edit/' . $save_report, 'Edit Report'),
						anchor('administrator/report', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
							anchor('administrator/report/edit/' . $save_report, 'Edit Report')
						]),
						'success'
					);

					$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/report');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
					set_message(cclang('data_not_change'), 'error');

					$this->data['success'] = false;
					$this->data['redirect'] = base_url('administrator/report');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		return $this->response($this->data);
	}

	/**
	 * Update view Reports
	 *
	 * @var $id String
	 */
	public function edit($id)
	{
		$this->is_allowed('report_update');

		$report = $this->model_report->find($id);

		$report->fresh_content = str_replace('{base_url}', BASE_URL, $report->fresh_content);

		$this->data['report'] = $report;
		$this->data['tables'] = $this->db->list_tables();
		$this->data['relations'] = $this->db->get_where('report_relation', ['report_id' => $id])->result();

		$this->template->title('Report Update');
		$this->render('backend/standart/administrator/report/report_update', $this->data);
	}



	/**
	 * Update Reports
	 *
	 * @var $id String
	 */
	public function edit_save($id)
	{
		if (!$this->is_allowed('report_update', false)) {
			return $this->response([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
			]);
		}

		$content = $this->input->post('content');
		$fresh_content = $this->input->post('plate');

		$this->form_validation->set_rules('title', 'Title', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('content', 'Content', 'trim|required');

		if ($this->form_validation->run()) {

			$content = $this->cc_page_element->parseHtml($content);
			$date = new Datetime;

			$save_data = [
				'title' => $this->input->post('title'),
				'type' => $this->input->post('type'),
				'link' => $this->input->post('link'),
				'content' => $content,
				'fresh_content' => $fresh_content,
				'keyword' => $this->input->post('keyword'),
				'table_name' => $this->input->post('table_name'),
				'description' => $this->input->post('description'),
				'template' => $this->input->post('template'),
				'created_at' => $date->format('Y-m-d H:i:s')
			];

			$save_report = $this->model_report->change($id, $save_data);

			$this->_save_relation($id);


			if ($this->input->post('save_type') == 'stay') {
				$this->data['success'] = true;
				$this->data['id'] 	   = $id;
				$this->data['message'] =
					cclang('success_update_data_stay', [
						anchor('administrator/report', ' Go back to list')
					]);
			} else {
				set_message(
					cclang('success_update_data_redirect', []),
					'success'
				);

				$this->data['success'] = true;
				$this->data['redirect'] = base_url('administrator/report');
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		return $this->response($this->data);
	}

	public function _save_relation($id)
	{
		$save_data_relation = [];


		foreach ((array)$this->input->post('relation') as $relation) {

			if (
				$relation['relation_type'] != '' and
				$relation['field'] != '' and
				$relation['relation_table'] != '' and
				$relation['relation_field'] != ''
			) {
				$save_data_relation[] = [
					'relation_type' => $relation['relation_type'],
					'field' => $relation['field'],
					'relation_table' => $relation['relation_table'],
					'relation_field_reference' => $relation['relation_field'],
					'report_id' => $id,
				];
			}
		}


		$this->db->delete('report_relation', ['report_id' => $id]);
		if (count($save_data_relation)) {
			$this->db->insert_batch('report_relation', $save_data_relation);
		}
		$this->generate_template($id);
	}


	public function generate_template($report_id)
	{
		$this->load->helper('file');
		$report = $this->model_report->find($report_id);

		$module_folder = 'report';

		$template_path = 'template/';


		$view_path = FCPATH . '/modules/' . $module_folder . '/views/report/';


		$primary_key = '';
		foreach ($this->db->field_data($report->table_name) as $row) {
			if ($row->primary_key) {
				$primary_key = $row->name;
				break;
			}
		}

		$this->data = [
			'report' => (array)$report,
			'php_open_tag' 				=> '<?php',
			'php_close_tag' 			=> '?>',
			'php_open_tag_echo' 		=> '<?=',
			'table_name'				=> $report->table_name,
			'report_id'					=> $report_id,
			'primary_key'				=> $primary_key,
			'relations' 				=> $this->db->get_where('report_relation', ['report_id' => $report_id])->result()
		];
		$mode = $this->input->post('mode');




		$builder_list = $this->parser->parse($template_path . 'pdf_template', $this->data, true);
		$view_main = $view_path . $report->table_name . '_' . $report_id . '.php';
		@unlink($view_main);
		$write = write_file($view_main, $builder_list);
		if ($mode == 'advance') {
			$write = write_file($view_main, $this->input->post('report_controller'));
		}

		if (!$write) {
			$this->response(['success' => false, 'message' => 'Error write files']);
		}

		$builder_list = $this->parser->parse($template_path . 'pdf_content_template', $this->data, true);
		$view_content = $view_path . $report->table_name . '_content_' . $report_id . '.php';
		@unlink($view_content);

		$write = write_file($view_content, $builder_list);

		if ($mode == 'advance') {
			$write = write_file($view_content, $this->input->post('report_view'));
		}

		if (!$write) {
			$this->response(['success' => false, 'message' => 'Error write files']);
		}
	}

	/**
	 * delete Reports
	 *
	 * @var $id String
	 */
	public function delete($id = null)
	{
		$this->is_allowed('report_delete');

		$this->load->helper('file');

		$arr_id = $this->input->get('id');
		$remove = false;

		if (!empty($id)) {
			$remove = $this->_remove($id);
		} elseif (count($arr_id) > 0) {
			foreach ($arr_id as $id) {
				$remove = $this->_remove($id);
			}
		}

		if ($remove) {
			set_message(cclang('has_been_deleted', 'Report'), 'success');
		} else {
			set_message(cclang('error_delete', 'Report'), 'error');
		}

		redirect('administrator/report');
	}

	/**
	 * View view Reports
	 *
	 * @var $id String
	 */
	public function view($id)
	{
		$this->is_allowed('report_view');

		$this->data['report'] = $this->model_report->find($id);

		$this->template->title('Report Detail');
		$this->render('backend/standart/administrator/report/report_view', $this->data);
	}

	/**
	 * Detail detail Reports
	 *
	 * @var $id String
	 */
	public function detail($slug = null)
	{
		$this->is_allowed('report_detail');

		$report = $this->model_report->get_report_by_slug($slug, 'backend');

		if (!$report) {
			show_404();
		}

		$content = $report->content;

		$this->register_unparse_html($report);

		$content = $this->cc_page_element->unParseHtml($content);

		$this->data['content'] = $content;
		$this->data['report'] = $report;

		if ($report->template == 'blank') {
			echo $content;
		} else {
			$this->template->title($report->title);
			$this->render('backend/standart/administrator/report/report_detail', $this->data);
		}
	}

	/**
	 * delete Reports
	 *
	 * @var $id String
	 */
	private function _remove($id)
	{
		$report = $this->model_report->find($id);

		if (!empty($report->image)) {
			$path = FCPATH . '/uploads/report/' . $report->image;

			if (is_file($path)) {
				$delete_file = unlink($path);
			}
		}


		return $this->model_report->remove($id);
	}

	/**
	 * Upload Image Report
	 * @return JSON
	 */
	public function upload_image_file()
	{
		if (!$this->is_allowed('report_add', false)) {
			return $this->response([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
			]);
		}

		$uuid = $this->input->post('qquuid');

		$response = json_decode($this->upload_file([
			'uuid' 		 	=> $uuid,
			'table_name' 	=> 'report',
			'allowed_types' => 'jpg|png|jpeg|gif|svg',
			'max_size' 	 	=> 2000,
		]));

		if ($response->success) {

			if (!is_dir(FCPATH . '/uploads/report/')) {
				mkdir(FCPATH . '/uploads/report/');
			}
			$image_name = $response->uploadName;

			if (!empty($image_name)) {
				$image_name_copy = date('YmdHis') . '-' . $image_name;

				rename(
					$response->previewLink,
					FCPATH . 'uploads/report/' . $image_name_copy
				);

				if (!is_file(FCPATH . '/uploads/report/' . $image_name_copy)) {
					return $this->response([
						'success' => false,
						'message' => 'Error uploading file'
					]);
					exit;
				}

				$response->thumbnailUrl = base_url('uploads/report/' . $image_name_copy);

				return $this->response($response);
			}
		} else {
			return $this->response($response);
		}
	}

	/**
	 * Delete Image Report	* 
	 * @return JSON
	 */
	public function delete_image_file($uuid)
	{
		if (!$this->is_allowed('report_delete', false)) {
			return $this->response([
				'success' => false,
				'error' => cclang('sorry_you_do_not_have_permission_to_access')
			]);
			exit;
		}

		echo $this->delete_file([
			'uuid'              => $uuid,
			'delete_by'         => $this->input->get('by'),
			'field_name'        => 'image',
			'upload_path_tmp'   => './uploads/tmp/',
			'table_name'        => 'report',
			'primary_key'       => 'id',
			'upload_path'       => 'uploads/report/'
		]);
	}

	/**
	 * Get Image Report	* 
	 * @return JSON
	 */
	public function get_image_file($id)
	{
		if (!$this->is_allowed('report_update', false)) {
			return $this->response([
				'success' => false,
				'message' => 'Image not loaded, you do not have permission to access'
			]);
			exit;
		}

		$report = $this->model_report->find($id);

		echo $this->get_file([
			'uuid'              => $id,
			'delete_by'         => 'id',
			'field_name'        => 'image',
			'table_name'        => 'report',
			'primary_key'       => 'id',
			'upload_path'       => 'uploads/report/',
			'delete_endpoint'   => 'administrator/report/delete_image_file'
		]);
	}

	/**
	 * Export to excel
	 *
	 * @return Files Excel .xls
	 */
	public function export()
	{
		$this->is_allowed('report_export');

		$this->model_report->export('report', 'report');
	}


	public function preview($report_id, $id)
	{
		$this->is_allowed('report_export');

		$this->template->title('Report Detail');

		$report = $this->model_report->find($report_id);


		$loader = new \Twig\Loader\FilesystemLoader(FCPATH . '/modules/report/views/report');
		$twig = new \Twig\Environment($loader, []);

		$content = $this->load->view('report/report/' . $report->table_name . '_' . $report->id, [
			'id' => $id,
			'twig' => $twig
		], TRUE);


		$this->data['content'] = $content;


		$this->template->title('Report Detail');
		$this->render('backend/standart/administrator/report/report_view', $this->data);
	}

	public function pdf_export($report_id, $id)
	{
		$this->is_allowed('report_export');

		$report = $this->model_report->find($report_id);


		$loader = new \Twig\Loader\FilesystemLoader(FCPATH . '/modules/report/views/report');
		$twig = new \Twig\Environment($loader, []);

		$content = $this->load->view('report/report/' . $report->table_name . '_' . $report->id, [
			'id' => $id,
			'twig' => $twig
		], TRUE);


		$download = $this->input->get('download');


		if ($this->input->get('dev')) {
			die($content);
		}

		$vars['n_fields'] = $this->db->query('SHOW COLUMNS FROM ' . $report->table_name)->result();

		$name_fields = [];

		$report_name = 'report-' . url_title($report->table_name) . '.pdf';

		foreach ($vars['n_fields'] as $idx => $val) {
			$name_fields[] = $val->Field;
		}

		$data = $this->db->get_where($report->table_name, ['id' => $id])->row();

		if ($data) {
			if ($name = @$data->{$name_fields[1]}) {
				$report_name = $name . '.pdf';
			}
		}

		$mpdf = new \Mpdf\Mpdf([
			'format' => 'Legal',
			'mode' => 'utf-8',
			'format' => [190, 236],
		]);

		$mpdf->setTitle($report_name);
		$mpdf->WriteHTML($content);
		$mpdf->Output($report_name, 'i');
	}

	public function live_preview()
	{
		$this->is_allowed('report_export');

		$this->load->helper('file');

		$loader = new \Twig\Loader\FilesystemLoader(FCPATH . '/modules/report/views/report/tmp');
		$twig = new \Twig\Environment($loader, []);

		$type = $this->input->post('type');

		if ($type == 'view') {
			$type = '_content';
		} else {
			$type = '';
		}


		$report_id = $this->input->post('report_id');
		$report = $this->model_report->find($report_id);


		$view_path = FCPATH . '/modules/report/views/report/tmp/';

		@mkdir($view_path);


		$builder_list = $this->input->post('report_controller');
		$view_main = $view_path . $report->table_name . '_' . $report_id . '.php';
		$write = write_file($view_main, $builder_list);

		$builder_list = $this->input->post('report_view');
		$view_content = $view_path . $report->table_name . '_content_' . $report_id . '.php';

		$write = write_file($view_content, $builder_list);

		$id = $this->db->get_where($report->table_name)->row();

		if ($id) {
			$id = $id->id;
		} else {
			$id = 1;
		}
		$content = $this->load->view('report/report/tmp/' . $report->table_name . '_' . $report->id, [
			'id' => $id,
			'twig' => $twig
		], TRUE);


		$this->response([
			'content' => $content,
			'success' => true,
		]);
	}


	public function get_file_html()
	{
		$this->is_allowed('report_export');

		$this->load->helper('file');

		$loader = new \Twig\Loader\FilesystemLoader(FCPATH . '/modules/report/views/report');
		$twig = new \Twig\Environment($loader, []);

		$type = $this->input->get('type');

		if ($type == 'view') {
			$type = '_content';
		} else {
			$type = '';
		}


		$report_id = $this->input->get('report_id');

		$report = $this->model_report->find($report_id);
		$path = FCPATH . 'modules/report/views/report/' . $report->table_name . $type . '_' . $report->id . '.php';

		$content = read_file($path);

		$this->response([
			'content' => $content,
			'success' => true,
		]);
	}
}


/* End of file report.php */
/* Location: ./application/controllers/administrator/Report.php */