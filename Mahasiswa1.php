<?php
namespace App\Controllers;
use App\Models\MahasiswaModel1;

class Mahasiswa1 extends BaseController
{
    function __construct(){
		$this->MahasiswaModel1 = new MahasiswaModel1();
	}
	public function index()
	{
	    $data['Mahasiswa1'] = $this->MahasiswaModel1->getMahasiswa1();
		
		return view('mahasiswa1', $data);
	}
}	
?>
	