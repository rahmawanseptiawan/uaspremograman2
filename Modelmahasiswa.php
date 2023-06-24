<?php namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model
{
   
    public function getData()
    {
        $query = "Select mahasiswa.jk, count(*) as jumlah, matkul.mata_kuliah from mahasiswa LEFT JOIN matkul on matkul.id_matkul = mahasiswa.id_matkul
        GROUP BY mahasiswa.jk, matkul.mata_kuliah ORDER BY mahasiswa.jk asc, matkul.mata_kuliah desc";

        $query = $this->db->query($query);
        return $query->getResultArray();
    }

    


    
}

?>