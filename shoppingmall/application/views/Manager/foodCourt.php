<!-- Add item to food court -->
<html>
    <head>
        <style>
            h1{
                text-align: center;
            }
            .grid{
                display: grid;
                grid-template-columns: auto auto auto auto;
                justify-content: center;
            }
            .grid .grid_cont{
                height: 8rem;
                width: 8rem;
                background: rgba(100,50,50,0.2);
                border-radius: 1rem;
                margin: 1rem;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }
            .fc_name{
              font-weight: bold;
            }
            .submit_div{
              display: flex;
              justify-content: center;
              padding: 1rem;
            }
            form{
              margin: auto;
              width: 200;
            }
            label{
              margin: 0.5rem;
            }
            input,select{
              margin: 0.5rem 0;
              border: 1px solid rgba(0,0,0,0.2);
              border-radius: 0.5rem;
              padding: .25rem;
              width: 12rem;
            }
        </style>
    </head>
    <body>
        <?php $this->load->view('header.php'); ?>
        <div>
            <h1>View List of Food Courts</h1>
            <div class="grid">
            <?php for($i=0;$i<count($foodCourts);$i++){ ?>
                <div class="grid_cont">
                    <!-- <span> <?php echo $foodCourts[$i]->shoppingMallName; ?></span> -->
                    <div>
                      <span>Name:</span><br>
                      <span class="fc_name"> <?php echo $foodCourts[$i]->foodCourtName; ?></span>
                    </div>
                    <br>
                    <div>
                      <span>Contact:</span><br>
                      <span> <?php echo $foodCourts[$i]->foodCourtContact; ?></span>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="">
            <h1>Add Food Court</h1>
            <form action="addFoodCourt" method="POST">
                <div>
                  <label for="">foodCourtName</label>
                  <input type="text" name="foodCourtName">
                </div>
                <div>
                  <label for="">foodCourtContact</label>
                  <input type="text" name="foodCourtContact">
                </div>
                <div>
                  <label for="">foodCourtMall</label>
                  <select id="" name="foodCourtMall">
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


