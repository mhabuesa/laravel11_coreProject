<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Laravel Project with OneUI Admin Panel

Welcome to our Laravel project! This repository combines Laravel’s robust capabilities with the clean and versatile OneUI admin panel, delivering a dynamic and efficient backend. With user authentication managed by Laravel Breeze, image handling powered by a custom trait with Intervention Image, customizable user profiles, and Toastify alerts, this project is a solid foundation for any application.

## 🎯 Key Features
- <strong>OneUI Admin Panel</strong> A sleek, responsive admin dashboard that provides a professional look and feel, simplifying admin tasks and enhancing the user experience.
- User Authentication: Set up with Laravel Breeze for fast and secure authentication, ensuring a seamless login, registration, and password reset experience.
- Profile Management: Each user can view and update their profile information, making the system more personalized and user-friendly.
- Image Handling: Custom Laravel traits manage image upload, update, and delete functionality, making image management smooth and efficient.
- Toastify Alerts: Real-time, customizable toast notifications using Toastify for improved user interaction and feedback.

## 🚀 Getting Started


<ol>
  <li>
    <p><strong>Clone the repository</strong>:</p>
    <pre style="background-color:#F6F8FA; border: 1px solid #D0D7DE; border-radius: 5px;">
    git clone https://github.com/mhabuesa/laravel11_coreProject.git
    cd laravel11_coreProject
    </pre>
  </li>
  <li>
    <p><strong>Install dependencies</strong>:</p>
<pre style="background-color:#F6F8FA; border: 1px solid #D0D7DE; border-radius: 5px;">
    composer install
    npm install && npm run dev
</pre>
  </li>
  <li>
    <p><strong>Configure the Environment</strong>:</p>
    <pre style="background-color:#F6F8FA; padding: 10px; border: 1px solid #D0D7DE; border-radius: 5px;">
    cp .env.example .env 
    or
    copy .env.example .env
    </pre>
  </li>
  <li>
    <p><strong>Generate Application Key</strong>:</p>
    <pre style="background-color:#F6F8FA; padding: 10px; border: 1px solid #D0D7DE; border-radius: 5px;">
    php artisan key:generate
    </pre>
  </li>
  <li>
    <p><strong>Migrate the Database</strong>:</p>
    <pre style="background-color:#F6F8FA; padding: 10px; border: 1px solid #D0D7DE; border-radius: 5px;">
    php artisan migrate
    </pre>
  </li>
  <li>
    <p><strong>Start the Server</strong>:</p>
    <pre style="background-color:#F6F8FA; padding: 10px; border: 1px solid #D0D7DE; border-radius: 5px;">
    php artisan serve
    </pre>
  </li>
</ol>


## 🎯 Key Features
- Backend: Laravel
- Frontend: OneUI Admin Template
- Authentication: Laravel Breeze
- Image Processing: Custom Trait with Intervention Image
- Notifications: Toastify

## 🛠️ Customization and Usage
- Admin Panel: Navigate to /admin after logging in to access admin functionalities.
- User Profile: Users can update their profile information from the profile settings.
- Image Handling: Image management (insertion, updating, deletion) is handled through a custom Laravel trait, making it efficient and easy to maintain.
- Toastify Alerts: Alerts and notifications use Toastify for a modern, non-intrusive alert system.


## 📄 License
- This project is licensed under the MIT License.
