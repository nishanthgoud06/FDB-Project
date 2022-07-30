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
label{
    display: block;
    padding: 0.25rem;
}
input{
    padding: 0.25rem;
    border-radius: 0.5rem;
    border: 1px solid rgba(0,0,0,0.2);
}
.submit_div{
              display: flex;
              justify-content: center;
              padding: 1rem;
            }
            form{
                margin: auto;
                width: 100;
            }
        </style>
    </head>
    <body>
        <?php $this->load->view('header.php'); ?>
        <div>
            <h1>Outlet Products</h1>
            <table>
                <thead>
                    <th>Product Name</th>
                    <th>Product Cost</th>
                    <th>Product Quantity</th>
                    <th>Product Details</th>

                </thead>
                <tbody>
                <?php for($i=0;$i<count($products);$i++){ ?>
                    <tr>
                        <!-- <td> <?php //echo $products[$i]->outletProductId; ?> </td> -->
                        <td> <?php echo $products[$i]->productName; ?> </td>
                        <td> <?php echo $products[$i]->productCost; ?> </td>
                        <td> <?php echo $products[$i]->productQuantity; ?> </td>
                        <!-- <td> <?php // echo $products[$i]->outletId; ?> </td> -->
                        <td> <?php echo $products[$i]->outletProductDetails; ?> </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>Add product to outlet</h1>
            <form action="../../Manager/addProductsToOutlet" method="POST">
                    <div>
                        <label for="">productName</label>
                        <input type="text" name="productName">
                    </div>
                    <div>
                        <label for="">productCost</label>
                        <input type="number" name="productCost">
                    </div>
                    <div>
                        <label for="">productQuantity</label>
                        <input type="number" name="productQuantity">
                    </div>
                <!-- <label for="">outletId</label> -->
                    <input type="text" name="outletId" style="display:none" value="<?php echo $outletId; ?>">
                    <div>
                        <label for="">outletProductDetails</label>
                        <textarea name="outletProductDetails"></textarea> 
                    </div> 
                    <div class="submit_div">
                    <input type="submit">
                  </div>
            </form>
        </div>
    </body>
</html>


<!-- outletProductId
	productCost	
    productName
    productQuantity
    outletId
	outletProductDetails -->