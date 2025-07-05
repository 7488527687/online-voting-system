# 🗳️ Online Voting System - Final MCA Project

Welcome to the **Online Voting System**, a secure, responsive, and user-friendly web application developed as a part of my MCA Final Semester project (2022–2025). This project ensures fair and transparent voting with features like password-hashed logins, single-vote restriction, PDF/Excel exports, and mobile-responsive design.

## 🔧 Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Backend**: PHP (Core)
- **Database**: MySQL
- **Others**: DataTables.js, FPDF for PDF generation, Responsive CSS framework

---

## 🚀 Features

### 👨‍💼 Admin Panel
- Secure Admin Login
- Add/View/Delete Candidates
- View Results (with vote count)
- Export results to **PDF/Excel**
- Manage Voting Sessions

### 🧑‍💻 Voter Panel
- Voter Login with **password hashing**
- Restriction to vote **only once**
- See thank you message post-vote
- Mobile-responsive voting screen

### 📱 UI/UX Highlights
- Responsive layout for mobile, tablet, and desktop
- Clean navigation with dynamic content rendering
- Header and Footer includes for consistent layout

---

## 🔐 Security Features

- Passwords are stored using **PHP's password_hash()**
- SQL queries protected to prevent injection
- One-vote restriction logic to avoid duplicate voting

---

## 📂 Project Structure
Online-Voting-System/
│
├── admin/
│ ├── dashboard.php
│ ├── add_candidate.php
│ ├── view_candidates.php
│ ├── view_results.php
│ └── export_pdf_excel.php
│
├── voter/
│ ├── login.php
│ └── vote.php
│
├── includes/
│ ├── header.php
│ └── footer.php
│
├── css/
│ └── style.css
│
├── js/
│ └── script.js
│
├── db/
│ └── voting_system.sql
│
├── index.php
└── README.md

## 📁 How to Run

1. Copy files into `htdocs` (XAMPP)
2. Import `voting_system.sql` into phpMyAdmin
3. Start Apache & MySQL, open browser:
   - `localhost/online-voting-system`
  
## ✍️ Author

Pushkar Raj  
MCA Final Year (2022–2025)  
BRABU University  
