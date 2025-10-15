# silverstripe-base
This is a base SilverStripe 6 install for Moosylvania which uses AWS S3 for asset storage

## Install
Requires Apache + PHP8.4 with imagick, intl and mbstring as well as Node JS

	composer install
	npm install

## .env file
Need to add a .env file with the following items -

		VITE_DEV_SERVER_URL=http://localhost:3000
		SS_ALLOWED_HOSTS=*
		SS_DATABASE_CLASS=MySQLDatabase
		SS_DATABASE_NAME=
		SS_DATABASE_PASSWORD=
		SS_DATABASE_SERVER=
		SS_DATABASE_USERNAME=
		SS_DEFAULT_ADMIN_PASSWORD=
		SS_DEFAULT_ADMIN_USERNAME=
		SS_TRUSTED_PROXY_IPS=0.0.0.0/0
		SS_ENVIRONMENT_TYPE=dev
		AWS_ACCESS_KEY_ID=
		AWS_BUCKET_NAME=
		AWS_PROTECTED_BUCKET_PREFIX=
		AWS_PUBLIC_BUCKET_PREFIX=
		AWS_REGION=us-east-1
		AWS_SECRET_ACCESS_KEY=
		AWS_PUBLIC_CDN_PREFIX=

## Email
Will need to configure how your site will send email by adding a proper email provider and update the settings in /app/_config/email.yml for your proper domain and add an ENV variable - MAILER_DSN=... with the specific credentials

## Redis Caching
If you wish to use redis caching - you will need to add to ENV variables -

		SS_IN_MEMORY_CACHE_FACTORY=SilverStripe\Core\Cache\RedisCacheFactory
		SS_REDIS_DSN={YOUR REDIS CONNECTION CREDENTIALS}

## Vite and Local Dev
When running the site in 'DEV' mode you will want to ensure Vite is started first by running -

		npm run dev

Before commiting be sure to run -

		npm run build



