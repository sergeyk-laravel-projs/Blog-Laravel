<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;

use Corp\Http\Requests;

class SiteController extends Controller
{
    //
    
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;
    
    
    protected $temlate;
    
    protected $vars = array();
    
    protected $contentRightBar = FALSE;
	protected $contentLeftBar = FALSE;
	
    
    protected $bar = FALSE;
    
    
    public function __construct() {
		
	}
	
	
	protected function renderOutput() {
		

		return view($this->template)->with($this->vars);
	}
    
    
}
