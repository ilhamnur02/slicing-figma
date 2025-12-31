<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>eDocument - Approved Document</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

/* ===== TOP BAR ===== */
.topbar {
    height: 55px;
    background: #0b1fae;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
}

.topbar .logo {
    font-weight: bold;
    font-size: 18px;
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
    width: 240px;
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
    font-size: 13px;
    margin: 15px 0 5px;
    color: #666;
}

.menu a {
    display: block;
    text-decoration: none;
    color: #333;
    padding: 8px 10px;
    border-radius: 4px;
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

.content-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.content-header h2 {
    font-size: 28px;
}

.content-header span {
    font-size: 12px;
    color: #666;
}

.btn {
    background: #0b1fae;
    color: #fff;
    padding: 7px 15px;
    border-radius: 4px;
    font-size: 13px;
    cursor: pointer;
}

/* ===== TABLE AREA ===== */
.table-wrapper {
    margin-top: 15px;
    background: #fff;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.group-bar {
    background: #1e90ff;
    color: #fff;
    font-size: 12px;
    padding: 8px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    font-size: 13px;
    text-align: left;
}

th {
    background: #f5f5f5;
}

.filter {
    width: 100%;
    height: 22px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
</style>
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
    <div class="logo">eDocument</div>
    <div class="user">
        <div class="avatar"></div>
        <span>msfm-audit.spv1</span>
    </div>
</div>

<!-- MAIN LAYOUT -->
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
            <h4>FOLDERS</h4>
            <a href="#">Create Document</a>

            <h4>Approval</h4>
            <a href="#">Need Approval</a>
            <a href="#">Approved</a>
            <a href="#">Wait To Approve</a>

            <h4>Inbox</h4>
            <a href="#">Inbox</a>

            <h4>Help</h4>
            <a href="#">Help</a>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <div class="content-header">
            <div>
                <h2>Approved Document</h2>
                <span>list data approved document</span>
            </div>
            <div class="btn">Excel</div>
        </div>

        <div class="table-wrapper">
            <div class="group-bar">
                Drag a column header and drop it here to group by that column
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Approval</th>
                        <th>Status</th>
                        <th>Doc Number</th>
                        <th>Ref Number</th>
                        <th>Category</th>
                        <th>Dari</th>
                        <th>Subject</th>
                    </tr>
                    <tr>
                        <th><input class="filter"></th>
                        <th><input class="filter"></th>
                        <th><input class="filter"></th>
                        <th><input class="filter"></th>
                        <th><input class="filter"></th>
                        <th><input class="filter"></th>
                        <th><input class="filter"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- data kosong -->
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
