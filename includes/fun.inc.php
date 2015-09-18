<?php

//++++++++++++++++++++++++++++++++            
            //Начальные параметры
            $tableName="feedbackdb";
            
            $notesOnPage = 10;  // Кол-во отзывов на странице
            $selectPage = 1;
            
//++++++++++++++++++++++++++++++++
if (!empty($_GET['page'])){
        $selectPage = $_GET['page'];
}

function nextPage($i,$pagesCount){
    if ($i == 0) {
            $i = 1;
    }
    if ($i < $pagesCount) {
        $i++;
        return '#page'.$i;
    }else {
        return '#page'.$i;
    }    
}

function prevPage($i){
    
    if ($i > 1) {
        $i--;
        return '#page'.$i;
    }else {
        return '#page'.$i;
    }
    
}

function MyStars($count){
    $starHtml = '<div>';
    for ($i=1; $i<6; $i++){
        if ($count >0) {
           $starHtml.='<span class="glyphicon .glyphicon-star-empty glyphicon-star"></span>' ;
        }else{ 
            $starHtml.='<span class="glyphicon .glyphicon-star-empty glyphicon-star-empty"></span>';
        }
        --$count;
    }
    $starHtml.= '</div>';
    return $starHtml;
}    

function dbConnect(){
    $link  =  mysqli_connect("localhost","qauser",'P@$$word',"qastartup");
    $dateLang ="ru_RU";
        /* Проверка соединения */ 
        if (mysqli_connect_errno()) { 
            printf("Подключение невозможно: %s\n", mysqli_connect_error()); 
            exit(); 
        } else {
            $res = "connection ok...<BR />";    
            mysqli_query ( $link, "SET NAMES utf8" );
            // Русский язык календаря    
            mysqli_query($link, "SET lc_time_names =".$dateLang);
        }
    return $link;    
}

function getAllNotes($link,$tableName){
    $query= "SELECT id, name,email,course, stars, text, "
            . "DATE_FORMAT(pubdate,'%d %M %Yг') AS publicdate, img, enable "
            . "FROM ".$tableName." ORDER BY pubdate DESC"; // LIMIT ".$fromNote.", ".$notesOnPage;
    $result = mysqli_query($link, $query) or die("Error " . mysqli_error($link)) ;
        $i=0;
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $rows[$i] = $row;
            $i++;
        }
    return $rows;
}

function getCountNotes($link,$tableName){
        $result = mysqli_query($link, "SELECT  COUNT(enable) FROM ".$tableName);                   
        $row = mysqli_fetch_array($result);                      
        return $row[0];  
}

function divPages($selectPage, $pagesCount){
    $pageOut ='';
    for ($i=1;$i<= $pagesCount;$i++){
        switch ($i){
            case $selectPage: $active='class="active"';break;
            default : $active='';
        }
        $pageOut.=  '<li '.$active.'><a class = "page-num selector" href="#page'.$i.'">'.$i.'</a></li>';
    }
    if ($tpl = file_get_contents('../includes/pagediv.html')){
         $tpl = str_replace('{prevPage}', prevPage($selectPage,$pagesCount), $tpl);                    
         $tpl = str_replace('{pagesOutput}', $pageOut, $tpl);                    
         $tpl = str_replace('{nextPage}', nextPage($selectPage,$pagesCount), $tpl);                                        
         echo $tpl;
    }
}

//Выводит отзывы
function viewNotes($rows,$fromNote = 0,$notesOnPage,$pagesCount,$selectPage = 1,$admin = 0){
    /*   echo '<pre>';
        print_r ($rows);
        echo '</pre>'; 
    */
    
     // Вывод нумерации страниц
     //divPages($selectPage,$pagesCount);
     $extensions = array('jpeg', 'jpg', 'png', 'gif');
     $num = 1;
     
      foreach ($rows as $note => $row){
        if (($fromNote <= $note) and ( $note < ($fromNote+$notesOnPage))){
               
               if (empty($row['name'])) { 
                   break;                                      
               }
               if ($admin == 0) {
                   $tpl = file_get_contents('../includes/feednote.html');
               }else{
                   $tpl = file_get_contents('../includes/feednote-admin.html');
                   $tpl = str_replace('{id-feedback}', $row['id'], $tpl); 
                   $tpl = str_replace('{num}', $num++, $tpl);
               }
               $tpl = str_replace('{name}', $row['name'], $tpl);
               $tpl = str_replace('{stars}', MyStars($row['stars']), $tpl);
               $tpl = str_replace('{pubdate}', $row['publicdate'], $tpl);
               if (!empty($row['img'])){
                    $ext = strtolower(pathinfo($row['img'], PATHINFO_EXTENSION));
                    if ( file_exists('./'.$row['img']) and is_file('./'.$row['img'])){ //(in_array($ext, $extensions) and 
                       $tpl = str_replace('{avatar}', $row['img'], $tpl); 
                       }else {
                        $tpl = str_replace('{avatar}','images/avatars/qa.jpg', $tpl);
                        //$tpl = str_replace('{avatar}', $row['img'].'-error', $tpl); 
                    }                    
               }else{
                   $tpl = str_replace('{avatar}','images/avatars/qa.jpg', $tpl);
               }
               $tpl = str_replace('{course}', $row['course'], $tpl);
               $tpl = str_replace('{text}', $row['text'], $tpl); 
               
               echo $tpl;
               }
    }
    
    // Вывод нумерации страниц
    divPages($selectPage,$pagesCount);

}

//Проверка авторизации 
function auth(){
    if (session_status() === PHP_SESSION_ACTIVE){
        if ($_SESSION['authorized'] == 1) {
            return true;   
        }else {
            return false;
        }
    }           
}

// Ресайзилка и обрезалка картинок                
function cropToFit($sourcePath, $destPath, $destSizeW = 75,$destSizeH = 75){                
 //$sourcePath = 'images/avatars/zaya.png';
    /*
     * Add file validation code here
     */

    list($sourceWidth, $sourceHeight, $source_type) = getimagesize($sourcePath);

    switch ($source_type) {
        case IMAGETYPE_GIF:
            $sourceGdim = imagecreatefromgif($sourcePath);
            break;
        case IMAGETYPE_JPEG:
            $sourceGdim = imagecreatefromjpeg($sourcePath);
            break;
        case IMAGETYPE_PNG:
            $sourceGdim = imagecreatefrompng($sourcePath);
            break;
    }

    $sourceAspectRatio = $sourceWidth / $sourceHeight;
    $desiredAspectRatio = $destSizeW / $destSizeH;

    if ($sourceAspectRatio > $desiredAspectRatio) {
        /*
         * Triggered when source image is wider
         */
        $tempHeight = $destSizeH;
        $tempWidth = ( int ) ($destSizeH * $sourceAspectRatio);
    } else {
        /*
         * Triggered otherwise (i.e. source image is similar or taller)
         */
        $tempWidth = $destSizeW;
        $tempHeight = ( int ) ($destSizeW / $sourceAspectRatio);
    }

    /*
     * Resize the image into a temporary GD image
     */

    $tempGdim = imagecreatetruecolor($tempWidth, $tempHeight);
    imagecopyresampled(
        $tempGdim,
        $sourceGdim,
        0, 0,
        0, 0,
        $tempWidth, $tempHeight,
        $sourceWidth, $sourceHeight
    );

    /*
     * Copy cropped region from temporary image into the desired GD image
     */

    $x0 = ($tempWidth - $destSizeW) / 2;
    $y0 = ($tempHeight - $destSizeH) / 2;
    $desiredGdim = imagecreatetruecolor($destSizeW, $destSizeH);
    imagecopy(
        $desiredGdim,
        $tempGdim,
        0, 0,
        $x0, $y0,
        $destSizeW, $destSizeH
    );

    /*
     * Render the image
     * Alternatively, you can save the image in file-system or database
     */

    //header('Content-type: image/jpeg');
    //imagejpeg($desiredGdim);    
    imagejpeg($desiredGdim, $destPath, 100);
    unlink($sourcePath);
}