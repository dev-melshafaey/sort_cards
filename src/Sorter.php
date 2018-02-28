<?php

/**
 * Description of Sorter
 *
 * @author Mahmoud
 */
class Sorter {

    /**
     *
     * @var array 
     */
    private $cards;

    /**
     * 
     * @param array $boarding_cards
     */
    public function __construct($boarding_cards = null) {
        $this->cards = new BoardingCard($boarding_cards);
    }

    /**
     * 
     * @return array of sorting cards
     */
    public function get_trip() {
        $cards = $this->cards->get_cards();

        foreach ($cards as $card) {
            usort($cards, function ($a, $b) {
                return ( $a["to"] === $b["from"] ) ? 0 : 1;
            });
        }

        return $cards;
    }

}
