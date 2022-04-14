<?php

namespace KA\Body;

function status_block() {
  return [
    'id' => 'id-goes-here',
    'x' => -40,
    'y' => 29,
    'star_id' => 'id-goes-here',
    'star_name' => 'Sol',
    'orbit' => 1,
    'type' => 'habitable planet',
    'name' => 'Earth',
    'image' => 'p35',
    'size' => 67,
    'water' => 900,
    'ore' => [
        'anthracite' => 0,
        'bauxite' => 4000,
        'beryl' => 0,
        'chalcopyrite' => 0,
        'chromite' => 0,
        'fluorite' => 0,
        'galena' => 0,
        'goethite' => 0,
        'gold' => 3399,
        'gypsum' => 0,
        'halite' => 0,
        'kerogen' => 0,
        'magnetite' => 0,
        'methane' => 0,
        'monazite' => 0,
        'rutile' => 0,
        'sulfur' => 0,
        'trona' => 0,
        'uraninite' => 0,
        'zircon' => 0,
    ],
    'empire' => [
        'id' => 'id-goes-here',
        'name' => 'Earthlings',
        'alignment' => 'ally',
        'is_isolationist' => 1,
    ],
    'station' => [
        'id' => 'id-goes-here',
        'x' => 143,
        'y' => -27,
        'name' => 'The Death Star',
    ],
    'needs_surface_refresh' => 0,
    'building_count' => 7,
    'build_queue_size' => 15,
    'build_queue_len' => 10,
    'plots_available' => 60,
    'happiness' => 3939,
    'happiness_hour' => 25,
    'unhappy_date' => '01 13 2014 16:11:21 +0600',
    'neutral_entry' => '01 13 2014 16:11:21 +0600',
    'propaganda_boost' => 20,
    'food_stored' => 33329,
    'food_capacity' => 40000,
    'food_hour' => 229,
    'energy_stored' => 39931,
    'energy_capacity' => 43000,
    'energy_hour' => 391,
    'ore_hour' => 284,
    'ore_capacity' => 35000,
    'ore_stored' => 1901,
    'waste_hour' => 933,
    'waste_stored' => 9933,
    'waste_capacity' => 13000,
    'water_stored' => 9929,
    'water_hour' => 295,
    'water_capacity' => 51050,
    'skip_incoming_ships' => 1,
    'num_incoming_enemy' => 0,
    'num_incoming_ally' => 0,
    'num_incoming_own' => 0,
    'incoming_enemy_ships' => [],
    'incoming_ally_ships' => [],
    'incoming_own_ships' => [],
  ];
}
