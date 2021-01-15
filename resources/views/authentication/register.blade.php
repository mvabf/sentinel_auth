<style>
    form {
        margin-top: 10%;
        padding-left: 40%;
    }
</style>

<form action="/register" method="POST">
    <h3>Register</h3>
    @csrf
    <div>
       <input type="email" name="email" placeholder="example@example.com"> 
    </div>
    <div>
      <input type="text" name="first_name" placeholder="First Name">  
    </div>
    <div>
       <input type="text" name="last_name" placeholder="Last Name"> 
    </div>
    <div>
       <input type="password" name="password" placeholder="Password"> 
    </div>
    <div>
        <input type="password" name="password_confirmation" placeholder="Confirm Password">
    </div>
    <div>
        <input type="submit">
    </div>
    
</form>