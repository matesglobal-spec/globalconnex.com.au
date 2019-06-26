<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('slider');
		$this->load->view('index');
		$this->load->view('footer');
	}
    public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
    public function study_australia()
    {
        $this->load->view("header");
        $this->load->view("study_australia");
        $this->load->view("footer");
    }
    public function study_newzealand()
    {
        $this->load->view("header");
        $this->load->view("study_newzealand");
        $this->load->view("footer");
    }
    public function study_canada()
    {
        $this->load->view("header");
        $this->load->view("study_canada");
        $this->load->view("footer");
    }
    public function medical_insurance()
    {
        $this->load->view("header");
        $this->load->view("medical_insurance");
        $this->load->view("footer");
    }
    public function travel_arrangement()
    {
        $this->load->view("header");
        $this->load->view("travel_arrangement");
        $this->load->view("footer");
    }
    public function departure_guidance()
    {
        $this->load->view("header");
        $this->load->view("departure_guidance");
        $this->load->view("footer");
    }
    public function accommodation()
    {
        $this->load->view("header");
        $this->load->view("accommodation");
        $this->load->view("footer");
    }
    public function arrival_guidance()
    {
        $this->load->view("header");
        $this->load->view("arrival_guidance");
        $this->load->view("footer");
    }
    public function student_job_search()
    {
        $this->load->view("header");
        $this->load->view("student_job_search");
        $this->load->view("footer");
    }
    public function legal_support()
    {
        $this->load->view("header");
        $this->load->view("legal_support");
        $this->load->view("footer");
    }
    public function banking_tax()
    {
        $this->load->view("header");
        $this->load->view("banking_tax");
        $this->load->view("footer");
    }
    public function career_guidance()
    {
        $this->load->view("header");
        $this->load->view("career_guidance");
        $this->load->view("footer");
    }
    public function global_partner()
    {
        $this->load->view("header");
        $this->load->view("global_partner");
        $this->load->view("footer");
    }
    public function contact()
    {
        $this->load->view("header");
        $this->load->view("contact");
        $this->load->view("footer");
    }
    
}
