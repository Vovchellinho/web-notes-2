<?php
    include("db/notes.php");
    
    if(isset($_POST['but_save'])){
        if($_POST['hidden_choise']=="None"){
            $text = $_POST['note_field'];
            if(strlen(trim($text))!==0){
                insert_note($text);
            }
        }
        else{
            $text_note = $_POST['note_field'];
            $id_note = $_POST['hidden_choise'];
            update_note($id_note, $text_note); 
        }
    }
    elseif(isset($_POST['but_del'])){
        $id_note = $_POST['hidden_choise'];
        del_note($id_note);
    }
?>
