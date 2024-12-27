# Equip9
**Overview**

This project showcases the use of PHP and MySQL to build a user registration system. The registration page allows users to sign up using social media logins (Google, Facebook, and Apple). The user details are securely stored in a MySQL database, and the project includes the creation of various database tables, stored procedures, and REST APIs for CRUD operations.

The application is developed using WAMP server, which serves as the local environment for running the PHP backend and MySQL database.

**Objective**

The objectives of this project are:

User Registration Page: Create a user registration page with fields for First Name, Last Name, Mobile Number, and Password. Provide options for social media logins (Google, Facebook, Apple).

Database Setup: Create database tables in MySQL to store user details, ensuring secure password storage using hashing. Tables will also include essential columns such as Primary Key, Created Date, Updated Date, and Created By/Updated By.

Stored Procedures: Implement stored procedures to select, create, update, and delete user records in the database.

REST API Development: Develop POST, GET, PUT, and DELETE APIs to handle CRUD operations for user records.

Login and Authentication: After successful registration, redirect users to the login page where they can authenticate via mobile number and password. Generate an access token for user validation.

Landing Page: Upon successful login, display a greeting message with the user's first and last name based on the time of day.

Logout Feature: Allow users to log out of the application, with a log-out button displayed on the right corner of the page.

Technologies Used

Backend: PHP

Database: MySQL (WAMP Server)

Frontend: HTML, CSS (Any color combination can be used)

Social Media Authentication: Google, Facebook, Apple (Buttons for social media login)

Password Management: Hashed passwords for security

Authentication: JWT for session management

Project Structure

Registration Page: The page includes input fields for First Name, Last Name, Mobile Number, and Password, along with social media login buttons (Google, Facebook, Apple).

Database: The MySQL database includes tables for user registration, with columns for essential fields and date management in UTC format.

Stored Procedures: Stored procedures are implemented for database operations: Select, Insert, Update, and Delete.

REST APIs: The API endpoints are created using PHP to handle the user registration, retrieval, update, and deletion.

Login & Session: Users can log in using their mobile number and password, with JWT tokens generated for authenticated sessions.

Landing Page: A personalized greeting message based on the time of day is displayed on a landing page after successful login. Paraphase it

This project demonstrates building a user registration and login system using PHP and MySQL within a WAMP server environment. It features:

User Registration: A form for standard registration (first/last name, mobile number, password) and integration with social media logins (Google, Facebook, Apple).
Secure Data Storage: User data, including securely hashed passwords, is stored in a MySQL database with appropriate tables, including metadata like creation and update timestamps and user information.
Database Interactions: Stored procedures are used for efficient and secure database operations (CRUD - Create, Read, Update, Delete).
API Functionality: RESTful APIs are implemented using PHP to handle user data management (CRUD operations).
Authentication and Authorization: Users can log in with their mobile number and password. JWT (JSON Web Tokens) are used to manage user sessions and ensure secure access.
Personalized User Experience: After login, users are redirected to a landing page with a personalized greeting based on the time of day. A logout option is also provided.
Key Technologies:

Backend: PHP
Database: MySQL (using WAMP)
Frontend: HTML, CSS
Social Login: Google, Facebook, Apple authentication
Security: Password hashing and JWT-based authentication
Project Components:

Registration Page: Input fields for user details and social login buttons.
Database: MySQL database with user tables and metadata fields (UTC timestamps).
Stored Procedures: For database operations (SELECT, INSERT, UPDATE, DELETE).
REST APIs: PHP endpoints for user data management.
Login and Session Management: Mobile number/password login with JWT token generation.
Landing Page: Personalized greeting and logout functionality.

![Screenshot (65)](https://github.com/user-attachments/assets/2fe2664b-123b-4f70-a18a-270f224b78e7)
![Screenshot (62)](https://github.com/user-attachments/assets/505481ff-2724-494f-8440-5481c9735618)
![Screenshot (63)](https://github.com/user-attachments/assets/5607e1dd-64ce-4bac-9aa1-a23790cb4af2)
![Screenshot (64)](https://github.com/user-attachments/assets/aef77f67-12e4-4594-ad1c-efc402318277)
