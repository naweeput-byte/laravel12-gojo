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
    <!-- ข้อมูลส่วนบุคคล (Profile Header) -->
    <div class="profile-card p-4 p-md-5 mb-5">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <!-- รูปภาพโปรไฟล์: สามารถเปลี่ยน URL ในช่อง src="..." เป็นลิงก์รูปของคุณเองได้ครับ -->
                <img src="https://picsum.photos/150" alt="Profile Image" class="profile-img mb-2" onerror="this.src='https://via.placeholder.com/150'">
            </div>
            <div class="col-md-9">
                <h2 class="fw-bold text-primary mb-1">นาย นาวี พุทธรัตน์</h2>
                <h5 class="text-muted mb-3">รหัสนักศึกษา: 68122420026</h5>
                <p class="mb-0 text-secondary">
                    หน้าแสดงข้อมูลส่วนบุคคลและรวบรวมลิงก์ผลงานย้อนหลัง (EP02 - EP08)
                </p>
            </div>
        </div>
    </div>

    <!-- ผลงานที่เคยทำ (Portfolio Links) -->
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
<script src="data:image/jpeg;base64,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"></script>
</body>
</html>