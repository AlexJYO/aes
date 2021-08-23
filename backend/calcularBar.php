<?php
	
	function calcularBarP($noSc,$nivelAp,$noPo,$fechaE)
	{
		$barP=10;
		if ($fechaE=='' || $fechaE==NULL) {
			$fe=0;
		}else{
			$fe=1;
		}

		if($noSc>0)
		{
			$barP+=10;
			if ($nivelAp>0) {
				if ($nivelAp==1) {
					$barP+=10;
				}
				if ($nivelAp==2) {
					$barP+=20;
				}
				if ($nivelAp==3) {
					$barP+=30;
				}
				if ($nivelAp==4) {
					$barP+=40;
					if ($noPo>0) {
						$barP+=10;
						if ($fe>0) {
							$barP+=10;
						}
					}
				}

			}
		}

		return $barP;
	}
?>