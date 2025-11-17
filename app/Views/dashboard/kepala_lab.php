<?= $this->extend('templates/dashboard_layout') ?>

<?= $this->section('sidebar') ?>
<li class="nav-item">
    <a class="nav-link active" href="/dashboard/kepala-lab">
        <i class="bi bi-house-door-fill"></i> Dashboard
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/kepala-lab/laporan">
        <i class="bi bi-file-earmark-bar-graph"></i> Reports
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/dashboard/kepala-lab/statistik">
        <i class="bi bi-bar-chart"></i> Statistics
    </a>
</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h1><i class="bi bi-graph-up me-2" style="color: var(--primary-color);"></i>Lab Head Dashboard</h1>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="stat-card" style="background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6>Total Students</h6>
                    <h2>0</h2>
                    <small>Registered</small>
                </div>
                <div>
                    <i class="bi bi-people"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-card" style="background: linear-gradient(135deg, #ec4899 0%, #d946ef 100%);">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6>Tests This Month</h6>
                    <h2>0</h2>
                    <small>Completed</small>
                </div>
                <div>
                    <i class="bi bi-calendar-check"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-card" style="background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6>Certificates Issued</h6>
                    <h2>0</h2>
                    <small>Documents</small>
                </div>
                <div>
                    <i class="bi bi-award"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-card" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6>Revenue</h6>
                    <h2>Rp 0</h2>
                    <small>This Month</small>
                </div>
                <div>
                    <i class="bi bi-cash-stack"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-8">
        <div class="card h-100">
            <div class="card-header">
                <h5><i class="bi bi-bar-chart-line me-2" style="color: var(--primary-color);"></i>Monthly Registrations</h5>
            </div>
            <div class="card-body text-center py-5">
                <i class="bi bi-bar-chart-line" style="font-size: 5rem; color: var(--text-light); opacity: 0.3;"></i>
                <p class="text-muted mt-4 mb-0">Chart will be displayed when registration data is available</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-header">
                <h5><i class="bi bi-pie-chart me-2" style="color: var(--primary-color);"></i>Test Results Distribution</h5>
            </div>
            <div class="card-body text-center py-5">
                <i class="bi bi-pie-chart" style="font-size: 4rem; color: var(--text-light); opacity: 0.3;"></i>
                <p class="text-muted mt-4 mb-0 small">Diagram will appear with test results data</p>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><i class="bi bi-file-earmark-text me-2" style="color: var(--primary-color);"></i>Recent Reports</h5>
                <a href="/dashboard/kepala-lab/laporan" class="btn btn-sm btn-primary">
                    <i class="bi bi-arrow-right-circle me-1"></i>View All
                </a>
            </div>
            <div class="card-body text-center py-5">
                <i class="bi bi-folder2-open" style="font-size: 3rem; color: var(--text-light); opacity: 0.3;"></i>
                <p class="text-muted mt-3 mb-0">No reports available yet</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-header">
                <h5><i class="bi bi-lightning me-2" style="color: var(--primary-color);"></i>Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-3">
                    <a href="/dashboard/kepala-lab/laporan" class="btn btn-outline-primary text-start" style="border-radius: 10px; padding: 1rem;">
                        <i class="bi bi-file-earmark-bar-graph me-2"></i>
                        <strong>Generate Report</strong>
                        <p class="mb-0 small text-muted mt-1">Create comprehensive reports</p>
                    </a>
                    <a href="/dashboard/kepala-lab/statistik" class="btn btn-outline-success text-start" style="border-radius: 10px; padding: 1rem;">
                        <i class="bi bi-graph-up me-2"></i>
                        <strong>View Detailed Statistics</strong>
                        <p class="mb-0 small text-muted mt-1">Analyze data trends and metrics</p>
                    </a>
                    <button class="btn btn-outline-info text-start" onclick="window.print()" style="border-radius: 10px; padding: 1rem;">
                        <i class="bi bi-printer me-2"></i>
                        <strong>Print Dashboard</strong>
                        <p class="mb-0 small text-muted mt-1">Print current dashboard view</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
