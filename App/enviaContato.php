<?php

use App\db;

require_once('db.php');

require_once("recaptchalib.php");

// definir a chave secreta
$secret = "6Lf9tckZAAAAALewsAbkN37Zd8rVgRzU9lG1eJdz";

// verificar a chave secreta
$response = null;
$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
}

try{

    if ($response != null && $response->success) {

        $conn = db::conecta();

        $sql_insert = "Insert Into n015 (dat015, hor015, nom015, ema015, ass015, des015, tel015) 
                        Values (current_date, current_time, :nom015, :ema015, :ass015, :des015, :tel015);";
        $conn = Db::conecta();
        $stmt = $conn->prepare($sql_insert);    
        $stmt->bindValue(':nom015', $_POST['nom015']);
        $stmt->bindValue(':ema015', $_POST['ema015']);
        $stmt->bindValue(':ass015', $_POST['ass015']);
        $stmt->bindValue(':des015', $_POST['des015']);
        $stmt->bindValue(':tel015', $_POST['tel015']);

        $stmt->execute();    
    }

} catch (PDOException $e){
   echo "<pre>";var_dump($e->getMessage( ));exit;   
}

header('Location: ..\..\index.php');