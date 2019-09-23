default: test
.PHONY: default

install_prerequisites:
	composer install
.PHONY: install_prerequisites

generate_tests:
	hiptest-publisher --config behat.conf --token "$(SECRET_TOKEN)" --without=actionwords
.PHONY: generate_tests

generate_tests_from_test_run:
	hiptest-publisher --config behat.conf --token "$(SECRET_TOKEN)" --test-run-id $(TEST_RUN_ID) --without=actionwords
.PHONY: generate_tests

test: install_prerequisites
	vendor/bin/behat
.PHONY: test

push_results:
	hiptest-publisher --config behat.conf --token "$(SECRET_TOKEN)" --test-run-id $(TEST_RUN_ID) --push=results/report.json
.PHONY: push_results
