<?php

	class kisi{
		
		public $isim;
		public $boy;
		public $kilo;
		public $dizi;
		
		public function ekle($a,$b,$c){
			$this->isim = $a;
			$this->boy = $b;
			$this->kilo = $c;
		}
		
		public function bilgiler(){
			$this->dizi = array($this->isim,$this->boy,$this->kilo);
			return $this->dizi;
		}
		
	}

?>
