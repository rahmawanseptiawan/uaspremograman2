<?php namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel1 extends Model
{
    
	
	 public function getMahasiswa1()
    {
		$query = "SELECT sks, mata_kuliah from matkul ORDER BY sks ASC";
		$query=$this->db->query($query);
        return $query->getResultArray();
    }


   
}

?>