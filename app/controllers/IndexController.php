<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$this->view->bendahara = Bendahara::find([
    		'order' => "tanggal ASC" 
    		]);
    	$result                = $this->db->fetchAll("SELECT SUM(besar) FROM `bendahara`");
    	$this->view->total     = $result[0]['SUM(besar)'];
    }

}

