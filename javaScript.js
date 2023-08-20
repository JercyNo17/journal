function saveJournalEntry() {
    // Get the journal entry data from the form.
    var title = document.getElementById("title").value;
    var content = document.getElementById("content").value;
  
    // Send the data to the server using AJAX or fetch API.
    var request = new XMLHttpRequest();
    request.open("POST", "/save-journal-entry.php");
    request.setRequestHeader("Content-Type", "application/json");
    request.send(JSON.stringify({
      title: title,
      content: content
    }));
  
    // Clear the form.
    document.getElementById("title").value = "";
    document.getElementById("content").value = "";
  }