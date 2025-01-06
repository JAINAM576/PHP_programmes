This repository contains multiple PHP-based projects demonstrating functionality for managing educational qualifications, heritage information, and user administration.

## Directory Structure

### 1. **EduManage**
- **Purpose**: Enables students (users) to manage their educational qualifications.
- **Features**:
  - Users can register, log in, and update their profiles.
  - Add, update, and delete qualifications.
  - Manage user authentication and session handling.
- **Key Files**:
  - `Pages/Authentication/`: Contains user login, logout, and registration pages.
  - `Pages/Component/`: Handles UI components like adding, showing, and managing qualifications.
  - `auth/`: Backend logic for authentication and qualification management.
  - `db/db.php`: Database connection setup.
  - `users.sql`: Database schema for storing user and education data.

---

### 2. **Heritage-Of-India**
- **Purpose**: Displays information about India’s heritage, such as ancient monuments, caves, temples, and modern architecture.
- **Features**:
  - Separate PHP pages for different heritage categories (e.g., `ancient.php`, `caves.php`, `temples.php`).
  - Images and descriptive text for each heritage type.
  - Styled with custom CSS (`css/navbar.css`, `css/style.css`).
- **Key Files**:
  - `img/`: Organized images into categories like Caves, Modern, Monuments, and Temples.
  - `index.php`: Entry point showcasing the heritage categories.
  - `header.php` and `footer.php`: Common header and footer components.

---

### 3. **Programmes**
- **Purpose**: Includes small PHP programs for solving specific problems.
- **Programs**:
  - `KrishnaMurthyNumber.php`: Checks if a number is a Krishnamurthy number.
  - `PerfectNumber.php`: Determines if a number is a perfect number.
  - `PrimeNumber.php`: Verifies if a number is prime.

---

### 4. **UserManage**
- **Purpose**: Admin module to manage registered users and their requests.
- **Features**:
  - Admin can view and manage registered users.
  - Admin can approve or decline user registration requests.
  - Admin can delete existing users.
- **Key Files**:
  - `Pages/Authentication/`: Contains admin login and registration pages.
  - `Pages/Component/`: UI components for admin dashboard, user requests, and user management.
  - `auth/`: Backend logic for user authentication, requests handling, and admin session management.
  - `auth/api/`: APIs for actions like removing users or handling requests.
  - `db/db.php`: Database connection setup.
  - `admin_user.sql`: Database schema for managing admin users.

---

## How to Use
1. **EduManage**:
   - Import the `users.sql` file into your database.
   - Configure the database connection in `db/db.php`.
   - Start the application to register users and manage educational qualifications.

2. **Heritage-Of-India**:
   - Open `index.php` to explore the heritage information.
   - Ensure images are properly stored in the `img/` folder.

3. **UserManage**:
   - Import the `admin_user.sql` file into your database.
   - Configure the database connection in `db/db.php`.
   - Use the admin interface to manage users and registration requests.

---

## Technologies Used
- PHP
- HTML/CSS
- SQL (MySQL)
- Session Management


---

## Author
Developed by **Jainam Sanghavi**.
