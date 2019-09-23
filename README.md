# hps-behat
[![Build Status](https://travis-ci.org/hiptest/hps-behat.svg?branch=master)](https://travis-ci.org/hiptest/hps-behat)

Hiptest publisher samples with Behat

In this repository you'll find tests generated in Behat format from [Hiptest](https://hiptest.com), using [Hiptest publisher](https://github.com/hiptest/hiptest-publisher).

The goals are:

 * to show how tests are exported in Behat.
 * to check exports work out of the box (well, with implemented actionwords)

System under test
------------------

The SUT is a (not that much) simple coffee machine. You start it, you ask for a coffee and you get it, sometimes. But most of times you have to add water or beans, empty the grounds. You have an automatic expresso machine at work or at home? So you know how it goes :-)

Prerequisite
------------

You need to install:
* [Hiptest publisher](https://github.com/hiptest/hiptest-publisher)
* PHP 5.6+
* [Composer](https://getcomposer.org/download/)

Update tests
-------------


To update the tests:

    hiptest-publisher -c behat.conf --without=actionwords

The tests are generated in the [``features``](https://github.com/hiptest/hps-behat/tree/master/features) directory.



Run tests
---------

To build the project and run the tests, use the following command:

    php composer.phar install
    vendor/bin/behat -f cucumber_json

The SUT implementation can be seen in [``src/CoffeeMachine.php``](https://github.com/hiptest/hps-behat/blob/master/src/CoffeeMachine.php)

The test report is generated in the ```results/``` directory.
