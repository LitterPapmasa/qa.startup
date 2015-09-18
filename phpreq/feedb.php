
<?php

if (empty($countNotes) or empty($allNotes) ) {
     //Соединение с базой данных     
    if ($_SERVER['PHP_SELF'] == "/phpreq/feedb.php"){
        require_once "../includes/fun.inc.php";
    }else{
     require_once "includes/fun.inc.php";
    }
     $link =  dbConnect();   

     // Запрос выборки данных            
     $allNotes = getAllNotes($link,$tableName);
     //Считаем кол-во записей
     $countNotes = getCountNotes($link,$tableName);

     mysqli_close($link);

     $fromNote = ($notesOnPage*$selectPage - $notesOnPage);
     $pagesCount= ceil($countNotes / $notesOnPage);  
 }
 //-------------------- Ловим Аватарку --------------


if (!empty($_FILES['uf']) and $_FILES['uf']['error'] == 0){
    $max_size = 1500000; // 1,5 mb  */
    $extensions = array('jpeg', 'jpg', 'png', 'gif');
    $avaPath = '../images/avatars/'; 
    $response = '';

    $ext = strtolower(pathinfo($_FILES['uf']['name'], PATHINFO_EXTENSION));

    if ($_FILES['image']['size'] > $max_size){
     //   $response = 'File is too large';
        $avaPath = NULL;
    }else{
        if (in_array($ext, $extensions)){
            $avaPath = $avaPath.uniqid();
            $avaPathExt = $avaPath.'_tmp.'.$ext;
            if (move_uploaded_file($_FILES['uf']['tmp_name'],$avaPathExt)){
                $avaPath.='.jpg';
                cropToFit($avaPathExt, $avaPath,150,150);                
            }

            echo $response;
        }
    }
}
//---------------------Перестаем ловить

 //----- записываем в базу---------------     
 if ($_POST){
     if ($_POST['form-name']=='feedbackdb-form') {
    // $res.= "post[form-name]...ok  <BR />";
         if (!empty($_POST['name']) and !empty($_POST['message'])){

            $link =  dbConnect();
             // escape variables for security
             $name = mysqli_real_escape_string($link, $_POST['name']);
             $email = mysqli_real_escape_string($link, $_POST['email']);
             $course = mysqli_real_escape_string($link, $_POST['courses']);                        
             $stars = (int)(mysqli_real_escape_string($link, $_POST['stars']));
             $pubdate = date("Y-m-d H:i:s");
             $text = mysqli_real_escape_string($link, $_POST['message']);          
             $enable = 0;

             //$res.= "name,mail,stats,text ".$name."|".$email."|".$stars."|".$text."<br />";
             //запись в таблицу
             $query = "INSERT INTO ".$tableName
                    . " (name , email, course, stars ,pubdate ,text ,img , enable) "
                    . "VALUES ('$name','$email','$course','$stars' , '$pubdate', '$text', '$avaPath' , '$enable')";                      
             $result = mysqli_query($link, $query) or die("Error " . mysqli_error($link)) ;
           //  $res.= $result;
             // запись всех коментов в массив
             $allNotes = getAllNotes($link,$tableName);                      
             $countNotes = getCountNotes($link,$tableName);
             $selectPage=1;
             $fromNote = ($notesOnPage*$selectPage - $notesOnPage);
             $pagesCount= ceil($countNotes / $notesOnPage);
             mysqli_close($link);
         }
     }   
 }

 if (!empty($_GET['page'])) {
     $selectPage = (int)$_GET['page'];
     $fromNote = ($notesOnPage*$selectPage - $notesOnPage);
     $pagesCount= ceil($countNotes / $notesOnPage);
 }   


// -- Выводим таблицу с отзывами --------------                     

 viewNotes($allNotes,$fromNote,$notesOnPage,$pagesCount,$selectPage);                 
      
