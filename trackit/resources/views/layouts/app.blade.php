<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>TrackIt</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<style>

* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f4f5f7;
            height: 100vh;
            overflow: hidden;
        }   

        .asset-card {
            flex: 1;
            background: #fff;
            border-radius: 20px;
            padding: 0;
            overflow: hidden;
            box-shadow:
                0 0 1px rgba(0, 0, 0, .05),
                0 8px 30px rgba(0, 0, 0, .04);
        }
        /* Layout */

        .wrapper {
            display: flex;
            height: 100vh;
            padding: 14px;
            gap: 18px;
        }

        /* Sidebar */

        .sidebar {
    width: 250px;
    transition:all .3s ease;
    overflow:visible;
    position:relative;
    background:#fff;
    border-radius:20px;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    padding:18px 0;
}
        .sidebar.collapsed{
    width:80px;
}

.sidebar.collapsed .logo-text,
.sidebar.collapsed .menu span,
.sidebar.collapsed .bottom span{
    display:none;
}

.sidebar.collapsed .menu button,
.sidebar.collapsed .bottom button{
    justify-content:center;
    padding:0;
}

.sidebar.collapsed .logo{
    justify-content:center;
    margin-left:0;
}

.sidebar.collapsed .logo img{
    width:50px;
    height:50px;
}
.collapse-btn{
    position:absolute;

    top:32px;
    right:-20px;

    width:38px;
    height:38px;

    border:none;
    border-radius:50%;

    background:#fff;

    display:flex;
    align-items:center;
    justify-content:center;

    cursor:pointer;

    box-shadow:
        0 4px 12px rgba(0,0,0,.12);

    z-index:9999;

    transition:.3s ease;
}

.collapse-btn:hover{
    transform:scale(1.05);
}

.collapse-btn i{
    font-size:14px;
    color:#374151;
}

        .logo {
            display: flex;
            align-items: left;
            gap: 8px;
            margin-top: 15px;
            margin-bottom: 45px;
            margin-left: 10px;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            align-items: center;
            line-height: 1;
            display: flex;
            position: relative;
        }

        .track {
            color: #00674b !important;
            font-size: 28px;
            font-weight: 800;
        }

        .dotcom {
            color: #9CA3AF !important;
            font-size: 18px;
            font-weight: 400;
        }

        .logo-circle {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: #eef4ff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2457ff;
            font-size: 28px;
        }

        .logo h1 {
            font-size: 18px;
            font-weight: 800;
            color: #2457ff;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding: 0 12px;
        }

        .menu button {
            width: 100%;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: flex-start;

            gap: 10px;

            padding: 0 15px;

            border: none;
            border-radius: 10px;
            background: transparent;

            cursor: pointer;

            font-size: 14px;
            color: #374151;
        }

        .menu button i {
            width: 20px;
            min-width: 20px;
            font-size: 18px;
            text-align: center;
        }

        .menu button:hover {
            background: #f2f6ff;
        }

        .menu button.active {
            background: #DCFCE7;
            color: #16A34A;
        }

        .bottom {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-top: auto;

            padding: 0 12px 30px 12px;
        }

        .bottom button {
            width: 100%;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: flex-start;

            gap: 10px;
            padding: 0 15px;

            border: none;
            background: transparent;
            border-radius: 10px;

            cursor: pointer;

            font-size: 14px;
            color: #374151;
        }

        .bottom button i {
            width: 20px;
            min-width: 20px;
            font-size: 18px;
            text-align: center;
        }

        .bottom button:hover {
            background: #f2f4f7;

        }

        /* Main */

        .main {
            display: flex;
            flex: 1;
            gap: 18px;
        }
        /* MODAL */

.modal-overlay{
    position:fixed;
    inset:0;
    background:rgba(15,23,42,.45);
    backdrop-filter:blur(6px);
    display:none;
    justify-content:center;
    align-items:center;
    z-index:99999;
}

.logout-modal,
.loading-modal{
    width:430px;
    background:#fff;
    border-radius:24px;
    padding:35px;
    position:relative;
    box-shadow:0 20px 50px rgba(0,0,0,.15);
}

.close-modal{
    position:absolute;
    right:18px;
    top:18px;
    border:none;
    background:none;
    font-size:22px;
    cursor:pointer;
}

.logout-icon{
    width:110px;
    height:110px;
    margin:auto;
    border-radius:50%;
    background:#ECFDF3;
    display:flex;
    align-items:center;
    justify-content:center;
}

.logout-icon i{
    font-size:48px;
    color:#16A34A;
}

.logout-modal h2{
    text-align:center;
    margin-top:20px;
}

.logout-desc{
    text-align:center;
    margin-top:10px;
    color:#64748B;
}

.logout-desc span{
    color:#16A34A;
    font-weight:600;
}

.logout-info{
    margin-top:25px;
    background:#F0FDF4;
    border-radius:15px;
    padding:15px;
    display:flex;
    gap:12px;
}

.logout-info i{
    color:#16A34A;
    font-size:22px;
}

.logout-info p{
    color:#64748B;
    font-size:14px;
    margin-top:3px;
}

.logout-actions{
    margin-top:25px;
    display:flex;
    gap:12px;
}

.cancel-btn,
.confirm-btn{
    flex:1;
    height:50px;
    border-radius:12px;
    cursor:pointer;
    font-weight:600;
}

.cancel-btn{
    background:#fff;
    border:1px solid #D1D5DB;
}

.confirm-btn{
    border:none;
    background:#16A34A;
    color:#fff;
}

/* LOADING */

.spinner-circle{
    width:120px;
    height:120px;
    border-radius:50%;
    border:4px solid #DCFCE7;
    border-top:4px solid #16A34A;
    margin:auto;
    display:flex;
    justify-content:center;
    align-items:center;
    animation:spin 1s linear infinite;
}

@keyframes spin{
    100%{
        transform:rotate(360deg);
    }
}

.loading-modal h2{
    text-align:center;
    margin-top:20px;
}

.loading-modal p{
    text-align:center;
    color:#64748B;
    margin-top:10px;
}

.loading-dots{
    display:flex;
    justify-content:center;
    gap:10px;
    margin-top:20px;
}

.loading-dots span{
    width:10px;
    height:10px;
    border-radius:50%;
    background:#16A34A;
    animation:bounce 1s infinite;
}

.loading-dots span:nth-child(2){
    animation-delay:.2s;
}

.loading-dots span:nth-child(3){
    animation-delay:.4s;
}

@keyframes bounce{
    0%,100%{
        opacity:.3;
        transform:translateY(0);
    }
    50%{
        opacity:1;
        transform:translateY(-6px);
    }
}
.login-toast{
    position:fixed;
    top:15px;
    right:15px;

    width:400px;
    padding:16px 19px;

    display:flex;
    align-items:center;
    gap:12px;

    background:#fff;
    border-radius:14px;

    box-shadow:0 10px 25px rgba(0,0,0,.10);

    z-index:999999;

    transform:translateX(350px);
    opacity:0;

    transition:.4s ease;
}

.login-toast.show{
    transform:translateX(0);
    opacity:1;
}

.toast-icon{
    width:50px;
    height:50px;
    min-width:50px;

    border-radius:50%;
    background:#ECFDF3;

    display:flex;
    align-items:center;
    justify-content:center;
}

.toast-icon i{
    font-size:25px;
    color:#16A34A;
}

.toast-content{
    flex:1;
}

.toast-content h4{
    font-size:21px;
    font-weight:700;
    color:#111827;
    margin-bottom:2px;
}

.toast-content p{
    font-size:15px;
    color:#6B7280;
}

.toast-progress{
    margin-top:12px;
    width:100%;
    height:6px;
}

.toast-progress-bar{
    width:100%;
    height:100%;
    background:#16A34A;

    animation:toastTimer 3s linear forwards;
}

@keyframes toastTimer{
    from{
        width:100%;
    }
    to{
        width:0%;
    }
}
.toast-close{
    border:none;
    outline:none;
    background:transparent;

    cursor:pointer;

    color:#9CA3AF;
    font-size:16px;

    display:flex;
    align-items:center;
    justify-content:center;

    width:24px;
    height:24px;

    transition:.2s ease;
}

.toast-close:hover{
    color:#374151;
    transform:scale(1.1);
}

</style>

</head>
<body>


<div class="wrapper">

    <div class="sidebar">

        <div class="logo">

    <img src="{{ asset('images/TI.png') }}" width="70" height="70">

    <div class="logo-text">
        <span class="track">TrackIt</span>
        <span class="dotcom">.com</span>
    </div>

</div>

<button id="toggleSidebar" class="collapse-btn">
    <i class="fa-solid fa-chevron-left"></i>
</button>
        

        <div class="menu">

            <button
    onclick="window.location.href='/track'"
    class="{{ request()->is('track') ? 'active' : '' }}">
    <i class="fa-solid fa-house"></i>
    <span>Track</span>
</button>

<button
    onclick="window.location.href='/properties'"
    class="{{ request()->is('properties') ? 'active' : '' }}">
    <i class="fa-solid fa-chart-column"></i>
    <span>Properties</span>
</button>

<button
    onclick="window.location.href='/cleaning'"
    class="{{ request()->is('cleaning') ? 'active' : '' }}">
    <i class="fa-solid fa-screwdriver-wrench"></i>
    <span>Cleaning</span>
</button>

<button
    onclick="window.location.href='/accounts'"
    class="{{ request()->is('accounts') ? 'active' : '' }}">
    <i class="fa-regular fa-user"></i>
    <span>Accounts</span>
</button>

<button
    onclick="window.location.href='/garagesale'"
    class="{{ request()->is('garagesale') ? 'active' : '' }}">
    <i class="fa-solid fa-box"></i>
    <span>Garage</span>
</button>

<button
    onclick="window.location.href='/logs'"
    class="{{ request()->is('logs') ? 'active' : '' }}">
    <i class="fa-regular fa-clock"></i>
    <span>Logs</span>
</button>

        </div>
        
<div class="bottom">

    <button>
        <i class="fa-regular fa-circle-user"></i>
        <span>Profile</span>
    </button>

    <button onclick="openLogoutModal()">
    <i class="fa-solid fa-right-from-bracket"></i>
    <span>Logout</span>
</button>

</div>
    </div>

    @yield('content')

</div>
<script>

const sidebar = document.querySelector('.sidebar');
const toggleBtn = document.getElementById('toggleSidebar');

toggleBtn.addEventListener('click', () => {

    sidebar.classList.toggle('collapsed');

    const icon = toggleBtn.querySelector('i');

    if(sidebar.classList.contains('collapsed')){
        icon.classList.remove('fa-chevron-left');
        icon.classList.add('fa-chevron-right');
    }else{
        icon.classList.remove('fa-chevron-right');
        icon.classList.add('fa-chevron-left');
    }

});

function openLogoutModal(){
    document.getElementById('logoutModal').style.display='flex';
}

function closeLogoutModal(){
    document.getElementById('logoutModal').style.display='none';
}

function showLoadingModal(){

    document.getElementById('logoutModal').style.display='none';

    document.getElementById('loadingModal').style.display='flex';

    setTimeout(() => {

        window.location.href = "{{ url('/auth') }}?logout=success";

    }, 2000);
}
function hideLoginToast(){
    document
        .getElementById('loginToast')
        .classList.remove('show');
}
window.addEventListener('load', () => {

    const params =
        new URLSearchParams(window.location.search);

    if(params.get('login') === 'success'){

        const toast =
            document.getElementById('loginToast');

        toast.classList.add('show');

        setTimeout(() => {

            toast.classList.remove('show');

            window.history.replaceState(
                {},
                document.title,
                window.location.pathname
            );

        },3000);
    }

});


</script>

<!-- Logout Modal -->
<div id="logoutModal" class="modal-overlay">

    <div class="logout-modal">

        <button class="close-modal" onclick="closeLogoutModal()">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="logout-icon">
            <i class="fa-solid fa-right-from-bracket"></i>
        </div>

        <h2>Ready to log out?</h2>

        <p class="logout-desc">
            Are you sure you want to log out of your
            <span>TrackIt</span> account?
        </p>

        <div class="logout-info">
            <i class="fa-solid fa-shield-halved"></i>

            <div>
                <strong>Your session will be ended</strong>
                <p>You'll need to log in again to access your account.</p>
            </div>
        </div>

        <div class="logout-actions">

            <button class="cancel-btn"
                    onclick="closeLogoutModal()">
                Cancel
            </button>

            <button class="confirm-btn"
                    onclick="showLoadingModal()">
                <i class="fa-solid fa-right-from-bracket"></i>
                Yes, Log out
            </button>

        </div>

    </div>

</div>

<!-- Loading Modal -->
<div id="loadingModal" class="modal-overlay">

    <div class="loading-modal">

        <div class="spinner-circle">
            <img src="{{ asset('images/TI.png') }}"
                 width="70">
        </div>

        <h2>Logging you out...</h2>

        <p>Please wait a moment.</p>

        <div class="loading-dots">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>

</div>

<form id="logoutForm"
      action="{{ route('logout') }}"
      method="POST"
      style="display:none;">
    @csrf
</form>
<div id="loginToast" class="login-toast">

    <div class="toast-icon">
        <i class="fa-solid fa-check"></i>
    </div>

    <div class="toast-content">
        <h4>Login Successful</h4>
        <p>Welcome back to TrackIt!</p>

        <div class="toast-progress">
            <div class="toast-progress-bar"></div>
        </div>
    </div>

    <button class="toast-close"
            onclick="hideLoginToast()">
        <i class="fa-solid fa-xmark"></i>
    </button>

</div>
</body>
</html>