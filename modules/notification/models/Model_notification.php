<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_notification extends MY_Model
{

    private $primary_key    = 'id';
    private $table_name     = 'notification';
    public $field_search   = ['title', 'content'];
    public $sort_option = ['id', 'DESC'];

    public function __construct()
    {
        $config = array(
            'primary_key'   => $this->primary_key,
            'table_name'    => $this->table_name,
            'field_search'  => $this->field_search,
            'sort_option'   => $this->sort_option,
        );

        parent::__construct($config);
    }

    public function count_all($q = null, $field = null)
    {
        $iterasi = 1;
        $num = count($this->field_search);
        $where = NULL;
        $q = $this->scurity($q);
        $field = $this->scurity($field);

        if (empty($field)) {
            foreach ($this->field_search as $field) {
                $f_search = "notification." . $field;

                if (strpos($field, '.')) {
                    $f_search = $field;
                }
                if ($iterasi == 1) {
                    $where .=  $f_search . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " .  $f_search . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '(' . $where . ')';
        } else {
            $where .= "(" . "notification." . $field . " LIKE '%" . $q . "%' )";
        }

        $this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
        $query = $this->db->get($this->table_name);

        return $query->num_rows();
    }

    public function get($q = null, $field = null, $limit = 0, $offset = 0, $select_field = [])
    {
        $iterasi = 1;
        $num = count($this->field_search);
        $where = NULL;
        $q = $this->scurity($q);
        $field = $this->scurity($field);

        if (empty($field)) {
            foreach ($this->field_search as $field) {
                $f_search = "notification." . $field;
                if (strpos($field, '.')) {
                    $f_search = $field;
                }

                if ($iterasi == 1) {
                    $where .= $f_search . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . $f_search . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '(' . $where . ')';
        } else {
            $where .= "(" . "notification." . $field . " LIKE '%" . $q . "%' )";
        }

        if (is_array($select_field) and count($select_field)) {
            $this->db->select($select_field);
        }

        $this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
        $this->db->limit($limit, $offset);

        $this->sortable();

        $query = $this->db->get($this->table_name);


        return $query->result();
    }

    public function join_avaiable()
    {


        return $this;
    }

    public function filter_avaiable()
    {

        $this->db->order_by($this->primary_key, 'DESC');
        $this->db->where($this->table_name . '.user_id', get_user_data('id'));

        return $this;
    }

    public function set_notification_status_as_read($id, $user_id = 0) {
        // $notifications_table = $this->table_name;

        // $where = "";
        // if ($id) {
        //     $where = " AND $notifications_table.id=$id";
        // }

        // $sql = "UPDATE $notifications_table SET $notifications_table.read = CONCAT($notifications_table.read,',',$user_id)
        // WHERE FIND_IN_SET($user_id, $notifications_table.read) = 0 $where";

        $sql = "UPDATE notification SET notification.read=1 WHERE user_id=$user_id";
        return $this->db->query($sql);
    }
}

/* End of file Model_notification.php */
/* Location: ./application/models/Model_notification.php */