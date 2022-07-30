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
                display: flex;
                justify-content: center;
            }
            .outlet{
                display: flex;
                justify-content: center;
            }
            .outlet input{
                padding: 0.25rem;
                border-radius: 0.5rem;
                border: 1px solid rgba(0,0,0,0.2);
            }
            label,input{
                margin: 0.5rem;
            }

        </style>
    </head>
    <body>
        <?php $this->load->view('header.php'); ?>
        <div>
            <h1 >Outlets</h1>
        </div>
        <div class="grid">
            <?php for($i=0;$i<count($outlets);$i++){ ?>
                <div>
                    <span>
                        <a href="<?php echo base_url('Manager/outletDetails/').$outlets[$i]->outletId; ?>"><?php echo $outlets[$i]->outletName; ?></a>
                    </span>
                </div>
            <?php } ?>
        </div>
        <div>
            <h1>Add outlet</h1>
            <div class="outlet">
                <form action="">
                    <div>
                        <div>
                            <label for="">Outlet Name</label>
                        </div>
                        <input type="text" name="outlet_name">
                    </div>
                    <input type="text" name="outlet_mall" style="display:none" value="<?php echo $mallId; ?>">
                    <div>
                        <input type="submit">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>