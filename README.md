# TYPO3 Technical Test

Technical test project implementing a local TYPO3 development environment with Docker and a custom TYPO3 content element using Fluid.

## Requirements

- Docker
- Docker Compose

## Setup

1. Clone the repository:

   git clone https://github.com/simobenizii/typo3-technical-test.git
   cd typo3-technical-test

2. Create the environment file:

   cp .env.example .env

3. Start the Docker containers:

   docker compose up -d

4. Install the PHP dependencies:

   docker compose exec web composer install

5. Open TYPO3 and complete the local setup if required.

## URLs

- TYPO3 Frontend: http://localhost:8080/
- TYPO3 Backend: http://localhost:8080/typo3/
- Mailpit: http://localhost:8025/

## Environment Configuration

Local configuration is handled through environment variables.

Copy `.env.example` to `.env` before starting the project.

The `.env` file is excluded from Git and should not be committed because it may contain local credentials or configuration values.

## Docker Services

The Docker Compose environment contains the services required for local TYPO3 development:

- **Web / TYPO3** – runs the TYPO3 application with PHP.
- **Database** – provides the database used by TYPO3.
- **Mailpit** – captures outgoing emails during local development.

Persistent Docker storage is used where appropriate so that local application/database data survives container restarts.

## Custom Content Element

The project contains a custom TYPO3 content element called **Contact Box**.

Editors can configure:

- Header
- Short description
- Email address
- Optional link

The frontend rendering is implemented using a custom TYPO3 Fluid template.

The content element includes the required conditional rendering:

- If no email address is provided, the email section is not rendered.
- If no link is provided, the "More information" link is not rendered.
- The headline is rendered safely through Fluid.

## Mail Testing

TYPO3 is configured to send development emails through Mailpit.

Outgoing TYPO3 emails can be inspected through the Mailpit web interface:

http://localhost:8025/

Mail delivery through Mailpit was tested successfully during development.

## Project Structure

The custom TYPO3 extension is located in:

app/packages/technical_test/

Important files include:

- `Configuration/TCA/Overrides/tt_content.php` – configuration of the custom content element.
- `Configuration/TypoScript/setup.typoscript` – frontend rendering configuration.
- `Resources/Private/Templates/ContentElements/ContactBox.html` – Fluid template for the Contact Box.
- `ext_tables.sql` – database field definitions.
- `ext_localconf.php` / `ext_emconf.php` – extension configuration.

## Known Limitations / Open Issues

No known functional issues at the time of submission.

The project is intended as a local development environment and is not configured for production deployment.

## AI Usage

AI tools, including ChatGPT, were used as development support during the assignment.

They were mainly used for:

- troubleshooting Docker and TYPO3 configuration,
- understanding TYPO3 content element configuration,
- reviewing Fluid template implementation,
- debugging configuration and rendering issues,
- reviewing documentation.

AI-generated suggestions were reviewed and adapted manually before being integrated into the project. During development, configuration and template suggestions were adjusted based on actual TYPO3 behavior and local testing.

## Status

The following functionality was tested locally:

- TYPO3 frontend accessible
- TYPO3 backend accessible
- Custom Contact Box available in the TYPO3 backend
- Contact Box rendered through Fluid in the frontend
- Optional email rendering works
- Optional link rendering works
- TYPO3 test email successfully received in Mailpit