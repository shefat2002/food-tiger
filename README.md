# Food Tiger - Online Food Ordering Website

Food Tiger is a simple yet functional online food ordering website developed using PHP, JavaScript, MySQL, and basic CSS. The project is hosted for free using InfinityFree with cPanel and phpMyAdmin support. The application includes two views: one for users to browse and order food, and one for admins to manage the website.

## 🌐 Live Demo

- User Website: [https://www.food-tiger.wuaze.com/](https://www.food-tiger.wuaze.com/)
- Admin Panel: [https://www.food-tiger.wuaze.com/admin](https://www.food-tiger.wuaze.com/admin)

## 📂 GitHub Repository

- [GitHub Source Code](https://github.com/shefat2002/food-tiger)

---
# SQL Queries
The core SQL queries used throughout the **Admin Panel** and **Customer View** for a food ordering system.

## 🛠️ Admin Panel

### ➕ Add Operations

- **Add Admin**
  ```sql
  INSERT INTO tbl_admin SET 
      full_name = '$full_name',
      username = '$username',
      password = '$password';
  ```

- **Add Category**
  ```sql
  INSERT INTO tbl_category SET 
      title = '$title',
      image_name = '$image_name',
      featured = '$featured',
      active = '$active';
  ```

- **Add Food**
  ```sql
  INSERT INTO tbl_food SET 
      title = '$title',
      description = '$description',
      price = $price,
      image_name = '$image_name',
      category_id = $category,
      featured = '$featured',
      active = '$active';
  ```

---

### ❌ Delete Operations

- **Delete Admin**
  ```sql
  DELETE FROM tbl_admin WHERE id = $id;
  ```

- **Delete Category**
  ```sql
  DELETE FROM tbl_category WHERE id = $id;
  ```

- **Delete Food**
  ```sql
  DELETE FROM tbl_food WHERE id = $id;
  ```

---

### 🖊️ Update Operations

- **Update Admin**
  - *Get Details:*
    ```sql
    SELECT * FROM tbl_admin WHERE id = $id;
    ```
  - *Update:*
    ```sql
    UPDATE tbl_admin SET
        full_name = '$full_name',
        username = '$username'
    WHERE id = '$id';
    ```

- **Update Category**
  - *Get Details:*
    ```sql
    SELECT * FROM tbl_category WHERE id = $id;
    ```
  - *Update:*
    ```sql
    UPDATE tbl_category SET 
        title = '$title',
        image_name = '$image_name',
        featured = '$featured',
        active = '$active' 
    WHERE id = $id;
    ```

- **Update Food**
  - *Get Food Details:*
    ```sql
    SELECT * FROM tbl_food WHERE id = $id;
    ```
  - *Get Active Categories:*
    ```sql
    SELECT * FROM tbl_category WHERE active = 'Yes';
    ```
  - *Update:*
    ```sql
    UPDATE tbl_food SET 
        title = '$title',
        description = '$description',
        price = $price,
        image_name = '$image_name',
        category_id = '$category',
        featured = '$featured',
        active = '$active'
    WHERE id = $id;
    ```

- **Update Order**
  - *Get Order Details:*
    ```sql
    SELECT * FROM tbl_order WHERE id = $id;
    ```
  - *Update:*
    ```sql
    UPDATE tbl_order SET 
        qty = $qty,
        total = $total,
        status = '$status',
        customer_name = '$customer_name',
        customer_contact = '$customer_contact',
        customer_email = '$customer_email',
        customer_address = '$customer_address'
    WHERE id = $id;
    ```

- **Update Password**
  - *Validate User:*
    ```sql
    SELECT * FROM tbl_admin WHERE id = $id AND password = '$current_password';
    ```
  - *Update Password:*
    ```sql
    UPDATE tbl_admin SET 
        password = '$new_password'
    WHERE id = $id;
    ```

---

### 📊 Dashboard Stats (Index)

- **Categories**
  ```sql
  SELECT * FROM tbl_category;
  ```

- **Foods**
  ```sql
  SELECT * FROM tbl_food;
  ```

- **Total Orders**
  ```sql
  SELECT * FROM tbl_order;
  ```

- **Total Revenue (Delivered Orders Only)**
  ```sql
  SELECT SUM(total) AS Total FROM tbl_order WHERE status = 'Delivered';
  ```

---

### 🔐 Authentication

- **Login**
  ```sql
  SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password';
  ```

---

### 🗂️ Management Pages

- **Manage Admin**
  ```sql
  SELECT * FROM tbl_admin;
  ```

- **Manage Category**
  ```sql
  SELECT * FROM tbl_category;
  ```

- **Manage Food**
  ```sql
  SELECT * FROM tbl_food;
  ```

- **Manage Order**
  ```sql
  SELECT * FROM tbl_order ORDER BY id DESC;
  ```

---

## 👥 Customer View

### 🏠 Homepage

- **Display Categories (Active & Featured)**
  ```sql
  SELECT * FROM tbl_category WHERE active = 'Yes' AND featured = 'Yes' LIMIT 3;
  ```

- **Display Featured Foods**
  ```sql
  SELECT * FROM tbl_food WHERE active = 'Yes' AND featured = 'Yes' LIMIT 6;
  ```

---

### 🛒 Order Process

- **Get Selected Food Details**
  ```sql
  SELECT * FROM tbl_food WHERE id = $food_id;
  ```

- **Add Order**
  ```sql
  INSERT INTO tbl_order SET 
      food = '$food',
      price = $price,
      qty = $qty,
      total = $total,
      order_date = '$order_date',
      status = '$status',
      customer_name = '$customer_name',
      customer_contact = '$customer_contact',
      customer_email = '$customer_email',
      customer_address = '$customer_address';
  ```

---

### 📚 Categories and Foods

- **Display All Categories (Active Only)**
  ```sql
  SELECT * FROM tbl_category WHERE active = 'Yes';
  ```

- **Category Title by ID**
  ```sql
  SELECT title FROM tbl_category WHERE id = $category_id;
  ```

- **Foods in a Category**
  ```sql
  SELECT * FROM tbl_food WHERE category_id = $category_id;
  ```

---

### 🔍 Food Search

- **Search by Title or Description**
  ```sql
  SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%';
  ```

---

### 📦 All Foods

- **Display All Active Foods**
  ```sql
  SELECT * FROM tbl_food WHERE active = 'Yes';
  ```

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

