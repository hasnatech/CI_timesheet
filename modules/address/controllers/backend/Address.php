<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Address Controller
*| --------------------------------------------------------------------------
*| Address site
*|
*/
class Address extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_address');
		$this->load->model('group/model_group');
		$this->lang->load('web_lang', $this->current_lang);
	}

	/**
	* show all Addresss
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('address_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['addresss'] = $this->model_address->get($filter, $field, $this->limit_page, $offset);
		$this->data['address_counts'] = $this->model_address->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/address/index/',
			'total_rows'   => $this->data['address_counts'],
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Address List');
		$this->render('backend/standart/administrator/address/address_list', $this->data);
	}
	
	/**
	* Add new addresss
	*
	*/
	public function add()
	{
		$this->is_allowed('address_add');

		$this->template->title('Address New');
		$this->render('backend/standart/administrator/address/address_add', $this->data);
	}

	/**
	* Add New Addresss
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('address_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		

		$this->form_validation->set_rules('country_id', 'Country Id', 'trim|required');
		

		$this->form_validation->set_rules('state_id', 'State Id', 'trim|required');
		

		$this->form_validation->set_rules('label', 'Label', 'trim|required|max_length[255]');
		

		$this->form_validation->set_rules('city_id', 'City Id', 'trim|required|max_length[11]');
		

		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'country_id' => $this->input->post('country_id'),
				'state_id' => $this->input->post('state_id'),
				'label' => $this->input->post('label'),
				'city_id' => $this->input->post('city_id'),
			];

			
			
			$save_address = $this->model_address->store($save_data);
            

			if ($save_address) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_address;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/address/edit/' . $save_address, 'Edit Address'),
						anchor('administrator/address', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/address/edit/' . $save_address, 'Edit Address')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/address');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/address');
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
	* Update view Addresss
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('address_update');

		$this->data['address'] = $this->model_address->find($id);

		$this->template->title('Address Update');
		$this->render('backend/standart/administrator/address/address_update', $this->data);
	}

	/**
	* Update Addresss
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('address_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
				$this->form_validation->set_rules('country_id', 'Country Id', 'trim|required');
		

		$this->form_validation->set_rules('state_id', 'State Id', 'trim|required');
		

		$this->form_validation->set_rules('label', 'Label', 'trim|required|max_length[255]');
		

		$this->form_validation->set_rules('city_id', 'City Id', 'trim|required|max_length[11]');
		

		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'country_id' => $this->input->post('country_id'),
				'state_id' => $this->input->post('state_id'),
				'label' => $this->input->post('label'),
				'city_id' => $this->input->post('city_id'),
			];


			
			
			$save_address = $this->model_address->change($id, $save_data);

			if ($save_address) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/address', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/address');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/address');
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
	* delete Addresss
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('address_delete');

		$this->load->helper('file');

		$arr_id = $this->input->get('id');
		$remove = false;

		if (!empty($id)) {
			$remove = $this->_remove($id);
		} elseif (count($arr_id) >0) {
			foreach ($arr_id as $id) {
				$remove = $this->_remove($id);
			}
		}

		if ($remove) {
            set_message(cclang('has_been_deleted', 'address'), 'success');
        } else {
            set_message(cclang('error_delete', 'address'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Addresss
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('address_view');

		$this->data['address'] = $this->model_address->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Address Detail');
		$this->render('backend/standart/administrator/address/address_view', $this->data);
	}
	
	/**
	* delete Addresss
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$address = $this->model_address->find($id);

		
		
		return $this->model_address->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('address_export');

		$this->model_address->export(
			'address', 
			'address',
			$this->model_address->field_search
		);
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('address_export');

		$this->model_address->pdf('address', 'address');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('address_export');

		$table = $title = 'address';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_address->find($id);
        $fields = $result->list_fields();

        $content = $this->pdf->loadHtmlPdf('core_template/pdf/pdf_single', [
            'data' => $data,
            'fields' => $fields,
            'title' => $title
        ], TRUE);

        $this->pdf->initialize($config);
        $this->pdf->pdf->SetDisplayMode('fullpage');
        $this->pdf->writeHTML($content);
        $this->pdf->Output($table.'.pdf', 'H');
	}

	
}


/* End of file address.php */
/* Location: ./application/controllers/administrator/Address.php */