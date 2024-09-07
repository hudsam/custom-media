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
<div class="modal-header">
    <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo $DataTemp['post_title'] . ' (' . $DataTemp['post_mime_type'] . ')'; ?></h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form class="row g-3" method="post" action="./save.php">
        <input type="hidden" name="ID" value="<?php echo $DataTemp['ID']; ?>">
        <input type="hidden" name="post_title" value="<?php echo $DataTemp['post_title']; ?>">
        <input type="hidden" name="post_mime_type" value="<?php echo $DataTemp['post_mime_type']; ?>">
        <div class="col-12">
            <label for="" class="form-label">Uploader</label>
            <input type="text" class="form-control" id="" placeholder="" value="<?php echo $DataTemp['display_name']; ?>" name="display_name" readonly>
        </div>
        <div class="col-12">
            <label for="" class="form-label">Uploaded On</label>
            <input type=datetime-local class="form-control" step="1" id="change_UploadedOn" value="<?php echo $DataTemp['post_date']; ?>" name="post_date">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-sm btn-primary" name="submit" value="save_UploadedOn"><i class="bi bi-floppy"></i> Save Changes</button>
        </div>
    </form>
</div>
<div class="modal-footer"></div>
<script>
    datetimeInput = document.getElementById('change_UploadedOn');
    datetimeInput.addEventListener('change', function() {
        formattedValue = datetimeInput.value.replace("T", " ");
        console.log("change_UploadedOn: ", formattedValue);
    });
</script>
<?php
        endwhile;
    endif;
