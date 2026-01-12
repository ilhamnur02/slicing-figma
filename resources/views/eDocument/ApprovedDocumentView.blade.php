<?php
$judul = "Detail Surat Ijin & Cuti / Surat Tugas / Checklist Manual - 2025116712";
$subject = "[AOC] Surat Cuti Khusus Tgl. 12 - 16 Desember 2025";
$dari = "Agranato Octatha";
$ref = "MSFM/P+/11/25";
$revisi = "00";
$file = "AOC Surat Izin Tgl. 12-16 Des 2025.pdf";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Approved Document</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, Helvetica, sans-serif;
}

/* ===== TOP BAR ===== */
.topbar{
    height:55px;
    background: #0b1fae;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}
.topbar .logo {
    font-size: 18px;
    font-weight: bold;
}

.topbar .user {
    display: flex;
    align-items:center; 
    gap:10px;
}

.topbar .avatar{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: #ccc;
}

/* ===== LAYOUT ===== */
.container{
    display:flex;
    height:calc(100vh - 55px);
}

/* ===== SIDEBAR ===== */
.sidebar{
    width:240px;
    background:#f2f2f2;
    border-right:1px solid #ddd;
    padding:15px;
}
.profile{
    display:flex;
    align-items: center;
    gap:10px;
    margin-bottom:20px;
}
.profile .avatar{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #bbb;
}
.status{
    font-size: 12px;
    color: green;
}
.menu h4{
    margin: 15px 0 5px;
    font-size: 13px;
    color: #666;
}
.menu a{
    display: block;
    padding: 8px 10px;
    text-decoration: none;
    color: #333;
    font-size: 14px;
    border-radius: 4px;
}
.menu a:hover{
    background: #ddd;
}

/* ===== CONTENT ===== */
.content{
    flex: 1;
    background: #e9f7fb;
    padding: 20px;
}

.content-header{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.content-header h2{
    font-size: 28px;
}

.header-title{
    display: flex;
    align-items: baseline;
    gap: 12px;
}

.content-header span {
    font-size: 12px;
    color: #666;
    margin-left: 10px; 
}

.btn{
    background: #0b1fae;
    color: #fff;
    padding: 8px 15px;
    border-radius: 4px;
    font-size: 13px;
    cursor: pointer;
    text-decoration: none;
}

.detail-title{
    display: flex;
    justify-content: space-between;
    align-items: center;

    background: #f7f7f7;    
    border: 1px solid #ddd;
    padding: 10px 12px;
    margin: -15px -15px 15px -15px; 
    font-weight: normal;
}

.btn-small{
    padding: 7px 16px;
    font-size: 14px;
    line-height: 1;
}

/* ===== DETAIL CARD ===== */
.detail-wrapper{
    display:flex;
    gap:20px;
    margin-top:15px;
}

/* LEFT DETAIL */
.detail-card{
    flex:3;
    background:#fff;
    border:1px solid #ccc;
    border-radius:4px;
    padding:15px;
}

.detail-header{
    font-weight:bold;
    margin-bottom:10px;
}

.detail-row{
    font-size:13px;
    margin-bottom:5px;
}

.box{
    margin-top:15px;
    border:1px solid #ccc;
    padding:10px;
    min-height:100px;
    background:#fafafa;
}

/* RIGHT ATTACHMENT */
.attachment{
    flex:1;
    background:#fff;
    border:1px solid #ccc;
    border-radius:4px;
    padding:15px;
}

.attachment h4{
    margin-bottom:10px;
}

.file-box{
    border:1px solid #ddd;
    padding:10px;
    border-radius:4px;
    font-size:12px;
}

.badge{
    display:inline-block;
    margin-top:5px;
    background:green;
    color:#fff;
    padding:3px 8px;
    border-radius:3px;
    font-size:11px;
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
        <a href="#">Need Approval</a>
        <a href="#">Approved</a>
        <a href="#">Wait To Approve</a>

        <h4> <a href="#">✉️ Inbox</a> </h4>

        <h4> <a href="#">❓ Help</a> </h4>
    </div>
</div>

<!-- CONTENT -->
<div class="content">

    <div class="content-header">
        <div class="header-title">
            <h2>Approved Document</h2>
            <span> list data approved document</span>
        </div>
    </div>

    <div class="detail-wrapper">

        <!-- LEFT DETAIL -->
        <div class="detail-card">
            <div class="detail-title">
                <span><?= $judul ?></span>
                <a href="approved.php" class="btn btn-small">Back</a>
            </div>

            <div class="detail-row"><strong><?= $subject ?></strong></div>
            <div class="detail-row">Dari : <?= $dari ?></div>
            <div class="detail-row">No Reference : <?= $ref ?></div>
            <div class="detail-row">No Revisi : <?= $revisi ?></div>
            <div class="detail-row">Issued Number :</div>

            <div class="box">
                <strong>PESAN</strong>
            </div>

            <div class="box">
                <strong>APPROVER</strong>
            </div>
        </div>

        <!-- RIGHT ATTACHMENT -->
        <div class="attachment">
            <h4>Attachment</h4>
            <div class="file-box">
                📄 <?= $file ?><br>
                <span class="badge">Active</span>
            </div>
        </div>

    </div>

</div>
</div>

</body>
</html>
