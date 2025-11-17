# EPIC Information System

Sistem Informasi EPIC (English Proficiency Information and Certification) - Web-based application built with CodeIgniter 4.

## Features

### 1. Mahasiswa (Student) Role
- Register for EPIC tests
- Upload QRIS payment proof
- View test history
- Download PDF certificates

### 2. Admin (Lab Bahasa) Role
- Verify QRIS payments manually
- Manage test registrants
- Manage test schedules
- Input test results

### 3. Kepala Lab (Lab Head) Role
- View comprehensive dashboard
- Access reports and statistics

## Technical Specifications

- **Backend Framework**: CodeIgniter 4 (PHP 8.3+)
- **Architecture**: Model-View-Controller (MVC)
- **Database**: MySQL
- **Frontend Framework**: Bootstrap 5 (HTML5, CSS3, JavaScript)
- **Local Environment**: XAMPP (or PHP built-in server)

## Installation

### Prerequisites
- PHP 8.1 or higher
- MySQL/MariaDB
- Composer
- XAMPP (optional, for local development)

### Setup Steps

1. Clone the repository:
```bash
git clone https://github.com/kezyko/test1epic.git
cd test1epic
```

2. Install dependencies:
```bash
composer install
```

3. Configure environment:
```bash
cp .env.example .env
```

4. Edit `.env` file and configure your database:
```
database.default.hostname = localhost
database.default.database = epic_db
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.port = 3306
```

5. Create database:
```sql
CREATE DATABASE epic_db;
```

6. Run migrations:
```bash
php spark migrate
```

7. (Optional) Seed test data:
```bash
php spark db:seed TestUsersSeeder
```

8. Start development server:
```bash
php spark serve
```

9. Access the application at: `http://localhost:8080`

## Test Users

After running the seeder, you can login with:

- **Admin**: 
  - Username: `admin`
  - Password: `admin123`

- **Kepala Lab**: 
  - Username: `kepala_lab`
  - Password: `kepalalab123`

- **Mahasiswa**: 
  - Username: `mahasiswa1`
  - Password: `mahasiswa123`

## Database Schema

### Tables:
1. **users** - User accounts with role-based access
2. **mahasiswa** - Student profiles
3. **pendaftaran** - Test registrations
4. **pembayaran** - Payment records with QRIS verification

## Project Structure

```
test1epic/
├── app/
│   ├── Config/          # Configuration files
│   ├── Controllers/     # Application controllers
│   │   ├── Auth.php     # Authentication controller
│   │   └── Dashboard/   # Role-based dashboard controllers
│   ├── Database/
│   │   ├── Migrations/  # Database migrations
│   │   └── Seeds/       # Database seeders
│   ├── Models/          # Database models
│   └── Views/           # View templates
│       ├── auth/        # Login & registration views
│       ├── dashboard/   # Dashboard views
│       └── templates/   # Layout templates
├── public/              # Public web root
├── writable/            # Writable directories (cache, logs, etc.)
├── .env                 # Environment configuration
└── spark                # CLI tool
```

## Development

### Creating New Migration:
```bash
php spark make:migration MigrationName
```

### Creating New Model:
```bash
php spark make:model ModelName
```

### Creating New Controller:
```bash
php spark make:controller ControllerName
```

## License

This project is created for educational purposes.

## Screenshots

### Login Page
![Login Page](https://github.com/user-attachments/assets/c74f1783-9c4f-4eec-9d2d-1aba3d90612d)

### Registration Page
![Registration Page](https://github.com/user-attachments/assets/1b8f7aab-0617-4566-99cc-234398d47f89)

