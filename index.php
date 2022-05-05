<?php
$family=[
    'moi' => 'oussema',
    'mére'=> 'madiha',
    'pére'=> 'abdallah',
    'soeur'=>'asma'
];

foreach ($family as $membre => $name){
    if ($membre != 'moi') {
        echo "mon $membre s'apellee $name <br>";

    }
    else{
        echo "je m'apelle $name <br>";

    }
}

?>
