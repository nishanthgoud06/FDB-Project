<html>
    <head>
        <style>
            h1{
                text-align: center;
            }
            table {
                border: solid 1px #DDEEEE;
                border-collapse: collapse;
                border-spacing: 0;
                font: normal 13px Arial, sans-serif;
                margin: auto;
            }
            table thead th {
                background-color: #DDEFEF;
                border: solid 1px #DDEEEE;
                color: #336B6B;
                padding: 10px;
                text-align: left;
                text-shadow: 1px 1px 1px #fff;
            }
            table tbody td {
                border: solid 1px #DDEEEE;
                color: #333;
                padding: 10px;
                text-shadow: 1px 1px 1px #fff;
            }
        </style>
    </head>
    <body>
        <?php $this->load->view('header.php'); ?>
        <h1>Events</h1>
        <table>
            <thead>
                <th>Event Name</th>
                <th>Event Date</th>
                <th>Location</th>
                <th>Register</th>
            </thead>
            <tbody>
                <?php for($i=0;$i<count($events);$i++){ ?>
                <tr>
                    <td><?php echo $events[$i]->mallEventName; ?></td>
                    <td><?php echo $events[$i]->mallEventDate; ?></td>
                    <td><?php echo $events[$i]->shoppingMallAddress; ?></td>
                    <td>Register</td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
    </body>
</html>