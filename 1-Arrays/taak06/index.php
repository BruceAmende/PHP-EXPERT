<?php

$provincies = [
    'Groningen' => [
        'provincie' => 'Groningen',
        'hoofdstad' => 'Groningen',
        'bevolking' => '583990',
        'meeste inwoners in gemeente' => 'Groningen'
    ],
    'Overijsel' => [
        'provincie' => 'Overijsel',
        'hoofdstad' => 'Zwolle',
        'bevolking' => '1156431',
        'meeste inwoners in gemeente' => 'Enschede'
    ],
    'Noord-holland' => [
        'provincie' => 'Noord-Holland',
        'hoofdstad' => 'Haarlem',
        'bevolking' => '2835359',
        'meeste inwoners in gemeente' => 'Amsterdam'
    ],
    'Zuid-holland' => [
        'provincie' => 'Zuid-Holland',
        'hoofdstad' => 'Den Haag',
        'bevolking' => '3673893',
        'meeste inwoners in gemeente' => 'Rotterdam'
    ]
];

foreach($provincies as $provincie ){
    echo '<h2>' . $provincie['provincie']. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['meeste inwoners in gemeente']. '</li>';
    echo '</ul>';

}

?>