# Lazada Crawler

This repository contains a PHP application to crawl data from Lazada and display it on your own site.

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine.

### Prerequisites

To run this application, you need to have the following software installed on your machine:

- PHP >= 8.1
- Composer
- Laravel 10
- Laragon

### Installation

1. Clone the repository to your local machine:

    git clone git@github.com:chuongpnt/bitA.git

2.	Navigate to the project directory:

    cd your-clone-folder

3.	Install Composer dependencies:

    composer install

4.	Configure Environment Variables
    Copy the .env.test file and rename it to .env:

5.	Generate Application Key

    php artisan key:generate

### Usage

	1.	Run the command to crawl Lazada products:

php artisan crawl:lazada-products


### Acknowledgments

	•	This project was inspired by the need to retrieve data from Lazada for personal use.

Feel free to customize it further based on your specific project requirements!
