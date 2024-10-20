fetch('./problemList.json')
  .then(response => response.json())
  .then(data => {
    for (var x = 0; x < data.length; x++) {
      var file = data[x]

      var l = document.createElement("a");
      l.innerText = file;
      l.href = "./problems/" + file;
      l.download = file;
      document.body.appendChild(l);

      var br = document.createElement("br");
      document.body.appendChild(br);

      var status = document.getElementById('upload_file');
      var style = window.getComputedStyle(status);
      var value = style.getPropertyValue('display');

      if (value != "none") {
        var form = document.createElement('form');
        form.setAttribute('method', 'post');
        form.setAttribute('action', './deleteFile.php');

        var input = document.createElement('input');
        input.setAttribute('type', 'submit');
        input.setAttribute('name', 'file');
        input.setAttribute('value', file);

        var label = document.createElement('label');
        label.setAttribute('for', input);
        label.innerText = "Click Button to Delete File Above: ";

        document.body.appendChild(form);
        form.append(label);
        form.appendChild(input);

        var br = document.createElement("br");
        document.body.appendChild(br);
      }
    }
  });
