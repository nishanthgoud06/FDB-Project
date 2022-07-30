<html>
    <head>
        <style>
            .text-left{
  font-family:century gothic;
  font-size:50px
 
}
.Information{
  font-family:century gothic;
  font-size:50px
  
}
h1{
    text-align: center;
}

fieldset{
    width: 300;
    margin: auto;
}
.submit_div{
              display: flex;
              justify-content: center;
              padding: 1rem;
            }

form{
  width:500px;
  
}

			
        </style>
    </head>
    <body>
        <?php $this->load->view('header.php'); ?>
        <div>
            <h1>Enter Billing details</h1>
<fieldset>
<form id ="payment-form" action="../bought" method="POST">
    <div>
      <p>
        <label class="above-input" for="payment option">Payment Method</label>
      </p>


      <p>
        <select name="credit card">
      <option>Visa
      <option>MasterCard
      <option>American Express
      <option>JCB
        </select>
    </div>
    <div>
      <p>
        <label for="cardnumb">card number</label>
        <p>
      <input id="cardnum" name="patronCardNumber" type="card number" placeholder="card number" required >
    </div>

    <div>
      <p>
        <label class="closing date" for="closing date">Expiration date and security code</label>
      </p>
      <p>
        <select name ="month" name="patronCardExpiry">
          <option>1
          <option>2
          <option>3
          <option>4
          <option>5
          <option>6
           <option>7
             <option>8
               <option>9
                <option>10
                  <option>11
                   <option>12
        </select>
        <select name="year">
          <option>2016
            <option>2017
              <option>2018
                <option>2019
                  <option>2020
                    <option>2021
                      <option>2022
                        <option>2023
                          <option>2024
                            <option>2025
                              </select>
        <input id="security code" name="security code" type="text" required class="patronCardCVV">
        </div>
      </fieldset>
      <div class="submit_div">
                    <input type="submit">
                  </div>  
  </form>

 </div>
    </body>
</html>