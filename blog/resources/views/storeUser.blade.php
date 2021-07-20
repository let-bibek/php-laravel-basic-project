<h3>Add New User</h3>

@if (session("username"))
    <h3 style="color: rgb(12, 151, 12)">Data saved for user: {{session("username")}}</h3>

    
@endif
<form action="storemember" method="POST" >
    @csrf
    <fieldset  style="width: 400px;">
        <legend>Login Page</legend>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username" >
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" >
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email">
        <br><br>
        <button type="submit">Add User</button>
        <br><br>
    </fieldset>
</form>