<?php 
	class Home extends Controllers{
		public function __construct(){
			parent::__construct();

		}

		public function home(){
			$data['page_id'] = 1; 
			$data['page_tag'] = "home";
			$data['page_title'] = "Pagina principal";
			$data['page_name'] = "home";
			$data['page_coment'] = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias qui, expedita! Hic soluta modi sapiente id et quod eum nam incidunt maxime laboriosam illo, quis qui aperiam alias. Amet, hic.";
			$this->views->getView($this,"home",$data);
		}

	 


	}
 
 ?>