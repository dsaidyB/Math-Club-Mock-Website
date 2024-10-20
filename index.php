<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Woodlands Math Club</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <nav>
      <a id="logo" href="./index.php"><img id="logo_img" src="woods_math_logo.png"></a>

      <span class="menu_items">
        <a class="pages_link" href="./Weekly_Problems/problems.html">
        Weekly Problems</a>
      </span>

      <span class="menu_items">
        <a class="pages_link" href="./Club_Announcements/announcements.html">
        Club Annoucements</a>
      </span>

      <span class="menu_items">
        <a class="pages_link" href="./Contests/contests.html">
        Contests</a>
      </span>

      <span class="menu_items">
        <a class="pages_link" href="./Admin/admin.html">
        Admin</a>
      </span>

      <span class="menu_items">
        <a class="pages_link" href="./Attendance/attendance.html">
        <span id = "attendance_link">Attendance</span> </a>
      </span>

      <script>
        let status=null;
          fetch('../Admin/status.json')
          .then(response => response.json())
          .then(data => {
            if (data['status']!="loggedIn"){
              document.getElementById("attendance_link").style.display = "none";
            }
          });
      </script>

      <div>
        <button onclick="proceed()">Log Out</button>
        <script>
        function proceed () {
          var form = document.createElement('form');
          form.setAttribute('method', 'post');
          form.setAttribute('action', './Admin/logout.php');          
          form.style.display = 'hidden'; 
          document.body.appendChild(form)

          var input = document.createElement("input");input.setAttribute("name", "unLog");
          input.setAttribute("type", "hidden");
          form.appendChild(input);
          form.submit();
        }
        </script>
        
      </div>

    </nav>

    <div id="info">
      <h1>Welcome!</h1>
      <h1>Meetings on Thursday 3-5 pm</h1>
    </div>

  </body>
</html>