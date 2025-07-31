<?php

function getSeverity($score, $thresholds) {
  if ($score <= $thresholds[0]) return 'Normal';
  elseif ($score <= $thresholds[1]) return 'Mild';
  elseif ($score <= $thresholds[2]) return 'Moderate';
  elseif ($score <= $thresholds[3]) return 'Severe';
  else return 'Extremely Severe';
}

function displayStressTips($level) {
  echo "<h3>❤️ For Stress Relief ($level)</h3><ul>";
  switch ($level) {
    case 'Normal':
      echo "<li>Take 5-minute breaks every hour to stretch and look away from screens.</li>";
      echo "<li>Practice weekly digital detox: no phone for 2 hours.</li>";
      echo "<li>Include play: a fun hobby, dance break, or silly video.</li>";
      $video = "https://www.youtube.com/embed/eZBa63NZbbE";
      break;
    case 'Mild':
      echo "<li>Do a weekly “stress dump” journal to release thoughts.</li>";
      echo "<li>Eat magnesium-rich foods (nuts, leafy greens).</li>";
      echo "<li>Use lavender or peppermint aroma while studying.</li>";
      $video = "https://www.youtube.com/embed/hnpQrMqDoqE";
      break;
    case 'Moderate':
      echo "<li>Prioritize sleep and non-negotiable rest.</li>";
      echo "<li>Use time blocking to avoid multitasking.</li>";
      echo "<li>Try 15-minute yoga for stress relief 2–3x/week.</li>";
    $video = "https://www.youtube.com/embed/x9K80nyTltU";
      break;
    case 'Severe':
      echo "<li>Say no to extra responsibilities and simplify your week.</li>";
      echo "<li>Use 4-7-8 breathing to regulate your nervous system.</li>";
      echo "<li>Seek structured guidance or support system.</li>";
      $video = "https://www.youtube.com/embed/dZ2I1Q719II";
      break;
    default:
      echo "<li>Talk to a mental health professional immediately.</li>";
      echo "<li>Cancel optional responsibilities and rest deeply.</li>";
      echo "<li>Do a home reset: dim lights, gentle music, simple food.</li>";
      $video = "https://www.youtube.com/embed/QS5-Z-oP-Hw";
  }
  echo "</ul>";
  echo "<div class='video-container'>
          <iframe width='560' height='315' src='$video' title='Stress Relief Video' frameborder='0' allowfullscreen></iframe>
        </div>";
}

function displayAnxietyTips($level) {
  echo "<h3>💛 For Anxiety Management ($level)</h3><ul>";
  switch ($level) {
    case 'Normal':
      echo "<li>Practice box breathing three times daily.</li>";
      echo "<li>Stretch shoulders and neck regularly.</li>";
      echo "<li>Stay hydrated and cut back on caffeine.</li>";
      $video = "https://www.youtube.com/embed/yqeirBfn2j4";
      break;
    case 'Mild':
      echo "<li>Use a ‘worry hour’ to contain anxious thoughts.</li>";
      echo "<li>Do calming visualizations or safe place meditations.</li>";
      echo "<li>Cut phone screen time before bed by 30 mins.</li>";
      $video = "https://www.youtube.com/embed/pU80BEm43JM";
      break;
    case 'Moderate':
      echo "<li>Play white noise or follow a guided calming meditation.</li>";
      echo "<li>Try muscle relaxation (tense/release body parts).</li>";
      echo "<li>Declutter a small space to reduce mental fog.</li>";
      $video = "https://www.youtube.com/embed/1x_2ehy-IBQ";
      break;
    case 'Severe':
      echo "<li>Use a CBT-based app like MindShift to reframe thoughts.</li>";
      echo "<li>Don't skip meals—keep sugar stable.</li>";
      echo "<li>Make a calming kit with sensory items like gum or oil.</li>";
      $video = "https://www.youtube.com/embed/nsOKrCVs6WM";
      break;
    default:
      echo "<li>Seek therapy or counseling urgently.</li>";
      echo "<li>Reduce all noise and stimulation sources.</li>";
      echo "<li>Use weighted blankets or pressure for calm.</li>";
      $video = "https://www.youtube.com/embed/q6aAQgXauQw";
  }
  echo "</ul>";
  echo "<div class='video-container'>
          <iframe width='560' height='315' src='$video' title='Anxiety Relief Video' frameborder='0' allowfullscreen></iframe>
        </div>";
}

function displayDepressionTips($level) {
  echo "<h3>🧡 When Feeling Down ($level)</h3><ul>";
  switch ($level) {
    case 'Normal':
      echo "<li>Write 3 things you're grateful for daily.</li>";
      echo "<li>Take a 15-min sunlight walk in the morning.</li>";
      echo "<li>Stay socially connected: message someone daily.</li>";
      $video = "https://www.youtube.com/embed/V8HilULDiuM";
      break;
    case 'Mild':
      echo "<li>Schedule 1 joyful activity every other day.</li>";
      echo "<li>Use mirror affirmations to reframe mood.</li>";
      echo "<li>Avoid negative media content that drags energy down.</li>";
      $video = "https://www.youtube.com/embed/dQjNADPBpGs";
      break;
    case 'Moderate':
      echo "<li>Track mood with an app or short journal prompts.</li>";
      echo "<li>Use body-based healing: warm shower or gentle yoga.</li>";
      echo "<li>Speak with a peer or join a support group.</li>";
      $video = "https://www.youtube.com/embed/8Su5VtKeXU8";
      break;
    case 'Severe':
      echo "<li>Stick to a routine even when you don’t feel like it.</li>";
      echo "<li>Open up to someone safe — don’t stay isolated.</li>";
      echo "<li>Use grounding techniques like 5-4-3-2-1 scanning.</li>";
      $video = "https://www.youtube.com/embed/BsKpumL-ohQ";
      break;
    default:
      echo "<li>Consult a counselor or mental health provider ASAP.</li>";
      echo "<li>Do just one small task a day to get moving again.</li>";
      echo "<li>Surround yourself with ambient life: cafés, podcasts, nature.</li>";
      $video = "https://www.youtube.com/embed/bCAAzXDaST8?start=16";
  }
  echo "</ul>";
  echo "<div class='video-container'>
          <iframe width='560' height='315' src='$video' title='Depression Help Video' frameborder='0' allowfullscreen></iframe>
        </div>";
}

