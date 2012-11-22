<?php /* @var $usuario Usuario */ ?>
<?php

class myUser extends sfBasicSecurityUser{
    
    protected $usuario_db;

    public function iniciarSesion(Usuario $usuario){                
        //guardo el objeto usuario en la sesion
        
       
        //Seteo el atributo "nombre" del usuario
       
        $this->setAttribute("user", $usuario->getUser());
        $this->setAttribute("pass", $usuario->getPassword());
        //Seteo el atributo "dni" del usuario
        $this->setAttribute("rol", $usuario->getRol()->getDescripcion());
        //autentico el usuario.
        $this->setAuthenticated(true);
    }       
     
    
    public function cerrarSesion(){       
        $this->getAttributeHolder()->clear();
        $this->setAuthenticated(false);
        $this->clearCredentials();
    }
    
    public function setErrorLogin($msj){
        $this->setAttribute('error_login',$msj);        
    }
    
    public function setPassword($nuevo_pass){
        $this->setAttribute('pass',$nuevo_pass);        
    }
    
    public function getErrorLogin(){
        return $this->getAttribute('error_login',"");        
    }
    
    public function removerErrorLogin(){
        $this->getAttributeHolder()->remove('error_login');
    }        
    
}
