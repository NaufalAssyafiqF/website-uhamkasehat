// Array to store items
let items = [];
let idCounter = 1;

// Add item function
function addItem() {
  let name = document.getElementById("name-input").value;
  let email = document.getElementById("email-input").value;
  let item = { id: idCounter, name: name, email: email };
  items.push(item);
  idCounter++;
  updateTable();
  $("#add-modal").modal("hide");
}

// Update item function
function updateItem(id) {
  let name = document.getElementById("name-input-edit").value;
  let email = document.getElementById("email-input-edit").value;
  let item = { id: id, name: name, email: email };
  let index = items.findIndex((x) => x.id === id);
  items[index] = item;
  updateTable();
  $("#edit-modal").modal("hide");
}

// Delete item function
function deleteItem(id) {
  items = items.filter((x) => x.id !== id);
  updateTable();
}

// Update table function
function updateTable() {
  let tableBody = document.getElementById("table-body");
  tableBody.innerHTML = "";
  items.forEach((item) => {
    let row = document.createElement("tr");
    let idCell = document.createElement("td");
    idCell.innerHTML = item.id;
    let nameCell = document.createElement("td");
    nameCell.innerHTML = item.name;
    let emailCell = document.createElement("td");
    emailCell.innerHTML = item.email;
    let actionsCell = document.createElement("td");
    let editButton = document.createElement("button");
    editButton.classList.add("btn", "btn-warning");
    editButton.innerHTML = "Edit";
    editButton.onclick = () => {
      openEditModal(item.id);
    };
    let deleteButton = document.createElement("button");
    deleteButton.classList.add("btn", "btn-danger");
    deleteButton.innerHTML = "Delete";
    deleteButton.onclick = () => {
      deleteItem(item.id);
    };
    actionsCell.appendChild(editButton);
    actionsCell.appendChild(deleteButton);
    row.appendChild(idCell);
    row.appendChild(nameCell);
    row.appendChild(emailCell);
    row.appendChild(actionsCell);
    tableBody.appendChild(row);
  });
}

// Open edit modal function
function openEditModal(id) {
  let item = items.find((x) => x.id === id);
  document.getElementById("name-input-edit").value = item.name;
  document.getElementById("email-input-edit").value = item.email;
  document.getElementById("edit-button").onclick = () => {
    updateItem(item.id);
  };
}