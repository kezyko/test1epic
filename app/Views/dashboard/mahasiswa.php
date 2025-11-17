<?= $this->extend('templates/dashboard_layout') ?>

<?= $this->section('sidebar') ?>
<li class="nav-item">
    <a class="nav-link active" href="/dashboard/mahasiswa">
        <i class="bi bi-house-door"></i> Dashboard
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/mahasiswa/pendaftaran">
        <i class="bi bi-file-earmark-plus"></i> Registrasi Tes
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/mahasiswa/riwayat">
        <i class="bi bi-clock-history"></i> Riwayat Tes
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/mahasiswa/sertifikat">
        <i class="bi bi-award"></i> Sertifikat
    </a>
</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Mahasiswa</h1>
</div>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Selamat Datang, <?= session()->get('username') ?>!</h5>
                <p class="card-text">Selamat datang di Sistem Informasi EPIC. Anda dapat melakukan registrasi tes, 
                melihat riwayat tes, dan mengunduh sertifikat melalui menu di samping.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
                <div class="mb-3">
                    <i class="bi bi-file-earmark-plus" style="font-size: 3rem; color: #667eea;"></i>
                </div>
                <h5 class="card-title">Registrasi Tes</h5>
                <p class="card-text">Daftar untuk mengikuti tes EPIC dan upload bukti pembayaran.</p>
                <a href="/dashboard/mahasiswa/pendaftaran" class="btn btn-primary">
                    <i class="bi bi-arrow-right-circle"></i> Mulai
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
                <div class="mb-3">
                    <i class="bi bi-clock-history" style="font-size: 3rem; color: #764ba2;"></i>
                </div>
                <h5 class="card-title">Riwayat Tes</h5>
                <p class="card-text">Lihat riwayat pendaftaran dan status pembayaran tes Anda.</p>
                <a href="/dashboard/mahasiswa/riwayat" class="btn btn-secondary">
                    <i class="bi bi-arrow-right-circle"></i> Lihat
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
                <div class="mb-3">
                    <i class="bi bi-award" style="font-size: 3rem; color: #f093fb;"></i>
                </div>
                <h5 class="card-title">Sertifikat</h5>
                <p class="card-text">Download sertifikat tes yang telah Anda selesaikan.</p>
                <a href="/dashboard/mahasiswa/sertifikat" class="btn btn-success">
                    <i class="bi bi-arrow-right-circle"></i> Download
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                <h5 class="mb-0">Informasi Penting</h5>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <i class="bi bi-check-circle text-success"></i> 
                        Pastikan data yang Anda masukkan sudah benar sebelum melakukan registrasi.
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle text-success"></i> 
                        Upload bukti pembayaran QRIS dengan jelas dan benar.
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle text-success"></i> 
                        Verifikasi pembayaran dilakukan oleh admin, harap tunggu konfirmasi.
                    </li>
                    <li class="mb-0">
                        <i class="bi bi-check-circle text-success"></i> 
                        Sertifikat dapat diunduh setelah hasil tes Anda diinput oleh admin.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
