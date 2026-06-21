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
/* LOGOUT SUCCESS MODAL */

.success-overlay{
    position:fixed;
    inset:0;
    background:rgba(15,23,42,.45);
    backdrop-filter:blur(6px);

    display:none;
    justify-content:center;
    align-items:center;

    z-index:9999;
}

.success-modal{
    width:460px;
    background:#fff;
    border-radius:24px;
    padding:35px;
    text-align:center;
    position:relative;

    box-shadow:0 20px 50px rgba(0,0,0,.15);
}

.success-close{
    position:absolute;
    top:20px;
    right:20px;

    border:none;
    background:none;

    font-size:22px;
    cursor:pointer;

    color:#667085;
}

.success-icon{
    width:130px;
    height:130px;

    margin:auto;

    border-radius:50%;

    background:#ECFDF3;

    display:flex;
    align-items:center;
    justify-content:center;
}

.success-icon i{
    font-size:60px;
    color:#16A34A;
}

.success-modal h2{
    margin-top:20px;
    color:#101828;
    font-size:36px;
}

.success-modal p{
    margin-top:10px;
    color:#667085;
    font-size:18px;
}

.ok-btn{
    width:100%;
    height:58px;

    margin-top:25px;

    border:none;
    border-radius:14px;

    background:#16A34A;
    color:white;

    font-size:18px;
    font-weight:600;

    cursor:pointer;
}
/* LOGIN SUCCESS TOAST */

.login-toast{
    position:fixed;
    top:30px;
    right:30px;

    width:580px;
    max-width:90vw;

    background:#fff;
    border-radius:24px;

    padding:28px;

    display:flex;
    align-items:flex-start;
    gap:20px;

    box-shadow:
        0 20px 50px rgba(0,0,0,.12);

    z-index:99999;

    transform:translateX(700px);
    opacity:0;

    transition:.5s ease;
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

                    <button
    type="button"
    class="login-btn"
    onclick="window.location.href='/track?login=success'">
    Sign In
</button>

                </form>

            </div>

        </div>

    </div>

</div>
<!-- LOGOUT SUCCESS MODAL -->

<div id="logoutSuccessModal" class="success-overlay">

    <div class="success-modal">

        <button class="success-close"
                onclick="closeSuccessModal()">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="success-icon">
            <i class="fa-solid fa-shield-check"></i>
        </div>

        <h2>You have been logged out</h2>

        <p>
            Thank you for using TrackIt.com
        </p>

        <p>
            See you again soon!
        </p>

        <button class="ok-btn"
                onclick="closeSuccessModal()">
            OK
        </button>



</div>
</div>
<script>

function closeSuccessModal(){

    document.getElementById('logoutSuccessModal')
            .style.display='none';

    window.history.replaceState(
        {},
        document.title,
        "/auth"
    );
}

window.onload = function(){

    const params =
        new URLSearchParams(window.location.search);

    if(params.get('logout') === 'success'){

        document.getElementById('logoutSuccessModal')
                .style.display='flex';
    }
}


</script>
@endsection