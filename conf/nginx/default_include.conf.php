location / {
    index  index.php index.html index.htm;
    try_files $uri $uri/ /index.php?$query_string;
}

if (!-d $request_filename) {
    rewrite     ^/(.+)/$ /$1 permanent;
}

location ~* \.(?:ico|css|js|jpe?g|JPG|png|svg|woff)$ {
    expires 365d;
}

# for people with app root as doc root, restrict access to a few things
location ~ ^/(composer\.|Procfile$|<?=getenv('COMPOSER_VENDOR_DIR')?>/|<?=getenv('COMPOSER_BIN_DIR')?>/) {
    deny all;
}
