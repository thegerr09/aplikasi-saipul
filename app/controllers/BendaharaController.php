<?php

class BendaharaController extends Phalcon\Mvc\Controller
{

    public function createAction()
    {
    	$this->view->disable();
    	
    	$data          = new Bendahara();
		$data->tanggal = $this->request->getPost("tanggal");
		$data->ket     = $this->request->getPost("ket");
		$data->besar   = $this->request->getPost("besar");
		$data->user    = $this->request->getPost("user");
		$data->nota    = $this->request->getPost("nota");
		
		$data->save();
    }

    public function updateAction()
    {
    	$this->view->disable();
    	
        $id   = $this->request->getPost("id");
    	$data = Bendahara::findFirst($id);
		
        $data->tanggal = $this->request->getPost("tanggal");
		$data->ket     = $this->request->getPost("ket");
		$data->besar   = $this->request->getPost("besar");
		$data->user    = $this->request->getPost("user");
		$data->nota    = $this->request->getPost("nota");
		
		$data->save();
    }

    public function deleteAction()
    {
    	$this->view->disable();
    	$id   = $this->request->getPost("id");
    	$data = Bendahara::findFirst($id);
    	
    	$data->delete();
    }

}

