<?= $this->extend('templates/dashboard_layout') ?>

<?= $this->section('sidebar') ?>
<li class="nav-item">
    <a class="nav-link active" href="/dashboard/kepala-lab">
        <i class="bi bi-house-door"></i> Dashboard
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/kepala-lab/laporan">
        <i class="bi bi-file-earmark-bar-graph"></i> Laporan
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/kepala-lab/statistik">
        <i class="bi bi-bar-chart"></i> Statistik
    </a>
</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Kepala Lab</h1>
</div>

<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm bg-gradient" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            <div class="card-body text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Total Mahasiswa</h6>
                        <h2 class="mb-0">0</h2>
                        <small>Terdaftar</small>
                    </div>
                    <div>
                        <i class="bi bi-people" style="font-size: 3rem; opacity: 0.5;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm bg-gradient" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
            <div class="card-body text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Tes Bulan Ini</h6>
                        <h2 class="mb-0">0</h2>
                        <small>Terlaksana</small>
                    </div>
                    <div>
                        <i class="bi bi-calendar-check" style="font-size: 3rem; opacity: 0.5;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm bg-gradient" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
            <div class="card-body text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Sertifikat Terbit</h6>
                        <h2 class="mb-0">0</h2>
                        <small>Dokumen</small>
                    </div>
                    <div>
                        <i class="bi bi-award" style="font-size: 3rem; opacity: 0.5;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm bg-gradient" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
            <div class="card-body text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Pendapatan</h6>
                        <h2 class="mb-0">Rp 0</h2>
                        <small>Bulan Ini</small>
                    </div>
                    <div>
                        <i class="bi bi-cash-stack" style="font-size: 3rem; opacity: 0.5;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-8 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                <h5 class="mb-0">Grafik Pendaftar Per Bulan</h5>
            </div>
            <div class="card-body">
                <div class="text-center py-5">
                    <i class="bi bi-bar-chart-line text-muted" style="font-size: 5rem;"></i>
                    <p class="text-muted mt-3">Grafik akan ditampilkan ketika sudah ada data pendaftar</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                <h5 class="mb-0">Distribusi Hasil Tes</h5>
            </div>
            <div class="card-body">
                <div class="text-center py-4">
                    <i class="bi bi-pie-chart text-muted" style="font-size: 5rem;"></i>
                    <p class="text-muted mt-3">Diagram akan ditampilkan ketika sudah ada data hasil tes</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Laporan Terbaru</h5>
                <a href="/dashboard/kepala-lab/laporan" class="btn btn-sm btn-primary">Lihat Semua</a>
            </div>
            <div class="card-body">
                <p class="text-muted mb-0">Belum ada laporan tersedia.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                <h5 class="mb-0">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="/dashboard/kepala-lab/laporan" class="btn btn-outline-primary">
                        <i class="bi bi-file-earmark-bar-graph"></i> Generate Laporan
                    </a>
                    <a href="/dashboard/kepala-lab/statistik" class="btn btn-outline-success">
                        <i class="bi bi-bar-chart"></i> Lihat Statistik Detail
                    </a>
                    <button class="btn btn-outline-info" onclick="window.print()">
                        <i class="bi bi-printer"></i> Print Dashboard
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
