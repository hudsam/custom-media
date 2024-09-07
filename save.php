<?php
    require_once './database.php';

    $SAVE_Attachment = $_POST['submit'];
    $SAVE_Attachment = ($SAVE_Attachment == 'save_UploadedOn' ? true : false);

    $POST_ID = $_POST['ID'];
    $POST_display_name = $_POST['display_name'];
    $POST_post_date = explode('T', $_POST['post_date'])[0] . ' ' . explode('T', $_POST['post_date'])[1];
    $POST_post_title = $_POST['post_title'];
    $POST_post_mime_type = $_POST['post_mime_type'];

    $Query = 'UPDATE `_posts` SET `post_date`= "'. $POST_post_date .'" WHERE `ID` = '. $POST_ID .';';
    mysqli_query($MySQLi, $Query);

    echo '<script>
        alert("Doc. ' . $POST_post_title . ' (' . $POST_post_mime_type . ') has been saved.");
        window.location.href = "./list.php";
    </script>';
