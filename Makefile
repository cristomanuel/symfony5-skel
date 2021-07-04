PHP := `which php`
CURL := `which curl`
COMPOSER = ./composer.phar
PHPUNIT = ./vendor/bin/phpunit
PHPCONSOLE = ./bin/console
SYMFONY = `which symfony`

.PHONY: require all install clean cache

require:
	$(SYMFONY)
	$(COMPOSER)
	$(SYMFONY) self-update
	$(COMPOSER) self-update

$(SYMFONY):
	$(CURL) -sS https://get.symfony.com/cli/installer | bash
	mv ~/.symfony/bin/symfony /usr/local/bin/symfony

$(COMPOSER):
	$(CURL) -sS https://getcomposer.org/installer -o composer-setup.php
	$(PHP) composer-setup.php
	chmod 744 $@
	$(RM) composer-setup.php
	mv composer.phar /usr/local/bin/composer

all: cache clean install tests

install:
	$(COMPOSER) clearcache
	$(COMPOSER) install --no-interaction

start: cache server

test:
	$(PHPUNIT) --bootstrap ./tests/bootstrap.php --configuration ./phpunit.xml.dist

cache: $(PHPCONSOLE)
	$(PHPCONSOLE) cache:clear

clean:
	$(RM) -r $(COMPOSER) build vendor composer.lock .php_cs.cache .phpunit.result.cache

server:
	$(SYMFONY) serve --no-tls

query: $(PHPCONSOLE)
	$(PHPCONSOLE) dbal:run-sql "$(sql)"
