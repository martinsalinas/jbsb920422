<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use HomeBundle\Entity\ClothType;
USE HomeBundle\Form\ClothTypeType;

class ProcesarController extends Controller {

    public function logInAction() {
    //        return $this->render('HomeBundle:Home:welcome.html.twig');
    //        return new Response('logInAction <3');
    }
    
    public function music22Action()
    {
        
        $carpeta = "files/";
        opendir($carpeta);
        $destino = $carpeta.$_FILES['foto']['name'];
        copy($_FILES['foto']['tmp_name'],$destino);
        echo "Archivo subido exitosamente";
        $nombre=$_FILES['foto']['name'];
        echo "<img src=\"/files/$nombre\">";
        echo $_FILES['foto']['name']."<br>";
        echo $_FILES['foto']['size']."Bytes<br>";
        echo $_FILES['foto']['type'];

        return new Response('logInAction <3');
        
    }
    
    public function music24Action()
    {
        $formatos = array('.jpg', '.png', '.doc', '.xlsx');
        if (isset($_POST['boton'])){
            $nombreArchivo = $_FILES['archivo']['name'];
            $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
            $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
            if(in_array($ext, $formatos))
            {
                if (move_uploaded_file($nombreTmpArchivo, "../../../web/public/images/$nombreArchivo"))
                {
                    echo "Felicitaciones, archivo $nombreArchivo subido exitosamente";
                }else{
                    echo "Ocurrió un error.";
                }
            }else{
                echo "No señor, Archivo no permitido";
            }
        }
    }
    
    public function videoAction()
    {
        
        $carpeta = "files/";
        opendir($carpeta);
        $destino = $carpeta.$_FILES['foto']['name'];
        copy($_FILES['foto']['tmp_name'],$destino);
        echo "Archivo subido exitosamente";
        $nombre=$_FILES['foto']['name'];
        echo "<img src=\"/files/$nombre\">";
        echo $_FILES['foto']['name']."<br>";
        echo $_FILES['foto']['size']."Bytes<br>";
        echo $_FILES['foto']['type'];
//
//        return new Response('logInAction <3');
        
        
        return $this->redirectToRoute('home');
        
    }

}

