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
    
    include './template/header.php';
?>
<div class="container">
    <div class="row g-3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Beranda</li>
                <li class="breadcrumb-item">Media</li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $DataTemp['post_title']; ?></li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-4">
            <form class="g-3" method="post" action="./save.php">
                <input type="hidden" name="ID" value="<?php echo $DataTemp['ID']; ?>">
                <input type="hidden" name="post_title" value="<?php echo $DataTemp['post_title']; ?>">
                <input type="hidden" name="post_mime_type" value="<?php echo $DataTemp['post_mime_type']; ?>">
                <div class="col-12 mb-3">
                    <label for="" class="form-label">Uploader</label>
                    <input type="text" class="form-control" id="" placeholder="" value="<?php echo $DataTemp['display_name']; ?>" name="display_name" readonly>
                </div>
                <div class="col-12 mb-3">
                    <label for="" class="form-label">Uploaded On</label>
                    <input type=datetime-local class="form-control" step="1" id="change_UploadedOn" value="<?php echo $DataTemp['post_date']; ?>" name="post_date">
                </div>
                <button type="submit" class="btn btn-sm btn-primary" name="submit" value="save_UploadedOn"><i class="bi bi-floppy"></i> Save Changes</button>
            </form>
        </div>
    </div>        
</div>
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
    include './template/footer.php';
?>