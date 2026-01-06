**Gaana → YouTube Playlist Importer**

A simple, privacy-friendly web tool that converts Gaana playlists into YouTube playlists — without using any official APIs, logins, quotas, or tracking.

Just copy your Gaana playlist table, paste it into the tool, and instantly get a playable YouTube playlist.

**Features**

• No Google API / no quotas
• Works on shared hosting
• No login required
• Converts entire Gaana playlists to YouTube
• Audio / Video quality selector
• Per-song retry for mismatches
• One-click YouTube playlist creation
• Export playlist as JSON
• Fully self-hosted (HTML + PHP)

**How To Use**

**Step 1 – Copy Gaana Playlist**

1. Open your Gaana playlist in your browser
2. Select the entire playlist table (including headers: Track, Artists, Album, Duration)
3. Copy it (Ctrl + C)

**Step 2 – Paste into Tool**

1. Open the importer page
2. Paste the copied table into the text box
3. Choose Audio or Video mode
4. Click **Extract Playlist**
5. YouTube matches will load with previews.

**Step 3 – Fix mismatches (Optional)**

If any song looks incorrect:

• Click the ⟳ icon to cycle through alternate YouTube results
• Continue until you find the correct version

**Step 4 – Build YouTube Playlist**

Click **Add Entire Playlist to YouTube**
A new tab opens and automatically builds your playlist.

**Step 5 – Export (Optional)**

Click **Export JSON** to download your playlist locally.

**⚠ Important Notes**

• You must copy the entire Gaana playlist table including header rows
• Use the Load Sample button in the tool to see the exact required format
• This tool does not use any official YouTube or Gaana APIs
• No accounts, cookies, or tracking are used

**Hosting**

Upload both files to any PHP-enabled hosting:

```
/index.html
/api.php
```
Open index.html — that's it.

**Privacy**

All processing is done locally in your browser and via your own server.
No user data is stored or logged.

**License**

MIT License — free to use, modify, and share.
