<html>
    <head>
        <style>
            label{
                display: block;
            }
            h1{
                text-align: center;
            }
            input{
              padding: 0.25rem;
              border-radius: 0.25rem;
              border: 1px solid rgba(0,0,0,0.2);
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
.forms_{
    display: flex;
    justify-content: space-around;
}
.submit_div{
    display: flex;
    justify-content: center;
    padding: 1rem;
}
label{
    padding-top: 0.5rem;
}
        </style>
    </head>
    <body>
        <?php $this->load->view('header.php') ?>
        <div class="view_malls">
            <h1>List of Malls</h1>
            <table>
                <thead>
                    <tr>
                        <th>Mall Name</th>
                        <th>Mall Address</th>
                        <th>Mall Mobile</th>
                        <th>Remove Mall</th>
                    </tr>
                </thead>
                <tbody>
                <?php for($i=0;$i<count($malls);$i++){ ?>
                <tr>
                    <td>
                        <?php echo $malls[$i]->shoppingMallName; ?>
                    </td>
                    <td>
                        <?php echo $malls[$i]->shoppingMallAddress; ?>
                    </td>
                    <td>
                        <?php echo $malls[$i]->shoppingMallMobile; ?>
                    </td>
                    <td>
                        Delete 
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

        <h1>List of Managers</h1>
        <div class="manager_details">
            <table>
                <thead>
                    <th>managerId</th>
                    <th>managerName</th>
                    <th>managerMobile</th>
                    <th>managerSalary</th>
                    <th>Mall</th>
                    <th>Option</th>
                </thead>
                <?php 
                for($i=0;$i<count($managers);$i++){ ?>
                <tr>
                    <td><?php echo $managers[$i]->managerId ?></td>
                    <td><?php echo $managers[$i]->managerName ?></td>
                    <td><?php echo $managers[$i]->managerMobile ?></td>
                    <td><?php echo $managers[$i]->managerSalary ?></td>
                    <td>
                        <select name="" id="">
                            <option value="" default>--SELECT--</option>
                        <?php for($j=0;$j<count($malls);$j++){ 
                            if($malls[$j]->shoppingMallId == $managers[$i]->mallId){ ?>
                                <option value="" selected>
                                    <?php echo $malls[$j]->shoppingMallName ?>
                                </option>
                        <?php }else{ ?>
                                <option value="">
                                    <?php echo $malls[$j]->shoppingMallName ?>
                                </option>
                        <?php   }
                         } ?>
                        </select>
                    </td>
                    <td>Remove</td>
                </tr>
                <?php } ?>
            </table>
        </div>

        <div class="forms_">
            <div class="add_manager">
                <h1>Add manager</h1>
                <form action="addManager" method="POST">
                    <div>
                        <label for="">Enter Manager ID</label>
                        <input type="text" name="managerId">
                        <label for="">Enter Manager Name</label>
                        <input type="text" name="managerName">
                        <label for="">Enter Manager password</label>
                        <input type="text" name="managerPassword">
                        <label for="">Manager Mobile</label>
                        <input type="text" name="managerMobile">
                        <label for="">Manager Salary</label>
                        <input type="number" name="managerSalary">
                    </div>
                    <input type="submit">
                </form>
            </div>

        
            <div class="create_class">
                <h1>Create a Mall</h1>
                <form action="addShoppingMallDetails" method="POST">
                    <div>
                        <label for="">Enter Mall Name</label>
                        <input type="text" name="shoppingMallName">
                        <label for="">Enter Mall Address</label>
                        <input type="text" name="shoppingMallAddress">
                        <label for="">Enter Shopping Mall Contact</label>
                        <input type="text" name="shoppingMallMobile">
                    </div>
                    <div class="submit_div">
                        <input type="submit">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
