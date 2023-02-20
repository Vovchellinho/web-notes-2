<?php
    include('db/controllers.php');
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else
    {
        $page = 0;
    }
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/main.js"></script>
    <title>Заметки</title>
</head>
<body>
    <div class="main_container">
        <div class="notes">
            <?php
                get_notes($page);
            ?>
        </div>
        <?php
            include("db/pages.php");
        ?>
        <form action="index.php?page=0" id="main-form" method="POST">
            <input type="hidden" name="hidden_choise" id="hidden_choise" value="None">
            <div class="field_input">
                <textarea class="field_text" name="note_field" id="note"></textarea>
            </div>
            <div class="buttons">
                <div class="save_button">
                    <input type="submit" class="button_save" id="but_save" name="but_save" onclick="return CheckText(this)" value="Сохранить">
                </div>
                <div class="del_button">
                    <input type="hidden" class="button_delete" id="but_del" name="but_del" value="Удалить">
                </div>
            </div>
        </form>
    </div>
</body>

</html>