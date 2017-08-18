@sprint-1
Feature: Serve coffee
    As a coffee lover
    I can get coffee from the machine
    So I can enjoy the rest of the day

  @priority-high
  Scenario: Simple use
    Simple use of the coffee machine
    
    Given the coffee machine is started
    When I take a coffee
    Then coffee should be served
