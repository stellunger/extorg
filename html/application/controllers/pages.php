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
			case 'kamaz_53228':
				$data['title'] = 'Экскаваторы-планировщики на базе шасси КамАЗ 53228';
				break;
			case 'kamaz_65111':
				$data['title'] = 'Экскаваторы-планировщики на базе шасси КамАЗ 65111';
				break;
			case 'ural':
				$data['title'] = 'Экскаваторы-планировщики на базе шасси Урал 4320';
				break;
			case 'man':
				$data['title'] = 'Экскаваторы-планировщики на базе шасси MAN TGA 33.350';
				break;
			case 'maz_6303':
				$data['title'] = 'Экскаваторы-планировщики на базе шасси МАЗ 6303';
				break;
			case 'maz_631705':
				$data['title'] = 'Экскаваторы-планировщики на базе шасси МАЗ 631705';
				break;
			case 'drilling':
				$data['title'] = 'Установки горизонтального направленного бурения';
				break;
			case 'iveco':
				$data['title'] = 'Экскаваторы-планировщики на базе шасси Iveco';
				break;
			case 'volvo':
				$data['title'] = 'Экскаваторы-планировщики на базе шасси Volvo';
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

