<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		
		$data['title'] = "Продажа дорожно-строительной техники | Эксторг.рф";

		$this->load->view('header', $data);
		$this->load->view('main-page');
		$this->load->view('footer');
	}

	public function show_page($page_id)
	{

		switch($page_id)
		{
			case 'excavator':
				$data['title'] = 'Экскаваторы-планировщики на автомобильных шасси';
				break;

			case 'drilling':
				$data['title'] = 'Установки горизонтального направленного бурения';
				break;

			case 'about':
				$data['title'] = 'О компании';
				break;

			case 'contacts':
				$data['title'] = 'Контактная информация';
				break;
		}

		$data['title'] .= ' | Эксторг.рф';

		$this->load->view('header', $data);
		$this->load->view($page_id);
		$this->load->view('footer');
	}
}

