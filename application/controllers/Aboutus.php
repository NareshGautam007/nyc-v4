<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $head = array();
        $data = array();

        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $this->render('aboutus', $head);
    }


}
?>