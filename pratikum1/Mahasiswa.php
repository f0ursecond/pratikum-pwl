<?php
class Mahasiswa
{
    public $nim, $nama, $programStudi;


    function setData($nim, $nama, $programStudi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->programStudi = $programStudi;
    }

    function getData()
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'program_studi' => $this->programStudi
        ];
    }
}
