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
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php $this->load->view('header.php'); ?>
        <h1>List of Malls</h1>
        <div class="grid">
            <?php for($i=0;$i<count($malls);$i++){ ?>
                <div>
                    <a href="<?php echo base_url('Patron/Mall?mallId='). $malls[$i]->shoppingMallId; ?>"><?php echo $malls[$i]->shoppingMallName; ?></a>
                </div>
            <?php } ?>
        </div>
    </body>
</html>