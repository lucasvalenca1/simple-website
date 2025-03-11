# Laravel Project


  
    
  


---

## About This Project

This is a simple web application built using the [Laravel](https://laravel.com) framework. Laravel is known for its elegant syntax and powerful features, making web development seamless and efficient.

## Features

- **Homepage** showcasing Laravel's capabilities.
- **About Page** describing the project.
- **Contact Form** with CSRF protection.
- **Custom Routing and Controllers** for dynamic page handling.

## Best Practices for PHP Laravel Development

As a Full Stack Developer, I follow these best practices when building PHP and Laravel projects:

- **Use MVC Architecture:** Maintain clean separation between Models, Views, and Controllers.
- **Follow PSR Standards:** Ensure code consistency using PSR-1, PSR-2, and PSR-4.
- **Optimize Database Queries:** Use Eloquent ORM efficiently, leverage caching, and avoid N+1 query issues.
- **Secure Your Application:** Implement proper authentication and authorization, prevent SQL injection, and use Laravel's built-in security features.
- **Use Migrations and Seeders:** Manage database schema changes efficiently.
- **Leverage Dependency Injection:** Avoid tightly coupled code and improve testability.
- **Write Unit & Feature Tests:** Ensure application reliability with PHPUnit and Laravel Dusk.
- **Utilize Queues & Jobs:** Improve performance by offloading background tasks.
- **Follow RESTful API Principles:** Create scalable and maintainable APIs.
- **Use Config & Environment Variables:** Store sensitive data securely in the `.env` file.

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository**

    ```sh
    git clone https://github.com/lucasvalenca1/simple-website.git
    cd simple-website
    ```

2. **Install dependencies**

    ```sh
    composer install
    ```

3. **Copy environment file and configure**

    ```sh
    cp .env.example .env
    ```

    Update `.env` with your database and other necessary configurations.

4. **Generate application key**

    ```sh
    php artisan key:generate
    ```

5. **Run database migrations**

    ```sh
    php artisan migrate --seed
    ```

6. **Start the development server**
    ```sh
    php artisan serve
    ```

Your Laravel application should now be running at `http://127.0.0.1:8000/`.

## Usage

Navigate through the following pages:

- Homepage: `http://127.0.0.1:8000`
- About Page: `http://127.0.0.1:8000/about`
- Contact Page: `http://127.0.0.1:8000/contact`

Submit messages via the contact form to test form handling.

## About Me

Hi, I'm **Lucas Valenca**, a Full Stack Developer specializing in PHP and Laravel full-stack projects. Check out my work on [GitHub](https://github.com/lucasvalenca1)!

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request with improvements or bug fixes.

## License

This project is open-source and licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

### Next Steps:

1. Replace your current `README.md` file with this updated version.
2. Push your changes to GitHub:
   ```sh
   git add README.md
   git commit -m "Added Laravel logo to README.md"
   git push origin main
   ```

---
