#Install & Config

## Create Virtual Host

Create virtual host 

	<VirtualHost *:80>
	    ServerAdmin agustincl@dummy-host.example.com
	    DocumentRoot "C:\www\blog\web"
	    ServerName blog.local
	    ErrorLog "C:\Program Files (x86)\Zend\Apache2\logs/blog-error_log"
	    CustomLog "C:\Program Files (x86)\Zend\Apache2\logs/blog-access_log" common
		<Directory "C:\www\blog\web">    
	    		Options Indexes FollowSymLinks    
	    		AllowOverride All
	    		Order allow,deny
	    		Allow from all
		</Directory>
	</VirtualHost>

Add to etc/hosts
	
	127.0.0.1	blog.local
		
Restart Apache
		
## Install Symfony using composer 

Ref: http://symfony.com/doc/current/book/installation.html

	php composer.phar create-project symfony/framework-standard-edition blog


## Install Blog bundle

Ref: http://symblog.site90.net/docs/configuration-and-templating.html

	php app/console generate:bundle --namespace=Blogger/BlogBundle --format=yml

	Do you want to generate the whole directory structure [no]? yes
	Confirm automatic update of your Kernel [yes]? yes
	Confirm automatic update of the Routing [yes]? yes

### Check point


Open browser to 

	blog.local/app_dev.php/hello/agustincl
	



