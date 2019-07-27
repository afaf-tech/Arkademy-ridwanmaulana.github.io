<?php
$data = array(
    "name"        =>  "Ridwan Maulana Tanjung",
    "age"         => 18,
    "address"     => "Ambar Bogor Regency Blok. B4 No. 03, Kel. Desa Nagrak, Kec. Sukaraja, Kab. Bogor, Jawa Barat 16710",
    "hobbies"     => ["music", "reading", "gaming"],
    "is married"  => false,
    "school"      => [
        ["Primary School" => "SDN BATUTULIS 3 KOTA BOGOR", "Major" => null, "year in" => 2007, "year out" => 2013],
        ["Junior High School" => "SMP NEGRI 10 KOTA BOGOR", "Major" => null, "year in" => 2013, "year out" => 2016],
        ["Senior High School" => "SMK TARUNA ANDIGHA KOTA BOGOR", "Major" => "Multimedia", "year in" => 2016, "year out" => 2019]
    ],
    "skills"      => [
        [
            "HTML"       => "Advance",
            "CSS"        => "Advance",
            "Javascript" => "Beginner",
            "PHP"        => "Advance",
            "MySQL"      => "Beginner"
        ]
    ],
    "interest in coding" => true
);
function formatJson($data)
{
    return json_encode($data);;
}

echo formatJson($data);
