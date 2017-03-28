class user extends CI_Model
{
function loginvalidate()
{
    $email=$this->input->post('email');
    $pwd=$this->input->post('password');
    $this->db->select('*');           
    $this->db->from('entries_new');
    $this->db->where('email',$email);
    $this->db->where('password',$pwd);
    $query=$this->db->get();
    if($query->num_rows==1)
    {
       $result=$query->result();
       $se_data=array('username'=>$result[0]->name,
                      'email'=>$result[0]->email); 
       $this->session->set_userdata($se_data); 
       return  $result;
    }
    else
    { return false; }
}

}
