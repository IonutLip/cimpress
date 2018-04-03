Printi - Cimpress
==========================

Printi Cimpress is wrapper for cimpress api.

## Installing Cimpress as Bundle

The recommended way to install Cimpress is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of Cimpress:

```bash
php composer.phar require printi/cimpress
```

You can then later update notify using composer:

 ```bash
composer.phar update printi/cimpress
```

## User Guide


Basic notify configuration:

For eg:
```yaml
cimpress:
    credentials:
        username: 'username@cimpress.net'
        password: 'password'
        connection: 'CimpressADFS'
        scope: 'openid name email'
        api_type: 'app'

    api:
        prepress:
          api_client_id: 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx'
        pdf_processing:
          api_client_id: 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx'

````
## How to use

We can inject any Cimpress api services into our application.

Available services:
- CimpressPrepress
- CimpressPdfProcessing