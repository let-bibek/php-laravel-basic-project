<h1>User Login</h1>

<form action="submit" method="POST">
    @csrf
    {{-- {{method_field("PUT")}} --}}
    {{@method_field("DELETE")}}

    <fieldset>
        <legend>Login Form</legend>
        <input type="text" name="username" id="username" placeholder="Username">
        <br><br>
        <input type="password" name="password" id="password" placeholder="Password">
        <br><br>
        <button>Login</button>

    </fieldset>

</form>