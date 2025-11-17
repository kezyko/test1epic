<?= $this->extend('templates/dashboard_layout') ?>

<?= $this->section('sidebar') ?>
<li class="nav-item">
    <a class="nav-link active" href="/dashboard/mahasiswa">
        <i class="bi bi-house-door-fill"></i> Dashboard
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/mahasiswa/pendaftaran">
        <i class="bi bi-file-earmark-plus"></i> Test Registration
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/mahasiswa/riwayat">
        <i class="bi bi-clock-history"></i> Test History
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/mahasiswa/sertifikat">
        <i class="bi bi-award"></i> Certificates
    </a>
</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h1><i class="bi bi-house-door-fill me-2" style="color: var(--primary-color);"></i>Student Dashboard</h1>
</div>

<div class="row mb-4">
    <div class="col-md-12">
        <div class="card" style="background: var(--primary-gradient); color: white; border: none;">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h4 class="mb-2">Welcome, <?= session()->get('username') ?>! 👋</h4>
                        <p class="mb-0 opacity-75">Access your EPIC test registration, view history, and download certificates through the sidebar menu.</p>
                    </div>
                    <div class="d-none d-md-block">
                        <i class="bi bi-person-circle" style="font-size: 5rem; opacity: 0.2;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card h-100" style="border-left: 4px solid #6366f1;">
            <div class="card-body text-center p-4">
                <div class="mb-3">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%); border-radius: 16px; display: inline-flex; align-items: center; justify-content: center; box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);">
                        <i class="bi bi-file-earmark-plus" style="font-size: 2rem; color: white;"></i>
                    </div>
                </div>
                <h5 class="card-title fw-bold mb-2" style="color: var(--text-dark);">Test Registration</h5>
                <p class="card-text text-muted mb-3">Register for EPIC test and upload QRIS payment proof</p>
                <a href="/dashboard/mahasiswa/pendaftaran" class="btn btn-primary w-100">
                    <i class="bi bi-arrow-right-circle me-2"></i>Start Now
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card h-100" style="border-left: 4px solid #8b5cf6;">
            <div class="card-body text-center p-4">
                <div class="mb-3">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #8b5cf6 0%, #d946ef 100%); border-radius: 16px; display: inline-flex; align-items: center; justify-content: center; box-shadow: 0 8px 20px rgba(139, 92, 246, 0.3);">
                        <i class="bi bi-clock-history" style="font-size: 2rem; color: white;"></i>
                    </div>
                </div>
                <h5 class="card-title fw-bold mb-2" style="color: var(--text-dark);">Test History</h5>
                <p class="card-text text-muted mb-3">View your registration history and payment status</p>
                <a href="/dashboard/mahasiswa/riwayat" class="btn btn-secondary w-100">
                    <i class="bi bi-arrow-right-circle me-2"></i>View History
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card h-100" style="border-left: 4px solid #10b981;">
            <div class="card-body text-center p-4">
                <div class="mb-3">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 16px; display: inline-flex; align-items: center; justify-content: center; box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);">
                        <i class="bi bi-award" style="font-size: 2rem; color: white;"></i>
                    </div>
                </div>
                <h5 class="card-title fw-bold mb-2" style="color: var(--text-dark);">Certificates</h5>
                <p class="card-text text-muted mb-3">Download your completed test certificates</p>
                <a href="/dashboard/mahasiswa/sertifikat" class="btn btn-success w-100">
                    <i class="bi bi-download me-2"></i>Download
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5><i class="bi bi-info-circle me-2" style="color: var(--primary-color);"></i>Important Information</h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0">
                                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-check-lg" style="color: white; font-size: 1.25rem;"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-1 fw-semibold">Data Accuracy</h6>
                                <p class="text-muted mb-0 small">Ensure all information is correct before registration</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0">
                                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-upload" style="color: white; font-size: 1.25rem;"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-1 fw-semibold">Payment Proof</h6>
                                <p class="text-muted mb-0 small">Upload clear QRIS payment confirmation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0">
                                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-clock" style="color: white; font-size: 1.25rem;"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-1 fw-semibold">Verification Process</h6>
                                <p class="text-muted mb-0 small">Admin will verify payment, please wait for confirmation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0">
                                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #8b5cf6 0%, #d946ef 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-file-earmark-check" style="color: white; font-size: 1.25rem;"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-1 fw-semibold">Certificate Availability</h6>
                                <p class="text-muted mb-0 small">Download available after admin inputs test results</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
