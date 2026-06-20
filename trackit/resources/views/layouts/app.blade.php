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
        /* Main */

.main {
    display: flex;
    flex: 1;
    gap: 6px;
}

/* Scanner Card */

.scanner-card {
    width: 360px;
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow:
        0 0 1px rgba(0,0,0,.05),
        0 8px 30px rgba(0,0,0,.04);
}

.section-title {
    font-size: 17px;
    font-weight: 700;
    color: #101828;
    margin-bottom: 40px;
}

/* Scanner Frame */

.scan-frame {
    width: 190px;
    height: 190px;
    position: relative;
}

.barcode {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 105px;
    height: 65px;
    background:
        repeating-linear-gradient(
            90deg,
            #d9dce2 0px,
            #d9dce2 2px,
            transparent 2px,
            transparent 4px
        );
}

.scan-line {
    position: absolute;
    width: 150px;
    height: 4px;
    background: #16A34A;
    left: 50%;
    top: 50%;
    transform: translateX(-50%);
    box-shadow: 0 0 10px #2563eb;
    animation: scan 2s linear infinite;
}

@keyframes scan {
    0% { top: 60px; }
    50% { top: 120px; }
    100% { top: 60px; }
}

/* Asset Card */

.asset-card {
    flex: 1;
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow:
        0 0 1px rgba(0,0,0,.05),
        0 8px 30px rgba(0,0,0,.04);
}

/* Fullscreen Button */

.fullscreen-btn {
    width: 42px;
    height: 42px;
    border: none;
    border-radius: 12px;
    background: #F3F4F6;
    color: #16A34A;
    cursor: pointer;
    transition: .25s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.fullscreen-btn:hover {
    background: #DCFCE7;
    transform: scale(1.05);
}

.fullscreen-btn i {
    font-size: 16px;
}

/* Property Grid */

.property-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
    margin-top: 20px;
}

.property-box {
    background: #fff;
    border: 1px solid #E5E7EB;
    border-radius: 18px;
    padding: 22px;
}

.property-box i {
    font-size: 22px;
    color: #16A34A;
    margin-bottom: 15px;
}

.property-box label {
    display: block;
    font-size: 14px;
    color: #6B7280;
    margin-bottom: 10px;
}

.property-box h3 {
    font-size: 22px;
    font-weight: 700;
    color: #111827;
    line-height: 1.4;
}

/* Garage Button */

.garage-btn {
    height: 58px;
    padding: 0 30px;
    background: #16A34A;
    color: #fff;
    border: none;
    border-radius: 14px;
    font-size: 17px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 12px;
    cursor: pointer;
}

.garage-btn:hover {
    background: #15803D;
}

        /* =========================
   PROPERTIES PAGE
========================= */

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
            align-items: center;
            gap: 10px;
        }

        .pagination-buttons button {
            width: 38px;
            height: 38px;
            border: none;
            border-radius: 8px;
            background: #F2F4F7;
            color: #98A2B3;
            cursor: pointer;
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
            background: #fff;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: left;
            padding: 18px 0;
            box-shadow:
                0 0 1px rgba(0, 0, 0, .05),
                0 8px 30px rgba(0, 0, 0, .04);
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

        /* Modal add property */
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

</head>
<body>

@yield('content')

</body>
</html>