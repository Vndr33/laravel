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
        <h1 class="titlu_pagina">Register</h1>
        
        <form style="text-align:center" action="{{ route('store') }}" method="post">@csrf
            <div>
                <label>Name</label><input class="input_login" type="text"  id="name" name="name">
            </div>    
            <div>
                <label for="email" >Email Address</label><input class="input_login" type="email"  id="email" name="email">
            </div>
            <div>
                <label for="password">Password</label><input class="input_login" type="password" id="password" name="password">
            </div>
            <div>
                <label for="password_confirmation">Confirm Password</label><input class="input_login" type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <br><br>           
            <input class="buton_login" type="submit" value="Register">
                        
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
    