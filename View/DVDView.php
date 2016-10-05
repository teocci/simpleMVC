<html>
    <head><title></title></head>
    <body>

        <table width="640" border="1">
            <tr>
                <th>Tile</th>
                <th>Author</th>
                <th>Year</th>
            </tr>

            <?php foreach($list as $obj){  ?>
            <tr>
                <td><?php echo $obj->getTitle(); ?></td>
                <td><?php echo $obj->getRuntime(); ?></td>
                <td><?php echo $obj->getYear();?></td>
            </tr>
            <?php } ?>

        </table>
    </body>
</html>
