### What is Laravel?
> Laravel is primarily used for building custom web apps using PHP. It's a web framework that handles many things that are annoying to build yourself, such as routing, templating HTML, and authentication. ... Rails is another server-side rendered framework, similar to Laravel, but based on Ruby.

### What is Composer?
> Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.

### How to manage libraries, dependencies in Laravel?
1. Composer is a dependency manager for PHP. Composer will manage the dependencies you require on a project by project basis. This means that Composer will pull in all the required libraries, dependencies and manage them all in one place. ... PEAR is an established PHP package manager that has been around for years.

2. In a nutshell, we need a tool which can be used to install libraries and manage application dependencies. Composer does a great job of this. It is an application-level package manager for PHP that has gained immense popularity and become the de facto standard for managing dependencies in PHP applications.

### How to Install Composer?
> Directly Install the Composer Installer and Restart the Computer

## Manually will generate problem instead use Installer
1. Set the PHP Environment Variable in System Enviornment > path
	***C:\xampp\php***
2. in the Command prompt use the following command
	***php -version***
3. then visit the url and Run the top three commands one by one from URL
	[Composer](https://getcomposer.org/download/)
	*php -r "copy\('https://getcomposer.org/installer', 'composer-setup.php'\);"*
	*php composer-setup.php*
4. then run the following command to verify is installed via php but we need to install it globally
	*php composer.phar*
5. Run the Following Command to Convert the composer.phar into composer.bat
	*C:\Users\M Ahsan> echo @php "%~dp0composer.phar" %*>composer.bat*
6. Add the following System Environment Variable in path
	*C:\ProgramData\ComposerSetup\bin*
7. Run the following commands if doesn't work then follow the 7 step
	*composer -v*
	*composer -V*

8. Download and install the Composer to set Enviroment Variables 
	https://getcomposer.org/Composer-Setup.exe 
	that installation will automatically done the following
>		 Add to System path: *C:\ProgramData\ComposerSetup\bin*
>		 Remove from System path: *C:\composer*

### How to install Laravel?
> To Install the Laravel you have php and composer already install and php System Environment Variable must be set.
1. Visit the following URL and follow the instruction to install Laravel.
>	*https://laravel.com/docs/8.x#installation-via-composer*
2. Run the command to install Laravel Globally
>	*composer global require laravel/installer*
3. Set the Global Path for Laravel
>	*C:\Users\M Ahsan\AppData\Roaming\Composer\vendor\bin*
4. laravel -V / -v

### How to Create and Serve Project in Laravel?
>	*laravel new example-app*
>	*laravel new example-app --git --branch="main"*
>	**cd example-app**
>	*php artisan serve*

### How to Create and Serve Laravel Project using Composer?
>   *composer create-project --prefer-dist laravel/laravel Learn_Laravel*

### What are the Files and Folder Structure of Laravel Project?
> app
> bootstrap
> config
>	web.php > for routing and redirecting users to different static / dynamic pages
> database
> resources
> 	css, js, lang > as the name emplies
> 	views > Static pages welcome.blade.php starting project
> routes
> storage
> tests
> vendor
