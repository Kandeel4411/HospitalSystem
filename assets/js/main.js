// simple alert for various forms
function emptyAlert(form) {
  let div = document.createElement("div");
  div.className = "alert  alert-danger";
  div.textContent = "All data must be filled";

  let register = document.querySelector(`#${form}`);
  register.appendChild(div);
  setTimeout(function() {
    div.style.visibility = "hidden";
  }, 10000);
}

// Creates a div tag with success message in register form
function successAlert() {
  let div = document.createElement("div");
  div.className = "alert alert-primary";
  div.textContent = "Patient registered successfully";

  let register = document.querySelector("#register");
  register.appendChild(div);
  setTimeout(function() {
    div.style.visibility = "hidden";
  }, 10000);
}

// Creates a styled table element based on given object
function displayTable(obj) {
  let table = document.createElement("table");
  table.className = "table table-stripped";

  let data = [
    "Name",
    "Date-Of-Entry",
    "Medical-History",
    "Physician",
    "Last-Vist"
  ];

  let tr = document.createElement("tr");

  for (header of data) {
    let td = document.createElement("td");
    td.textContent = header;
    tr.appendChild(td);
  }

  table.appendChild(tr);

  obj.forEach(patient => {
    let tr = document.createElement("tr");

    for (cell of data) {
      let td = document.createElement("td");
      td.textContent = patient[cell];
      tr.appendChild(td);
    }
    table.appendChild(tr);
  });

  let parent = document.querySelector("#table-result");
  parent.appendChild(table);
}

function displayReport(obj) {
  let report = document.querySelector("#table-result");

  let data = [
    "Name",
    "Date-Of-Entry",
    "Medical-History",
    "Physician",
    "Last-Vist"
  ];

  obj.forEach(patient => {
    let div = document.createElement("div");
    div.className = "container";
    div.style.cssText = "border: 4px double lightgrey;border-radius: 10px;";

    for (cell of data) {
      let p = document.createElement("p");
      p.innerHTML = `<b>${cell}:</b>  <i>${patient[cell]}</i>`;
      div.appendChild(p);
    }
    report.appendChild(div);
  });
}
