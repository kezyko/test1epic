<?= $this->extend('templates/dashboard_layout') ?>

<?= $this->section('sidebar') ?>
<li class="nav-item">
    <a class="nav-link active" href="/dashboard/admin">
        <i class="bi bi-house-door"></i> Dashboard
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/admin/pembayaran">
        <i class="bi bi-cash-coin"></i> Verifikasi Pembayaran
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/admin/pendaftar">
        <i class="bi bi-people"></i> Kelola Pendaftar
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/admin/jadwal">
        <i class="bi bi-calendar-event"></i> Kelola Jadwal Tes
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/admin/hasil">
        <i class="bi bi-file-earmark-text"></i> Input Hasil Tes
    </a>
</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Admin Lab Bahasa</h1>
</div>

<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm bg-primary text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Pembayaran Pending</h6>
                        <h2 class="mb-0">0</h2>
                    </div>
                    <div>
                        <i class="bi bi-clock-history" style="font-size: 3rem; opacity: 0.5;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm bg-success text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Pembayaran Verified</h6>
                        <h2 class="mb-0">0</h2>
                    </div>
                    <div>
                        <i class="bi bi-check-circle" style="font-size: 3rem; opacity: 0.5;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm bg-info text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Total Pendaftar</h6>
                        <h2 class="mb-0">0</h2>
                    </div>
                    <div>
                        <i class="bi bi-people" style="font-size: 3rem; opacity: 0.5;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm bg-warning text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Jadwal Tes Hari Ini</h6>
                        <h2 class="mb-0">0</h2>
                    </div>
                    <div>
                        <i class="bi bi-calendar-event" style="font-size: 3rem; opacity: 0.5;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                <h5 class="mb-0">Fitur Utama Admin</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <i class="bi bi-cash-coin text-primary" style="font-size: 2rem;"></i>
                            </div>
                            <div>
                                <h6>Verifikasi Pembayaran</h6>
                                <p class="text-muted mb-2">Verifikasi bukti pembayaran QRIS yang di-upload oleh mahasiswa secara manual.</p>
                                <a href="/dashboard/admin/pembayaran" class="btn btn-sm btn-primary">Kelola</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <i class="bi bi-people text-success" style="font-size: 2rem;"></i>
                            </div>
                            <div>
                                <h6>Kelola Pendaftar</h6>
                                <p class="text-muted mb-2">Lihat dan kelola data mahasiswa yang telah mendaftar untuk tes EPIC.</p>
                                <a href="/dashboard/admin/pendaftar" class="btn btn-sm btn-success">Kelola</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <i class="bi bi-calendar-event text-info" style="font-size: 2rem;"></i>
                            </div>
                            <div>
                                <h6>Kelola Jadwal Tes</h6>
                                <p class="text-muted mb-2">Atur dan kelola jadwal tes EPIC untuk mahasiswa.</p>
                                <a href="/dashboard/admin/jadwal" class="btn btn-sm btn-info text-white">Kelola</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <i class="bi bi-file-earmark-text text-warning" style="font-size: 2rem;"></i>
                            </div>
                            <div>
                                <h6>Input Hasil Tes</h6>
                                <p class="text-muted mb-2">Input hasil tes mahasiswa setelah pelaksanaan tes selesai.</p>
                                <a href="/dashboard/admin/hasil" class="btn btn-sm btn-warning">Kelola</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                <h5 class="mb-0">Aktivitas Terbaru</h5>
            </div>
            <div class="card-body">
                <p class="text-muted mb-0">Belum ada aktivitas terbaru.</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
