pragma solidity ^0.4.11;

contract Donating {
  
  uint8 public DonationReceived;
  
  function totalDonationReceived() returns (uint8) {
    return DonationReceived;
  }

  function Donate(uint8 amount) {
    DonationReceived += amount;
  }
}
