<?php 

namespace App\Models;

use Config\Database;
use CodeIgniter\Model;
use CodeIgniter\I18n\Time;


class NotificationsModel extends Model
{
    protected $db;
    protected $table = 'notifications';

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getAll()
    {
        $builder = $this->db->table($this->table);
        $result = $builder->get()->getResult();

        return $result;
    }

    public function getById($id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('notif_id', $id);
        
        return $builder->get()->getResult()[0];
    }

    public function setNotif($head = '[b]Lorem[/b]', $body = 'Ipsum Dolor[br] Sit Amet')
    {
        $builder = $this->db->table($this->table);
        $data = [
            'notif_head' => $head,
            'notif_body' => $body,
            'created_by' => user()->username,
            'created_at' => Time::now('Asia/Jakarta', 'id_ID')->toDateString(),
        ];
        $builder->insert($data);
    }

    public function unsetNotif($id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('notif_id', $id);
        $builder->delete();
    }

    public function empty()
    {
        $builder = $this->db->table($this->table);
        $builder->emptyTable();
    }

}