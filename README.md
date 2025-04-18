# Food Tiger - Online Food Ordering Website

Food Tiger is a simple yet functional online food ordering website developed using PHP, JavaScript, MySQL, and basic CSS. The project is hosted for free using InfinityFree with cPanel and phpMyAdmin support. The application includes two views: one for users to browse and order food, and one for admins to manage the website.

## 🌐 Live Demo

- User Website: [https://www.food-tiger.wuaze.com/](https://www.food-tiger.wuaze.com/)
- Admin Panel: [https://www.food-tiger.wuaze.com/admin](https://www.food-tiger.wuaze.com/admin)

## 📂 GitHub Repository

- [GitHub Source Code](https://github.com/shefat2002/food-tiger)

---

## 🚀 Features

### 👥 User View

#### 1. Home Page

- Search for food items
- Explore food by categories
- View featured food items

#### 2. Categories Page

- Displays all food categories
- Clicking a category redirects to related food items

#### 3. Foods Page

- Displays all available foods
- Includes search bar for quick food search

#### 4. Contact Page

- Static contact information

### 🔐 Admin View

#### 1. Login

- Secure login using username and password

#### 2. Admin Dashboard

- Displays total categories, foods, orders, and revenue

#### 3. Admin Management

- Add new admin
- Update admin details
- Change password
- Delete admin

#### 4. Category Management

- Add, view, and manage categories
- Set categories as Featured and Active

#### 5. Food Management

- Add, view, and manage food items
- Fields include title, description, price, image, category, featured, and active status

#### 6. Order Management

- View and manage orders
- Includes details: S.N., Food, Price, Quantity, Total, Order Date, Status, Customer Name, Contact, Email, Address, and Actions

#### 7. Logout

- Ends session and redirects to login screen

---

## 🗃️ Database Structure

The application uses a MySQL database with four tables:

1. **admin** – Admin credentials and management
2. **category** – Food categories
3. **food** – Food items with metadata
4. **order** – Customer orders and details

---

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL (phpMyAdmin)
- **Hosting**: InfinityFree (Free hosting with cPanel support)

---

## 📦 Installation (For Local Setup)

1. Clone the repository:

   ```bash
   git clone https://github.com/shefat2002/food-tiger.git
   ```

2. Import the SQL database using phpMyAdmin

3. Configure the database credentials in `/config/constants.php`

4. Place the project files in your web server's root directory (e.g., `htdocs` in XAMPP)

5. Access the project via `http://localhost/food-tiger`

---

## 👨‍💻 Author

**Shefat Mahmud**

- GitHub: [shefat2002](https://github.com/shefat2002)

---

## 📄 License

This project is open-source and free to use for educational purposes.

---

Feel free to fork and contribute!

