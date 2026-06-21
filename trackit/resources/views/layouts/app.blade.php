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
    <span>Garage Sale</span>
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

    <button>
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

</script>

</body>
</html>