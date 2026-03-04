<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $programStudi;

    function setData($nim, $nama, $programStudi)
    {
        $this->nim = $nim;
        $this->nama = $nama = $nama;
        $this->programStudi = $programStudi;
    }

    function getData()
    {
        return [
            "nim" => $this->nim,
            "nama" => $this->nama,
            "programStudi" => $this->programStudi,
        ];
    }

    function showAllData(){
        echo "Nama : " .$this->nama . "<br>" . "NIM : " .$this->nim . "<br>" . "Program Studi : " .$this->programStudi;
     }
}
