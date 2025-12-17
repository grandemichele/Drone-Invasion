🚀 Drone-Invasion – README

Drone-Invasion is an arcade shooter game for smartphones and desktop, available in both offline (localStorage) and online (server + JSON/PHP) versions.

🖥️ Desktop Version (localStorage)

Runs in any modern browser on PC.

Scores are saved locally on your device using localStorage.

Only the top 5 high scores are saved.

No server required — just open index.html.

❌ Scores are not shared with other players.

✅ Audio and images work directly in the browser.

📱 Smartphone Version (localStorage)

Runs on mobile browsers (iOS/Android).

Scores are saved only on your device using localStorage.

Only the top 5 high scores are saved.

❌ No score sharing between users.

✅ Audio and images work directly in the browser.

🌐 Smartphone Online Version

Runs on mobile browsers, hosted on an online server (e.g., Altervista).

Required files:

index.html → main game

save_score.php → saves scores to the server

get_scores.php → retrieves scores from server

scores.json → stores all scores

images/ folder → game graphics

audio/ folder → game sounds

How scores work:

At game over, score is sent to save_score.php.

save_score.php updates scores.json on the server.

All players visiting the same link see the same global leaderboard.

✅ Audio and images work correctly only if hosted on a server or online hosting.

⚡ How to Start
Desktop / Mobile LocalStorage

Download or clone the game folder.

Open index.html in a compatible browser.

Play: scores will be saved locally (top 5 only).

Smartphone Online

Upload all files (index.html, save_score.php, get_scores.php, scores.json, images/, audio/) to a hosting service.

Open the game using the server link.

Play: scores are stored in JSON on the server and visible to all players.

📊 Score Flow
LocalStorage (Desktop / Mobile):
  Game → Game Over → Save score in localStorage
  → Only top 5 scores kept
  → Visible only to the player

Online Version (Smartphone):
  Game → Game Over → Send score to save_score.php
  → PHP updates scores.json on server
  → All players see the same leaderboard via get_scores.php

🎮 Power-ups

Energy Boost: 🔴 red square

Weapon Boost: 🟡 yellow square

⚠️ Notes

Animations, audio, and images work correctly only if resources are loaded locally or from an accessible server.

LocalStorage provides a personal score history but does not replace the online leaderboard.
