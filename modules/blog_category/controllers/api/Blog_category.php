<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Firebase\JWT\JWT;

class Blog_category extends API
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_api_blog_category');
	}

	/**
	 * @api {get} /blog_category/all Get all blog_categorys.
	 * @apiVersion 0.1.0
	 * @apiName AllBlogcategory 
	 * @apiGroup blog_category
	 * @apiHeader {String} X-Api-Key Blog categorys unique access-key.
	 * @apiPermission Blog category Cant be Accessed permission name : api_blog_category_all
	 *
	 * @apiParam {String} [Filter=null] Optional filter of Blog categorys.
	 * @apiParam {String} [Field="All Field"] Optional field of Blog categorys : category_id, category_name, category_desc.
	 * @apiParam {String} [Start=0] Optional start index of Blog categorys.
	 * @apiParam {String} [Limit=10] Optional limit data of Blog categorys.
	 *
	 *
	 * @apiSuccess {Boolean} Status status response api.
	 * @apiSuccess {String} Message message response api.
	 * @apiSuccess {Array} Data data of blog_category.
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *
	 * @apiError NoDataBlog category Blog category data is nothing.
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 403 Not Acceptable
	 *
	 */
	public function all_get()
	{
		$this->is_allowed('api_blog_category_all', false);

		$filter = $this->get('filter');
		$field = $this->get('field');
		$limit = $this->get('limit') ? $this->get('limit') : $this->limit_page;
		$start = $this->get('start');

		$select_field = ['category_id', 'category_name', 'category_desc'];
		$blog_categorys = $this->model_api_blog_category->get($filter, $field, $limit, $start, $select_field);
		$total = $this->model_api_blog_category->count_all($filter, $field);
		$blog_categorys = array_map(function($row){
						
			return $row;
		}, $blog_categorys);

		$data['blog_category'] = $blog_categorys;
		
		if ($this->input->get('onlycount')) {
			$data = [];
		}
		
		$this->response([
			'status' 	=> true,
			'message' 	=> 'Data Blog category',
			'data'	 	=> $data,
			'total' 	=> $total,
		], API::HTTP_OK);
	}

		/**
	 * @api {get} /blog_category/detail Detail Blog category.
	 * @apiVersion 0.1.0
	 * @apiName DetailBlog category
	 * @apiGroup blog_category
	 * @apiHeader {String} X-Api-Key Blog categorys unique access-key.
	 * @apiPermission Blog category Cant be Accessed permission name : api_blog_category_detail
	 *
	 * @apiParam {Integer} Id Mandatory id of Blog categorys.
	 *
	 * @apiSuccess {Boolean} Status status response api.
	 * @apiSuccess {String} Message message response api.
	 * @apiSuccess {Array} Data data of blog_category.
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *
	 * @apiError Blog categoryNotFound Blog category data is not found.
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 403 Not Acceptable
	 *
	 */
	public function detail_get()
	{
		$this->is_allowed('api_blog_category_detail', false);

		$this->requiredInput(['category_id']);

		$id = $this->get('category_id');

		$select_field = ['category_id', 'category_name', 'category_desc'];
		$blog_category = $this->model_api_blog_category->find($id, $select_field);

		if (!$blog_category) {
			$this->response([
					'status' 	=> false,
					'message' 	=> 'Blog not found'
				], API::HTTP_NOT_FOUND);
		}

					
		$data['blog_category'] = $blog_category;
		if ($data['blog_category']) {
			
			$this->response([
				'status' 	=> true,
				'message' 	=> 'Detail Blog category',
				'data'	 	=> $data
			], API::HTTP_OK);
		} else {
			$this->response([
				'status' 	=> false,
				'message' 	=> 'Blog category not found'
			], API::HTTP_NOT_ACCEPTABLE);
		}
	}

	
	/**
	 * @api {post} /blog_category/add Add Blog category.
	 * @apiVersion 0.1.0
	 * @apiName AddBlog category
	 * @apiGroup blog_category
	 * @apiHeader {String} X-Api-Key Blog categorys unique access-key.
	 * @apiPermission Blog category Cant be Accessed permission name : api_blog_category_add
	 *
 	 * @apiParam {String} Category_name Mandatory category_name of Blog categorys. Input Category Name Max Length : 200. 
	 * @apiParam {String} Category_desc Mandatory category_desc of Blog categorys.  
	 *
	 * @apiSuccess {Boolean} Status status response api.
	 * @apiSuccess {String} Message message response api.
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *
	 * @apiError ValidationError Error validation.
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 403 Not Acceptable
	 *
	 */
	public function add_post()
	{
		$this->is_allowed('api_blog_category_add', false);

		$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('category_desc', 'Category Desc', 'trim|required');
		
		if ($this->form_validation->run()) {

			$save_data = [
				'category_name' => $this->input->post('category_name'),
				'category_desc' => $this->input->post('category_desc'),
			];
			
			$save_blog_category = $this->model_api_blog_category->store($save_data);

			if ($save_blog_category) {
				$this->response([
					'status' 	=> true,
					'message' 	=> 'Your data has been successfully stored into the database'
				], API::HTTP_OK);

			} else {
				$this->response([
					'status' 	=> false,
					'message' 	=> cclang('data_not_change')
				], API::HTTP_NOT_ACCEPTABLE);
			}

		} else {
			$this->response([
				'status' 	=> false,
				'message' 	=> 'Validation Errors.',
				'errors' 	=> $this->form_validation->error_array()
			], API::HTTP_NOT_ACCEPTABLE);
		}
	}

	/**
	 * @api {post} /blog_category/update Update Blog category.
	 * @apiVersion 0.1.0
	 * @apiName UpdateBlog category
	 * @apiGroup blog_category
	 * @apiHeader {String} X-Api-Key Blog categorys unique access-key.
	 * @apiPermission Blog category Cant be Accessed permission name : api_blog_category_update
	 *
	 * @apiParam {String} Category_name Mandatory category_name of Blog categorys. Input Category Name Max Length : 200. 
	 * @apiParam {String} Category_desc Mandatory category_desc of Blog categorys.  
	 * @apiParam {Integer} category_id Mandatory category_id of Blog Category.
	 *
	 * @apiSuccess {Boolean} Status status response api.
	 * @apiSuccess {String} Message message response api.
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *
	 * @apiError ValidationError Error validation.
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 403 Not Acceptable
	 *
	 */
	public function update_post()
	{
		$this->is_allowed('api_blog_category_update', false);

		
		$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('category_desc', 'Category Desc', 'trim|required');
		
		if ($this->form_validation->run()) {

			$save_data = [
				'category_name' => $this->input->post('category_name'),
				'category_desc' => $this->input->post('category_desc'),
			];
			
			$save_blog_category = $this->model_api_blog_category->change($this->post('category_id'), $save_data);

			if ($save_blog_category) {
				$this->response([
					'status' 	=> true,
					'message' 	=> 'Your data has been successfully updated into the database'
				], API::HTTP_OK);

			} else {
				$this->response([
					'status' 	=> false,
					'message' 	=> cclang('data_not_change')
				], API::HTTP_NOT_ACCEPTABLE);
			}

		} else {
			$this->response([
				'status' 	=> false,
				'message' 	=> 'Validation Errors.',
				'errors' 	=> $this->form_validation->error_array()
			], API::HTTP_NOT_ACCEPTABLE);
		}
	}
	
	/**
	 * @api {post} /blog_category/delete Delete Blog category. 
	 * @apiVersion 0.1.0
	 * @apiName DeleteBlog category
	 * @apiGroup blog_category
	 * @apiHeader {String} X-Api-Key Blog categorys unique access-key.
	 	 * @apiPermission Blog category Cant be Accessed permission name : api_blog_category_delete
	 *
	 * @apiParam {Integer} Id Mandatory id of Blog categorys .
	 *
	 * @apiSuccess {Boolean} Status status response api.
	 * @apiSuccess {String} Message message response api.
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *
	 * @apiError ValidationError Error validation.
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 403 Not Acceptable
	 *
	 */
	public function delete_post()
	{
		$this->is_allowed('api_blog_category_delete', false);

		$blog_category = $this->model_api_blog_category->find($this->post('category_id'));

		if (!$blog_category) {
			$this->response([
				'status' 	=> false,
				'message' 	=> 'Blog category not found'
			], API::HTTP_NOT_ACCEPTABLE);
		} else {
			$delete = $this->model_api_blog_category->remove($this->post('category_id'));

			}
		
		if ($delete) {
			$this->response([
				'status' 	=> true,
				'message' 	=> 'Blog category deleted',
			], API::HTTP_OK);
		} else {
			$this->response([
				'status' 	=> false,
				'message' 	=> 'Blog category not delete'
			], API::HTTP_NOT_ACCEPTABLE);
		}
	}
	
}

/* End of file Blog category.php */
/* Location: ./application/controllers/api/Blog category.php */