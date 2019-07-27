<?php

class Karyawan_model
{
  private $table = 'karyawan';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  public function getAllKaryawan()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getKaryawanById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahDataKaryawan($data)
  {
    $query = "INSERT INTO karyawan VALUES
             ('', :nama,:id_work, :id_salary)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('id_work', $data['id_work']);
    $this->db->bind('id_salary', $data['id_salary']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function hapusDataKaryawan($id)
  {
    $query = "DELETE FROM karyawan WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function ubahDataKaryawan($data)
  {
    $query = "UPDATE karyawan SET
                nama = :nama,
                id_work = :id_work,
                id_salary = :id_salary
              WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('id_work', $data['id_work']);
    $this->db->bind('id_work', $data['id_work']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function cariDataKaryawan()
  {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM karyawan WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}
