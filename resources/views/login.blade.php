<form action="{{url('login')}}" method = "post">
@csrf
                    User: <input type="text" name="user" method = "POST"> <br>
                    pass: <input type="password" name="pass" method = "POST"> <br>
                    <br>
                    <button type="submit" name="login">Login</button>
                  
              
</form> 