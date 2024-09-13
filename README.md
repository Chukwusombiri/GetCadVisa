# Immigration Consultancy Web Application

This is a full-stack web application developed for an immigration consultancy company that helps clients secure their immigration to Canada. The app offers a streamlined process for assessing client eligibility for various immigration channels. It is built with Laravel Jetstream (using the Livewire stack) and incorporates modern front-end technologies like TailwindCSS, Alpine.js, and the `wire-element/modals` library for managing modal components.

## Features

- **User Authentication**: Secure login system for site administrators, powered by Laravel Jetstream with custom authentication pages and routing.
- **Client Eligibility Testing**: Clients can choose their preferred immigration channel, fill out the necessary forms, and submit their details. Upon submission, an automatic email notification is sent to the client, confirming receipt of their application.
- **Admin Dashboard**: Admins can view and manage eligibility test submissions, make edits, and send direct emails to clients from within the admin panel.
- **Admin Features**:
  - Change password and manage profile details.
  - View, edit, and manage client eligibility tests.
  - Send custom emails to clients based on their application status.
- **Modals**: The app uses the `wire-element/modals` library for managing stateful modal components.
- **Front-end Technologies**: 
  - **TailwindCSS**: For rapid, utility-first CSS styling.
  - **Alpine.js**: Provides simple interactivity for dropdowns, toggling menus, etc.
- **Database**: MySQL is used for managing client and admin data.
- **FakerPHP in Production**: FakerPHP is included in production dependencies to generate factory data when needed.

## Project Structure

### Laravel Jetstream with Livewire

This project uses **Laravel Jetstream** for scaffolding user authentication and dashboard, with the **Livewire stack** to handle dynamic components and real-time interactions.

### Front-end

The app’s front-end utilizes **TailwindCSS** for styling, ensuring a responsive and visually appealing design, while **Alpine.js** is used for lightweight UI interactivity, such as toggling dropdowns and menus.

### Modal Management

The **`wire-element/modals`** library is integrated for managing modal components in the app. It works seamlessly with Livewire components and allows state management within modals.

### Admin Dashboard

The admin interface uses templates from **CreativeTim**, customized to integrate with the Laravel backend. Admin pages are protected by authentication middleware and provide functionality for managing client eligibility submissions.

### Routing and Customization

All default Jetstream routes have been redirected to the home page, as custom routes and controllers are used for admin authentication and management pages. You can review and adjust these changes in the following files:

- **`web.php`**: For custom routing logic.
- **`fortify.php`** and **`jetstream.php`**: For configuration changes regarding authentication and routing.

Feel free to undo or modify these routes based on your project requirements.

## Installation

Follow these steps to set up the project locally:

1. Clone the repository:
git clone https://github.com/yourusername/your-repository.git


2. Navigate to the project directory:
cd your-repository
    
3. Install dependencies:
composer install
npm install

4. Create a copy of the .env file:
- cp .env.example .env
- Set up your environment variables in .env (MySQL database, mail, etc.).

5. Run the database migrations:
- php artisan migrate

6. Start the development server:
- php artisan serve
- npm run dev


## Usage
Once the project is up and running, you can access the admin panel by logging in with admin credentials (create an admin user using a seeder or manually via database).

### Admins will be able to:
- View and manage client eligibility tests.
- Edit client details and send custom emails.
- Change their profile information and password.


### Clients will be able to:
- Submit their eligibility tests.
- Receive automatic email notifications after submission.


## Credits
- __CreativeTim__: For the admin panel front-end templates.
- __Laravel Jetstream__: For the authentication scaffolding.
- __WireElement/Modals__: For the modal components.
- __TailwindCSS and Alpine.js__: For front-end design and interactivity.


## License
This project is licensed under the MIT License - see the LICENSE file for details.

### Key Sections
- **Features**: Lists all the app’s functionalities, including admin and client features.
- **Project Structure**: Describes the key components (Jetstream, Livewire, TailwindCSS, Alpine.js, etc.) and how routing/customization is handled.
- **Installation**: Step-by-step guide to setting up the project locally.
- **Usage**: Instructions on how to use the app once it's running.
- **Credits**: Gives credit to the tools and resources used in the project.