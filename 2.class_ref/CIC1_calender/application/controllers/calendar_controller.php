<?php
class Calendar_controller extends CI_Controller
{  
	function index()
	{
			$this->load->library('calendar');
	        echo $this->calendar->generate();
	}

	function index1()
	{
			$this->load->library('calendar');
	        echo $this->calendar->generate(2006,6);
	}

	function index2()
	{
			$this->load->library('calendar');
			$data = array(
               3  => 'http://example.com/news/article/2006/03/',
               7  => 'http://example.com/news/article/2006/07/',
               13 => 'http://example.com/news/article/2006/13/',
               26 => 'http://example.com/news/article/2006/26/'
             );
	        echo $this->calendar->generate(2006, 6, $data);
	}

	function index3()
	{
        $prefs = array (
               'start_day'    => 'sunday',
               'month_type'   => 'long',
               'day_type'     => 'short'
             );

        $this->load->library('calendar', $prefs);
        echo $this->calendar->generate();
	}

/* */
	function index4($year=null, $month=null)
	{
        $prefs = array (
               'start_day'    => 'sunday',
               'month_type'   => 'long',
               'day_type'     => 'short',
               'show_next_prev' => 'TRUE',
               'next_prev_url'   => base_url().'/calendar_controller/index4'
             );

        $this->load->library('calendar', $prefs);
        echo $this->calendar->generate($year, $month);
	}
/* */
} 