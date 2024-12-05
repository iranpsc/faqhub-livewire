
# faqhub-livewire

## Table of Contents

- [Introduction](#introduction)
- [Installation](#installation)
- [Running the Project](#running-the-project)
- [Contribution](#contribution)
- [Development Rules](#development-rules)
- [FAQ](#faq)

## Introduction

This repository, **faqhub-livewire**, is part of the national Iranian metaverse project, MetaRang. The goal of this project is to create a content management platform for community discussions and to facilitate knowledge sharing within the Iranian national metaverse. The **faqhub-livewire** project aims to enhance the user experience by providing a structured question-and-answer platform, supporting the citizens of MetaRang in their virtual engagement and collaboration.

## Installation

### 1. Clone the Repository

To begin, you need to clone the repository to your local machine. Run the following command in your terminal:

```bash
git clone https://github.com/iranpsc/faqhub-livewire.git
```

### 2. Navigate to the Project Directory

Once you have cloned the repository, navigate to the project directory:

```bash
cd faqhub-livewire
```

### 3. Install Dependencies

To install the necessary dependencies, you need to run the following command:

```bash
composer install
```

Additionally, you need to install JavaScript dependencies:

```bash
npm install
```

### 4. Set Up Environment File

Duplicate the `.env.example` file to create a new `.env` file:

```bash
cp .env.example .env
```

Update the `.env` file with your database credentials and other configuration settings as required.

### 5. Generate Application Key

Generate the application key by running the following command:

```bash
php artisan key:generate
```

## Running the Project

### 6. Run Migrations

To create the required database tables, run the following command:

```bash
php artisan migrate
```

### 7. Start the API Server

The **faqhub-livewire** project relies on an API running on port 8001. To start the API server, open a new terminal window or tab, navigate to the API project directory (`faqhub-api-collection`), and run:

```bash
php artisan serve --port=8001
```

This will start the API server on `http://localhost:8001`.

### 8. Start the Frontend Development Server

To start the frontend development server, use the following command:

```bash
php artisan serve
```

For front-end development, you may also need to run:

```bash
npm run dev
```

Ensure both the API and frontend servers are running simultaneously for proper functionality of the project.

### 9. API Connection

To connect the frontend with the API, make sure the **faqhub-api-collection** repository is running on port 8001. The frontend is configured to make requests to the API at `http://localhost:8001`. Ensure both servers are up and running for seamless operation.

## Contribution

We welcome contributions to improve the **faqhub-livewire** project. To contribute, please follow these steps:

1. **Fork the Project:** Fork the repository and work on your own copy.
2. **Create a New Branch:** For each feature or change, create a separate branch:

   ```bash
   git checkout -b feature-name
   ```

3. **Regular Commits:** Save your changes with detailed and meaningful commit messages:

   ```bash
   git commit -m "Detailed explanation of the change"
   ```

4. **Submit a Pull Request:** After making changes and ensuring everything works properly, submit a pull request for review.

## Development Rules

For developers working on **faqhub-livewire**, please follow these guidelines:

1. **Use Separate Branches:** Each new feature or bug fix must be implemented in a separate branch. The branch name should reflect the type of change (e.g., `feature-new-ui`, `bugfix-user-auth`).
2. **Regular and Clear Commits:** Ensure each commit is descriptive and communicates the intent of the change clearly.
3. **Review and Approval:** All pull requests must be reviewed by at least one other team member before merging.
4. **Adhere to Coding Standards:** Use tools like PHP-CS-Fixer and ESLint to maintain coding standards and consistency.
5. **Code Cleanup:** Remove any unused or test code before submitting a pull request to maintain the project's quality.

## FAQ

If you face any issues or have questions, please use the **Issues** section on GitHub to report bugs or requests. We are committed to improving the project and appreciate your feedback.
```

