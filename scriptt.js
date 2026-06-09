/LOGIN PAGE

function login() {
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;
    let role = document.querySelector('input[name="role"]:checked');

    if (!user || !pass || !role) {
        alert("Please fill all fields!");
        return;
    }

    if (role.value === "admin") {
        alert("Admin login successful!");
        // window.location.href = "admin_dashboard.html";
    } else {
        alert("User login successful!");
        // window.location.href = "user_dashboard.html";
    }
}

/ADD CATEGORY

let selectedType = "";
let selectedIcon = "";

function selectType(type) {
    selectedType = type;

    document.getElementById("incomeBtn").style.background = "gray";
    document.getElementById("expenseBtn").style.background = "gray";

    if (type === "income") {
        document.getElementById("incomeBtn").style.background = "green";
    } else {
        document.getElementById("expenseBtn").style.background = "red";
    }
}

function selectIcon(el) {
    selectedIcon = el.innerText;

    document.querySelectorAll(".icons span").forEach(icon => {
        icon.style.background = "";
    });

    el.style.background = "#4aa3df";
}

function saveCategory() {
    let name = document.getElementById("name").value;

    if (!selectedType || !name || !selectedIcon) {
        alert("Please complete all fields!");
        return;
    }

    alert("Category Saved!");
    window.location.href = "categories.html";
}

function goBack() {
    window.location.href = "categories.html";
}

window.location.href = "add_category.html";

