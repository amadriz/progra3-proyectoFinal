<?php
require_once './libs/smarty_4_3_1/configuracion.php';
//Crear clase
class control{
    //Atributos de la clase
    
    private $objModel;
    private $objsmarty;
    
    //Controlador inicializa los atributos de la clase
    
    function __construct(){
    
        $this->objModel = "";
        $this->objsmarty = new configuracion();

    
    }
    
    public function getObjModel(){
        return $this->objModel;
    }
    
    public function setObjModel($objModel){
        $this->objModel = $objModel;
    }
    
    
    public function gestion_procesos(){
        $this->objsmarty->setDisplay("index.tpl");
    }
    
    
    
    }//Cierre de clase

    ?>