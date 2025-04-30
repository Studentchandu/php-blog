Thanks — that’s the full content of your conflicted `README.md`. The conflict is in the section with GitHub commands and extra project metadata. Let me now help you **resolve the conflict** by merging the useful parts from **both versions**.

---

### ✅ Cleaned and Merged `README.md` (Final Version)

You can copy and replace your current `README.md` content with this:

---

```markdown
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

---

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

---

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

## 🚀 Features
- ✅ User Registration with password hashing
- ✅ Secure Login with password verification
- ✅ Create, Edit, Delete blog posts
- ✅ View all posts (latest first)
- ✅ Search and pagination features
- ✅ Simple and clean UI using HTML, PHP, and inline CSS

---

## 🛠️ Technologies Used
- PHP
- MySQL
- XAMPP
- HTML/CSS (basic styling)

---

## 📁 Folder Structure
```
/blog
├── db.php
├── register.php
├── login.php
├── logout.php
├── index.php
├── home.php
├── create_post.php
├── edit_post.php
├── delete_post.php
└── uploads/ (optional if you add image upload)
```

---

## 🚀 How to Run This Project

### ✅ Requirements:
- [XAMPP](https://www.apachefriends.org/) installed
- Web browser (Chrome, Firefox, etc.)
- Basic knowledge of PHP and MySQL

### 🛠 Steps:

1. **Start XAMPP:**
   - Open XAMPP Control Panel.
   - Start both `Apache` and `MySQL`.

2. **Move the Project Folder:**
   - Place the `blog` folder into:  
     `C:\xampp\htdocs\blog`

3. **Create the Database:**
   - Open browser → go to:  
     `http://localhost/phpmyadmin`
   - Click `New`, create a database named: `blog`

4. **Create Tables:**
   - Click your `blog` database.
   - Go to SQL tab and run table creation SQL for:
     - `users`
     - `posts`

5. **Run the App in Browser:**
   - `http://localhost/blog/register.php` → Register a new user  
   - `http://localhost/blog/login.php` → Log in  
   - `http://localhost/blog/create_post.php` → Create a blog post  
   - `http://localhost/blog/index.php` → View all posts  
   - `http://localhost/blog/edit_post.php?id=1` → Edit a post  
   - `http://localhost/blog/delete_post.php?id=1` → Delete a post  

---

## 🧠 Notes
- You must be logged in to create, edit, or delete posts.
- Passwords are securely hashed during registration.
- This is a beginner-friendly project to understand CRUD operations using PHP + MySQL.

---

## 📌 GitHub Commands Used

```bash
cd /c/xampp/htdocs/blog      # Go to project folder
git init                     # Initialize Git (if not already done)
git remote add origin https://github.com/YourUsername/php-blog.git
git add .
git commit -m "Task 3: Added search, pagination, homepage, and UI improvements"
git push -u origin main
```
```

---

### ✅ Final Steps

1. Save this updated content into your `README.md`.
2. In Git Bash, run:

```bash
git add README.md
git rebase --continue
git push origin main --force
```

Let me know when you're ready to start documenting Task 4 or need help with pushing `security_measures.txt`.