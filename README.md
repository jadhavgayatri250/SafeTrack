# SafeTrack
SafeTrack is a Women Safety Web Application developed using CodeIgniter 4 and MySQL.

## Features
- User Registration and Login
- Secure Login Authentication
- Women Safety Dashboard
- Send Emergency SOS Alert
- Live Location Detection
- Automatic Latitude and Longitude Detection
- Automatic Pincode Detection
- Email Alert Notification
- Search Nearest Police Helpdesk
- View Emergency Contacts
- View SOS History
- Responsive User Interface
- Logout

## Technologies Used
- PHP
- CodeIgniter 4
- MySQL
- HTML5
- CSS3
- Bootstrap 5
- JavaScript
- HTML5 Geolocation API
- OpenStreetMap Nominatim API

## Project Description
SafeTrack is a women safety web application that helps users send emergency SOS alerts with their live location. The system automatically detects the user's latitude, longitude and pincode using the HTML5 Geolocation API and OpenStreetMap Nominatim API. It also allows users to search nearby police helpdesks, view emergency contact numbers and maintain SOS history. The application is developed using CodeIgniter 4 with MySQL database following the MVC architecture.

## How to Run
### Step 1: Clone the Repository
bash
git clone <repository-url>
### Step 2: Open the Project Folder
bash
cd SafeTrack
### Step 3: Install Required Packages
bash
composer install
### Step 4: Configure Database
Create a MySQL database named:
safetrack
Update the database configuration in the **.env** or **app/Config/Database.php** file.
### Step 5: Start Apache and MySQL
Open **XAMPP Control Panel** and start:
- Apache
- MySQL

### Step 6: Run the CodeIgniter Server
bash
php spark serve
### Step 7: Open the Project
Open your browser and visit:
http://localhost:8080/
## Output
- Home Page
- Register Page
- Login Page
- Dashboard
- Emergency SOS Alert
- Nearest Helpdesk Search
- Emergency Contacts
- SOS History
