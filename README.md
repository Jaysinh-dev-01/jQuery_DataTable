# jQuery DataTable with Server-Side Processing in CodeIgniter 3

🚀 **Efficient Data Handling for Large Datasets**

This project demonstrates the integration of jQuery DataTable with server-side processing in a CodeIgniter 3 (CI3) application. It's designed to efficiently manage and display large datasets with dynamic, real-time data handling.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [License](#license)

## Features

- 🌐 **Server-Side Processing**: Handle large datasets with ease, reducing load times and enhancing performance.
- 📊 **Dynamic DataTables**: Seamlessly integrate jQuery DataTable with CI3 for responsive and interactive tables.
- 🔍 **Real-Time Search and Sorting**: Efficiently search, sort, and paginate data directly from the server.
- 📚 **Clean Code Structure**: Organized MVC pattern with clear separation of concerns.

## Installation

Follow these steps to set up the project:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/Jaysinh-dev-01/jQuery_datatable
   ```

2. 🗂️ **Navigate to the project directory**:
   ```bash
   cd your-repo-name
   ```

3. ⚙️ **Install dependencies**:
   Ensure that you have CodeIgniter 3 set up and the necessary database configured.

4. 🛠️ **Configure the database**:
   Update your `application/config/database.php` file with your database credentials.

5. 🗃️ **Create the necessary database table**:
   Run the following SQL query to create the `users` table:
   ```sql
   CREATE TABLE `users` (
     `id` int(11) NOT NULL AUTO_INCREMENT,
     `name` varchar(100) NOT NULL,
     `age` int(11) NOT NULL,
     `email` varchar(100) NOT NULL,
     `city` varchar(100) NOT NULL,
     `address` text NOT NULL,
     PRIMARY KEY (`id`)
   );
   ```

6. 📥 **Load sample data (optional)**:
   Populate the `users` table with sample data to test the DataTable functionality.

## Usage

1. 🌐 **Access the application**:
   Once the setup is complete, navigate to `http://your-localhost-url/your-repo-name/index.php/dataTable` to view the Users table.

2. 💻 **Interacting with the DataTable**:
   - Search users by any field (ID, Name, Age, Email, City, Address).
   - Sort and paginate the data.
   - All interactions are processed server-side, ensuring efficiency and speed.

## Project Structure

- **Controller**: `DataTable.php`
  - Handles the server-side processing and AJAX requests for the DataTable.
- **Model**: `Users_model.php`
  - Interacts with the database to fetch and filter user data.
- **View**: `table.php`
  - Displays the DataTable with user details.

## Contributing

We welcome contributions to enhance this project! To contribute:

1. 🍴 **Fork the repository**.
2. 🌱 **Create a new branch** for your feature or bug fix.
3. 📤 **Submit a pull request** with a detailed description of the changes.

