<?php
session_start();

$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Subir')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // la informacion del archivo
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];    //podemos implementar que no se suban archivos muy pesados.
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // elegimos un nombre para el archivo
    $newFileName =  $_SESSION['login'] . '.' . $fileExtension;

    // comprobamos si el archivo es de las extensiones correctas. para implementar la subida de otro tipo de arvhicos se añaden al array
    $allowedfileExtensions = array('jpg');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      //directorio para guardar la imagen
      $uploadFileDir = 'img/';

      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='Foto subida correctamente';
      }
      else 
      {
        //$message = 'Ha ocurrido un error. Revise que el directorio existe y se puede escribir en el.';
      }
    }
    else
    {
      //Mensaje si el tipo de archivo no es el permitido
      $message = 'La subida ha fallado. El tipo de archivo permitido es "' . implode(',', $allowedfileExtensions) . '"';
    }
  }
  else
  {
      //mensaje de exito
    $message = 'La subida ha fallado. <br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}

$_SESSION['message'] = $message;
header("Location: administracion.php");   // Volvemos a la pagina de administracion
?>
