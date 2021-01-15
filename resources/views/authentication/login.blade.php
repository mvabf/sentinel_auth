<style>
    form {
        margin-top: 10%;
        padding-left: 40%;
    }
</style>

<form action="/login" method="POST">
    <h3>Login</h3>
    @csrf
    <div>
        <input type="email" name="email" placeholder="example@example.com" required> 
     </div>    
    <div>
        <input type="password" name="password" placeholder="Password" required> 
     </div>
     <div>
        <input type="submit" value="Login">
    </div>
</form>