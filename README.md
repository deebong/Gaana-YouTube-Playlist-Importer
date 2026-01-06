Gaana to YouTube Playlist Importer
A simple self-hosted web tool that converts Gaana playlists into YouTube playlists without using any official APIs, login, quotas, or tracking.
The tool works by copying the visible Gaana playlist table, pasting it into the tool, and automatically generating a playable YouTube playlist.
________________________________________
Features
•	No Google API keys or quotas
•	Works on shared hosting
•	No login required
•	Converts Gaana playlists to YouTube
•	Audio or Video mode selection
•	Per-song retry for mismatches
•	One-click YouTube playlist creation
•	Export playlist as JSON
•	Fully self-hosted using HTML and PHP
________________________________________
How to Use
Step 1 – Copy Gaana Playlist
1.	Open your Gaana playlist in your browser
2.	Select the entire playlist table including headers
(Track, Artists, Album, Duration)
3.	Copy the selected table
________________________________________
Step 2 – Paste into Tool
1.	Open the importer page
2.	Paste the copied table into the text area
3.	Choose Audio or Video mode
4.	Click Extract Playlist
YouTube matches will load with thumbnails and links.
________________________________________
Step 3 – Fix mismatches (optional)
If any song is incorrect:
•	Click the retry button next to that song
•	The tool will load the next available YouTube match
•	Repeat until the correct version appears
________________________________________
Step 4 – Build YouTube Playlist
Click Add Entire Playlist to YouTube
A new browser tab opens and automatically creates your playlist.
________________________________________
Step 5 – Export Playlist (optional)
Click Export JSON to download the playlist as a JSON file.
________________________________________
Important
•	You must copy the entire Gaana playlist table including header rows
•	Use the Load Sample button in the tool to see the exact required format
•	This tool does not use any official YouTube or Gaana APIs
•	No accounts, cookies, or personal data are collected
________________________________________
Hosting
Upload these two files to any PHP-enabled hosting:
index.html
api.php
Then open index.html in your browser.
________________________________________
Privacy
All processing happens in your browser and on your own server.
No data is stored or logged.
________________________________________
License
MIT License.
You are free to use, modify, and redistribute this project.
