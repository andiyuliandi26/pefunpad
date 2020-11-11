<?php
namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model{
	protected $DBGroup = 'default';
	protected $primaryKey = 'id';
	protected $returnType     = 'object';

	public function getData($id = false)
    {
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id])->getRowArray();
        }  
    }
     
    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
 
    public function updateData($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
 
    public function deleteData($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}

?>