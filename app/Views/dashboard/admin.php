<?= $this->extend('templates/dashboard_layout') ?>

<?= $this->section('sidebar') ?>
<li class="nav-item">
    <a class="nav-link active" href="/dashboard/admin">
        <i class="bi bi-house-door-fill"></i> Dashboard
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/admin/pembayaran">
        <i class="bi bi-cash-coin"></i> Verify Payments
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/admin/pendaftar">
        <i class="bi bi-people"></i> Manage Registrants
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/admin/jadwal">
        <i class="bi bi-calendar-event"></i> Test Schedules
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/admin/hasil">
        <i class="bi bi-file-earmark-text"></i> Input Results
    </a>
</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h1><i class="bi bi-speedometer2 me-2" style="color: var(--primary-color);"></i>Admin Dashboard</h1>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="stat-card" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6>Pending Payments</h6>
                    <h2>0</h2>
                    <small>Awaiting verification</small>
                </div>
                <div>
                    <i class="bi bi-clock-history"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-card" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6>Verified Payments</h6>
                    <h2>0</h2>
                    <small>Confirmed</small>
                </div>
                <div>
                    <i class="bi bi-check-circle"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-card" style="background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6>Total Registrants</h6>
                    <h2>0</h2>
                    <small>All time</small>
                </div>
                <div>
                    <i class="bi bi-people"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-card" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6>Today's Tests</h6>
                    <h2>0</h2>
                    <small>Scheduled</small>
                </div>
                <div>
                    <i class="bi bi-calendar-event"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-6">
        <div class="card h-100" style="border-left: 4px solid #6366f1;">
            <div class="card-header">
                <h5><i class="bi bi-cash-coin me-2" style="color: var(--primary-color);"></i>Payment Verification</h5>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-start mb-3">
                    <div class="flex-shrink-0">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-qr-code-scan" style="color: white; font-size: 1.5rem;"></i>
                        </div>
                    </div>
                    <div class="ms-3 flex-grow-1">
                        <h6 class="fw-semibold mb-1">Verify QRIS Payments</h6>
                        <p class="text-muted mb-3 small">Manually verify QRIS payment proofs uploaded by students</p>
                        <a href="/dashboard/admin/pembayaran" class="btn btn-primary btn-sm">
                            <i class="bi bi-arrow-right-circle me-1"></i>Manage
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card h-100" style="border-left: 4px solid #10b981;">
            <div class="card-header">
                <h5><i class="bi bi-people me-2" style="color: #10b981;"></i>Registrant Management</h5>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-start mb-3">
                    <div class="flex-shrink-0">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-person-lines-fill" style="color: white; font-size: 1.5rem;"></i>
                        </div>
                    </div>
                    <div class="ms-3 flex-grow-1">
                        <h6 class="fw-semibold mb-1">Manage Student Data</h6>
                        <p class="text-muted mb-3 small">View and manage registered students for EPIC test</p>
                        <a href="/dashboard/admin/pendaftar" class="btn btn-success btn-sm">
                            <i class="bi bi-arrow-right-circle me-1"></i>Manage
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card h-100" style="border-left: 4px solid #0ea5e9;">
            <div class="card-header">
                <h5><i class="bi bi-calendar-event me-2" style="color: #0ea5e9;"></i>Test Schedule Management</h5>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-start mb-3">
                    <div class="flex-shrink-0">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-calendar-check" style="color: white; font-size: 1.5rem;"></i>
                        </div>
                    </div>
                    <div class="ms-3 flex-grow-1">
                        <h6 class="fw-semibold mb-1">Schedule EPIC Tests</h6>
                        <p class="text-muted mb-3 small">Set up and manage test schedules for students</p>
                        <a href="/dashboard/admin/jadwal" class="btn btn-info btn-sm text-white">
                            <i class="bi bi-arrow-right-circle me-1"></i>Manage
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card h-100" style="border-left: 4px solid #f59e0b;">
            <div class="card-header">
                <h5><i class="bi bi-file-earmark-text me-2" style="color: #f59e0b;"></i>Test Results Input</h5>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-start mb-3">
                    <div class="flex-shrink-0">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-pencil-square" style="color: white; font-size: 1.5rem;"></i>
                        </div>
                    </div>
                    <div class="ms-3 flex-grow-1">
                        <h6 class="fw-semibold mb-1">Input Student Results</h6>
                        <p class="text-muted mb-3 small">Enter test results after test completion</p>
                        <a href="/dashboard/admin/hasil" class="btn btn-warning btn-sm">
                            <i class="bi bi-arrow-right-circle me-1"></i>Manage
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5><i class="bi bi-activity me-2" style="color: var(--primary-color);"></i>Recent Activity</h5>
            </div>
            <div class="card-body text-center py-5">
                <i class="bi bi-inbox" style="font-size: 3rem; color: var(--text-light); opacity: 0.5;"></i>
                <p class="text-muted mt-3 mb-0">No recent activity yet</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
