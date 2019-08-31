<?php 
    echo 'Alas/Tinggi : ';
    $input = trim(fgets(STDIN));
    function prima($n = 30)
    {
    	$result = [];
    	for ($i=1; $i <= $n; $i++) { 
    		$counter = 0;
    		for ($j=1; $j <= $i; $j++) { 
    			if ($i % $j == 0) {
    				$counter++;
    			}
    		}
    		if ($counter==2) {
    			$result[] = $i;
    		}
    	}
    	return $result;
    }
    if ($input>0 && $input<10) {
        $arrayLength = count(prima());
        $array = prima();
        for ($i=0; $i < $input; $i++) { 
        	for ($j=0; $j < $arrayLength; $j++) {
        		if ($i==$j) {
        			echo ' ' . $array[$j];
        		} else {
        			if ($i>=$j) {
        				echo ' ' . $array[$j];
        			}
        		}
        	}
        	echo PHP_EOL;
        }
    }
    else{
        echo 'Tidak memenuhi syarat 0 < Alas/Tinggi <10';
    }
?>