<?php

class Home_Model extends CI_Model {
    public function home_latest_video() {
        $this->db->select('*');
        $this->db->from('audio_video_file');
        $this->db->where('audio_video_file.type_id', 2); 
        $this->db->where('audio_video_file.status', 1); 
        $this->db->join('lecturer_name', 'audio_video_file.lacturer_id = lecturer_name.lecturer_id');
        $this->db->order_by("file_id", "DESC");
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function home_latest_audio(){
        $this->db->select('*');
        $this->db->from('audio_video_file');
        $this->db->where('audio_video_file.type_id', 1); 
        $this->db->where('audio_video_file.status', 1); 
        $this->db->join('lecturer_name', 'audio_video_file.lacturer_id = lecturer_name.lecturer_id');
        $this->db->order_by("file_id", "DESC");
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();
    }

}
