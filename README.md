# Mini-Service-Listing-Website - WordPress Developer Test Project

## About

**Mini-Service-Listing-Website** This website is a mini IT service listing website developed for a WordPress developer test project. I used Smart IT Solutions as the company name.It showcases categorized IT services using custom post types, taxonomies, and custom fields. The project is focused on delivering a clean, responsive design and intuitive user experience, with services grouped under relevant categories and accessible via a structured layout.

The site features a homepage, category-based service sections, and individual service detail pages — each enhanced with a dynamic contact form.

---

## Development Environment

- Developed locally using **XAMPP** 
- WordPress version: 6.8 version.

---


## Theme Used 
Astra theme

## Plugins Used

### Elementor Pro
Used for building the front-end layout, including the homepage and service listing templates. It enabled dynamic design with ACF integration and conditional display of content.

### Advanced Custom Fields (ACF)
Used to create custom fields such as Service Title, Description, Featured Image, Service Price and Service Categories .

### Elementor Header & Footer Builder
Used to create custom footer without modifying the theme files.

---

## Features Implemented

- Custom Post Type: **Service**
- Services grouped and displayed by category on the homepage
- Single service pages with detailed title,descriptions, price and dynamic contact forms. the form built using elementor pro form widget.
- Fully responsive layout built with Elementor Pro


---

## How to Set Up

### 1. Download the project
* Clone the repository or download and extract the ZIP file:
```
https://github.com/NirmaliSenevirathna/Mini-Service-Listing-Website.git

```

### 2. Move Project Files
* Place the entire project folder in your web root (e.g., htdocs or public_html)

### 3. Database Setup
* Create a new MySQL database using phpMyAdmin or MySQL CLI
* Import the provided .sql file:

### 4. Configure Wordpress

* Update database credentials
```
define('DB_NAME', 'your_database');
define('DB_USER', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_HOST', 'localhost');
```
### 5. Install Required Plugins
   - Elementor Pro
   - Advanced Custom Fields
   - Elementor Header & Footer Builder

### 6. Activate Theme
* Go to Appearance → Themes
* Activate the theme named Astra


## Complete Setup Instructions

1. Install a fresh WordPress environment.
2. Copy the project files into your local WordPress setup (`wp-content`).
3. Install and activate Astra theme.
4. Install and activate the following plugins:
   - Elementor Pro
   - Advanced Custom Fields
   - Elementor Header & Footer Builder
5. Customize Astra theme settings:
   Built the main site header and navigation menus customizing astra theme and adjusted site-wide colors and font weights in the Astra theme customizer to match the minimal and modern style of the site.
6. built home page and single post page via Elementor theme builder.
7. Import the ACF field group (if included as JSON).
8. built **Service** via ACF plugin and add field group as Title, Description, Featured Image, Service Price and Service Categories. 
9. Add services under **Services > Add New**, including title, featured image, description, price, and service category.

---


