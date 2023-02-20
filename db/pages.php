<?php
    $limit = 5;
    $count_notes = get_count_notes();
    $page_count = ceil($count_notes/$limit);
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else
    {
        $page = 0;
    }
?>

    <div class="pages">
        <?php for($p = 0; $p <= $page_count-1; $p++) :?>
            <?php if($p==$page):?>
                <a class="focus_page" href="?page=<?php echo $p?>"><?php echo($p+1)?></a>
            <?php else :?>
                <a href="?page=<?php echo $p?>"><?php echo($p+1)?></a>
            <?php endif; ?>
        <?php endfor; ?>
    </div>