# 🍽️ RecettesIngrédients

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)

**Recettes & Ingrédients** is an interactive web platform designed for cooking enthusiasts. It allows users to share their favorite recipes, exchange culinary tips, and discover inspiring new dishes in a friendly, community-driven environment.

---

## 📑 Table of Contents
- [🍽️ RecettesIngrédients](#️-recettesingrédients)
  - [📑 Table of Contents](#-table-of-contents)
  - [📖 About the Project](#-about-the-project)
  - [✨ Key Features](#-key-features)
    - [🧑‍🍳 Core Features](#-core-features)
    - [🚀 Bonus Features](#-bonus-features)
  - [🛠 Tech Stack](#-tech-stack)
  - [⚙️ Prerequisites](#️-prerequisites)
  - [💿 Installation](#-installation)
  - [🔧 Configuration](#-configuration)
    - [1. Database Setup](#1-database-setup)
    - [2. Run Migrations](#2-run-migrations)
    - [3. Run the Application](#3-run-the-application)
  - [🤝 Contributing](#-contributing)
  - [👍 Author](#-author)

---

## 📖 About the Project

The goal of this project is to create a vibrant community space where gastronomy meets technology. Whether you are a home cook or a professional chef, this platform allows you to catalog your creations and engage with other food lovers.

Key objectives:
* **Share:** Easily publish detailed recipes.
* **Discover:** Find recipes by category or keyword.
* **Interact:** Comment and discuss with the community.

---

## ✨ Key Features

### 🧑‍🍳 Core Features
* **Recipe Management (CRUD):**
    * Create recipes with a title, description, ingredients list, preparation steps, and an image.
    * Edit or delete your own recipes.
* **Discovery & Search:**
    * **Filtering:** Browse recipes by categories (Starters, Main Courses, Desserts, Drinks).
    * **Search:** Find specific dishes using keywords.
    * **Feed:** View recipes published by other members.
* **Community Interaction:**
    * Post comments on recipes to ask questions or give feedback.
    * Read community discussions.
* **Dashboard & Statistics:**
    * View total number of recipes on the platform.
    * Highlight top-rated and most-commented recipes.

### 🚀 Bonus Features
* **User Authentication:** Secure signup and login system to manage your personal space.
* **User Dashboard:** specialized area to manage your recipes, favorites, and history.
* **Recipe of the Day:** An admin-curated feature highlighting a specific recipe on the homepage daily.
* **PDF Export:** Download any recipe as a formatted PDF for offline use or printing.

---

## 🛠 Tech Stack

* **Backend Framework:** [Laravel](https://laravel.com)
* **Frontend:** HTML, CSS, JavaScript
* **Templating Engine:** Laravel Blade
* **Database:** PostgreSQL
* **PDF Generation:** (e.g., dompdf or snappy)

---

## ⚙️ Prerequisites

Before you begin, ensure you have met the following requirements:
* **PHP** >= 8.1
* **Composer**
* **PostgreSQL** installed and running
* **Node.js & NPM** (for compiling assets)

---

## 💿 Installation

1.  **Clone the repository:**
    ```bash
    git clone [https://github.com/fadiinsaf/Recettes-Ingr-dients.git](https://github.com/fadiinsaf/Recettes-Ingr-dients.git)
    cd gastro-connect
    ```

2.  **Install PHP dependencies:**
    ```bash
    composer install
    ```

3.  **Install NPM dependencies:**
    ```bash
    npm install
    ```

4.  **Environment Setup:**
    Duplicate the example environment file.
    ```bash
    cp .env.example .env
    ```

5.  **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

---

## 🔧 Configuration

### 1. Database Setup
Open the `.env` file and configure your PostgreSQL database credentials:

```ini

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

```

### 2. Run Migrations
Create the database tables:

```bash

php artisan migrate

```

(Optional) Seed the database with dummy data:

```bash

php artisan db:seed

```

### 3. Run the Application

Start the local development server:

```bash

php artisan serve

```

Visit http://localhost:8000 in your browser.

## 🤝 Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 👍 Author

**Fadi Insaf** – [GitHub](https://github.com/fadiinsaf) | [Email](mailto:fadiinafff@gmail.com)