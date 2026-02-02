<?php
$events = [
  [
    "title" => "Mystery Destination Bus Ride: NO QUESTIONS ASKED",
    "datetime" => "Tuesday, 11:15 AM",
    "location" => "Mills Lawn Pickup (by the flagpole)",
    "description" => "Board the bus, surrender your schedule, and trust the fox. Snacks included. Destination? Classified.",
    "vibe" => "chaotic good"
  ],
  [
    "title" => "Campus Clue Hunt: Follow the Orange Footprints",
    "datetime" => "Tuesday, 12:00 PM",
    "location" => "Starts at Olin Library steps",
    "description" => "Teams race through secret clues, coded notes, and suspiciously placed rubber ducks. Prizes for top 3.",
    "vibe" => "detective era"
  ],
  [
    "title" => "Fox Day Picnic & Lemonade: The Blanket Society",
    "datetime" => "Tuesday, 1:00 PM",
    "location" => "Lake Virginia lawn",
    "description" => "Spread a blanket, grab lemonade, and enjoy surprise picnic drops. Bonus points for wearing something orange.",
    "vibe" => "picnic-core"
  ],
  [
    "title" => "Pop-Up Photo Booth: Fox Ears Edition",
    "datetime" => "Tuesday, 2:30 PM",
    "location" => "Campus Center lobby",
    "description" => "Polaroids, props, and fox ears. Take a photo, pin it to the “Wall of Fox Legends,” and leave a secret compliment.",
    "vibe" => "main character energy"
  ],
  [
    "title" => "The Great Fox Finale: Sunset Bell & Secret Treat",
    "datetime" => "Tuesday, 5:15 PM",
    "location" => "Knowles Chapel steps",
    "description" => "A quick gathering, a dramatic bell moment, and a surprise treat drop. (Yes, it’s real. No, we won’t say more.)",
    "vibe" => "mysterious + iconic"
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View Events - Fox Day Campus Events</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<header class="site-header">
  <div class="header-inner">
    <div class="brand">
      <h1>View Fox Day Events</h1>
      <p class="tagline">Choose wisely. Every event comes with a surprise. 🦊</p>
    </div>
    <nav class="site-nav">
      <a href="index.html">Home</a>
      <a href="events.php">View Events</a>
      <a href="register.html">Register</a>
    </nav>
  </div>
</header>

<main class="container">
  <?php foreach ($events as $event): ?>
    <section class="card">
      <h2><?php echo htmlspecialchars($event["title"]); ?></h2>

      <div class="meta">
        <div><strong>Date/Time</strong></div>
        <div><?php echo htmlspecialchars($event["datetime"]); ?></div>

        <div><strong>Location</strong></div>
        <div><?php echo htmlspecialchars($event["location"]); ?></div>
      </div>

      <p style="margin-top:12px;">
        <?php echo htmlspecialchars($event["description"]); ?>
      </p>

      <span class="badge">Vibe: <?php echo htmlspecialchars($event["vibe"]); ?></span>

      <div class="btn-row">
        <a class="btn" href="register.html">Register for this</a>
      </div>
    </section>
  <?php endforeach; ?>

  <div class="footer">
    <p>Spotted a fox? No you didn’t. 🦊</p>
    <p>© Fox Day Campus Events</p>
  </div>
</main>

</body>
</html>
