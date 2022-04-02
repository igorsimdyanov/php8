<?php
  enum Suit {
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
  }

  $val = Suit::Diamonds;

  function pick_a_card(Suit $suit) {
    echo $suit->name.'<br />';
  }

  pick_a_card($val);        // OK
  pick_a_card(Suit::Clubs); // OK
  pick_a_card('Spades');    //
