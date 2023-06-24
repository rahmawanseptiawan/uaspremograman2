<?php namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel2 extends Model
{
    
	
	 public function getMahasiswa2()
    {
		$query = "SELECT mahasiswa.jk ,count(*) as jumlah, matkul.mata_kuliah,mahasiswa.status FROM mahasiswa LEFT JOIN matkul ON mahasiswa.id_matkul = matkul.id_matkul GROUP BY mahasiswa.jk,matkul.mata_kuliah,mahasiswa.status ORDER BY mahasiswa.jk ASC, mahasiswa.status ASC, matkul.mata_kuliah DESC";
		$query=$this->db->query($query);
        return $query->getResultArray();
    }


   
}

?>