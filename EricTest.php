<?php
	require "innor\Panchunmei.php";
	class EricTest{
		
		public function test(){
			$panchunmei = new Panchunmei();
			$t = $panchunmei->getName();
			echo $t;
		}
		
	}

?>