<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Rekomendasi extends Model
{
    public function get_data_rekomendasi()
    {
        return $this->db->table('t_rekomendasi')
            ->join('t_detail_rekomendasi', 't_rekomendasi.id_rekomendasi=t_detail_rekomendasi.id_rekomendasi')
            ->join('t_opd', 't_opd.id_opd=t_detail_rekomendasi.id_opd')
            ->get()
            ->getResultArray();
    }
    public function insert_data_rekomendasi($data)
    {
        return $this->db->table('t_rekomendasi')->insert($data);
    }
    public function get_data_opd()
    {
        return $this->db->table('t_opd')
            ->get()
            ->getResultArray();
    }
    public function edit_data_rekomendasi($id_rekomendasi)
    {
        return $this->db->table('t_rekomendasi')->where('id_rekomendasi', $id_rekomendasi)->get()->getRowArray();
    }
    public function update_data_rekomendasi($data, $id_rekomendasi)
    {
        return $this->db->table('t_rekomendasi')->update($data, array('id_rekomendasi' => $id_rekomendasi));
    }
    public function delete_data_rekomendasi($id_rekomendasi)
    {
        return $this->db->table('t_rekomendasi')->delete(array('id_rekomendasi' => $id_rekomendasi));
    }
}
