# Laravel 12 Dashboard App

A simple Laravel 12 web application with **cookie-based authentication**. Users can register, log in, and access a responsive dashboard built with Bootstrap 5.

---

## **Features**

- User registration and login  
- Logout functionality  
- Cookie-based authentication to protect dashboard routes  
- Dashboard with a welcome message, user info, and quick action cards  
- Prevents logged-in users from accessing login/register pages  
- Responsive UI using **Bootstrap 5**  


---



---

## **Installation & Setup**

**Clone the repository**

```bash
git clone https://github.com/Mehedi-Ahmed/Dashboard
cd dashboard
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
**Open http://127.0.0.1:8000 in your browser.**
## Database ##
database name : dashboard

## Author ##
----------------
| Mehedi Ahmed |
----------------
