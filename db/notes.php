<?php

    require('db/connection.php');
    function get_notes($num_page){
        global $connection;
        $limit = 5;
        $query = "SELECT * FROM list_notes WHERE visible=1;";
        $result = $connection->query($query);
        if(!$result) die('Error result!');
        for($i = $num_page*$limit; $i < ($num_page+1)*$limit; ++$i)
        {
            if($result->data_seek($i)){
                echo '<div onclick="return UpdateText(this)" id="id_div' . $i . '" class="note"> <div class="note_text">' . $result->fetch_assoc()['text'] . '</div><div class="note_id" id="note_id">';
                $result->data_seek($i);
                echo $result->fetch_assoc()['id_note'] . '</div><div class="note_date">';
                $result->data_seek($i);
                echo $result->fetch_assoc()['date'] . '</div></div>';
            }   
        }

        return 0;
    }

    function get_count_notes(){
        global $connection;
        $query = "SELECT * FROM list_notes WHERE visible=1;";
        $result = $connection->query($query);
        if(!$result) die('Error result!');
        return $result->num_rows;
    }

    function update_note($id_note, $text_note){
        $today = date("Y-m-d");
        global $connection;
        $query = "UPDATE list_notes SET text='$text_note', date='$today' WHERE id_note='$id_note'";
        if ($connection->query($query) === FALSE) {
            echo "Error: " . $query. "<br>" . $connection->error;
            die();
        }
    }

    function insert_note($text_note){
        $today = date("Y-m-d");
        global $connection;
        $query = "INSERT INTO list_notes (text, date, visible) VALUES ('$text_note', '$today', 1)";
        if ($connection->query($query) === FALSE) {
            echo "Error: " . $query. "<br>" . $connection->error;
            die();
        }
    }

    function del_note($id_note){
        global $connection;
        $query = "UPDATE list_notes SET visible=0 WHERE id_note='$id_note'";
        if ($connection->query($query) === FALSE) {
            echo "Error: " . $query. "<br>" . $connection->error;
            die();
        }
    }
?>