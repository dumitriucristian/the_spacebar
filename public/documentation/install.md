##Install symfony
```composer create-project symfony/website-skeleton the_spacebar ^4.4.*```

Add server package
```composer require server```

Use console in windows
```php bin/console```

Edit for routes file config > routes.yaml

Create Controller class 

Start server
```php bin/console server:run```

install annotations
```composer require annotations```

use wildcard in routes as param for your functions
```\*\*
    *@route("/news/{slug}")
    *
    */
```
## Symfony FLEX

install symfony security checker with recipe status
```composer require sec-checker```

use www.symfony.sh to see the recipes

use security check
```php bin/console security:check```

##twig