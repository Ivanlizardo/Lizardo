# AVA POS – TFA4 Sessions and Authentication

Built from the supplied TFA3 CodeIgniter 4 project. The original layout and existing features are retained.

## Setup
1. Copy `.env` settings for your local environment and configure your database; do not commit real secrets.
2. Restore your TFA3 database (users and customers tables). No database export was included in the supplied ZIP; use your own database.
3. Run `php spark migrate` to add the nullable `users.password` column.
4. Set the environment variable `TFA4_INITIAL_PASSWORD` to a strong **temporary** password (at least 8 characters), then run `php spark db:seed ExistingUserPasswords`. This assigns the hashed temporary password to existing users whose password is NULL. Change each password after first login. Remove the environment variable afterward.
5. Run `php spark serve` and visit `/login`. Use an existing username and the temporary password.
6. New user forms require a password; edit forms allow an optional password change.

## Authentication
- Login: GET/POST `/login`; hashed passwords checked with `password_verify()`.
- Protected: all Customers and Users GET/POST routes (including create/update).
- Logout: POST `/logout` with CSRF token; session destroyed.
- Home and About remain public, as required by the activity's specified protected routes.

## Test checklist
- Logged out: `/users`, `/customers`, `/users/new`, `/customers/new`, edit routes redirect to `/login`.
- Wrong password: login denied.
- Correct password: login succeeds and `/users` is accessible.
- POST logout: session ends; protected routes redirect again.
- Create user: new password is hashed in database, not stored in plain text.

## Submission
Push raw project files plus your migration/seeder to GitHub, and deploy to your hosting provider. Add your own repository and hosted URLs; these cannot be generated offline.

## Security
Keep `.env`, secrets, production database exports, and temporary passwords out of public repositories. Use HTTPS in production. After deploying, verify the hosted login, logout, and access-control flows.
