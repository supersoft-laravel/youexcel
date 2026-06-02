# BotBlocker.Pro Shortlink

[![License](https://img.shields.io/badge/license-CC0%201.0%20Universal-blue.svg)](https://creativecommons.org/publicdomain/zero/1.0/)
[![GitHub Issues](https://img.shields.io/github/issues/stopbot-net/smarturls.svg)](https://github.com/stopbot-net/smarturls/issues)

## Installation
- Download Files ```shortlink.zip```
- Login to cPanel
- After you enter the cPanel page, click File Manager.
- Then, click ```public_html``` to enter the main directory of your website.
- Click Upload
- Upload your file by drag & drop or select the file manually.
- Right-click and extract your ```shortlink.zip``` file to remove all the files that you package earlier. Extract it in the ```public_html``` directory.
- Pleas add your Killbot Api Key on files ```config.php```. You can get your apikey by visiting https://botblocker.pro/developer
- You can also add Google reCAPTCHA v3 by editing files ```config.php```. You can get your Google reCAPTCHA by visiting https://www.google.com/recaptcha/admin/create
- For shortlink example : https://yourdomain.com/r/KEYNAME

## Nginx Configuration
If you're using Nginx, please use the following configuration.
```shell
server {
    server_name example.com;
    index index.php index.html;
    root /www/wwwroot/example.com/html;

    # basic settings
    sendfile on;
    tcp_nopush on;
    tcp_nodelay on;
    keepalive_timeout 65;
    types_hash_max_size 2048;
    server_tokens off;

    # set expiration of assets to MAX for caching
    location ~* \.(ico|css|js|gif|jpe?g|png)(\?[0-9]+)?$ {
        expires max;
        log_not_found off;
    }

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location /r {
	    rewrite ^/r/(.*)$ /redirect.php?keyName=$1;
    }

    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_hide_header X-Powered-By;
        fastcgi_hide_header X-CF-Powered-By;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/run/php/php-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param PATH_INFO $fastcgi_path_info;
    }

    # block access to .htaccess file
    location ~ /\.ht {
        deny all;
    }

    # logging settings
    error_log  /var/log/nginx/error.log warn;
    access_log /var/log/nginx/access.log;

    # gzip settings
    gzip on;
}
```

## License

This project is licensed under the [CC0 1.0 Universal](https://creativecommons.org/publicdomain/zero/1.0/) license.