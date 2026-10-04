# DoctorsHome

A home healthcare booking website built with Laravel. Patients can browse doctors, read about services and book an appointment online (video consultation, home visit, in-clinic visit, lab test or health checkup). Staff manage doctors, specialties, appointments and contact messages from an admin panel.

> University project. The visual design is inspired by [doctorsforhome.com](https://doctorsforhome.com). The code, database design and admin panel are original work.

## Features

**Public website**
- Home, Services, Doctors, About and Contact pages
- Appointment booking form with 5 types: Video Consultation, Home Visit, In-Clinic, Lab Test, Health Checkup
- Optional doctor selection (hidden automatically for Lab Test and Health Checkup)
- Server-side validation with error messages and a success message
- Contact form, messages are saved to the database
- Doctor list is loaded from the database (only active doctors are shown)
- Responsive layout with a mobile menu, dark theme, FAQ accordion

**Admin panel (`/admin`)**
- Secure login
- Add, edit and delete doctors (photo upload, specialty, fee, experience, active/inactive)
- Manage specialties
- View appointments, filter by type and status, change status directly from the list
- Read contact messages

## Tech stack

| Part | Technology |
|---|---|
| Backend | Laravel (PHP 8.3) |
| Database | MySQL |
| Templates | Blade |
| Styling | Tailwind CSS |
| Interactivity | Alpine.js |
| Admin panel | Filament |
| Icons | Lucide (Blade Lucide Icons) |
| Build tool | Vite |

## Database

| Table | Purpose | Relations |
|---|---|---|
| `specialties` | Medical specialties | has many doctors |
| `doctors` | Doctor profiles | belongs to a specialty, has many appointments |
| `appointments` | Patient bookings | belongs to a doctor (optional) |
| `contact_messages` | Messages from the contact form | none |
| `users` | Admin accounts | none |

## Requirements

- PHP 8.3 or higher (with the `intl`, `fileinfo`, `mbstring`, `pdo_mysql` extensions)
- Composer
- Node.js and npm
- MySQL (for example via XAMPP or Laragon)

## How to run

1. **Clone the repository**

   ```bash
   git clone https://github.com/aashfaak/DoctorsHome.git
   cd DoctorsHome
   ```

2. **Install dependencies**

   ```bash
   composer install
   npm install
   ```

3. **Create the environment file**

   ```bash
   copy .env.example .env      # Windows
   cp .env.example .env        # macOS / Linux
   php artisan key:generate
   ```

4. **Create a MySQL database** named `doctorshome` (for example in phpMyAdmin), then set these values in `.env`:

   ```dotenv
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=doctorshome
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Create the tables and the storage link**

   ```bash
   php artisan migrate
   php artisan storage:link
   ```

6. **Create an admin user** (you will be asked for a name, email and password)

   ```bash
   php artisan make:filament-user
   ```

7. **Start the app** (use two terminals)

   ```bash
   npm run dev
   ```

   ```bash
   php artisan serve
   ```

8. **Open the site**

   - Website: http://localhost:8000
   - Admin panel: http://localhost:8000/admin


## Project structure

| Path | Contents |
|---|---|
| `routes/web.php` | Website routes |
| `app/Models/` | `Doctor`, `Specialty`, `Appointment`, `ContactMessage` |
| `app/Http/Controllers/` | `AppointmentController`, `ContactController` |
| `app/Filament/Resources/` | Admin panel resources |
| `resources/views/` | Blade pages, layout and partials |
| `database/migrations/` | Table definitions |

## Security notes

- CSRF protection on all forms
- Server-side validation for every form
- Eloquent ORM (prepared statements) to prevent SQL injection
- Admin passwords are hashed
- `.env` is not committed to the repository

## Possible improvements

- Online payment
- Patient accounts and appointment history
- SMS or email notifications
- Doctor schedules and time slots

## Author

Mohammad Ashfak
ID: 0222220005101179
Dept. of Computer Science and Engineering, Premier University Chittagong.
