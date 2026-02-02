<?php
// Read form data safely
$name = trim($_POST["student_name"] ?? "");
$email = trim($_POST["email"] ?? "");
$event = trim($_POST["event"] ?? "");
$year = trim($_POST["year"] ?? "");
$message = trim($_POST["message"] ?? "");
$secret = isset($_POST["secret"]) && $_POST["secret"] === "yes" ? "Yes" : "No";

// Basic validation for required fields
$errors = [];
if ($name === "") { $errors[] = "Please enter your name."; }
if ($email === "") { $errors[] = "Please enter your email."; }
if ($event === "") { $errors[] = "Please select an event."; }

// Optional: simple email format check (friendly)
if ($email !== "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = "That email address doesn’t look quite right. Please try again.";
}

// Fun conditional message based on selected event
$bonusLine = "";
if ($event !== "") {
  if (stripos($event, "Bus Ride") !== false) {
    $bonusLine = "Pack a snack. Ask no questions. The fox approves.";
  } elseif (stripos($event, "Clue Hunt") !== false) {
    $bonusLine = "Your detective era begins now. Orange footprints await.";
  } elseif (stripos($event, "Picnic") !== false) {
    $bonusLine = "Blanket recommended. Drama optional. Lemonade guaranteed (probably).";
  } elseif (stripos($event, "Photo Booth") !== false) {
    $bonusLine = "Fox ears are basically formal attire. Prepare for iconic photos.";
  } elseif (stripos($event, "Finale") !== false) {
    $bonusLine = "Be on time. The fox hates lateness. The bell does not wait.";
  } else {
    $bonusLine = "Something mysterious is definitely about to happen.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Result - Fox Day Campus Events</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<header class="site-header">
  <div class="header-inner">
    <div class="brand">
      <h1>Fox Day Registration</h1>
      <p class="tagline">Processing your adventure… 🦊</p>
    </div>
    <nav class="site-nav">
      <a href="index.html">Home</a>
      <a href="events.php">View Events</a>
      <a href="register.html">Register</a>
    </nav>
  </div>
</header>

<main class="container">
  <?php if (!empty($errors)): ?>
    <div class="card notice error">
      <h2>Oops—Your Fox Ran Off 🦊</h2>
      <p>Looks like you missed something required. Fix the following:</p>
      <ul>
        <?php foreach ($errors as $err): ?>
          <li><?php echo htmlspecialchars($err); ?></li>
        <?php endforeach; ?>
      </ul>
      <div class="btn-row">
        <a class="btn" href="register.html">Return to Registration</a>
      </div>
      <p class="small">Fox Day tip: the surprise is better when your form is complete.</p>
    </div>
  <?php else: ?>
    <div class="card notice ok">
      <h2>You’re In. Fox Day Awaits. 🦊</h2>
      <p>
        Welcome to Fox Day! Your adventure is booked.
        Keep your eyes open… surprises travel fast.
      </p>
      <?php if ($bonusLine !== ""): ?>
        <p><strong><?php echo htmlspecialchars($bonusLine); ?></strong></p>
      <?php endif; ?>
    </div>

    <div class="card ticket">
      <h2>Your Fox Day Ticket</h2>

      <div class="meta">
        <div><strong>Name</strong></div>
        <div><?php echo htmlspecialchars($name); ?></div>

        <div><strong>Email</strong></div>
        <div><?php echo htmlspecialchars($email); ?></div>

        <div><strong>Event</strong></div>
        <div><?php echo htmlspecialchars($event); ?></div>

        <div><strong>Year</strong></div>
        <div><?php echo htmlspecialchars($year !== "" ? $year : "Not provided"); ?></div>

        <div><strong>Secret Promise</strong></div>
        <div><?php echo htmlspecialchars($secret); ?></div>
      </div>

      <p style="margin-top:12px;"><strong>Your message:</strong></p>
      <p><?php echo htmlspecialchars($message !== "" ? $message : "No message provided."); ?></p>

      <div class="btn-row">
        <a class="btn secondary" href="events.php">Back to Events</a>
        <a class="btn" href="register.html">Register Another Person</a>
      </div>
    </div>

    <div class="footer">
      <p>Fox Day Rule #3: If someone asks what happened… you smile and say “Nothing.” 🦊</p>
      <p>© Fox Day Campus Events</p>
    </div>
  <?php endif; ?>
</main>

</body>
</html>
