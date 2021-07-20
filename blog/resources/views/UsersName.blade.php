<h1>User's login page</h1>
{{-- form and form validation --}}


{{-- {{$errors}} ====this basically throw all the errors====--}}
    {{-- @if ($errors->any())

    @foreach ($errors->all() as $error)
        <ul>
            <li>{{$error}}</li>
        </ul>
    @endforeach
        
    @endif --}}

<form action="usercontroler" method="POST">
    @csrf
    <fieldset>
        <input type="text" name="userId" placeholder="Enter your id" id="" >
        <br>
        <span style="font-size:12px;color:red;">@error("userId"){{$message}}@enderror</span><br><br>
        <input type="password" name="password" placeholder="Passsword" id="">
        <br> 
        <span style="font-size:12px;color:red;">@error("password"){{$message}}@enderror</span><br><br>
        <button type="submit">Login</button>
    </fieldset>

</form>