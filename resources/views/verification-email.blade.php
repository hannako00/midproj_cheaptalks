<h1>CheapTalks</h1>

<p>
    Welcome {{$user->name}}!
</p>

<p>
    You've received this email as a result of your registration to your website.
    Please click on the verification link to verify your account.
</p>

<p>
    <a href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}">
        Click here to verify
    </a>
</p>
