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