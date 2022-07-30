<html>
    <head>
    <style>
            label{
                display: block;
            }
            .card {
            width: 850px;
            background: #69e47c;
            margin: 40px auto;
            border-radius: 10px;
            box-shadow: 0 15px 38px rgba(0,0,0,0.1), 0 15px 40px rgba(0,0,0,0.1);
            }

            .card-title {
            text-align: center;
            padding: 40px 40px 80px 40px;
            border-radius: 10px 10px 0px 0px;
            background: #fff;
            }
            input{
              padding: 0.25rem;
              border-radius: 0.25rem;
              border: none;
            }
            .log_center{
              display: flex;
              justify-content: center;
              padding: 2rem;
            }
            .submit_div{
              display: flex;
              justify-content: center;
              padding: 1rem;
            }
        </style>
    </head>
    <body>
    <div class="card">
            <div class="card-title">
              <h1>Welcome to UNT Malls</h1>
              <h2>Patron Login</h2>
            </div>
            <div class="log_center">
            <form action="./Patron/login" method="POST">
                <label for="">Patron email</label>
                <input type="text" name="patronEmail">
                <label for="">Patron Password</label>
                <input type="text" name="patronPassword">
                <div class="submit_div">
                    <input type="submit">
                </div>        
            </form>
            </div>
    </div>
    </body>
</html>



