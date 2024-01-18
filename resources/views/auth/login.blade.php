<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Dashbord</title> 

        <link rel="stylesheet" href="{{asset("css/style.css")}}">
    </head>

    <body>
        <h1 class="titlu_pagina">Login</h1>

        <form style="text-align:center" action="{{ route('authenticate') }}" method="post">
            @csrf
                <div >
                    <label for="email">Email Address</label>
                        <input class="input_login" type="email" id="email" name="email"> 
                        <br><br>

                    <label  for="password">Password</label>
                        <input class="input_login" type="password" id="password" name="password">
                </div>
                
                <br><br>    
                 <div>
                    <input class="buton_login" type="submit" value="Login">
                </div>
                @if ($errors->has('email'))
                            <div style="text-align:center" >
                                <span style="color:red;font-family:verdana" class="invalid-feedback">{{ $errors->first('email') }}</span>
                            </div>
                @endif
                
        </form>


    </body>


</html> 


 <style>
    h1{
        color:black;
        font-family:verdana;
        text-align:center; 
        padding:5%
    }
    div {
        margin-bottom: 10px;
    }
    label {
        display: inline-block;
        width: 150px;
        color:#905039;
        font-family:verdana;
    }




</style>
    