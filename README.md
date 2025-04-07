# PHP Blog System 📝
A simple blog application developed using **PHP**, **MySQL**, and **XAMPP**.  
It allows users to **register**, **log in**, and **create**, **edit**, and **delete** blog posts.
---

## 🚀 Features
- User Registration with password hashing
- Secure Login with password verification
- Create new blog posts
- Edit and delete your own posts
- Display all blog posts in reverse order (latest first)
- Simple and clean UI using HTML and PHP
---

## 🛠️ Technologies Used
- PHP
- MySQL
- XAMPP
- HTML/CSS (basic styling)
---

## 📁 Folder Structure
/blog ├── db.php ├── register.php ├── login.php ├── logout.php ├── index.php ├── create_post.php ├── edit_post.php ├── delete_post.php └── uploads/ (optional if you add image upload)

## 🚀 How to Run This Project

Follow these steps to run the PHP Blog System locally:

### ✅ Requirements:
- XAMPP installed (download from: https://www.apachefriends.org/)
- Web browser (Chrome, Firefox, etc.)
- Basic understanding of PHP and MySQL

### 🛠 Steps:

1. **Start XAMPP:**
   - Open XAMPP Control Panel.
   - Start both `Apache` and `MySQL`.

2. **Move the Project Folder:**
   - Copy or clone the project folder into this directory:  
     `C:\xampp\htdocs\blog`

3. **Create the Database:**
   - Open your browser and go to:  
     `http://localhost/phpmyadmin`
   - Click `New` and create a database named: `blog`

4. **Create Tables:**
   - Use the SQL tab to paste and run the table creation queries for:
     - `users`
     - `posts`

5. **Run the App in Browser:**
   - Go to:  
     `http://localhost/blog/register.php` → to register a new user  
     `http://localhost/blog/login.php` → to log in  
     `http://localhost/blog/create_post.php` → to create a blog post  
     `http://localhost/blog/index.php` → to view posts  

---

That’s it! 🎉 You now have a basic blog system running locally!
