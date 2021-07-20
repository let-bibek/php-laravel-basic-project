<h1>PU Login Page</h1>

<form action="user" method="POST" >
    @csrf
    <fieldset  style="width: 400px;">
        <legend>Login Page</legend>
        <label for="username">Username</label>
        <input type="text" name="userame" id="username" placeholder="Username" >
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" >
        <br><br>
        <button>Login</button>
        <br><br>
    </fieldset>
</form>