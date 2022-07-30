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
        <?php $this->load->view('header.php');?>
        <div>
            <h1>Outlet Products</h1>
            <table>
                <thead>
                    <th>Product Cost</th>
                    <th>Product Name</th>
                    <!-- <th>product Quantity</th> -->
                    <th>ProductDetails</th>
                    <th>Buy</th>
                </thead>
                <tbody>
        <?php for($i=0;$i<count($products);$i++){ ?>
            <tr class="">
                <!-- <td class="box"><?php echo $products[$i]->outletProductId; ?></td> -->
                <td class="box"><?php echo $products[$i]->productCost; ?></td>
                <td class="box"><?php echo $products[$i]->productName; ?></td>
                <!-- <td class="box"><?php echo $products[$i]->productQuantity; ?></td> -->
                <!-- <td class="box"><?php echo $products[$i]->outletId; ?></td> -->
                <td class="box"><?php echo $products[$i]->outletProductDetails; ?></td>
                <td><a href="../buy/<?php echo $products[$i]->outletProductId; ?>"><button>Buy</button></a></td>
            </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>


<!-- outletProductId
	productCost	
    productName
    productQuantity
    outletId
	outletProductDetails -->