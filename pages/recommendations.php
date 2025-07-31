<?php
include "connect.php";
include "authentication.php";
include "recommendations_generator.php";

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM assessments WHERE user_id = ? ORDER BY created_at DESC LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$depression = $anxiety = $stress = 0;

if ($row = $result->fetch_assoc()) {
  $depression = (int)$row['depression_score'];
  $anxiety = (int)$row['anxiety_score'];
  $stress = (int)$row['stress_score'];
}

$depression_level = getSeverity($depression, [9, 13, 20, 27]);
$anxiety_level    = getSeverity($anxiety, [7, 9, 14, 19]);
$stress_level     = getSeverity($stress, [14, 18, 25, 33]);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Personalized Tips | Mindly</title>
  <link rel="stylesheet" href="../assets/css/reset.css">
  <link rel="stylesheet" href="../assets/css/header.css" />
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="../assets/css/recommendation.css">

</head>
<body>

  <header class="navbar">
    <div class="logo-area">
      <img src="../assets/img/clr-primary-dark-logo.webp" alt="Mindly Logo" class="logo" />
      <span class="site-name">Mindly</span>
    </div>
    <nav class="nav-links">
      <a href="dashboard.php">Dashboard</a>
      <a href="recommendations.php">Resources</a>
      <a href="assessment.html">Forum/Assessment</a>
      <a href="results.php">Results</a>
      <a href="profile.php">Profile</a>
      <a href="logout.php">Logout</a>
    </nav>
  </header>

  <main class="rec-page">

    <section class="rec-opening-section">
      <h1>Your Personalized Recommendations</h1>

      <div class="rec-card">
        <div class="rec-text">
          <p>
            Based on your latest assessment, we've selected simple strategies to support your mental well-being. These tips are categorized by what you may be experiencing. Try the ones that feel right for you.
          </p>
        </div>
      </div>
    </section>

    <section class="tips-section">

      <div class="tip stress">
        <?php displayStressTips($stress_level); ?>

        <div class="tip-buttons">
          <button onclick="toggleCompletion(this)" class="completion-btn not-completed">Mark as Completed</button>
        </div>
      </div>

      <div class="tip anxiety">
        <?php displayAnxietyTips($anxiety_level); ?>
        <div class="tip-buttons">
          <button onclick="toggleCompletion(this)" class="completion-btn not-completed">Mark as Completed</button>
        </div>
      </div>

      <div class="tip depression">
        <?php displayDepressionTips($depression_level); ?>
        <div class="tip-buttons">
          <button onclick="toggleCompletion(this)" class="completion-btn not-completed">Mark as Completed</button>
        </div>
      </div>

    </section>

    <section class="rec-closing-section">
      <div class="rec-card">
        <div class="rec-text">
          <p>
            These recommendations are here to guide you but you don’t have to do everything at once. Choose what feels helpful today, and come back when you’re ready. These recommendations are here to guide you but you don’t have to do everything at once. Choose what feels helpful today, and come back when you’re ready.
          </p>
        </div>
      </div>
    </section>

  </main>

  <footer class="site-footer">
    <p>© Mindly · All rights reserved</p>
    <a href="privacy_policy.html">Privacy Policy</a>
  </footer>

  <script>
    
    function toggleCompletion(btn) { 
      // Check the current text of the button
      if (btn.innerHTML === "Mark as Completed") {
        // If it's "Mark as Completed", change to "Completed"
        btn.innerHTML = "Completed";
        btn.classList.remove("not-completed");
        btn.classList.add("completed");
      } else {
        // If it's "Completed", change back to "Mark as Completed"
        btn.innerHTML = "Mark as Completed";
        btn.classList.remove("completed");
        btn.classList.add("not-completed");
      }
    }
  
  </script>
  <script src="logout.js"></script>
</body>
</html>