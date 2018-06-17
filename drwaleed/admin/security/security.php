<?php
class security
{
	
	function validateInput($input){
            
        $error=false;
        $potenial_error=0;
        
        $forbidden=array('..','-','"');
        for($i=0;$i<sizeof($forbidden);$i++){
            if(strpos($input, $forbidden[$i])!==false){
                $error=true;
                break;
            }    
        }
        
         if(strpos($input, "'")!==false){
             
             $error=true;   
         }
        
        
        
        $potenial_error_elements=array('select','update','*','from','delete','drop','where','and','or');
        for($i=0;$i<sizeof($potenial_error_elements);$i++){
            if(strpos($input, $potenial_error_elements[$i])!==false){
                $potenial_error++;
            }    
        }

        if($potenial_error>1){
            $error=true;
        }
    return $error;
}
	
	
	
	
	
}


?>