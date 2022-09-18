<?php


class Mariages_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_mariages($etat = 2)
    {
        $this->db->select('m.date_mariage as date, c1.nom as epoux, c2.nom as epouse');
        $this->db->from('mariage m');
        $this->db->join('candidat c1', 'c1.id = m.epoux_id', 'left');
        $this->db->join('candidat c2', 'c2.id = m.epouse_id', 'left');
        $this->db->where('m.etat', $etat);
        $query = $this->db->get();
        return $query->result();
    }

    public function set_mariage()
    {
        $this->load->helper('url');

        $data = array(
            'date_mariage' => $this->input->post('date'),
            'epoux_id' => $this->input->post('homme'),
            'epouse_id' => $this->input->post('femme')
        );

        return $this->db->insert('mariage', $data);
    }

    public function set_candidat()
    {
        $this->load->helper('url');

        $data = array(
            'nom' => $this->input->post('nom'),
            'sexe' => $this->input->post('sexe'),
            'adresse' => $this->input->post('adresse'),
            'date_naissance' => $this->input->post('date')
        );

        return $this->db->insert('candidat', $data);
    }

    public function get_candidats($sexe = null)
    {
        if ($sexe === null) {
            $query = $this->db->query("SELECT * FROM candidat c WHERE c.id NOT IN (SELECT epouse_id  FROM mariage) AND c.id NOT IN (SELECT epoux_id  FROM mariage)");

            return $query->result_array();
        }

        $query = $this->db->query("SELECT * FROM candidat c WHERE c.sexe='$sexe' AND c.id NOT IN (SELECT epouse_id  FROM mariage) AND c.id NOT IN (SELECT epoux_id  FROM mariage)");
        return $query->result_array();
    }
}