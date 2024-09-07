<?php
    require_once './database.php';
    $Query = 'SELECT u.`display_name`, p.`post_title`, p.`ID`, p.`post_date`, p.`guid`, p.`post_type`, p.`post_mime_type`, p.`post_modified` FROM `_posts` as p, `_users` as u WHERE p.`post_type` = "attachment" AND u.`ID` = p.`post_author`;';
    $ResultQuery = mysqli_query($MySQLi, $Query);

    include './template/header.php';
?>

<div class="container">
    <div class="table-responsive">
        <table id="example" class="table table-striped table-hover display" style="width:100%">
            <thead>
                <tr>
                    <th>Pengunggah</th>
                    <th>Waktu Unggah</th>
                    <th>Judul</th>
                    <th>Jenis Dok.</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($DataTemp = mysqli_fetch_assoc($ResultQuery)): ?>
                <tr>
                    <td title="<?php echo $DataTemp['ID']; ?>"><?php echo $DataTemp['display_name']; ?></td>
                    <td style="text-align: center;"><?php echo $DataTemp['post_date']; ?></td>
                    <td><a href="<?php echo $DataTemp['guid']; ?>" target="_blank"><?php echo $DataTemp['post_title']; ?></a></td>
                    <td><?php echo $DataTemp['post_mime_type']; ?></td>
                    <td></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Pengunggah</th>
                    <th>Waktu Unggah</th>
                    <th>Judul</th>
                    <th>Jenis Dok.</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<?php
    include './template/footer.php';
?>
