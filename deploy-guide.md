# CFO Edge 360 Laravel Deployment Guide for Your CyberPanel Server

This guide is based on your live production deployment on the Contabo VPS with CyberPanel.

## Server details

* Panel: **CyberPanel**
* Web server: **OpenLiteSpeed**
* Domain: **cfoedge360.com**
* Laravel project path:
  `/home/cfoedge360.com/public_html`
* Public web root must point to:
  `/home/cfoedge360.com/public_html/public`
* Site owner user: **cfoed1745**
* SSH user used for deployment: **hridoyvaraby**
* PHP used for Laravel CLI and Composer:
  `/usr/local/lsws/lsphp83/bin/php`
* Composer path:
  `/usr/bin/composer`

---

# 1. Create the website in CyberPanel

In CyberPanel:

* Go to **Websites > Create Website**
* Create the website for:
  `cfoedge360.com`
* Enable SSL
* Choose PHP version **8.3**
* Do not install WordPress

---

# 2. Confirm the site directory

The website account directory is:

```bash
/home/cfoedge360.com
```

The Laravel project root is:

```bash
/home/cfoedge360.com/public_html
```

You confirmed that the files are owned by:

```bash
cfoed1745
```

So deployment commands should be run as that user.

---

# 3. Important note about permissions

Your normal SSH user `hridoyvaraby` can use `sudo`, but cannot directly access the website folder contents without sudo because the folder permissions are restricted.

So use this pattern for deployment commands:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && COMMAND_HERE'
```

Do **not** try to use the `cfoed1745` password directly.

---

# 4. Clone the Laravel project

Because `public_html` was empty, the project was cloned directly into it.

Command used:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && git clone https://github.com/HridoyVaraby/cfo-edge-360-laravel.git .'
```

---

# 5. Create the `.env` file

Copy the environment file:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && cp .env.example .env'
```

Then configure `.env` with production values.

Important values used:

```env
APP_NAME="CFO Edge 360"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://cfoedge360.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=YOUR_DATABASE_USER
DB_PASSWORD=YOUR_DATABASE_PASSWORD
```

Also set mail settings if contact form email is enabled.

---

# 6. Database setup

Create the database in CyberPanel.

Then place the DB credentials into `.env`.

Do this before running migrations.

---

# 7. PHP version issue and the correct fix

The server default CLI `php` was:

```bash
/usr/bin/php
```

and it was running **PHP 8.1.2**, which is not correct for this project.

Composer was installed, but plain `php` could not be used because the project dependencies required PHP 8.3.

So for this server, **do not use plain `php` for Laravel commands**.

Use this instead:

```bash
/usr/local/lsws/lsphp83/bin/php
```

This is critical.

---

# 8. Install Composer dependencies

Correct command used:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php /usr/bin/composer install --no-dev --optimize-autoloader'
```

Why:

* the lock file required PHP 8.3
* Composer must run under the correct PHP version
* this installs production dependencies only

---

# 9. Generate the Laravel app key

Command used:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan key:generate'
```

---

# 10. Run database migrations

Command used:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan migrate --force'
```

This created the tables successfully.

Do **not** use `migrate:fresh` on production.

---

# 11. Create the storage symlink

Command used:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan storage:link'
```

This created:

```bash
public/storage -> /home/cfoedge360.com/public_html/storage/app/public
```

---

# 12. Cache Laravel for production

Command used:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan config:cache && /usr/local/lsws/lsphp83/bin/php artisan route:cache && /usr/local/lsws/lsphp83/bin/php artisan view:cache'
```

If you need a clean refresh later, use:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan optimize:clear'
```

Then rebuild caches again.

---

# 13. Build frontend assets

At first, `public/build` did not exist.

So assets were built on the server with:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && npm install && npm run build'
```

After build, this existed correctly:

```bash
/home/cfoedge360.com/public_html/public/build
```

---

# 14. Set the correct document root in CyberPanel

This was already changed correctly.

The document root must be:

```bash
/home/cfoedge360.com/public_html/public
```

Not:

```bash
/home/cfoedge360.com/public_html
```

This is one of the most important Laravel deployment settings.

---

# 15. Set the correct PHP version in CyberPanel

In CyberPanel, the website PHP version must be **8.3**.

This was already done correctly.

That ensures the web server runtime matches the CLI/runtime used for deployment.

---

# 16. Create or verify admin user

You checked the user count with:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan tinker --execute="echo App\Models\User::count();"'
```

It returned:

```bash
1
```

So an admin user already existed.

---

# 17. Setup Laravel scheduler cron

Cron should be added in CyberPanel with:

### Schedule

```cron
* * * * *
```

### Command

```bash
/usr/local/lsws/lsphp83/bin/php /home/cfoedge360.com/public_html/artisan schedule:run >> /dev/null 2>&1
```

This is the correct scheduler command for your server.

---

# 18. File permissions

Recommended permission baseline:

```bash
sudo chown -R cfoed1745:cfoed1745 /home/cfoedge360.com/public_html
sudo find /home/cfoedge360.com/public_html -type f -exec chmod 644 {} \;
sudo find /home/cfoedge360.com/public_html -type d -exec chmod 755 {} \;
sudo chmod -R 775 /home/cfoedge360.com/public_html/storage /home/cfoedge360.com/public_html/bootstrap/cache
```

Important:

* do not use `777`
* only `storage` and `bootstrap/cache` need write access

---

# 19. How to deploy future updates

When new code is pushed to GitHub, use this sequence:

## Step 1: pull latest code

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && git pull'
```

## Step 2: install/update dependencies if needed

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php /usr/bin/composer install --no-dev --optimize-autoloader'
```

## Step 3: run migrations if needed

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan migrate --force'
```

## Step 4: rebuild frontend assets if frontend files changed

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && npm run build'
```

## Step 5: clear and rebuild Laravel caches

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan optimize:clear'
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan config:cache && /usr/local/lsws/lsphp83/bin/php artisan route:cache && /usr/local/lsws/lsphp83/bin/php artisan view:cache'
```

---

# 20. How to check logs

If something breaks, check Laravel logs:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && tail -n 100 storage/logs/laravel.log'
```

---

# 21. Most useful troubleshooting notes from this deployment

## If Composer fails because of PHP version

Do not use plain `php`.

Use:

```bash
/usr/local/lsws/lsphp83/bin/php /usr/bin/composer
```

## If Laravel commands fail

Again, do not use plain `php`.

Use:

```bash
/usr/local/lsws/lsphp83/bin/php artisan ...
```

## If routes return 404

Check:

* CyberPanel document root
* rewrite rules
* OpenLiteSpeed reload

## If images from storage do not load

Run:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan storage:link'
```

## If view changes do not appear

Run:

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan optimize:clear'
```

then rebuild caches.

---

# 22. Final production checklist

Before considering deployment complete, verify:

* homepage loads
* CSS/JS loads correctly
* `public/build` exists
* contact page works
* blog pages work
* admin login works
* storage images work
* SSL works
* document root points to `/public`
* PHP version is 8.3
* scheduler cron is added
* `APP_DEBUG=false`

---

# 23. Exact core commands used in this deployment

```bash
sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && git clone https://github.com/HridoyVaraby/cfo-edge-360-laravel.git .'

sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && cp .env.example .env'

sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php /usr/bin/composer install --no-dev --optimize-autoloader'

sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan key:generate'

sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan migrate --force'

sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan storage:link'

sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && /usr/local/lsws/lsphp83/bin/php artisan config:cache && /usr/local/lsws/lsphp83/bin/php artisan route:cache && /usr/local/lsws/lsphp83/bin/php artisan view:cache'

sudo -u cfoed1745 -H bash -c 'cd /home/cfoedge360.com/public_html && npm install && npm run build'
```
