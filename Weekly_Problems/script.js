fetch('../Admin/status.json')
  .then(response => response.json())
  .then(data => {
    if (data['status']!="loggedIn"){
      document.getElementById("upload_file").style.display = "none";
    }
  });