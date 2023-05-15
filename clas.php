<?php
class mahasiswa{
    public $nim = "76";
    public $nama = "haikal";
    public $jurusan = "pplg";

    function tampil_biodata(){
        echo $this->nim ;
        echo $this->nama ;
    }
}
$mahasiswa = new mahasiswa();

$mahasiswa->tampil_biodata()
?>