<?php
require_once('src/CoffeeMachine.php');
use PHPUnit_Framework_Assert as Assert;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

class Actionwords {
  var $sut;

  function __construct() {
    $this->sut = new CoffeeMachine();
    $this->handleWaterTank = false;
    $this->handleBeans = false;
    $this->handleCoffeeGrounds = false;
  }

  public function iStartTheCoffeeMachineUsingLanguageLang($lang = "en") {
    $this->sut->start($lang);
  }

  public function iShutdownTheCoffeeMachine() {
    $this->sut->stop();
  }

  public function messageMessageShouldBeDisplayed($message) {
    PHPUnit_Framework_Assert::assertEquals($message, $this->sut->getMessage());
  }

  public function coffeeShouldBeServed() {
    PHPUnit_Framework_Assert::assertTrue($this->sut->coffeeServed);
  }

  public function coffeeShouldNotBeServed() {
    PHPUnit_Framework_Assert::assertFalse($this->sut->coffeeServed);
  }

  public function iTakeACoffee() {
    $this->sut->takeCoffee();
  }

  public function iEmptyTheCoffeeGrounds() {
    $this->sut->emptyGrounds();
  }

  public function iFillTheBeansTank() {
    $this->sut->fillBeans();
  }

  public function iFillTheWaterTank() {
    $this->sut->fillTank();
  }

  public function iTakeCoffeeNumberCoffees($coffee_number = 10) {
    while (($coffee_number > 0)) {
      $this->iTakeACoffee();
      $coffee_number = $coffee_number - 1;

      if ($this->handleWaterTank) {
        $this->sut->fillTank();
      }

      if ($this->handleBeans) {
        $this->sut->fillBeans();
      }

      if ($this->handleCoffeeGrounds) {
        $this->sut->emptyGrounds();
      }
    }
  }

  public function theCoffeeMachineIsStarted() {
    $this->iStartTheCoffeeMachineUsingLanguageLang();
  }

  public function thirtyEightCoffeesAreTakenWithoutFillingBeans() {
    $this->iTakeCoffeeNumberCoffees(37);
    $this->iEmptyTheCoffeeGrounds();
    $this->iFillTheWaterTank();
    $this->iTakeACoffee();
  }

  public function iHandleEverythingExceptTheWaterTank() {
    $this->iHandleCoffeeGrounds();
    $this->iHandleBeans();
  }

  public function iHandleEverythingExceptTheBeans() {
    $this->iHandleWaterTank();
    $this->iHandleCoffeeGrounds();
  }

  public function iHandleEverythingExceptTheGrounds() {
    $this->iHandleWaterTank();
    $this->iHandleBeans();
  }

  public function iHandleWaterTank() {
    $this->handleWaterTank = true;
  }

  public function iHandleBeans() {
    $this->handleBeans = true;
  }

  public function iHandleCoffeeGrounds() {
    $this->handleCoffeeGrounds = true;
  }

  public function displayedMessageIs(PyStringNode $__free_text) {
    $this->messageMessageShouldBeDisplayed($__free_text);
  }

  public function iSwitchToSettingsMode() {
    $this->sut->showSettings();
  }

  public function settingsShouldBe(TableNode $__datatable) {
    $settings = [];
    foreach ($__datatable->getRows() as $row) {
      $settings[$row[0]] = $row[1];
    }

    PHPUnit_Framework_Assert::assertEquals($settings, $this->sut->getSettings());
  }
}
?>
