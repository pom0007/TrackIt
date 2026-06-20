@extends('layouts.app')

@section('content')
<style>


        .properties-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
            border-bottom: 1px solid #EAECF0;
        }

        .properties-header h1 {
            font-size: 20px;
            font-weight: 700;
            color: #101828;
            margin-bottom: 10px;
        }

        .properties-header p {
            color: #667085;
            font-size: 15px;
        }

        .add-property-btn {
            height: 40px;
            border: none;
            padding: 0 22px;
            border-radius: 10px;
            background: #16A34A;
            color: white;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .add-property-btn:hover {
            background: #15803D;
        }

        .search-container {
            padding: 25px 40px 10px;
        }

        .search-box {
            width: 380px;
            height: 46px;
            border: 1px solid #D0D5DD;
            border-radius: 12px;
            display: flex;
            align-items: center;
            padding: 0 16px;
            gap: 12px;
        }

        .search-box i {
            color: #667085;
            font-size: 18px;
        }

        .search-box input {
            border: none;
            outline: none;
            height: 100%;
            width: 100%;
            font-size: 14px;
        }

        .table-container {
            margin: 18px 40px 30px;
            border: 1px solid #EAECF0;
            border-radius: 14px;
            overflow: auto;
        }

        .property-table {
            width: 100%;
            border-collapse: collapse;
        }

        .property-table th {
            height: 60px;
            text-align: left;
            padding: 0 30px;
            background: #FCFCFD;
            color: #101828;
            font-size: 15px;
            font-weight: 700;
            border-bottom: 1px solid #EAECF0;
        }
        .property-table td {
            padding: 0;
        }

        .empty-state-table {
            height: calc(100vh - 380px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .empty-state-table .empty-icon {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: #F5F7FF;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .empty-state-table .empty-icon i {
            font-size: 58px;
            color: #16A34A;
        }

        .empty-state-table h2 {
            font-size: 20px;
            font-weight: 700;
            color: #101828;
            margin-bottom: 10px;
        }

        .empty-state-table p {
            color: #667085;
            font-size: 15px;
        }

        .pagination {
            height: 60px;
            border-top: 1px solid #EAECF0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 22px;
        }

        .pagination-info {
            color: #667085;
            font-size: 14px;
        }

        .pagination-buttons {
            display: flex;
            gap: 10px;
        }

        .pagination-buttons button {
            width: 38px;
            height: 38px;
            border: none;
            border-radius: 8px;
            background: #F2F4F7;
            cursor: pointer;
        }

        .active-page {
            background: #16A34A !important;
            color: white;
        }
        .pagination-buttons button.active-page {
            background: #16A34A;
            color: white;
            font-weight: 600;
        }
        .pagination-buttons button:disabled {
            cursor: not-allowed;
            opacity: .8;
        }
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .35);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 999;
        }

        .modal-overlay.show {
            display: flex;
        }

        .modal {
            width: 900px;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
        }

        .modal-header {
            padding: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
        }

        .modal-body {
            padding: 30px;
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 22px;
        }

        .modal-body input,
        .modal-body textarea,
        .modal-body select {
            width: 100%;
            height: 50px;
            border: 1px solid #D0D5DD;
            border-radius: 12px;
            padding: 0 15px;
            font-size: 14px;
            outline: none;
            background: #fff;
        }

        .modal-body textarea {
            height: 120px;
            resize: none;
            padding: 15px;
        }


        .modal-body textarea:focus {
            border-color: #16A34A;
        }


        .form-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px 20px;
            align-content: start;
        }

        .description-group {
            grid-column: 1 / span 2;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 600;
            color: #344054;
        }

        .modal-body textarea {
            grid-column: span 2;
        }

        .modal-footer {
            padding: 20px 25px;
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            border-top: 1px solid #eee;
        }

        .close-btn,
        .cancel-btn {
            border: none;
            background: #f3f4f6;
            padding: 12px 20px;
            border-radius: 10px;
            cursor: pointer;
        }

        .save-btn {
            border: none;
            background: #16A34A;
            color: white;
            padding: 12px 20px;
            border-radius: 10px;
            cursor: pointer;
        }

        .upload-box {
            border: 2px dashed #D0D5DD;
            border-radius: 16px;
            height: 290px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .upload-content {
            text-align: center;
        }

        .upload-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: #DCFCE7;
            color: #16A34A;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }

        .upload-content h3 {
            font-size: 16px;
            margin-bottom: 6px;
        }

        .upload-content p {
            color: #667085;
            font-size: 13px;
            margin-bottom: 15px;
        }

        .upload-btn {
            display: inline-block;
            background: #F3F4F6;
            padding: 10px 18px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 14px;
        }

        #previewImage {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        /* Responsive */
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 600;
            color: #344054;
        }

        /* Toolbar */
        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .toolbar-actions {
            display: flex;
            gap: 12px;
        }

        .toolbar-btn {
            height: 46px;
            padding: 0 18px;
            border: 1px solid #D0D5DD;
            background: #fff;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #344054;
        }

        .toolbar-btn:hover {
            background: #F9FAFB;
        }

        #generateBarcodeBtn {
            border: 1px solid #D0D5DD;
            background: #fff;
            color: #344054;
        }


</style>
     <div class="wrapper">

        <div class="sidebar">
            <div class="logo">

                <img src="{{ asset('images/TI.png') }}" width="70" height="70">

                <div class="logo-divider"></div>

                <div class="logo-text">
                    <span class="track">TrackIt</span>
                    <span class="dotcom">.com</span>
                </div>


            </div>

            <div class="menu">
                <button onclick="window.location.href='/displaypanel'">
                    <i class="fa-solid fa-house"></i>
                    <span>Track</span>
                </button>

                <button onclick="window.location.href='/properties'">
                    <i class="fa-solid fa-chart-column"></i>
                    <span>Properties</span>
                </button>

                <button class="active">
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

                <button onclick="window.location.href='/logs'">
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

                <!-- Header -->
                <div class="properties-header">

                    <div>
                        <h1>Cleaning</h1>
                        <p>Manage all cleaning records.</p>
                    </div>

                    <button class="add-property-btn">
                        <i class="fa-solid fa-plus"></i>
                        Add Cleaning Record
                    </button>

                </div>

                <!-- Search -->
                <div class="search-container">

                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search cleaning record...">
                    </div>

                </div>

                <!-- Table -->
                <div class="table-container">

                    <table class="property-table">

                        <thead>
                            <tr>
                                <th>Tracking No.</th>
                                <th>Property Name</th>
                                <th>Cleaning Date</th>
                                <th>Cleaning Officer</th>
                                <th>Remarks</th>
                                <th>Next Schedule</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td colspan="7">

                                    <div class="empty-state-table">

                                        <div class="empty-icon">
                                            <i class="fa-solid fa-screwdriver-wrench"></i>
                                        </div>

                                        <h2>No Cleaning Information</h2>

                                        <p>
                                            Cleaning records will be displayed here.
                                        </p>

                                    </div>

                                </td>
                            </tr>

                        </tbody>

                    </table>

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

@endsection