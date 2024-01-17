<h1>Login</h1>
        <form style="text-align:center" action="{{ route('authenticate') }}" method="post">
            @csrf
                <div >
                    <label for="email">Email Address</label>
                        <input type="email" id="email" name="email"> 
                        <br><br>

                    <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                </div>
                
                <br><br>    
                 <div>
                    <input type="submit" value="Login">
                </div>
                @if ($errors->has('email'))
                            <div style="text-align:center" >
                                <span style="color:red;font-family:verdana" class="invalid-feedback">{{ $errors->first('email') }}</span>
                            </div>
                @endif
                
        </form>

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
        color:green;
        font-family:verdana;
    }
</style>
    