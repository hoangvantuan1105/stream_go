<?php  

class controllerAdmin {
    private $adminCon;
    public function __construct()
    {
        
    }
    public function main(){
      include __DIR__ .'/../view/main.php';
    }
   
}