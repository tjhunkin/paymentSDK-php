Feature: CreditCardNon3DSPostprocessingPurchase
  As a user
  I want to make a purchase with a Credit Card Non3DS
  And to see that transaction was successful
  And to be able to cancel/refund the transaction

  Background:
    Given I am on "Create Credit Card UI Purchase Page" page
    When I fill fields with "Valid Credit Card Data"
    And I enter "25" in field "Amount"
    And I choose "EUR" in field "Currency"
    And I click "Save"

  @API-TEST @API-WDCEE-TEST
  Scenario: try purchase
    Given I am redirected to "Credit Card Reserve Page" page
    Then I see text "Reservation successfully completed."
    And I see text "Transaction ID"

  @API-TEST @API-WDCEE-TEST
  Scenario: try refund/cancel
    Given I am redirected to "Credit Card Reserve Page" page
    And I see text "Transaction ID"
    And I note the "Transaction Identification"
    When I am on "Credit Card Cancel Page" page
    And I enter "Noted Transaction Identification" in field "Transaction ID to be refunded"
    And I enter "25" in field "Amount"
    And I choose "EUR" in field "Currency"
    And I click "Refund"
    Then I see text "Payment successfully cancelled."
    And I see text "Transaction ID"
