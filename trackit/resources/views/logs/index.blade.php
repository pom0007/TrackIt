@extends('layouts.app')

@section('content')
<style>
.properties-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 30px;
    border-bottom:1px solid #EAECF0;
}

.properties-header h1{
    font-size:20px;
    font-weight:700;
    color:#101828;
    margin-bottom:10px;
}

.properties-header p{
    color:#667085;
    font-size:15px;
}    
.empty-state{
height:85%;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
}

.empty-icon{
width:165px;
height:165px;
border-radius:50%;
background:#f3f6ff;
display:flex;
align-items:center;
justify-content:center;
margin-bottom:25px;
}

.empty-icon i{
font-size:72px;
color:#16A34A;
}

.empty-state h2{
font-size:24px;
font-weight:700;
color:#111827;
margin-bottom:14px;
}

.empty-state p{
font-size:16px;
line-height:1.7;
text-align:center;
color:#667085;
}

.asset-info{
display:none;
padding-top:20px;
}

.asset-grid{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:18px;
margin-top:20px;
}

.info-box{
background:#f8fafc;
border-radius:14px;
padding:18px;
}

.label{
font-size:13px;
color:#667085;
margin-bottom:6px;
}

.value{
font-size:18px;
font-weight:700;
color:#101828;
}
</style>

<div class="wrapper">

<div class="sidebar">
<div class="logo">

    <img src="images/TI.png"
     width="70"
     height="70">

    <div class="logo-divider"></div>

    <div class="logo-text">
    <span class="track">TrackIt</span>
    <span class="dotcom">.com</span>
</div>


</div>

<div class="menu">
<button onclick="window.location.href='/track'">
    <i class="fa-solid fa-house"></i>
    <span>Track</span>
</button>

<button onclick="window.location.href='/properties'">
    <i class="fa-solid fa-chart-column"></i>
    <span>Properties</span>
</button>

<button onclick="window.location.href='/cleaning'">
    <i class="fa-solid fa-screwdriver-wrench"></i>
<span>Cleaning</span>
</button>
<button onclick="window.location.href='/accounts'">
    <i class="fa-regular fa-user"></i>
<span>Accounts</span>
</button>

<button onclick="window.location.href='/garagesale'">
    <i class="fa-solid fa-box"></i>
<span>Garage Sale</span>
</button>

<button class="active">
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

<div class="main">

    <div class="asset-card">

        <div class="properties-header">

    <div>
        <h1>Logs</h1>
        <p>Manage all log records.</p>
    </div>

</div>

        <div class="empty-state">

            <div class="empty-icon">
                <i class="fa-solid fa-building"></i>
            </div>

            <h2>
                No Logs Information
            </h2>

            <p>
                Log records will be displayed here.
            </p>

        </div>

    </div>

</div>
@endsection