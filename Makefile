default: test
.PHONY: default

install:
	composer install
.PHONY: install

generate_tests:
	hiptest-publisher -c behat.conf -t "$(SECRET_TOKEN)" --without=actionwords
.PHONY: generate_tests

test: install
	vendor/bin/behat
.PHONY: test
