<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

require_once('Actionwords.php');

class FeatureContext implements SnippetAcceptingContext {
  public function __construct() {
    $this->actionwords = new Actionwords();
  }

  /**
   * @When /^I start the coffee machine using language "(.*)"$/
   */
  public function iStartTheCoffeeMachineUsingLanguageLang($lang){
    $this->actionwords->iStartTheCoffeeMachineUsingLanguageLang($lang);
  }

  /**
   * @When /^I shutdown the coffee machine$/
   */
  public function iShutdownTheCoffeeMachine(){
    $this->actionwords->iShutdownTheCoffeeMachine();
  }

  /**
   * @Then /^message "(.*)" should be displayed$/
   */
  public function messageMessageShouldBeDisplayed($message){
    $this->actionwords->messageMessageShouldBeDisplayed($message);
  }

  /**
   * @Then /^coffee should be served$/
   */
  public function coffeeShouldBeServed(){
    $this->actionwords->coffeeShouldBeServed();
  }

  /**
   * @Then /^coffee should not be served$/
   */
  public function coffeeShouldNotBeServed(){
    $this->actionwords->coffeeShouldNotBeServed();
  }

  /**
   * @When /^I take a coffee$/
   */
  public function iTakeACoffee(){
    $this->actionwords->iTakeACoffee();
  }

  /**
   * @When /^I empty the coffee grounds$/
   */
  public function iEmptyTheCoffeeGrounds(){
    $this->actionwords->iEmptyTheCoffeeGrounds();
  }

  /**
   * @When /^I fill the beans tank$/
   */
  public function iFillTheBeansTank(){
    $this->actionwords->iFillTheBeansTank();
  }

  /**
   * @When /^I fill the water tank$/
   */
  public function iFillTheWaterTank(){
    $this->actionwords->iFillTheWaterTank();
  }

  /**
   * @When /^I take "(.*)" coffees$/
   */
  public function iTakeCoffeeNumberCoffees($coffee_number){
    $this->actionwords->iTakeCoffeeNumberCoffees($coffee_number);
  }

  /**
   * @Given /^the coffee machine is started$/
   */
  public function theCoffeeMachineIsStarted(){
    $this->actionwords->theCoffeeMachineIsStarted();
  }

  /**
   * @Given /^I handle everything except the water tank$/
   */
  public function iHandleEverythingExceptTheWaterTank(){
    $this->actionwords->iHandleEverythingExceptTheWaterTank();
  }

  /**
   * @Given /^I handle water tank$/
   */
  public function iHandleWaterTank(){
    $this->actionwords->iHandleWaterTank();
  }

  /**
   * @Given /^I handle beans$/
   */
  public function iHandleBeans(){
    $this->actionwords->iHandleBeans();
  }

  /**
   * @Given /^I handle coffee grounds$/
   */
  public function iHandleCoffeeGrounds(){
    $this->actionwords->iHandleCoffeeGrounds();
  }

  /**
   * @Given /^I handle everything except the beans$/
   */
  public function iHandleEverythingExceptTheBeans(){
    $this->actionwords->iHandleEverythingExceptTheBeans();
  }

  /**
   * @Given /^I handle everything except the grounds$/
   */
  public function iHandleEverythingExceptTheGrounds(){
    $this->actionwords->iHandleEverythingExceptTheGrounds();
  }

  /**
   * @Then /^displayed message is:$/
   */
  public function displayedMessageIs(PyStringNode $__free_text){
    $this->actionwords->displayedMessageIs($__free_text);
  }

  /**
   * @When /^I switch to settings mode$/
   */
  public function iSwitchToSettingsMode(){
    $this->actionwords->iSwitchToSettingsMode();
  }

  /**
   * @Then /^settings should be:$/
   */
  public function settingsShouldBe(TableNode $__datatable){
    $this->actionwords->settingsShouldBe($__datatable);
  }
}
?>