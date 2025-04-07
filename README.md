# PHP Blog System 📝

A simple blog application developed using **PHP**, **MySQL**, and **XAMPP**.  
It allows users to **register**, **log in**, and **create**, **edit**, and **delete** blog posts.

---

## 🚀 Features
- ✅ User Registration with password hashing
- ✅ Secure Login with password verification
- ✅ Create new blog posts
- ✅ Edit existing blog posts
- ✅ Delete blog posts
- ✅ View all posts (latest first)
- ✅ Simple and clean UI using HTML and PHP

---

## 🛠️ Technologies Used
- PHP
- MySQL
- XAMPP
- HTML/CSS (basic styling)

---

## 📁 Folder Structure
/blog ├── db.php ├── register.php ├── login.php ├── logout.php ├── index.php ├── create_post.php ├── edit_post.php ├── delete_post.php └── uploads/ (optional if you add image upload)

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
