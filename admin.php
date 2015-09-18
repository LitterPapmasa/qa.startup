<?php include "header2.php"; ?>
<?php require "includes/fun.inc.php"; ?>
<?php
if (auth() == false) {
    $authStatus =  '<h1> UN Autorized </h1>';
    $id = 'empty';
    
    if (isset($_POST['auth_name'])) {
        echo "isset == true<br>";
          $name=  strtolower(mysql_escape_string($_POST['auth_name']));
          $pass=mysql_escape_string($_POST['auth_pass']);
          if ($name == 'admin' and  $pass == 'ASDqwe123'){
             session_start();
             $authStatus = '<h1> Autorized </h1>';
             $id = session_id();
             
             $_SESSION['authorized'] = 1;                           
          }
          elseif ($name == "logout"){
             session_destroy();
             session_write_close();         
             
          }        
          else {
            echo '<h1>Wrong login or pass</h1>';
            //exit;
          }
    }else {
        $authStatus = "<h1> Autorization:  </h1>";
    }
}else{
    $authStatus = '<h1> Autorized </h1>';     
    
    if  ($_SERVER['REQUEST_METHOD'] == 'POST'){        
        /*for ($idNum = 1;$idNum <= 20;$idNum++){
            if (!empty($_POST['forDel_'.$idNum])){
                $number = strip_tags(trim($_POST['forDel_'.$idNum]));
                $delArr['1'] = $number;
            }else $delArr['1'] = 'empty';
        }
        */
        $delArr = $_POST['forDel_1'];
        /*foreach ()
        $deleted = 
         
         */
    echo '<h1><br><br>';
        print_r($delArr);
    echo '</h1>';
}
}
?>
 <section id="feedback">
<?php if (auth() == false) :?>
     <h1> <?php echo $authStatus ?> </h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
             <input type="text" name="auth_name"><br>
             <input type="password" name="auth_pass"><br>
             <input type="submit"><br>
         </form>
     
     <p>    <?php echo "session id".$id;?>  </p>
    </section>
<?php else:

            if (empty($countNotes) or empty($allNotes)) {
                 //Соединение с базой данных
                 require_once "includes/fun.inc.php";   
                 $link =  dbConnect();   
                 $notesOnPage = 20;
                 // Запрос выборки данных            
                 $allNotes = getAllNotes($link,$tableName);
                 //Считаем кол-во записей
                 $countNotes = getCountNotes($link,$tableName);

                 mysqli_close($link);

                 $fromNote = ($notesOnPage*$selectPage - $notesOnPage);
                 $pagesCount= ceil($countNotes / $notesOnPage);  
             }
?>

<div class="navbar">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">             
             <input type="input" name="auth_name" value="Admin" hidden="hidden">
             <input type="input" name="auth_pass" value="ASDqwe123" hidden="hidden">
             <input type="button" name="sel" value="select" onclick="selChekAll();"><br>
             <input type="submit"><br>
    </form>
</div>
<div class="message-item no-flickr animation-fadeIn">
        <table class="table-hover">
<?php           viewNotes($allNotes,$fromNote,$notesOnPage,$pagesCount,$selectPage,1);
           // print_r($forDel[]);
        endif;
?>
        </table>   
    
</div>
<?php echo $delArr; ?>

<?php include "footer.php"; ?>

