<html>
    <head>
        <style>
            .grid{
                display: grid;
                grid-template-columns: auto auto auto;
                justify-content: center;
            }
            .grid div{
                height: 16rem;
                width: 16rem;
                background: rgba(100,50,50,0.2);
                border-radius: 1rem;
                margin: 1rem;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <?php $this->load->view('header.php'); ?>
        <div class="grid">
            <div>
                <a href="<?php echo base_url('Patron/events?mallId=')."$mallId"; ?>">Events</a>
            </div>
            <div>
                <a href="<?php echo base_url('Patron/food?mallId=')."$mallId"; ?>">Food</a>
            </div>
            <div>
                <a href="<?php echo base_url('Patron/outlets?mallId=')."$mallId"; ?>">Outlets</a>
            </div>
            <!-- <div>
                <a href="<?php echo base_url('Patron/parking?mallId=')."$mallId"; ?>">Parking</a>
            </div> -->
        </div>
    </body>
</html>