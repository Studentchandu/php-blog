
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

---✅ Task 4: Security and Finalization
Objective: Secure the application, finalize documentation, and push all updates to GitHub.

📌 Steps Followed:
🔒 Security Measures:
Converted all SQL queries to use prepared statements to prevent SQL injection.

Implemented server-side validation for all forms.

Added client-side validation using HTML5 attributes (required, maxlength, etc.).

Introduced user roles (admin/editor) via a role column in the users table:

Only post owners or admins can edit/delete posts.

📁 Project Finalization:
Created security_measures.txt to document all implemented security features.

Added // Task 4 update comments to all PHP files to track the latest update.

Updated all commit messages and GitHub repo to reflect Task 4.

Cleaned up code and ensured consistent styling.

✅ Deliverables:
Hardened blog system with protection against SQL injection and unauthorized access

Role-based access control implemented

Finalized and pushed code with Task 4 labels

README.md and all files reflect Task 4 updates

🚀 Features
✅ User Registration with password hashing
✅ Secure Login with password verification
✅ Create, Edit, Delete blog posts
✅ View all posts (latest first)
✅ Search and pagination features
✅ Role-based access control (admin/editor)
✅ Clean and colorful UI using inline CSS

🛠️ Technologies Used
PHP

MySQL

XAMPP

HTML/CSS (inline styling)

📁 Folder Structure
arduino
Copy
Edit
/php-blog
├── db.php
├── register.php
├── login.php
├── logout.php
├── index.php
├── home.php
├── create_post.php
├── edit_post.php
├── delete_post.php
├── security_measures.txt
└── uploads/ (optional if using image uploads)
🚀 How to Run This Project
✅ Requirements:
XAMPP installed

Web browser (Chrome, Firefox, etc.)

Basic knowledge of PHP and MySQL

🛠 Steps:
1. Start XAMPP:
Open XAMPP Control Panel

Start both Apache and MySQL

2. Move the Project Folder:
Place the project folder into:

bash
Copy
Edit
C:/xampp/htdocs/php-blog
3. Create the Database:
Go to http://localhost/phpmyadmin

Click New, create a database named: blog

4. Create Tables:
Click on blog database → Go to SQL tab

Run SQL to create:

users table

posts table

5. Run the App in Browser:
Register: http://localhost/php-blog/register.php

Login: http://localhost/php-blog/login.php

Create post: http://localhost/php-blog/create_post.php

View posts: http://localhost/php-blog/index.php

Edit post: http://localhost/php-blog/edit_post.php?id=1

Delete post: http://localhost/php-blog/delete_post.php?id=1

🧠 Notes
You must be logged in to create, edit, or delete posts.

Posts can only be edited or deleted by the owner or admin.

Passwords are securely hashed during registration.

This is a beginner-friendly project built using PHP and MySQL.

📌 GitHub Commands Used
bash
Copy
Edit
cd /c/xampp/htdocs/php-blog      # Navigate to project
git init                         # Initialize Git
git remote add origin https://github.com/YourUsername/php-blog.git
git add .
git commit -m "Task 4: Secured PHP Blog System - Added security measures"
git push -u origin main
yaml
Copy
Edit

---

### ✅ Next Step:
1. Copy and **replace your current `README.md`** content with this version.
2. Then commit and push it:
```bash
git add README.md
git commit -m "Task 4: Updated README with final documentation"
git push origin main
