#Install & Config

## Create Virtual Host

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
	
## Install Symfony

