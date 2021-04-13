<?php 

  class Process{
    private $data;

    public function __construct(){
      $this->data = [];
    }  

    public function Language($language){
      //ingles
      if($language == "en"){
        $this->data = [
          "Title_Languaje"=>"Language",
          "Title_Email"=>"Email Address",
          "Title_First_Name"=>"First Name",
          "Title_Last_Name"=>"Last Name",
          "data"=>"Data"
        ];
      }

      //español
      if($language == "es"){
        $this->data = [
          "Title_Languaje"=>"Lenguaje",
          "Title_Email"=>"Dirección De Correo Electrónico",
          "Title_First_Name"=>"Primer Nombre",
          "Title_Last_Name"=>"Apellido",
          "data"=>"Datos"
        ];
      }

      //italiano
      if($language == "it"){
        $this->data = [
          "Title_Languaje"=>"Lingua",
          "Title_Email"=>"Indirizzo E-mail",
          "Title_First_Name"=>"Nome",
          "Title_Last_Name"=>"Cognome",
          "data"=>"Dati"
        ];
      }

      //portugues
      if($language == "pt"){
        $this->data = [
          "Title_Languaje"=>"Lingua",
          "Title_Email"=>"Endereço De Correio Electrónico",
          "Title_First_Name"=>"Primeiro Nome",
          "Title_Last_Name"=>"Apelido",
          "data"=>"Dados"
        ];
      }

      return $this->data;
    }
  }

?>