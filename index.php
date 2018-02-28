<?php

function __autoload($class_name) {
    require_once 'src/' . $class_name . '.php';
}

$sort = new Sorter();
$ordered_cards = $sort->get_trip();

/**
 * preparing the output
 */
$string = "<ol>";
foreach ($ordered_cards as $key => $value) {
    $string .= "<li>";
    $string .= $value['transportation'] === 'plane' ? "from " . $value['from'] . " take flight " : "Take the " . $value['transportation'] . " ";
    $string .= (isset($value['transportation_number']) ? $value['transportation_number'] : '');
    $string .= $value['transportation'] === 'plane' ? " to " . $value['to'] : " from " . $value['from'] . " to " . $value['to'];
    $string .= isset($value['gate']) ? ' Gate ' . $value['gate'] : '';
    $string .= isset($value['seat']) ? " .Sit in seat " . $value['seat'] : " .No seat assignment";
    $string .= isset($value['baggage']) ? ' Baggage drop at ticket counter ' . $value['baggage'] : '';
    if (next($ordered_cards) == FALSE) {
        $string .= " Baggage will we automatically transferred from your last leg ";
    }
    $string .= "</li>";
}
$string .= "<li>You have arrived at your final destination.</li>";

$string .= "</ol>";
echo $string;
