<?php
namespace App\Controllers;
use App\Models\MahasiswaModel2;

class Mahasiswa2 extends BaseController
{
    function __construct(){
		$this->MahasiswaModel2 = new MahasiswaModel2();
	}
	public function index()
	{
	    $data['Mahasiswa2'] = $this->MahasiswaModel2->getMahasiswa2();
		
		return view('mahasiswa2', $data);
	}
}	
?>
	