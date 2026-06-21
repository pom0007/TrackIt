@extends('layouts.auth')

@section('content')
<style>
    .login-page{
    min-height:100vh;

    background-image:url('/images/bgimage.png');
    background-size:cover;
    background-position:center center;
    background-repeat:no-repeat;

    display:flex;
    align-items:center;
    justify-content:center;

    padding:40px;
}

.login-container{
    width:1400px;
    max-width:100%;

    background:#fff;
    border-radius:30px;

    overflow:hidden;

    display:grid;
    grid-template-columns:1fr 1fr;

    box-shadow:
    0 0 1px rgba(0,0,0,.05),
    0 8px 30px rgba(0,0,0,.04);
}

/* LEFT */

.login-left{
    background:linear-gradient(
    180deg,
    #F6FFF8,
    #EEFDF2
    );

    padding:50px;
}

.brand{
    display:flex;
    align-items:center;
    gap:12px;
}

.brand img{
    width:60px;
}

.brand h1{
    color:#00674b;
    font-size:42px;
}

.brand span{
    color:#98A2B3;
    font-weight:400;
}

.hero-content{
    margin-top:70px;
}

.hero-content h2{
    font-size:64px;
    line-height:1.2;
    color:#101828;
}

.hero-content h2 span{
    color:#16A34A;
}

.hero-content p{
    margin-top:25px;

    font-size:26px;
    line-height:1.7;

    color:#667085;
}

.hero-image{
    width:100%;
    margin-top:50px;
}

/* RIGHT */

.login-right{
    display:flex;
    justify-content:center;
    align-items:center;

    padding:60px;
}

.login-card{
    width:100%;
    max-width:520px;
}

.login-card h1{
    font-size:58px;
    color:#101828;
}

.login-card p{
    margin-top:10px;
    color:#667085;
    font-size:22px;
}

.login-card p span{
    color:#16A34A;
    font-weight:600;
}

.input-group{
    margin-top:30px;
}

.input-group label{
    display:block;
    margin-bottom:10px;
    font-weight:600;
}

.input-box{
    height:58px;

    border:1px solid #D0D5DD;
    border-radius:14px;

    display:flex;
    align-items:center;

    padding:0 18px;
}

.input-box i{
    color:#667085;
}

.input-box input{
    flex:1;

    border:none;
    outline:none;

    margin-left:15px;

    font-size:16px;
}

/* OPTIONS */

.login-options{
    margin-top:25px;

    display:flex;
    justify-content:space-between;
    align-items:center;
}

.login-options a{
    color:#16A34A;
    text-decoration:none;
}

/* BUTTON */

.login-btn{
    width:100%;
    height:58px;

    margin-top:30px;

    border:none;
    border-radius:14px;

    background:#16A34A;
    color:#fff;

    font-size:18px;
    font-weight:600;

    cursor:pointer;
}

.login-btn:hover{
    background:#15803D;
}
</style>
<div class="login-page">

    <div class="login-container">

        <!-- LEFT PANEL -->
        <div class="login-left">

            <div class="brand">
                <img src="{{ asset('images/TI.png') }}" alt="TrackIt">
                <h1>TrackIt<span>.com</span></h1>
            </div>

            <div class="hero-content">

                <h2>
                    Track <span>Everything.</span><br>
                    Track <span>Anywhere.</span>
                </h2>

                <p>
                    Manage properties, maintenance,
                    garage sales, and asset logs
                    in one platform.
                </p>

                <img
                    src="{{ asset('images/trackit.png') }}"
                    class="hero-image">

            </div>

        </div>

        <!-- RIGHT PANEL -->
        <div class="login-right">

            <div class="login-card">

                <h1>Welcome Back!</h1>

                <p>
                    Sign in to continue to
                    <span>TrackIt</span>
                </p>

                <form>

                    <div class="input-group">
                        <label>Username</label>

                        <div class="input-box">
                            <i class="fa-regular fa-user"></i>

                            <input
                                type="username"
                                placeholder="Enter your username">
                        </div>
                    </div>

                    <div class="input-group">
                        <label>Password</label>

                        <div class="input-box">
                            <i class="fa-solid fa-lock"></i>

                            <input
                                type="password"
                                placeholder="Enter your password">

                            <i class="fa-regular fa-eye"></i>
                        </div>
                    </div>

                    <div class="login-options">

                        <label class="remember">
                            <input type="checkbox">
                            Remember me
                        </label>

                        <a href="#">
                            Forgot Password?
                        </a>

                    </div>

                    <button class="login-btn">
                        Sign In
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection