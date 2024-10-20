fetch('./announcements.json')
  .then(response => response.json())
  .then(data => {
    var box = document.getElementById("announcement_box");

    for (var x = data.length - 1; x >= 0; x--) {
      var date = data[x][0];
      var announcement = data[x][1];
      var d = document.createElement("h3");
      d.innerText = "Date:" + date;
      box.appendChild(d);

      var p = document.createElement("p");
      p.innerText = announcement;
      box.appendChild(p);

      var br = document.createElement("br");
      box.appendChild(br);

      var status = document.getElementById('add_announcement');
      var style = window.getComputedStyle(status);
      var value = style.getPropertyValue('display');
      // console.log(value);

      if (value != "none") {
        var form = document.createElement('form');
        form.setAttribute('method', 'post');
        form.setAttribute('action', './deleteAnnouncement.php');

        var input = document.createElement('input');
        input.setAttribute('type', 'submit');
        input.setAttribute('name', 'announcement_index');
        input.setAttribute('value', x);

        var label = document.createElement('label');
        label.setAttribute('for', input);
        label.innerText = "Click Button to Delete Announcement Above: ";

        box.appendChild(form);
        form.append(label);
        form.appendChild(input);

        var br = document.createElement("br");
        box.appendChild(br);
      }
    }
  });
