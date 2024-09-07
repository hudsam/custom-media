<?php
    require_once './database.php';

    $SAVE_Attachment = $_POST['submit'];
    $SAVE_Attachment = (htmlspecialchars($SAVE_Attachment, ENT_QUOTES, 'UTF-8') == 'save_UploadedOn' ? true : false);

    $POST_ID = htmlspecialchars($_POST['ID'], ENT_QUOTES, 'UTF-8');
    $POST_display_name = htmlspecialchars($_POST['display_name'], ENT_QUOTES, 'UTF-8');
    $POST_post_date = htmlspecialchars(explode('T', $_POST['post_date'])[0], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars(explode('T', $_POST['post_date'])[1], ENT_QUOTES, 'UTF-8');
    $POST_post_title = htmlspecialchars($_POST['post_title'], ENT_QUOTES, 'UTF-8');
    $POST_post_mime_type = htmlspecialchars($_POST['post_mime_type'], ENT_QUOTES, 'UTF-8');

    $Query = 'UPDATE `_posts` SET `post_date`= "'. $POST_post_date .'" WHERE `ID` = '. $POST_ID .';';
    mysqli_query($MySQLi, $Query);

    echo '<script>
        alert("Doc. ' . $POST_post_title . ' (' . $POST_post_mime_type . ') has been saved.");
        window.location.href = "./list.php";
    </script>';
