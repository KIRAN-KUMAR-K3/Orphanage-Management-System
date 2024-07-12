# Orphanage Database Management System

## Overview

The Orphanage Database Management System is a robust, web-based application designed to efficiently manage records of orphans. Leveraging PHP for backend development and MySQL for database management ensures secure data handling and reliable performance. Additionally, it features an integrated payment gateway for secure donation processing.

<p align="center">
  <img src="https://img.freepik.com/free-vector/orphanage-concept-illustration_114360-8761.jpg" width="200" alt="Project Logo">
</p>

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Features

- **Admin Login**: Secure authentication for administrators.
  - **Username**: `admin`
  - **Password**: `admin`
- **Orphan Records Management**: Comprehensive storage and management of orphan details.
- **Donation Management**: Integrated payment gateway for accepting donations.
- **Cross-Platform Compatibility**: Compatible with XAMPP for Windows and LAMPP for Linux.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Server**: XAMPP (Windows), LAMPP (Linux)

## Installation

### Prerequisites

- Install [XAMPP](https://www.apachefriends.org/index.html) for Windows or [LAMPP](https://www.apachefriends.org/index.html) for Linux.

### Steps

1. **Clone the Repository**
   ```sh
   git clone https://github.com/KIRAN-KUMAR-K3/Orphanage-Management-System.git
   ```

2. **Move Project to Web Server Directory**
   - For XAMPP: Move the project to `C:/xampp/htdocs/`
   - For LAMPP: Move the project to `/opt/lampp/htdocs/`

3. **Start Apache and MySQL Services**
   - **XAMPP**: Use the XAMPP control panel to start Apache and MySQL.
   - **LAMPP**: Use the terminal to start services.
     ```sh
     sudo /opt/lampp/lampp start
     ```

4. **Import the Database**
   - Open [phpMyAdmin](http://localhost/phpmyadmin).
   - Create a new database named `orphanage_db`.
   - Import the `orphanage_db.sql` file located in the project directory.

5. **Access the Application**
   - Open your browser and navigate to `http://localhost/Orphanage-Management-System`.

## Usage

1. **Admin Login**
   - Navigate to the admin login page.
   - Use the provided credentials to access the admin dashboard.

2. **Manage Records**
   - Use the admin dashboard to add, update, or delete orphan records.
   - Monitor and manage donations through the integrated payment gateway.

## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. **Fork the Project**
2. **Create Your Feature Branch** (`git checkout -b feature/AmazingFeature`)
3. **Commit Your Changes** (`git commit -m 'Add some AmazingFeature'`)
4. **Push to the Branch** (`git push origin feature/AmazingFeature`)
5. **Open a Pull Request**

## License

Distributed under the MIT License. See [LICENSE](https://github.com/KIRAN-KUMAR-K3/Orphanage-Management-System/blob/main/LICENSE) for more information.

## Contact

Kiran Kumar K - [Email](mailto:18kirankumar.k03@gmail.com)

Project Link: [https://github.com/KIRAN-KUMAR-K3/Orphanage-Management-System](https://github.com/KIRAN-KUMAR-K3/Orphanage-Management-System)
