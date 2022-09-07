<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *| --------------------------------------------------------------------------
 *| Notification Controller
 *| --------------------------------------------------------------------------
 *| Notification site
 *|
 */
class Notification extends Admin
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_notification');
		$this->load->model('group/model_group');
		$this->lang->load('web_lang', $this->current_lang);
	}

	/**
	 * show all Notifications
	 *
	 * @var $offset String
	 */
	public function index($offset = 0)
	{
		$this->is_allowed('notification_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['notifications'] = $this->model_notification->get($filter, $field, $this->limit_page, $offset);
		$this->data['notification_counts'] = $this->model_notification->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/notification/index/',
			'total_rows'   => $this->data['notification_counts'],
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Notification List');
		$this->render('backend/standart/administrator/notification/notification_list', $this->data);
	}



	/**
	 * delete Notifications
	 *
	 * @var $id String
	 */
	public function delete($id = null)
	{
		$this->is_allowed('notification_delete');

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
			set_message(cclang('has_been_deleted', 'notification'), 'success');
		} else {
			set_message(cclang('error_delete', 'notification'), 'error');
		}

		redirect_back();
	}

	/**
	 * View view Notifications
	 *
	 * @var $id String
	 */
	public function view($id)
	{
		$this->is_allowed('notification_view');

		$this->model_notification->change($id, ['read' => 1]);

		$this->data['notification'] = $this->model_notification->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Notification Detail');
		$this->render('backend/standart/administrator/notification/notification_view', $this->data);
	}

	/**
	 * delete Notifications
	 *
	 * @var $id String
	 */
	private function _remove($id)
	{
		$notification = $this->model_notification->find($id);



		return $this->model_notification->remove($id);
	}


	/**
	 * Export to excel
	 *
	 * @return Files Excel .xls
	 */
	public function export()
	{
		$this->is_allowed('notification_export');

		$this->model_notification->export(
			'notification',
			'notification',
			$this->model_notification->field_search
		);
	}

	/**
	 * Export to PDF
	 *
	 * @return Files PDF .pdf
	 */
	public function export_pdf()
	{
		$this->is_allowed('notification_export');

		$this->model_notification->pdf('notification', 'notification');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('notification_export');

		$table = $title = 'notification';
		$this->load->library('HtmlPdf');

		$config = array(
			'orientation' => 'p',
			'format' => 'a4',
			'marges' => array(5, 5, 5, 5)
		);

		$this->pdf = new HtmlPdf($config);
		$this->pdf->setDefaultFont('stsongstdlight');

		$result = $this->db->get($table);

		$data = $this->model_notification->find($id);
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

	public function set_notification_status_as_read($id = 0) {
        if ($id) {
            $this->model_notification->set_notification_status_as_read($id, $this->session->userdata('id'));
        } else {
            //mark all notification as read
            $this->model_notification->set_notification_status_as_read(0, $this->session->userdata('id'));
            // echo json_encode(array("success" => true, 'message' => 'Marked all notifications as read'));
        }
    }
}


/* End of file notification.php */
/* Location: ./application/controllers/administrator/Notification.php */