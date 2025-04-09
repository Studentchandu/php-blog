---
## 📝 PHP Blog System — Internship Tasks (Task 1 to Task 3)

This repository contains the source code for a **PHP & MySQL blog application** developed as part of the ApexPlanet internship program. The project is divided into **five tasks**, of which the first three are documented below in detail.
---
## ✅ Task 1: Setting Up the Development Environment

**Objective:** Set up a working PHP + MySQL environment with version control.

### 📌 Steps Followed:
1. **Installed XAMPP** as the local server environment.
2. Verified Apache and MySQL by visiting `http://localhost` on a browser.
3. **Created project directory**: `C:/xampp/htdocs/blog`
4. **Installed Git** and created a GitHub account.
5. **Initialized Git repo** in the blog project folder:
   ```bash
   git init
   git remote add origin https://github.com/yourusername/php-blog.git
   ```
6. Made the **first commit** with `index.php` and `README.md`.

### ✅ Deliverables:
- Functional local server setup
- Initial GitHub repo with first commit

-------------------------------------------------------------------------------------------------------------------

## ✅ Task 2: Basic CRUD Application

**Objective:** Build a blog system with login, registration, and post management.

### 📌 Steps Followed:

#### 🗄️ Database Setup:
- Created MySQL database named `blog`
- Created `users` table:
  - `id`, `username`, `password`
- Created `posts` table:
  - `id`, `title`, `content`, `user_id`, `created_at`

#### 🔐 User Authentication:
- `register.php` for new users (with `password_hash()`)
- `login.php` with session management (`password_verify()`)
- `logout.php` to destroy session

#### 📝 CRUD Operations:
- `create_post.php` – Create a blog post
- `edit_post.php` – Edit a post
- `delete_post.php` – Delete a post
- `index.php` – View all posts (sorted latest first)

### ✅ Deliverables:
- Fully working login/register + CRUD blog system
- Sessions protect all post features
- Code and database pushed to GitHub repo

----------------------------------------------------------------------------------------------------------

## ✅ Task 3: Advanced Features Implementation

**Objective:** Enhance UX with search, pagination, and styling.

### 📌 Steps Followed:

#### 🔍 Search Functionality:
- Added search form in `index.php`
- PHP filters posts using `LIKE` in title/content
- Matching posts are shown based on keyword

#### 📄 Pagination:
- Limited posts to **5 per page** using `LIMIT` and `OFFSET`
- Total post count calculated with `COUNT(*)`
- Page navigation links generated dynamically

#### 🎨 User Interface Improvements:
- Added **consistent inline CSS** to all pages (login, register, create, edit, home, etc.)
- Used a **purple-pink gradient** background across all pages
- Designed clean post cards, buttons, inputs
- Created a **public homepage (`home.php`)** with:
  - Blog title
  - Buttons: Register, Login, Logout
  - Redirects user correctly based on session

### ✅ Deliverables:
- Functional blog with:
  - Search by title/content
  - Pagination across posts
  - Visually appealing UI
- Task 3 code committed and pushed to same GitHub repo

---
