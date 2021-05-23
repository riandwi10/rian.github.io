<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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

	//tampilan awal TA
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('awal');
		$this->load->view('templates/footer');
	}

	//salah
	public function index1()
	{
		//$this->load->view('home');
		//	$this->load->view('templates/header');
		$this->load->view('home');
		//$this->load->view('templates/footer');
	}
	public function tentang()
	{
		$this->load->view('templates/header');
		$this->load->view('tentang');
		$this->load->view('templates/footer');
	}

	public function kontak()
	{
		$this->load->view('templates/header');
		$this->load->view('contact');
		$this->load->view('templates/footer');
	}
	public function galery()
	{
		$this->load->view('templates/header');
		$this->load->view('galery');
		$this->load->view('templates/footer');
	}
}
