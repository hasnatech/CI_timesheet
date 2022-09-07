<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *| --------------------------------------------------------------------------
 *| Reminder Controller
 *| --------------------------------------------------------------------------
 *| Reminder site
 *|
 */
class Reminder extends Admin
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_reminder');
		$this->load->model('group/model_group');
		$this->lang->load('web_lang', $this->current_lang);
	}

	/**
	 * show all Reminders
	 *
	 * @var $offset String
	 */
	public function index($offset = 0)
	{
		$this->is_allowed('reminder_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['reminders'] = $this->model_reminder->get($filter, $field, $this->limit_page, $offset);
		$this->data['reminder_counts'] = $this->model_reminder->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/reminder/index/',
			'total_rows'   => $this->data['reminder_counts'],
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Reminder List');
		$this->render('backend/standart/administrator/reminder/reminder_list', $this->data);
	}

	/**
	 * Add new reminders
	 *
	 */
	public function add()
	{
		$this->is_allowed('reminder_add');
		$this->data['tables'] = $this->db->list_tables();

		$this->template->title('Reminder New');
		$this->render('backend/standart/administrator/reminder/reminder_add', $this->data);
	}

	/**
	 * Add New Reminders
	 *
	 * @return JSON
	 */
	public function add_save()
	{
		if (!$this->is_allowed('reminder_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
			]);
			exit;
		}



		$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
		// $this->form_validation->set_rules('url', 'URL', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('type', 'Type', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('repeat_frequency', 'Repeat Frequency', 'trim|required|callback_valid_number');
		$this->form_validation->set_rules('table_name', 'Table name', 'trim|required');
		$this->form_validation->set_rules('primary_field', 'Primary Field', 'trim|required');


		if ($this->form_validation->run()) {

			$save_data = [
				'title' => $this->input->post('title'),
				'message' => $this->input->post('message'),
				'url' => $this->input->post('url'),
				'type' => $this->input->post('type'),
				'receipent' => implode(',', (array) $this->input->post('receipent')),
				'receipent_department' => implode(',', (array) $this->input->post('receipent_department')),
				'repeat_frequency' => $this->input->post('repeat_frequency'),
				'receipent_custom_query' => $this->input->post('receipent_custom_query'),
				'table' => $this->input->post('table_name'),
				'primary_field' => $this->input->post('primary_field'),
				'created_at' => date('Y-m-d H:i:s'),
			];

			//$save_data['_example'] = $this->input->post('_example');

			$save_reminder = $id = $this->model_reminder->store($save_data);


			if ($save_reminder) {


				$id = $save_reminder;
				$this->_save_condition($id);

				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_reminder;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/reminder/edit/' . $save_reminder, 'Edit Reminder'),
						anchor('administrator/reminder', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
							anchor('administrator/reminder/edit/' . $save_reminder, 'Edit Reminder')
						]),
						'success'
					);

					$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/reminder');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/reminder');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = $this->form_validation->error_array();
		}

		$this->response($this->data);
	}

	/**
	 * Update view Reminders
	 *
	 * @var $id String
	 */
	public function edit($id)
	{
		$this->is_allowed('reminder_update');

		$this->data['reminder'] = $this->model_reminder->find($id);

		$this->data['conditions'] = $this->db->get_where('reminder_condition', ['reminder_id' => $id])->result();

		$this->template->title('Reminder Update');
		$this->render('backend/standart/administrator/reminder/reminder_update', $this->data);
	}

	/**
	 * Update Reminders
	 *
	 * @var $id String
	 */
	public function edit_save($id)
	{
		if (!$this->is_allowed('reminder_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
			]);
			exit;
		}

		$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
		$this->form_validation->set_rules('type', 'Type', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('repeat_frequency', 'Repeat Frequency', 'trim|required|callback_valid_number');
		$this->form_validation->set_rules('table_name', 'Table name', 'trim|required');
		$this->form_validation->set_rules('primary_field', 'Primary Field', 'trim|required');



		if ($this->form_validation->run()) {

			$save_data = [
				'title' => $this->input->post('title'),
				'message' => $this->input->post('message'),
				'url' => $this->input->post('url'),
				'type' => $this->input->post('type'),
				'receipent' => implode(',', (array) $this->input->post('receipent')),
				'receipent_department' => implode(',', (array) $this->input->post('receipent_department')),
				'receipent_custom_query' => $this->input->post('receipent_custom_query'),
				'repeat_frequency' => $this->input->post('repeat_frequency'),
			];

			//$save_data['_example'] = $this->input->post('_example');


			$save_reminder = $this->model_reminder->change($id, $save_data);

			$this->_save_condition($id);


			if ($this->input->post('save_type') == 'stay') {
				$this->data['success'] = true;
				$this->data['id'] 	   = $id;
				$this->data['message'] = cclang('success_update_data_stay', [
					anchor('administrator/reminder', ' Go back to list')
				]);
			} else {
				set_message(
					cclang('success_update_data_redirect', []),
					'success'
				);

				$this->data['success'] = true;
				$this->data['redirect'] = base_url('administrator/reminder');
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = $this->form_validation->error_array();
		}

		$this->response($this->data);
	}

	public function _save_condition($id)
	{
		$custom_query = $this->input->post('receipent_custom_query');

		if ($custom_query) {

			if (strtolower(substr($custom_query, 0, 6)) != 'select') {
				$this->response([
					'success' => false,
					'message' => 'Invalid query format',
					'errors' => [
						['receipent_custom_query' => 'Invalid query format']
					]
				]);
			}
		}


		$this->db->delete('reminder_condition', ['reminder_id' => $id]);
		$conditions = [];
		foreach ((array)$this->input->post('condition') as $cond) {
			$conditions[] = [
				//'cond_table' => $cond['condition_table'],
				'cond_field' => $cond['condition_field'],
				'cond_operator' => $cond['condition_operator'],
				'cond_value' => $cond['condition_value'],
				'reminder_id' => $id,
			];
		}

		if (count($conditions)) {
			$this->db->insert_batch('reminder_condition', $conditions);
		}
	}

	/**
	 * delete Reminders
	 *
	 * @var $id String
	 */
	public function delete($id = null)
	{
		$this->is_allowed('reminder_delete');

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
			set_message(cclang('has_been_deleted', 'reminder'), 'success');
		} else {
			set_message(cclang('error_delete', 'reminder'), 'error');
		}

		redirect_back();
	}

	/**
	 * View view Reminders
	 *
	 * @var $id String
	 */
	public function view($id)
	{
		$this->is_allowed('reminder_view');

		$this->data['reminder'] = $this->model_reminder->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Reminder Detail');
		$this->render('backend/standart/administrator/reminder/reminder_view', $this->data);
	}

	/**
	 * delete Reminders
	 *
	 * @var $id String
	 */
	private function _remove($id)
	{
		$reminder = $this->model_reminder->find($id);



		return $this->model_reminder->remove($id);
	}


	/**
	 * Export to excel
	 *
	 * @return Files Excel .xls
	 */
	public function export()
	{
		$this->is_allowed('reminder_export');

		$this->model_reminder->export(
			'reminder',
			'reminder',
			$this->model_reminder->field_search
		);
	}

	/**
	 * Export to PDF
	 *
	 * @return Files PDF .pdf
	 */
	public function export_pdf()
	{
		$this->is_allowed('reminder_export');

		$this->model_reminder->pdf('reminder', 'reminder');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('reminder_export');

		$table = $title = 'reminder';
		$this->load->library('HtmlPdf');

		$config = array(
			'orientation' => 'p',
			'format' => 'a4',
			'marges' => array(5, 5, 5, 5)
		);

		$this->pdf = new HtmlPdf($config);
		$this->pdf->setDefaultFont('stsongstdlight');

		$result = $this->db->get($table);

		$data = $this->model_reminder->find($id);
		$fields = $result->list_fields();

		$content = $this->pdf->loadHtmlPdf('core_template/pdf/pdf_single', [
			'data' => $data,
			'fields' => $fields,
			'title' => $title
		], TRUE);

		$this->pdf->initialize($config);
		$this->pdf->pdf->SetDisplayMode('fullpage');
		$this->pdf->writeHTML($content);
		$this->pdf->Output($table . '.pdf', 'H');
	}

	public function get_field_data()
	{
	}

	/**
	 * Get field table
	 *
	 * @return html
	 */
	public function get_list_field_id($table)
	{
		$this->data['html'] = $this->load->view('crud/backend/standart/administrator/crud/crud_list_field.php', ['table' => $table], true);
		$this->data['short_code'] = '<code>{{' . implode($this->db->list_fields($table), '}}</code> <code>{{') . '}}</code>';
		$this->data['success'] = true;

		return $this->response($this->data);
	}
}


/* End of file reminder.php */
/* Location: ./application/controllers/administrator/Reminder.php */