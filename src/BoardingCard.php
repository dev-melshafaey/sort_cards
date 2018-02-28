<?php

/**
 *
 * @author Mahmoud
 */
class BoardingCard {

    /**
     * @param array $boarding_cards
     */
    public function __construct($boarding_cards = null) {
        if (!empty($boarding_cards)) {
            $this->cards = $boarding_cards;
        }
    }

    /**
     *
     * @var array 
     */
    private $cards = [
        [
            "from" => "Stockholm",
            "to" => "New York JFK",
            "seat" => "7B",
            "transportation" => "plane",
            "transportation_number" => "SK22",
            "gate" => "22"
        ],
        [
            "from" => "Gerona Airport",
            "to" => "Stockholm",
            "seat" => "3A",
            "transportation" => "plane",
            "transportation_number" => "SK455",
            "gate" => "45B",
            "baggage" => "344"
        ],
        [
            "from" => "Barcelona",
            "to" => "Gerona Airport",
            "transportation" => "airport bus",
        ],
        [
            "from" => "Madrid",
            "to" => "Barcelona",
            "seat" => "45B",
            "transportation" => "train",
            "transportation_number" => "78A"
        ]
    ];

    /**
     * 
     * @param array $cards
     * set card property
     */
    public function set_cards($cards) {
        $this->cards = $cards;
    }

    /**
     * 
     * @return array
     * get card property
     */
    public function get_cards() {
        return $this->cards;
    }

}
