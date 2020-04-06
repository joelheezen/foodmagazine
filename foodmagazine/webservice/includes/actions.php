<?php
/**
 * @return array
 */
function getDishes()
{
    return [
        [
            "id" => 1,
            "name" => "Pizza",
            "kitchen" => "Italian",
        ],
        [
            "id" => 2,
            "name" => "Kale",
            "kitchen" => "Dutch",
        ],
        [
            "id" => 3,
            "name" => "Lasagna",
            "kitchen" => "Italian",
        ],
        [
            "id" => 4,
            "name" => "Kebab",
            "kitchen" => "Turkish",
        ],
        [
            "id" => 5,
            "name" => "Paella",
            "kitchen" => "Spanish",
        ],
        [
            "id" => 6,
            "name" => "Hot dog",
            "kitchen" => "American",
        ],
        [
            "id" => 7,
            "name" => "Soup",
            "kitchen" => "French",
        ],
        [
            "id" => 8,
            "name" => "Pasta",
            "kitchen" => "Italian",
        ],
        [
            "id" => 9,
            "name" => "Cereal",
            "kitchen" => "Breakfast",
        ],
        [
            "id" => 10,
            "name" => "Rice",
            "kitchen" => "Asian",
        ],
        [
            "id" => 11,
            "name" => "Chicken nugget",
            "kitchen" => "?",
        ]

    ];
}

/**
 * @param $id
 * @return mixed
 */
function getDishDetails($id)
{
    $tags = [
        1 => [
            "recipe" => "Put it in the oven and go!",
            "tags" => ['cheese', 'oven']
        ],
        2 => [
            "recipe" => "You can make this delicious Dutch meal by crushing potatoes with kale and adding a sausage.",
            "tags" => ['unox', 'healthy', 'stamppot', 'boerenkool']
        ],
        3 => [
            "recipe" => "Very nice when your grandma prepares this meal",
            "tags" => ['omnomnom']
        ],
        4 => [
            "recipe" => "Everytime in the city after midnight",
            "tags" => ['kapsalon', 'tasty', 'meat']
        ],
        5 => [
            "recipe" => "Specialty when on holiday in Spain",
            "tags" => ['fish']
        ],
        6 => [
            "recipe" => "Put it in a bun and put some sauce on it.",
            "tags" => ['bread', 'meat']
        ],
        7 => [
            "recipe" => "Boil it and you're ready.",
            "tags" => ['water', 'boil']
        ],
        8 => [
            "recipe" => "Boil the pasta and plate it with a sauce.",
            "tags" => ['cheese', 'boil']
        ],
        9 => [
            "recipe" => "Cereal first then milk",
            "tags" => ['milk', 'cereal', 'breakfast']
        ],
        10 => [
            "recipe" => "Boil it in some water.",
            "tags" => ['rice', 'boil']
        ],
        11 => [
            "recipe" => "Put it in the fryer for a quick bite",
            "tags" => ['meat', 'fryer']
        ],

    ];

    return $tags[$id];
}
