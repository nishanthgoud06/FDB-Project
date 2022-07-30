<!-- View List of events -->
<!-- Add Event -->

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
            .submit_div{
              display: flex;
              justify-content: center;
              padding: 1rem;
            }
            label{
                display: block;
                padding: 0.5rem;
            }
            input,select{
                width: 12rem;
                border-radius:0.5rem;
                padding: 0.25rem;
                border: 1px solid rgba(0,0,0,0.2)
            }
            form{
                width: 200;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <?php $this->load->view('header.php'); ?>
        <div>
            <h1>View List of Events</h1>
            <table>
                <thead>
                    <th>Event Name</th>
                    <th>Event Date</th>
                    <th>Location</th>
                </thead>
                <tbody>
                    <?php for($i=0;$i<count($events);$i++){ ?>
                        <tr>
                            <td><?php echo $events[$i]->mallEventName; ?></td>
                            <td><?php echo $events[$i]->mallEventDate; ?></td>
                            <td><?php echo $events[$i]->shoppingMallName; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>Add an event</h1>
            <form action="addEvents" method="POST">
                <div>
                    <label for="">Event Name</label>
                    <input  name="mallEventName" type="text">
                </div>
                <div>
                    <label for="">Event Date</label>
                    <input  name="mallEventDate" type="date">
                </div>
                <div>
                    <label for="">Event Time</label>
                    <input type="time" name="eventTime">
                </div>
                <div>
                    <label for="">Location</label>
                    <select name="Location" id="">
                        <?php for($i=0;$i<count($malls);$i++){ ?>
                        <option value="<?php echo $malls[$i]->shoppingMallId ?>"><?php echo $malls[$i]->shoppingMallName ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <div class="submit_div">
                    <input type="submit">
                  </div>  
            </form>
        </div>
    </body>
</html>