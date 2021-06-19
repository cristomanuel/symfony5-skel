PHP := `which php`
CURL := `which curl`
COMPOSER = ./composer.phar
PHPUNIT = ./vendor/bin/phpunit
PHPCONSOLE = ./bin/console
SYMFONY = `which symfony`

.PHONY: all install clean cache

$(SYMFONY):
	$(CURL) -sS https://get.symfony.com/cli/installer | bash
	mv ~/.symfony/bin/symfony /usr/local/bin/symfony

$(COMPOSER):
	$(CURL) -sS https://getcomposer.org/installer -o composer-setup.php
	$(PHP) composer-setup.php --version=1.10.22
	chmod 744 $@
	$(RM) composer-setup.php

all: cache clean install tests
start: cache server
test:
	$(PHPUNIT) --bootstrap ./tests/bootstrap.php --configuration ./phpunit.xml.dist

install: $(SYMFONY) $(COMPOSER)
	$(SYMFONY) self-update
	$(COMPOSER) self-update
	$(COMPOSER) clearcache
	$(COMPOSER) install --no-interaction

cache: $(PHPCONSOLE)
	$(PHPCONSOLE) cache:clear

clean:
	$(RM) -r $(COMPOSER) build vendor composer.lock .php_cs.cache .phpunit.result.cache

server:
	$(SYMFONY) serve --no-tls

query: $(PHPCONSOLE)
	$(PHPCONSOLE) dbal:run-sql "$(sql)"
