<?php
session_start();

$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Subir')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // sanitize file-name
    $newFileName =  $_SESSION['login'] . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = 'img/user/';
      // $uploadFileDir .= $_SESSION['login'];
      // $uploadFileDir .= $fileExtension;

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
      $message = 'La subida ha fallado. El tipo de archivo permitido es "' . implode(',', $allowedfileExtensions) . '".';
    }
  }
  else
  {
    $message = 'La subida ha fallado. <br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}


//$new_name = '{$user}'

//rename($newFileName ,$new_name);



$_SESSION['message'] = $message;
header("Location: modificar_usuario_admin.php");
