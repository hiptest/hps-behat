default: test
.PHONY: default

install_prerequisites:
	composer install
.PHONY: install_prerequisites

generate_tests:
	hiptest-publisher --config behat.conf --token "$(SECRET_TOKEN)" --without=actionwords
.PHONY: generate_tests

test: install_prerequisites
	vendor/bin/behat
.PHONY: test

