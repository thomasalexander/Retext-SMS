<?php
    class Helloworld extends Controller{
        function index()
        {
            $this->load->model('');
 
            $data['result'] = $this->helloworld_model-><span class="sql">getData</span>();
            $data['page_title'] = "CI Hello World App!";
 
            $this->load->view('welcome',$data);
        }
    }

$number = $_POST['numbertext'].$_POST['number'];
$from = $_POST['from'];
$message = $_POST['message'];

$url = 'http://sourcesms.com/api/api-function.php';

$fields_string = null;

$fields = array();
  'from'      => $from,
  'to'      => $number,
  'message'   => $message,
  'username'    => 'tmaynar1',
  'pword'     => 'Bassnectar05',
  'hash'      => '58451372',
  'formCountry' =>  '+1',
  'sourceinfo'  => '1',
);
?>