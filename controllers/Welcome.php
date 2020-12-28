<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');

		


	}

	//public function signup()
	//{

		//$this->load->view('signup.php');



	//}

	public function book()

	{
		$this->load->view('Books.php');
	}









	



	function download()
{
	    $this->load->helper('download');

        $data = file_get_contents("download/China-Rich-Girlfriend.pdf"); // Read the file's contents
		$name = 'China-Rich-Girlfriend.pdf';

        force_download($name, $data);
}


       

        public function do_upload()
        {
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'pdf';
                
                //$this->load->view('upload_form', array('error' => ' ' ));

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }



        public function rich(){


	$this->load->view('rich_china_girl.php');
}


 public function richpeople(){


	$this->load->view('rich_people_problem.php');
}



function download1()
{
	    $this->load->helper('download');

        $data1 = file_get_contents("download/Rich People Problems.pdf"); // Read the file's contents
		$name1 = 'Rich People Problems.pdf';

        force_download($name1, $data1);
}



public function feluda1(){

	$this->load->view('feluda1.php');




}


function download2()
{
	    $this->load->helper('download');

        $data2 = file_get_contents("download/Feluda Samagra-Part-1.pdf"); // Read the file's contents
		$name2 = 'Feluda Samagra-Part-1.pdf';

        force_download($name2, $data2);
}



public function cra(){

		$this->load->view('crazy_rich_asians.php');

}


function download3()
{
	    $this->load->helper('download');

        $data3 = file_get_contents("download/Crazy Rich Asians.pdf"); // Read the file's contents
		$name3 = 'Crazy Rich Asians.pdf';

        force_download($name3, $data3);
}



public function feluda2(){

		$this->load->view('feluda2.php');



}



function download4()
{
	    $this->load->helper('download');

        $data4 = file_get_contents("download/FELUDA SOMOGRO-2.pdf"); // Read the file's contents
		$name4 = 'FELUDA SOMOGRO-2';

        force_download($name4, $data4);
}


public function kakababu(){

	$this->load->view('kakababu.php');



}


function download5()
{
	    $this->load->helper('download');

        $data5 = file_get_contents("download/Kakababu Samagra Volume-1.pdf"); // Read the file's contents
		$name5 = 'Kakababu Samagra Volume-1';

        force_download($name5, $data5);
}


public function android(){

	$this->load->view('android.php');



}


function download6()
{
	    $this->load->helper('download');

        $data6 = file_get_contents("download/Android Recipes.pdf"); // Read the file's contents
		$name6 = 'Android Recipes';

        force_download($name6, $data6);
}



public function head(){

	$this->load->view('head.php');



}


function download7()
{
	    $this->load->helper('download');

        $data7 = file_get_contents("download/Head-First-Java-2nd.pdf"); // Read the file's contents
		$name7 = 'Head-First-Java-2nd';

        force_download($name7, $data7);
}


public function computer(){

	$this->load->view('computer.php');



}


function download8()
{
	    $this->load->helper('download');

        $data8 = file_get_contents("download/Computer Systems - A Programmer s Perspective - 3rd Edition.pdf"); // Read the file's contents
		$name8 = 'Computer Systems - A Programmer s Perspective - 3rd Edition';

        force_download($name8, $data8);
}






}





?>
