<?php
    require_once './database.php';
    
    error_reporting(0);
    $ID_Attachment = $_GET['id'];
    $DATA_Attachment = (!isset($ID_Attachment) | $ID_Attachment == "") ? false : true;
    $Query = 'SELECT u.`display_name`, p.`post_title`, p.`ID`, p.`post_date`, p.`guid`, p.`post_type`, p.`post_mime_type`, p.`post_modified` FROM `_posts` as p, `_users` as u WHERE p.`post_type` = "attachment" AND u.`ID` = p.`post_author` AND p.`ID` = '. $ID_Attachment .';';
    $ResultQuery = mysqli_query($MySQLi, $Query);

    if ($DATA_Attachment == true):
        $CHECK_Attachment = ($ResultQuery->num_rows == 1) ? true : false;
    endif;

    if ($CHECK_Attachment == true):
        while($DataTemp = mysqli_fetch_assoc($ResultQuery)):
?>
<?php
        endwhile;
    endif;
