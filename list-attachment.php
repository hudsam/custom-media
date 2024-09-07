<?php
    require_once './database.php';
    $Query = 'SELECT u.`display_name`, p.`post_title`, p.`ID`, p.`post_date`, p.`guid`, p.`post_type`, p.`post_mime_type`, p.`post_modified` FROM `_posts` as p, `_users` as u WHERE p.`post_type` = "attachment" AND u.`ID` = p.`post_author`;';
    $ResultQuery = mysqli_query($MySQLi, $Query);

    include './template/header.php';
?>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>display_name</th>
            <th>ID</th>
            <th>post_date</th>
            <th>post_title</th>
            <th>post_mime_type</th>
            <th>post_modified</th>
            <th># Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($DataTemp = mysqli_fetch_assoc($ResultQuery)): ?>
        <tr>
            <td><?php echo $DataTemp['display_name']; ?></td>
            <td><?php echo $DataTemp['ID']; ?></td>
            <td><?php echo $DataTemp['post_date']; ?></td>
            <td><a href="<?php echo $DataTemp['guid']; ?>" target="_blank"><?php echo $DataTemp['post_title']; ?></a></td>
            <td><?php echo $DataTemp['post_mime_type']; ?></td>
            <td><?php echo $DataTemp['post_modified']; ?></td>
            <td></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>display_name</th>
            <th>ID</th>
            <th>post_date</th>
            <th>post_title</th>
            <th>post_mime_type</th>
            <th>post_modified</th>
            <th># Action</th>
        </tr>
    </tfoot>
</table>

<?php
    include './template/footer.php';
?>
