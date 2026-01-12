<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - eDocument</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            background: #cfeef1;
        }

        /* ===== TOPBAR ===== */
        .topbar {
            height: 55px;
            background: #0b1fae;
            color: white;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .topbar .logo {
            font-size: 18px;
            font-weight: bold;
        }
        .topbar .user {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .topbar .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #ccc;
        } 

        /* ===== LAYOUT ===== */
        .container {
            display: flex;
            height: calc(100vh - 55px);
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            width: 230px;
            background: #f2f2f2;
            border-right: 1px solid #ddd;
            padding: 15px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .profile .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #bbb;
        }

        .profile .status {
            font-size: 12px;
            color: green;
        }

        .menu h4 {
            margin: 15px 0 5px;
            font-size: 13px;
            color: #666;
        }

        .menu a {
            display: block;
            padding: 8px 10px;
            text-decoration: none;
            color: #333;
            border-radius: 4px;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .menu a:hover {
            background: #ddd;
        }

        /* ===== CONTENT ===== */
        .content {
            flex: 1;
            background: #e9f7fb;
            padding: 20px;
        }

        .welcome-box {
            background: #3fa9f5;
            color: white;
            padding: 20px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        /* ===== CARDS ===== */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .card {
            background: white;
            border-radius: 6px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .icon {
            font-size: 40px;
            padding: 12px;
            border-radius: 6px;
            color: white;
        }

        .info h3 {
            margin: 0;
            font-size: 22px;
        }

        .info p {
            margin: 0;
            font-size: 13px;
        }

        /* ===== COLORS ===== */
        .blue { background: #3498db; }
        .orange { background: #f39c12; }
        .red { background: #e74c3c; }
        .darkgreen { background: #16a085; }

        /* ===== FOOTER ===== */
        .footer {
            text-align: center;
            font-size: 12px;
            color: #555;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
    <div class="logo">eDocument</div>
    <div class="user">
        <div class="avatar"></div>
        <span>msfm-audit.spv1</span>
    </div>
</div>


<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="profile">
            <div class="avatar"></div>
            <div>
                <strong>msfm-audit.spv1</strong><br>
                <span class="status">● Online</span>
            </div>
        </div>

        <div class="menu">
            <h8> <a href="#">📁 FOLDERS</a></h8><br>
            <h4> <a href="#">✏️ Create Document</a> </h4>
            <h4> <a href="#">✔️ Approval</a> </h4>
            <h4> <a href="#">✉️ Inbox</a> </h4>
            <h4> <a href="#">❓ Help</a> </h4>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="welcome-box">
            <h3>Welcome To eDocument</h3>
            <p>Please download User Manual for detail information</p>
        </div>

        <div class="cards">
            <div class="card">
                <div class="icon blue">☰</div>
                <div class="info">
                    <h1>0</h1>
                    <p>On Progress</p>
                </div>
            </div>

            <div class="card">
                <div class="icon darkgreen">✔</div>
                <div cla ss="info">
                    <h1>458</h1>
                    <p>Completed</p>
                </div>
            </div>

            <div class="card">
                <div class="icon orange">✎</div>
                <div class="info">
                    <h1>1</h1>
                    <p>Revised</p>
                </div>
            </div>

            <div class="card">
                <div class="icon red">↩</div>
                <div class="info">
                    <h1>26</h1>
                    <p>Rejected</p>
                </div>
            </div>

            <div class="card">
                <div class="icon blue">✍</div>
                <div class="info">
                    <h1>0</h1>
                    <p>Need Approval</p>
                </div>
            </div>

            <div class="card">
                <div class="icon darkgreen">✉</div>
                <div class="info">
                    <h1>82</h1>
                    <p>New Received</p>
                </div>
            </div>
        </div>

        <div class="footer">
            Copyright © 2024 WIKALA GROUP
        </div>

    </div>
</div>

</body>
</html>
