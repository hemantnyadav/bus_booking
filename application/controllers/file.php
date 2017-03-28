class File extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("user");
    }
    public function index()
    {
           $data['ResAre']=$this->user->loginvalidate();
          if($data['ResAre'])
          {
              redirect( base_url().'index.php/manage_page');
          }
         else
         {
             redirect( base_url().'index.php/login_page');
         }
    }
}
