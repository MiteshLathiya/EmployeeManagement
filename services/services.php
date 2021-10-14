<?php
class services
{

   
    public function check_mime($mimetype,$file_size,$countimg) {
	
        $this->limit_img = 3;
        $this->maxsize = 2097152;
        $this->allowedfileExtensions = array('image/png');


        if (in_array($mimetype, $this->allowedfileExtensions)){
            return 1;
            }else {
                return 0;
            }	
            

        if ($file_size < $this->maxsize) {
            return 1;
        }else {
            return 0;
        }

        if ($countimg < $this->limit_img) {
            return 1;
        }else {
            return 0;
        }

    }

   
    public function setunsetcookie($em,$pass)
    {
        
			if (!empty($_POST["remember_me"])) {
      
                setcookie('em', $em, time() + 3600 * 24 * 15);
                setcookie('pass', $pass, time() + 3600 * 24 * 15);
                 
            }
            else
            {
                setcookie('em', $em, time() - 3600 * 24 * 15);
                setcookie('pass', $pass, time() - 3600 * 24 * 15);
            }
			
		
    }
    
}
?>