<?php
class buku
{
    private $host = 'localhost';
    private $user = 'root';
    private $password ='';
    private $database = 'db_buku_2';
    private $koneksi;
    private $ambil_data;


public function koneksi()
{
    this-> koneksi = new mysql(this->host, this->username, this->password, this->database );
    if (this->koneksi->connect_eror) {
        die "koneksi database gagal" ; $this->koneksi->connect_eror;
    }
}

public function ambil_data($query)
{
    this->koneksi();
    $hasil = $this->koneksi->queryn($query);
    $item = array();
    if ($hasil-> num_rows > 0) {
        while ($row = $hasil-> fetch_assoc()) {

        }
    }
}
    }

?>