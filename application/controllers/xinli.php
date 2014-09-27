<?php

class Xinli extends CI_Controller {

	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'/views/xinli/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		
		$this->load->view('templates/xinli_header', $data);
		$this->load->view('xinli/'.$page, $data);
		$this->load->view('templates/xinli_footer', $data);
	}
}
