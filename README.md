# TYPO3 Technical Test

Technical test project implementing a local TYPO3 development environment with Docker and a custom TYPO3 content element.

## Requirements

- Docker
- Docker Compose

## Setup

1. Clone the repository.
2. Create the environment file:

   cp .env.example .env

3. Start the Docker containers:

   docker compose up -d

4. Install the PHP dependencies:

   docker compose exec web composer install

5. Open TYPO3 in the browser:

   http://localhost:8080

6. Mailpit is available at:

   http://localhost:8025

## Custom Content Element

The project contains a custom TYPO3 content element called **Contact Box**.

It provides the following fields:

- Header
- Text
- Email address
- Optional link

The frontend rendering is implemented using TYPO3 Fluid.

If no email address is provided, the email output is omitted.
If no link is provided, the "More information" link is omitted.

## Mail Testing

TYPO3 is configured to send development emails through Mailpit.

A TYPO3 test email can be sent and inspected through the Mailpit web interface.

## AI Usage

AI tools were used as development support for troubleshooting, TYPO3 configuration guidance, and reviewing the implementation. The generated suggestions were reviewed and adapted before being used in the project.