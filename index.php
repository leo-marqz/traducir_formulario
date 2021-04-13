<?php 
  include('procesar.php');

  $process = new Process();
  $data = $process->Language('en');
  $color = "";
  $message = "";


  $language = "-- . -- . --";
  $email = "-- . -- . --";
  $first_name = "-- . -- . --";
  $last_name = "-- . -- . -- ";

  if(isset($_POST['send_data'])){
    $language = $_POST['Language'];

    $language_select = $_POST['Language'];
    $data = $process->Language($language);
    

    if($_POST['email'] == ""){
      $email = "---- . ---";
      $color = "danger";

      if($_POST['Language'] == "en"){
        $message = "Enter an email address";
      }
      if($_POST['Language'] == "es"){
        $message = "Ingresa un correo electronico";
      }
      if($_POST['Language'] == "it"){
        $message = "Inserisci un indirizzo e-mail";
      }
      if($_POST['Language'] == "pt"){
        $message = "Introduzir um endereço de correio electrónico";
      }
    }else{
      $message = "";
      $color = "";

      if($_POST['first_name'] == ""){
        $first_name = "---- . ---";
        $color = "danger";

        if($_POST['Language'] == "en"){
          $message = "Enter an email address";
        }
        if($_POST['Language'] == "es"){
          $message = "Ingresa un nombre";
        }
        if($_POST['Language'] == "it"){
          $message = "Inserisci un nome";
        }
        if($_POST['Language'] == "pt"){
          $message = "Introduza um nome";
        }
      }else{
        $message = "";
        $color = "";

        if($_POST['last_name'] == ""){
          $last_name = "---- . ---";
          $color = "danger";
  
          if($_POST['Language'] == "en"){
            $message = "Enter your last name";
          }
          if($_POST['Language'] == "es"){
            $message = "Ingresa tu apellido";
          }
          if($_POST['Language'] == "it"){
            $message = "Inserisci il tuo cognome";
          }
          if($_POST['Language'] == "pt"){
            $message = "Digite o seu apelido";
          }
      }else{
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        // $data = $process->Language($language);
        $color = "success";
        
        if($_POST['Language'] == "en"){
          $message = "data processed successfully";
        }
        if($_POST['Language'] == "es"){
          $message = "Datos procesados con exito";
        }
        if($_POST['Language'] == "it"){
          $message = "Dati elaborati con successo";
        }
        if($_POST['Language'] == "pt"){
          $message = "Dados processados com sucesso";
        }
      }
    }
 }
}

?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/img.jfif" type="image/x-icon">
    <title>Traducir Formulario</title>
    <style>
      body {
        background: #0F2027;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #2C5364, #203A43, #0F2027);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        padding-top: 50px;
      }
    </style>
  </head>

  <body>
    <div class="container mt-1">
      <div class="row ">
        <div class="col-md-6 mx-auto">

          <div id="alert" class="alert alert-<?php echo $color; ?> role=" alert">
            <?php echo $message; ?>
          </div>

          <form id="form" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="border rounded-2 p-3 bg-white">
            <div class="m-3 d-flex justify-content-end">
              <label for="email" class="text-secondary me-1"><?php echo $data['Title_Languaje']; ?></label>
              <select name="Language"  class="text-secondary">
                <option value="<?php echo $language_select; ?>" >---</option>
                <option value="en">English</option>
                <option value="es">Spanish</option>
                <option value="it">Italian</option>
                <option value="pt">Portuguese</option>
              </select>
            </div>
            <div class="m-3">
              <label id="title_email" class="text-secondary" for="email"><?php echo $data['Title_Email']; ?></label>
              <input type="text" name="email" class="form-control" placeholder="Email@gmail.com" autofocus>
            </div>
            <div class="m-3">
              <label id="title_first_name" class="text-secondary" for="firstName"><?php echo $data['Title_First_Name']; ?></label>
              <input type="text" name="first_name" class="form-control" placeholder="Juanito">
            </div>
            <div class="m-3">
              <label id="title_last_name" class="text-secondary" for="lastName"><?php echo $data['Title_Last_Name']; ?></label>
              <input type="text" name="last_name" class="form-control" placeholder="Perez">
            </div>
            <div class="m-3">
              <button name="send_data" class="btn btn-primary">Send Data</button>
            </div>
          </form>
        </div>
      </div>
      <br>

    </div>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <hr class="text-white p-1">
          <h1 class="text-white bg-dark p-2"><?php echo $data['data']; ?></h1>
          <hr class="text-white p-1">
          <table class="table table-bordered table-light table-hover text-dark">
            <tbody>
              <tr>
                <th><?php echo $data['Title_Languaje']; ?></th>
                <td> <?php echo $language; ?></td>
              </tr>
              <tr>
                <th><?php echo $data['Title_Email']; ?></th>
                <td><?php echo $email; ?></td>
              </tr>
              <tr>
                <th><?php echo $data['Title_First_Name']; ?></th>
                <td><?php echo $first_name; ?></td>
              </tr>
              <tr>
                <th><?php echo $data['Title_Last_Name']; ?></th>
                <td><?php echo $last_name; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>


  </body>

</html>