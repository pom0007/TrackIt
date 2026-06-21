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

.add-property-btn{
    height:40px;
    border:none;
    padding:0 22px;
    border-radius:10px;
    background:#16A34A;
    color:white;
    font-weight:600;
    font-size:15px;
    cursor:pointer;
    display:flex;
    align-items:center;
    gap:10px;
}

.add-property-btn:hover{
    background:#15803D;
}

.search-container{
    padding:25px 40px 10px;
}

.search-box{
    width:380px;
    height:46px;
    border:1px solid #D0D5DD;
    border-radius:12px;
    display:flex;
    align-items:center;
    padding:0 16px;
    gap:12px;
}

.search-box i{
    color:#667085;
    font-size:18px;
}

.search-box input{
    border:none;
    outline:none;
    height:100%;
    width:100%;
    font-size:14px;
}

.table-container{
    margin:18px 40px 30px;
    border:1px solid #EAECF0;
    border-radius:14px;
    overflow:auto;
}

.property-table{
    width:100%;
    border-collapse:collapse;
}

.property-table th{
    height:60px;
    text-align:left;
    padding:0 30px;
    background:#FCFCFD;
    color:#101828;
    font-size:15px;
    font-weight:700;
    border-bottom:1px solid #EAECF0;
}

.property-table td{
    padding:0;
}

.empty-state-table{
    height:calc(95vh - 380px);
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

.empty-state-table .empty-icon{
    width:140px;
    height:140px;
    border-radius:50%;
    background:#F5F7FF;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-bottom:20px;
}

.empty-state-table .empty-icon i{
    font-size:58px;
    color:#16A34A;
}

.empty-state-table h2{
    font-size:20px;
    font-weight:700;
    color:#101828;
    margin-bottom:10px;
}

.empty-state-table p{
    color:#667085;
    font-size:15px;
}

.pagination{
    height:60px;
    border-top:1px solid #EAECF0;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 22px;
}

.pagination-info{
    color:#667085;
    font-size:14px;
}

.pagination-buttons{
    display:flex;
    align-items:center;
    gap:10px;
}

.pagination-buttons button{
    width:38px;
    height:38px;
    border:none;
    border-radius:8px;
    background:#F2F4F7;
    color:#98A2B3;
    cursor:pointer;
}

.pagination-buttons button.active-page{
    background:#16A34A;
    color:white;
    font-weight:600;
}

.pagination-buttons button:disabled{
    cursor:not-allowed;
    opacity:.8;
}
/* =========================
   TOTAL AMOUNT*/
.total-amount-bar{
    height:60px;
    border-top:1px solid #EAECF0;
    display:flex;
    justify-content:flex-end;
    align-items:center;
    gap:10px;
    padding:0 25px;
    background:#FCFCFD;
}

.total-amount-bar span{
    font-size:14px;
    color:#667085;
    font-weight:500;
}

.total-amount-bar strong{
    font-size:20px;
    color:#16A34A;
    font-weight:600;
}

</style>

<div class="main">
    <div class="asset-card">

        <!-- Header -->
        <div class="properties-header">

            <div>
                <h1>Garage Sale</h1>
                <p>Manage all items on the garage.</p>
            </div>

        </div>

        <!-- Search -->
        <div class="search-container">

            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search property...">
            </div>

        </div>

        <!-- Table -->
        <div class="table-container">

            <table class="property-table">

                <thead>
                    <tr>
                        <th>Tracking No.</th>
                        <th>Property</th>
                        <th>Date Registered</th>
                        <th>Age</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td colspan="7">

                            <div class="empty-state-table">

                                <div class="empty-icon">
                                    <i class="fa-solid fa-building"></i>
                                </div>

                                <h2>No Property Information</h2>

                                <p>
                                    Property records will be displayed here.
                                </p>

                            </div>

                        </td>
                    </tr>

                </tbody>

            </table>
            <div class="total-amount-bar">
    <span>Total Amount:</span>
    <strong>₱0.00</strong>
</div>

            <!-- Pagination -->

            <div class="pagination">

                <div class="pagination-info">
                    Showing 0 to 0 of 0 entries
                </div>
                

                <div class="pagination-buttons">

                    <button disabled>
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button class="active-page">
                        1
                    </button>

                    <button disabled>
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>


</div>
@endsection