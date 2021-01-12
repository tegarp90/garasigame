<?php
	
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/navbar');
    if(@$content!='')
    {
    $this->load->view(@$content);
    }
    $this->load->view('modal/modal_sign');
?>