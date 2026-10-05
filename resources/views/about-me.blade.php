<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - ข้อมูลส่วนบุคคล</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #0d6efd;
        }
        .work-card {
            transition: transform 0.2s, box-shadow 0.2s;
            border-radius: 12px;
        }
        .work-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container py-5">
    <!-- 1. ข้อมูลส่วนบุคคล (Profile Header) -->
    <div class="profile-card p-4 p-md-5 mb-5">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <!-- ใส่รูปภาพโปรไฟล์ของคุณที่นี่ (เช่น วางรูปใน public/images/profile.jpg) -->
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image" class="profile-img mb-2" onerror="this.src='https://via.placeholder.com/150'">
            </div>
            <div class="col-md-9">
                <h2 class="fw-bold text-primary mb-1">[ ใส่ชื่อ - นามสกุล ของคุณ ]</h2>
                <h5 class="text-muted mb-3">รหัสนักศึกษา: [ ใส่รหัสนักศึกษาของคุณ ]</h5>
                <p class="mb-0 text-secondary">
                    หน้าแสดงข้อมูลส่วนบุคคลและรวบรวมลิงก์ผลงานย้อนหลัง (EP02 - EP08)
                </p>
            </div>
        </div>
    </div>

    <!-- 2. ลิงก์งานที่เคยทำ (Works & Assignments) -->
    <h3 class="fw-bold mb-4 text-dark"><i class="bi bi-folder2-open me-2"></i>ผลงานที่เคยทำ (Portfolio Links)</h3>
    
    <div class="row g-4">
        <!-- EP02 Hero -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm work-card">
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-primary mb-2 w-auto align-self-start">EP02</span>
                    <h5 class="card-title fw-bold">Hero Gallery</h5>
                    <p class="card-text text-muted flex-grow-1">หน้ารวบรวมรูปภาพ / Gallery</p>
                    <a href="{{ url('/gallery') }}" class="btn btn-outline-primary w-100 mt-3">
                        <i class="bi bi-images me-1"></i> ไปที่ /gallery
                    </a>
                </div>
            </div>
        </div>

        <!-- EP03 Active Bootstrap -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm work-card">
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-success mb-2 w-auto align-self-start">EP03</span>
                    <h5 class="card-title fw-bold">Active Bootstrap</h5>
                    <p class="card-text text-muted flex-grow-1">หน้าแสดงการทำงาน Active Bootstrap</p>
                    <a href="{{ url('/active/index') }}" class="btn btn-outline-success w-100 mt-3">
                        <i class="bi bi-bootstrap me-1"></i> ไปที่ /active/index
                    </a>
                </div>
            </div>
        </div>

        <!-- EP07 Weight -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm work-card">
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-warning text-dark mb-2 w-auto align-self-start">EP07</span>
                    <h5 class="card-title fw-bold">Weight Tracker</h5>
                    <p class="card-text text-muted flex-grow-1">ระบบบันทึกน้ำหนัก (ติด Auth)</p>
                    <a href="{{ url('/weights') }}" class="btn btn-outline-warning text-dark w-100 mt-3">
                        <i class="bi bi-lock-fill me-1"></i> ไปที่ /weights
                    </a>
                </div>
            </div>
        </div>

        <!-- EP08 Auth -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm work-card">
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-danger mb-2 w-auto align-self-start">EP08</span>
                    <h5 class="card-title fw-bold">Authentication</h5>
                    <p class="card-text text-muted flex-grow-1">ระบบเข้าสู่ระบบ / ยืนยันตัวตน</p>
                    <a href="{{ url('/login') }}" class="btn btn-danger w-100 mt-3">
                        <i class="bi bi-box-arrow-in-right me-1"></i> ปุ่ม Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>