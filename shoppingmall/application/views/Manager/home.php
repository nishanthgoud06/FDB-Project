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
            <div class="">
                <a href="./Outlet">Outlet</a>
            </div>
            <div class="">
                <a href="./Food">Food Court</a>
            </div>
            <div class="">
                <a href="./Events">Events</a>
            </div>
            <!-- <div class="">
                <a href="">Transactions</a>
            </div> -->
            <div class="">
                <a href="">Patron</a>
            </div>
        </div>
    </body>
</html>

<!-- Outlet --  add coupons -->
