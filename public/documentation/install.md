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
install twig
```composer require twig```

###twig sintax
say somethnig ```{{}}```

do something ````{% %}````

comments ```{##}``` 

extend templates {% extends <template name> %}

### install profiler ```composer require profiler --dev```

### debugging tools ```composer require debug --dev```

unpack the pack to control the version of each library ```composer unpack debug```


clear cache ```rm -rf var/cache/dev/*```

install asset ```composer require asset```

debug routes ```php bin/console debug:router```

create route ```{{ path('routePath') }}```

get parent block data ```{% block javascript %}
                            {{ parent() }}
                            {% endblock %}                             
                        ```
##logger
go to var/log/dev.log \
add LoggerInterface as second param in controller methods\
##Autowiring
```` php bin/console debug:autowiring````
