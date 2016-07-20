# HelloChat
With a new framework for PHP to Following the wechat interface


DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
components
    common/              contains shared configurations
    helpers/             contains helpers
    widgets/             contains widgets
    behaviors/           contains behaviors	
frontend
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    views/               contains view files for the Web application
vendor
    helloChat            contains core lib class                  
web
    images/              contains images
	css/                 contains css style
	js/                  contains js
```

nginx server rewrite rule
-------------------
if (!-e $request_filename){
    rewrite ^/(.*) /index.php?r=$1 last;
}

