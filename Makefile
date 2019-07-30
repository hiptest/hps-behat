default: test
.PHONY: default

install_prerequisites:
	composer install
.PHONY: install_prerequisites

generate_tests:
	hiptest-publisher -c behat.conf -t "$(SECRET_TOKEN)" --without=actionwords
.PHONY: generate_tests

test: install_prerequisites
	vendor/bin/behat
.PHONY: test
