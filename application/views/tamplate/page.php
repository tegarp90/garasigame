<?php
	
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/navbar');
    if(@$content!='')
    {
    $this->load->view(@$content);
    }
?>
