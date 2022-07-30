<html>
    <head></head>
    <body>
        <table>
            <thead>
                <th>Parking Id</th>
                <th>Parking Location</th>
                <th>Parking status</th>
            </thead>
            <tbody>
                <?php for($i=0;$i<count($parking);$i++){ ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $parking[$i]->mallParkingCode; ?>Parking</td>
                    <td><?php echo $parking[$i]->mallParkingStatus; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>