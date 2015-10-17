<?php
  $tech = $_GET['name'];

  $techs = array(
    // Fire Techs
    'Fire Tower' => array('name' => 'Fire Tower', 'type' => 'fire',
      'learn' => array(25, 16, 11),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Prominence Beam' => array('name' => 'Prominence Beam', 'type' => 'fire',
      'learn' => array(17, 10, 5),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Spitfire' => array('name' => 'Spitfire', 'type' => 'fire',
      'learn' => array(30, 22, 15),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Red Inferno' => array('name' => 'Red Inferno', 'type' => 'fire',
      'learn' => array(20, 12, 7),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Magma Bomb' => array('name' => 'Magma Bomb', 'type' => 'fire',
      'learn' => array(22, 14, 9),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Heat Wave' => array('name' => 'Heat Wave', 'type' => 'fire',
      'learn' => array(28, 19, 19),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Infinity Burn' => array('name' => 'Infinity Burn', 'type' => 'fire',
      'learn' => array(15, 8, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Meltdown' => array('name' => 'Meltdown', 'type' => 'fire',
      'learn' => array(14, 6, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),

    // Battle Techs
    'Tremar' => array('name' => 'Tremar', 'type' => 'battle',
      'learn' => array(18, 8, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Muscle Charge' => array('name' => 'Muscle Charge', 'type' => 'battle',
      'learn' => array(19, 9, 8),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'War Cry' => array('name' => 'War Cry', 'type' => 'battle',
      'learn' => array(22, 15, 10),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Sonic Jab' => array('name' => 'Sonic Jab', 'type' => 'battle',
      'learn' => array(26, 19, 14),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Dynamite Kick' => array('name' => 'Dynamite Kick', 'type' => 'battle',
      'learn' => array(24, 17, 12),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Counter' => array('name' => 'Counter', 'type' => 'battle',
      'learn' => array(20, 11, 8),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Megaton Punch' => array('name' => 'Megaton Punch', 'type' => 'battle',
      'learn' => array(21, 13, 9),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Buster Dive' => array('name' => 'Buster Dive', 'type' => 'battle',
      'learn' => array(16, 7, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),

    // Air Techs
    'Thunder Justice' => array('name' => 'Thunder Justice', 'type' => 'air',
      'learn' => array(13, 9, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Spinning Shot' => array('name' => 'Spinning Shot', 'type' => 'air',
      'learn' => array(22, 14, 10),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Electric Cloud' => array('name' => 'Electric Cloud', 'type' => 'air',
      'learn' => array(32, 19, 15),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Megalo Spark' => array('name' => 'Megalo Spark', 'type' => 'air',
      'learn' => array(18, 13, 8),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Static Elect' => array('name' => 'Static Elect', 'type' => 'air',
      'learn' => array(36, 21, 17),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Wind Cutter' => array('name' => 'Wind Cutter', 'type' => 'air',
      'learn' => array(26, 16, 13),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Confused Storm' => array('name' => 'Confused Storm', 'type' => 'air',
      'learn' => array(15, 11, 7),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Hurricane' => array('name' => 'Hurricane', 'type' => 'air',
      'learn' => array(12, 8, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),

    // Earth Techs
    'Poison Powder' => array('name' => 'Poison Powder', 'type' => 'earth',
      'learn' => array(26, 19, 14),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Bug' => array('name' => 'Bug', 'type' => 'earth',
      'learn' => array(12, 8, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Mass Morph' => array('name' => 'Mass Morph', 'type' => 'earth',
      'learn' => array(23, 15, 12),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Insect Plague' => array('name' => 'Insect Plague', 'type' => 'earth',
      'learn' => array(24, 16, 13),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Charm Perfume' => array('name' => 'Charm Perfume', 'type' => 'earth',
      'learn' => array(18, 12, 9),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Poison Claw' => array('name' => 'Poison Claw', 'type' => 'earth',
      'learn' => array(28, 22, 16),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Danger Sting' => array('name' => 'Danger Sting', 'type' => 'earth',
      'learn' => array(27, 20, 15),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Green Trap' => array('name' => 'Green Trap', 'type' => 'earth',
      'learn' => array(14, 10, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),

    // Ice Techs
    'Giga Freeze' => array('name' => 'Giga Freeze', 'type' => 'ice',
      'learn' => array(17, 10, 5),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Ice Statue' => array('name' => 'Ice Statue', 'type' => 'ice',
      'learn' => array(15, 8, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Winter Blast' => array('name' => 'Winter Blast', 'type' => 'ice',
      'learn' => array(20, 12, 7),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Ice Needle' => array('name' => 'Ice Needle', 'type' => 'ice',
      'learn' => array(30, 15, 8),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Water Blitz' => array('name' => 'Water Blitz', 'type' => 'ice',
      'learn' => array(20, 10, 5),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Aqua Magic' => array('name' => 'Aqua Magic', 'type' => 'ice',
      'learn' => array(22, 14, 9),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Aurora Freeze' => array('name' => 'Aurora Freeze', 'type' => 'ice',
      'learn' => array(14, 6, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Teardrop' => array('name' => 'Teardrop', 'type' => 'ice',
      'learn' => array(30, 22, 15),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),

    // Mech Techs
    'Power Crane' => array('name' => 'Power Crane', 'type' => 'mech',
      'learn' => array(40, 30, 22),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'All Range Beam' => array('name' => 'All Range Beam', 'type' => 'mech',
      'learn' => array(16, 13, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Metal Sprinter' => array('name' => 'Metal Sprinter', 'type' => 'mech',
      'learn' => array(35, 27, 18),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Pulse Laser' => array('name' => 'Pulse Laser', 'type' => 'mech',
      'learn' => array(28, 21, 13),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Delete Program' => array('name' => 'Delete Program', 'type' => 'mech',
      'learn' => array(20, 14, 10),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'DG Dimension' => array('name' => 'DG Dimension', 'type' => 'mech',
      'learn' => array(15, 12, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Full Potentia' => array('name' => 'Full Potentia', 'type' => 'mech',
      'learn' => array(25, 17, 11),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Reverse Program' => array('name' => 'Reverse Program', 'type' => 'mech',
      'learn' => array(32, 24, 15),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),

    // Filth Techs
    'Odor Spray' => array('name' => 'Odor Spray', 'type' => 'filth',
      'learn' => array(24, 14, 9),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Poop Speed Toss' => array('name' => 'Poop Speed Toss', 'type' => 'filth',
      'learn' => array(23, 13, 8),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Big Poop Toss' => array('name' => 'Big Poop Toss', 'type' => 'filth',
      'learn' => array(15, 10, 5),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Big Random Toss' => array('name' => 'Big Random Toss', 'type' => 'filth',
      'learn' => array(11, 8, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Poop Random Toss' => array('name' => 'Poop Random Toss', 'type' => 'filth',
      'learn' => array(21, 12, 7),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Random Speed Toss' => array('name' => 'Random Speed Toss', 'type' => 'filth',
      'learn' => array(20, 11, 6),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Horizontal Kick' => array('name' => 'Horizontal Kick', 'type' => 'filth',
      'learn' => array(25, 16, 10),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3"))),
    'Ultimate Poop Hell' => array('name' => 'Ultimate Poop Hell', 'type' => 'filth',
      'learn' => array(9, 7, 0),
      'learn_from' => array(
        array('name' => "Digimon1", 'location' => "Location1"),
        array('name' => "Digimon2", 'location' => "Location2"),
        array('name' => "Digimon3", 'location' => "Location3")))
  );

  echo json_encode($techs[$tech]);

?>
