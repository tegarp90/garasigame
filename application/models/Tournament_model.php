<?php

class Tournament_model extends CI_Model
{

    public function getAllJenisTournament()
    {
        $query = $this->db->get('MASTER_TOURNAMENT');
        return $query->result_array();
    }

    public function getAllTournamentGG()
    {
        $this->db->select('a.ID_TOURNAMENT, a.ID_GAME,b.JENIS_TOURNAMENT, c.NAMA_GAME, a.TOURNAMENT_CREATOR, a.NAMA_TOURNAMENT, a.TANGGAL_TOURNAMENT, a.MAX_PESERTA, a.BIAYA_PENDAFTARAN, a.STATUS, a.CREATED_DATE, c.IS_ACTIVE, c.IMAGE_GAME')
            ->from('TOURNAMENT as a')
            ->join('MASTER_TOURNAMENT as b', 'b.ID_MASTER_TOURNAMENT = a.ID_MASTER_TOURNAMENT')
            ->join('GAME as c', 'c.ID_GAME = a.ID_GAME');
        $this->db->where('c.IS_ACTIVE', 1);
        $this->db->order_by('a.TANGGAL_TOURNAMENT', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAllTournamentGGValid()
    {
        $this->db->select('a.ID_TOURNAMENT, a.ID_GAME,b.JENIS_TOURNAMENT, c.NAMA_GAME, a.TOURNAMENT_CREATOR, a.NAMA_TOURNAMENT, a.TANGGAL_TOURNAMENT, a.MAX_PESERTA, a.BIAYA_PENDAFTARAN, a.STATUS, a.CREATED_DATE, c.IS_ACTIVE, c.IMAGE_GAME')
            ->from('TOURNAMENT as a')
            ->join('MASTER_TOURNAMENT as b', 'b.ID_MASTER_TOURNAMENT = a.ID_MASTER_TOURNAMENT')
            ->join('GAME as c', 'c.ID_GAME = a.ID_GAME');
        $this->db->where('c.IS_ACTIVE', 1);
        $this->db->where('a.STATUS', 'VALID');
        $this->db->order_by('a.TANGGAL_TOURNAMENT', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getTournamentById($id)
    {
        $this->db->select('a.ID_TOURNAMENT, b.JENIS_TOURNAMENT, c.NAMA_GAME, a.TOURNAMENT_CREATOR, a.NAMA_TOURNAMENT, a.TANGGAL_TOURNAMENT, a.MAX_PESERTA, a.BIAYA_PENDAFTARAN, a.STATUS, a.CREATED_DATE, c.IS_ACTIVE')
            ->from('TOURNAMENT as a')
            ->join('MASTER_TOURNAMENT as b', 'b.ID_MASTER_TOURNAMENT = a.ID_MASTER_TOURNAMENT')
            ->join('GAME as c', 'c.ID_GAME = a.ID_GAME');
        $this->db->where('a.ID_TOURNAMENT', $id);
        $this->db->where('c.IS_ACTIVE', 1);
        $this->db->order_by('a.TANGGAL_TOURNAMENT', 'ASC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function createTournamentGG()
    {
        $masterTournament = $this->input->post('masterTournament');
        $game = $this->input->post('game');
        $tournamentCreator = "ADMIN";
        $namaTournament = $this->input->post('namaTournament');
        $tanggalTournament = $this->input->post('tanggalTournament');
        $maxPeserta = $this->input->post('maxPeserta');
        $biayaPendaftaran = $this->input->post('biayaPendaftaran');
        $status = $this->input->post('status');
        $createdDate = date("y-m-d");


        $data = array(
            'ID_MASTER_TOURNAMENT' => $masterTournament,
            'ID_GAME' => $game,
            'TOURNAMENT_CREATOR' => $tournamentCreator,
            'NAMA_TOURNAMENT' => $namaTournament,
            'TANGGAL_TOURNAMENT' => $tanggalTournament,
            'MAX_PESERTA' => $maxPeserta,
            'BIAYA_PENDAFTARAN' => $biayaPendaftaran,
            'STATUS' => $status,
            'CREATED_DATE' => $createdDate
        );

        $this->db->insert('TOURNAMENT', $data);
    }

    public function ubahTournament($id, $data)
    {
        $this->db->from('TOURNAMENT');
        $this->db->where('ID_TOURNAMENT', $id);
        $this->db->update('TOURNAMENT', $data);
        return true;
    }

    public function hapusTournament($id)
    {
        $this->db->where('ID_TOURNAMENT', $id);
        $this->db->delete('TOURNAMENT');
    }

    public function createPesertaTournament()
    {
        $idTour = $this->input->post('idTour');
        $username = $_SESSION['username'];
        $namaPeserta = $this->input->post('namaPeserta');
        $noHp = $this->input->post('noHp');
        $status = "PENDING";
        $createdDate = date("Y-m-d");


        $data = array(
            'ID_TOURNAMENT' => $idTour,
            'USERNAME' => $username,
            'NAMA_TIM' => $namaPeserta,
            'NO_HP_AKTIF' => $noHp,
            'STATUS' => $status,
            'CREATED_DATE' => $createdDate
        );

        $this->db->insert('PESERTA_TOURNAMENT', $data);
    }

    public function getAllPesertaTournament($id)
    {
        $this->db->select('b.NAMA_TOURNAMENT, a.*')
            ->from('PESERTA_TOURNAMENT as a')
            ->join('TOURNAMENT as b', 'b.ID_TOURNAMENT = a.ID_TOURNAMENT');
        $this->db->where('b.ID_TOURNAMENT', $id);
        $this->db->order_by('a.NAMA_TOURNAMENT', 'ASC');
        $this->db->order_by('a.STATUS', 'ASC');
        $this->db->order_by('a.CREATED_DATE', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAllTournamentForPeserta($sessionid)
    {
        $this->db->select('b.NAMA_TOURNAMENT, b.TANGGAL_TOURNAMENT, a.*')
            ->from('PESERTA_TOURNAMENT as a')
            ->join('TOURNAMENT as b', 'b.ID_TOURNAMENT = a.ID_TOURNAMENT');
        $this->db->where('a.USERNAME', $sessionid);
        $this->db->order_by('a.STATUS', 'ASC');
        $this->db->order_by('a.CREATED_DATE', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function ubahStatus($id)
    {
        $status = $this->input->post('status');
        $data = array(
            'STATUS' => $status
        );

        $this->db->from('PESERTA_TOURNAMENT');
        $this->db->where('ID_PESERTA_TOURNAMENT', $id);
        $this->db->update('PESERTA_TOURNAMENT', $data);
        return true;
    }

    public function getPesertaById($id)
    {
        $this->db->from('PESERTA_TOURNAMENT');
        $this->db->where('ID_PESERTA_TOURNAMENT', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

}
