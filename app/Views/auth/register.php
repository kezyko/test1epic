<?= $this->extend('templates/auth_layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center align-items-center py-5">
        <div class="col-md-9 col-lg-7">
            <div class="auth-card">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <div class="logo-container">
                            <i class="bi bi-person-plus"></i>
                        </div>
                        <h2 class="fw-bold mb-2">Student Registration</h2>
                        <p class="text-muted">Create your account to take the EPIC test</p>
                    </div>
                    
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-circle me-2"></i>
                            <?= session()->getFlashdata('error') ?>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-circle me-2"></i>
                            <ul class="mb-0">
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <li><?= $error ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    
                    <form action="/auth/attemptRegister" method="POST">
                        <?= csrf_field() ?>
                        
                        <div class="mb-4">
                            <h5 class="fw-semibold mb-3" style="color: var(--primary-color);">
                                <i class="bi bi-shield-lock me-2"></i>Account Information
                            </h5>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" 
                                           value="<?= old('username') ?>" placeholder="Choose a username" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" 
                                           value="<?= old('email') ?>" placeholder="your.email@example.com" required>
                                </div>
                            </div>
                            
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" 
                                           placeholder="At least 6 characters" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="password_confirm" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirm" 
                                           name="password_confirm" placeholder="Re-enter password" required>
                                </div>
                            </div>
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="mb-4">
                            <h5 class="fw-semibold mb-3" style="color: var(--primary-color);">
                                <i class="bi bi-person-badge me-2"></i>Student Data
                            </h5>
                            
                            <div class="mb-3">
                                <label for="nim" class="form-label">Student ID (NIM)</label>
                                <input type="text" class="form-control" id="nim" name="nim" 
                                       value="<?= old('nim') ?>" placeholder="Enter your NIM" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" 
                                       value="<?= old('nama_lengkap') ?>" placeholder="Enter your full name" required>
                            </div>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="jurusan" class="form-label">Major / Department</label>
                                    <input type="text" class="form-control" id="jurusan" name="jurusan" 
                                           value="<?= old('jurusan') ?>" placeholder="e.g. Computer Science" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="semester" class="form-label">Semester</label>
                                    <select class="form-select" id="semester" name="semester" required>
                                        <option value="">Select Semester</option>
                                        <?php for ($i = 1; $i <= 14; $i++): ?>
                                            <option value="<?= $i ?>" <?= old('semester') == $i ? 'selected' : '' ?>>
                                                Semester <?= $i ?>
                                            </option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mt-3">
                                <label for="no_telp" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" 
                                       value="<?= old('no_telp') ?>" placeholder="+62 812 3456 7890" required>
                            </div>
                        </div>
                        
                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-person-plus me-2"></i>Create Account
                            </button>
                        </div>
                        
                        <div class="text-center">
                            <p class="mb-0 text-muted">Already have an account? <a href="/auth/login">Sign in here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
