<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>ExpenseBuddy | Admin Dashboard</title>
  <!-- Font Awesome 6 (free icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Google Fonts: Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: #ecf0f5;
      height: 100vh;
      display: flex;
      overflow: hidden;
    }

    /* ========= SIDEBAR ========= */
    .sidebar {
      width: 280px;
      background: linear-gradient(180deg, #102b1f 0%, #1a3a2a 100%);
      color: white;
      display: flex;
      flex-direction: column;
      box-shadow: 4px 0 20px rgba(0, 0, 0, 0.06);
      transition: all 0.2s;
      overflow-y: auto;
      z-index: 10;
    }

    .logo-area {
      padding: 2rem 1.8rem;
      border-bottom: 1px solid rgba(255,255,255,0.12);
      margin-bottom: 1.5rem;
    }

    .logo-area h1 {
      font-size: 1.6rem;
      font-weight: 700;
      letter-spacing: -0.5px;
      display: flex;
      align-items: center;
      gap: 0.6rem;
    }

    .logo-area h1 i {
      font-size: 1.8rem;
      color: #86efac;
    }

    .nav-menu {
      flex: 1;
      padding: 0 1rem;
    }

    .nav-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 0.85rem 1.2rem;
      margin-bottom: 0.5rem;
      border-radius: 1.2rem;
      color: #e2f0e6;
      font-weight: 500;
      cursor: pointer;
      transition: 0.2s;
    }

    .nav-item i {
      width: 1.8rem;
      font-size: 1.2rem;
    }

    .nav-item.active {
      background: #2b5c44;
      color: white;
      box-shadow: 0 6px 12px rgba(0,0,0,0.1);
    }

    .nav-item:hover:not(.active) {
      background: #2a4d3a;
      color: white;
    }

    .logout-item {
      margin-top: auto;
      margin-bottom: 2rem;
      border-top: 1px solid rgba(255,255,255,0.1);
      padding-top: 1rem;
    }

    /* ========= MAIN CONTENT ========= */
    .main-content {
      flex: 1;
      overflow-y: auto;
      padding: 1.8rem 2rem;
    }

    /* section containers */
    .section {
      display: none;
      animation: fadeIn 0.25s ease;
    }

    .section.active-section {
      display: block;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(6px);}
      to { opacity: 1; transform: translateY(0);}
    }

    /* card styles (same as previous pages) */
    .card {
      background: white;
      border-radius: 1.5rem;
      padding: 1.5rem;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.03), 0 2px 4px rgba(0,0,0,0.02);
      border: 1px solid #eef2fc;
      transition: all 0.2s;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .stat-card {
      background: white;
      border-radius: 1.5rem;
      padding: 1.4rem 1.2rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.03);
      border-left: 5px solid #2b5c44;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .stat-info h4 {
      font-size: 0.85rem;
      font-weight: 500;
      color: #5b6e8c;
      margin-bottom: 0.4rem;
    }

    .stat-number {
      font-size: 2rem;
      font-weight: 800;
      color: #1f2e45;
    }

    .stat-icon {
      font-size: 2.5rem;
      color: #2b5c44;
      opacity: 0.7;
    }

    .two-columns {
      display: flex;
      gap: 1.8rem;
      flex-wrap: wrap;
    }

    .recent-users {
      flex: 2;
      min-width: 260px;
    }

    .insights {
      flex: 1.2;
      min-width: 240px;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .insight-card {
      background: white;
      border-radius: 1.5rem;
      padding: 1.2rem;
    }

    .insight-title {
      font-weight: 700;
      margin-bottom: 1rem;
      color: #1f3b2c;
      border-left: 3px solid #2b5c44;
      padding-left: 0.7rem;
    }

    .top-cat-item, .highest-item {
      display: flex;
      justify-content: space-between;
      margin: 0.8rem 0;
      font-size: 0.95rem;
    }

    .badge {
      background: #eef3fc;
      padding: 0.2rem 0.6rem;
      border-radius: 2rem;
      font-weight: 500;
    }

    /* table styles */
    .data-table {
      width: 100%;
      border-collapse: collapse;
    }

    .data-table th, .data-table td {
      text-align: left;
      padding: 0.9rem 0.5rem;
      border-bottom: 1px solid #eef2fa;
      font-size: 0.9rem;
    }

    .data-table th {
      font-weight: 700;
      color: #2c4b3a;
    }

    .search-box {
      display: flex;
      gap: 0.8rem;
      margin-bottom: 1.8rem;
      align-items: center;
      flex-wrap: wrap;
    }

    .search-box input {
      flex: 1;
      padding: 0.7rem 1rem;
      border-radius: 2rem;
      border: 1px solid #e2edf7;
      font-family: 'Inter', sans-serif;
    }

    .search-box button {
      background: #2b5c44;
      border: none;
      color: white;
      padding: 0.7rem 1.4rem;
      border-radius: 2rem;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
    }

    .search-box button:hover {
      background: #1f4532;
    }

    .summary-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1.2rem;
      margin-bottom: 2rem;
    }

    hr {
      margin: 1rem 0;
      border: none;
      height: 1px;
      background: #e4ecf5;
    }

    @media (max-width: 780px) {
      .sidebar { width: 80px; }
      .logo-area h1 span, .nav-item span { display: none; }
      .nav-item i { margin: 0 auto; width: auto; }
      .nav-item { justify-content: center; }
      .main-content { padding: 1rem; }
    }
  </style>
</head>
<body>
<div class="sidebar">
  <div class="logo-area">
    <h1><i class="fas fa-chart-line"></i> <span>ExpenseBuddy</span></h1>
  </div>
  <div class="nav-menu">
    <div class="nav-item active" data-section="dashboard">
      <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
    </div>
    <div class="nav-item" data-section="users">
      <i class="fas fa-users"></i> <span>Users</span>
    </div>
    <div class="nav-item" data-section="reports">
      <i class="fas fa-chart-pie"></i> <span>Reports</span>
    </div>
    <div class="nav-item logout-item" id="logoutBtn">
      <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
    </div>
  </div>
</div>

<div class="main-content">
  <!-- DASHBOARD SECTION -->
  <div id="dashboardSection" class="section active-section">
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-info">
          <h4><i class="fas fa-user-friends"></i> Total Users</h4>
          <div class="stat-number" id="totalUsersDashboard">200</div>
        </div>
        <div class="stat-icon"><i class="fas fa-users"></i></div>
      </div>
      <div class="stat-card">
        <div class="stat-info">
          <h4><i class="fas fa-exchange-alt"></i> Total Transactions</h4>
          <div class="stat-number" id="totalTransactionsDashboard">1,284</div>
        </div>
        <div class="stat-icon"><i class="fas fa-receipt"></i></div>
      </div>
    </div>

    <div class="two-columns">
      <!-- Recent Users Table -->
      <div class="card recent-users">
        <h3 style="margin-bottom: 1rem; font-weight: 700;"><i class="fas fa-clock"></i> Recent Users</h3>
        <table class="data-table" id="recentUsersTable">
          <thead>
            <tr><th>ID</th><th>Name</th><th>Email</th><th>Date</th></tr>
          </thead>
          <tbody id="recentUsersBody"></tbody>
        </table>
      </div>

      <!-- Right side insights: Top Categories & Highest Expense -->
      <div class="insights">
        <div class="insight-card">
          <div class="insight-title"><i class="fas fa-chart-simple"></i> Top Categories</div>
          <div id="topCategoriesList">
            <div class="top-cat-item"><span>Food</span> <span class="badge">RM12,900</span></div>
            <div class="top-cat-item"><span>Vehicles</span> <span class="badge">RM11,000</span></div>
            <div class="top-cat-item"><span>Shopping</span> <span class="badge">RM9,000</span></div>
          </div>
        </div>
        <div class="insight-card">
          <div class="insight-title"><i class="fas fa-fire"></i> Highest Expense</div>
          <div id="highestExpenseDisplay" style="font-size: 1.5rem; font-weight: 800; color:#b91c1c;">RM420</div>
          <div style="font-size: 0.75rem; color:#5b6e8c;">recorded this month</div>
        </div>
      </div>
    </div>
  </div>

  <!-- USERS SECTION -->
  <div id="usersSection" class="section">
    <div class="card">
      <h2 style="margin-bottom: 1rem;"><i class="fas fa-users"></i> Users Management</h2>
      <div class="search-box">
        <input type="text" id="searchUserId" placeholder="Search for User ID: (e.g., 123456)" autocomplete="off">
        <button id="searchUserBtn"><i class="fas fa-search"></i> SEARCH</button>
        <button id="resetUserBtn" style="background:#eef2fa; color:#2c3e66;"><i class="fas fa-undo"></i> Reset</button>
      </div>
      <div style="overflow-x: auto;">
        <table class="data-table" id="usersFullTable">
          <thead>
            <tr><th>ID</th><th>Name</th><th>Email</th><th>Date</th></tr>
          </thead>
          <tbody id="usersTableBody"></tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- REPORTS SECTION -->
  <div id="reportsSection" class="section">
    <div class="card">
      <h2 style="margin-bottom: 1rem;"><i class="fas fa-chart-line"></i> Reports & Analytics</h2>
      <div style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1.5rem;">
        <span class="badge" style="background:#e9f5ef;"><i class="fas fa-calendar-alt"></i> MONTHLY SUMMARY</span>
      </div>
      <div class="summary-grid">
        <div class="insight-card" style="background:#fafdff;">
          <h4 style="margin-bottom: 0.8rem;">📊 System Summary</h4>
          <p><strong>Current Amount of Users:</strong> <span id="reportTotalUsers">200</span></p>
          <p><strong>Current Active Users:</strong> <span id="activeUsers">123</span></p>
        </div>
        <div class="insight-card" style="background:#fafdff;">
          <h4 style="margin-bottom: 0.8rem;">🏆 Top Categories (total spent)</h4>
          <div id="reportTopCategories">
            <div>🍔 Food: RM12,900</div>
            <div>🚗 Vehicles: RM11,000</div>
            <div>🛍️ Shopping: RM9,000</div>
          </div>
        </div>
      </div>
      <div class="summary-grid">
        <div class="insight-card">
          <h4>📉 Average Expense</h4>
          <p style="font-size: 1.7rem; font-weight: 700;">RM 420.67</p>
          <small>per user (monthly)</small>
        </div>
        <div class="insight-card">
          <h4>📈 Average Income</h4>
          <p style="font-size: 1.7rem; font-weight: 700;">RM 767.42</p>
          <small>per user (monthly)</small>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // ==================== MOCK DATABASE ====================
  // Users array matching screenshot (plus extra to show total 200 concept, but we display 6 with total count static)
  const allUsers = [
    { id: "123456", name: "Walter", email: "example123@gmail.com", date: "12/4/2026" },
    { id: "420676", name: "Jessie", email: "fxiing123@gmail.com", date: "12/4/2026" },
    { id: "676869", name: "Jane", email: "janejullet67@gmail.com", date: "12/4/2026" },
    { id: "987654", name: "Mark", email: "invincible17@gmail.com", date: "12/4/2026" },
    { id: "120426", name: "Cecil", email: "seasalt31@gmail.com", date: "12/4/2026" },
    { id: "130925", name: "Abu", email: "abuuu89@gmail.com", date: "12/4/2026" }
  ];

  // For dashboard recent users (first 5)
  function getRecentUsers() {
    return allUsers.slice(0, 5);
  }

  // Global totals for display (matches screenshot example)
  const TOTAL_USERS_COUNT = 200;     // as per report & dashboard style
  const TOTAL_TRANSACTIONS = 1284;
  const ACTIVE_USERS = 123;

  // Helper: render recent users table (dashboard)
  function renderRecentUsers() {
    const tbody = document.getElementById("recentUsersBody");
    if (!tbody) return;
    const recent = getRecentUsers();
    tbody.innerHTML = recent.map(user => `
      <tr>
        <td>${user.id}</td>
        <td>${user.name}</td>
        <td>${user.email}</td>
        <td>${user.date}</td>
      </tr>
    `).join('');
  }

  // render full users table (Users page)
  function renderFullUsersTable(filteredUsers = null) {
    const tbody = document.getElementById("usersTableBody");
    if (!tbody) return;
    const data = filteredUsers !== null ? filteredUsers : allUsers;
    if (data.length === 0) {
      tbody.innerHTML = '<tr><td colspan="4" style="text-align:center;">No users found.</td></tr>';
      return;
    }
    tbody.innerHTML = data.map(user => `
      <tr>
        <td>${user.id}</td>
        <td>${user.name}</td>
        <td>${user.email}</td>
        <td>${user.date}</td>
      </tr>
    `).join('');
  }

  // Search user by ID (exact match) from allUsers
  function searchUserById(searchId) {
    if (!searchId.trim()) return allUsers;
    const trimmed = searchId.trim();
    return allUsers.filter(user => user.id === trimmed);
  }

  // Setup users page interactions
  function setupUserSearch() {
    const searchBtn = document.getElementById("searchUserBtn");
    const resetBtn = document.getElementById("resetUserBtn");
    const searchInput = document.getElementById("searchUserId");

    if (searchBtn) {
      searchBtn.addEventListener("click", () => {
        const query = searchInput.value;
        const result = searchUserById(query);
        renderFullUsersTable(result);
        if (result.length === 0 && query !== "") {
          // optional feedback
          const feedbackDiv = document.getElementById("usersSection");
          const oldMsg = document.querySelector(".user-search-feedback");
          if (oldMsg) oldMsg.remove();
          const msg = document.createElement("div");
          msg.className = "user-search-feedback";
          msg.style.cssText = "margin-top:12px; color:#b91c1c; font-size:0.8rem;";
          msg.innerText = `⚠️ No user found with ID: ${query}`;
          document.querySelector("#usersSection .card").appendChild(msg);
          setTimeout(() => msg.remove(), 2000);
        }
      });
    }
    if (resetBtn) {
      resetBtn.addEventListener("click", () => {
        searchInput.value = "";
        renderFullUsersTable(allUsers);
      });
    }
    // allow Enter key search
    if (searchInput) {
      searchInput.addEventListener("keypress", (e) => {
        if (e.key === "Enter") {
          e.preventDefault();
          searchBtn.click();
        }
      });
    }
  }

  // Set totals on dashboard & reports
  function updateStaticTotals() {
    document.getElementById("totalUsersDashboard").innerText = TOTAL_USERS_COUNT;
    document.getElementById("totalTransactionsDashboard").innerText = TOTAL_TRANSACTIONS.toLocaleString();
    const reportTotalSpan = document.getElementById("reportTotalUsers");
    const activeSpan = document.getElementById("activeUsers");
    if (reportTotalSpan) reportTotalSpan.innerText = TOTAL_USERS_COUNT;
    if (activeSpan) activeSpan.innerText = ACTIVE_USERS;
  }

  // Highest expense is static from insights (RM420)
  // Top categories already in HTML but we can keep consistent with reports page.
  
  // ========== NAVIGATION / TAB SWITCHING ==========
  const sections = {
    dashboard: document.getElementById("dashboardSection"),
    users: document.getElementById("usersSection"),
    reports: document.getElementById("reportsSection")
  };

  const navItems = document.querySelectorAll(".nav-item[data-section]");
  function activateSection(sectionId) {
    // hide all sections
    Object.values(sections).forEach(section => {
      if (section) section.classList.remove("active-section");
    });
    const activeSection = sections[sectionId];
    if (activeSection) activeSection.classList.add("active-section");
    
    // update active nav style
    navItems.forEach(item => {
      if (item.getAttribute("data-section") === sectionId) {
        item.classList.add("active");
      } else {
        item.classList.remove("active");
      }
    });
    
    // Optional: if users section loaded, ensure full table rendered correctly
    if (sectionId === "users") {
      const searchInput = document.getElementById("searchUserId");
      if (searchInput && searchInput.value === "") {
        renderFullUsersTable(allUsers);
      } else if (searchInput && searchInput.value !== "") {
        // keep current filter state but we can reapply search if needed
        const query = searchInput.value;
        if (query) renderFullUsersTable(searchUserById(query));
        else renderFullUsersTable(allUsers);
      } else {
        renderFullUsersTable(allUsers);
      }
    }
    if (sectionId === "dashboard") {
      renderRecentUsers();
    }
  }

  // attach event listeners to nav items
  navItems.forEach(item => {
    item.addEventListener("click", () => {
      const section = item.getAttribute("data-section");
      if (section) activateSection(section);
    });
  });

  // Logout simulation
  const logoutBtn = document.getElementById("logoutBtn");
  if (logoutBtn) {
    logoutBtn.addEventListener("click", () => {
      alert("You have been logged out (demo). In a real app, redirect to login page.");
      // optional: reset view, but just simulate
    });
  }

  // Additional: ensure dashboard recent users loads correctly
  function initDashboardData() {
    renderRecentUsers();
    updateStaticTotals();
    // Also inject any dynamic numbers for highest expense consistency
    const highestDiv = document.getElementById("highestExpenseDisplay");
    if (highestDiv) highestDiv.innerText = "RM420";
    // Top categories (already shown)
  }

  // Initialize full users table on page load and after any reset
  function initUsersTable() {
    renderFullUsersTable(allUsers);
  }

  // For reports, dynamic consistency (already static but we can reflect same top categories)
  function syncReportsCategories() {
    // already static in HTML, no action needed
  }

  // Helper to format and set default active section = dashboard
  function startApp() {
    initDashboardData();
    initUsersTable();
    setupUserSearch();
    syncReportsCategories();
    // ensure first view is dashboard
    activateSection("dashboard");
  }

  startApp();
  
  // Extra: ensure that when switching to reports, no action needed but it's fine.
  // Also keep two decimal for average expense/income (already static)
  // For total transactions we used locale string.
</script>
</body>
</html>