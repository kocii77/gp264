<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Buddy - Dashboard</title>
    <style>
        /* ── RESET & BASE ── */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f0f2f5;
            color: #212529;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* ── TOP NAV BAR ── */
        .topnav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 56px;
            background-color: #212529;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px 0 0;
            z-index: 1000;
        }

        .topnav-brand {
            width: 225px;
            padding: 0 20px;
            font-size: 1.2rem;
            font-weight: bold;
            letter-spacing: 0.5px;
            color: white;
            flex-shrink: 0;
        }

        .topnav-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .topnav-right .period-select {
            padding: 6px 10px;
            border-radius: 6px;
            border: 1px solid #444;
            background: #343a40;
            color: white;
            font-size: 0.85rem;
            cursor: pointer;
        }

        .topnav-right .date-display {
            color: #adb5bd;
            font-size: 0.85rem;
        }

        .user-menu {
            position: relative;
        }

        .user-icon {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background-color: #0d6efd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            color: white;
            cursor: pointer;
            border: 2px solid transparent;
            transition: border-color 0.2s;
        }

        .user-icon:hover {
            border-color: rgba(255,255,255,0.4);
        }

        .user-dropdown {
            display: none;
            position: absolute;
            top: 44px;
            right: 0;
            background-color: white;
            border: 1px solid rgba(0,0,0,0.15);
            border-radius: 6px;
            min-width: 160px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
            z-index: 2000;
            overflow: hidden;
        }

        .user-dropdown.open {
            display: block;
        }

        .dropdown-item {
            display: block;
            padding: 10px 16px;
            font-size: 0.875rem;
            color: #212529;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.15s;
        }

        .dropdown-item:hover {
            background-color: #f0f2f5;
        }

        .dropdown-divider {
            height: 1px;
            background-color: #dee2e6;
            margin: 2px 0;
        }

        .dropdown-item.logout {
            color: #dc3545;
        }

        /* ── SIDEBAR ── */
        .sidebar {
            position: fixed;
            top: 56px;
            left: 0;
            width: 225px;
            height: calc(100vh - 56px);
            background-color: #212529;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            z-index: 999;
        }

        .sidebar-section-label {
            padding: 20px 16px 8px;
            font-size: 0.7rem;
            font-weight: bold;
            text-transform: uppercase;
            color: rgba(255,255,255,0.25);
            letter-spacing: 1px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            color: rgba(255,255,255,0.5);
            font-size: 0.9rem;
            transition: background-color 0.2s, color 0.2s;
            cursor: pointer;
        }

        .nav-item:hover {
            background-color: rgba(255,255,255,0.07);
            color: white;
        }

        .nav-item.active {
            color: white;
        }

        .nav-item .nav-icon {
            font-size: 0.85rem;
            color: rgba(255,255,255,0.25);
            width: 16px;
            text-align: center;
        }

        .nav-item.active .nav-icon,
        .nav-item:hover .nav-icon {
            color: white;
        }

        .sidebar-footer {
            margin-top: auto;
            padding: 14px 16px;
            background-color: #343a40;
            font-size: 0.78rem;
            color: rgba(255,255,255,0.5);
        }

        .sidebar-footer span {
            color: white;
            display: block;
            font-weight: 600;
        }

        /* ── MAIN CONTENT ── */
        .main {
            margin-left: 225px;
            padding-top: 56px;
        }

        .main-inner {
            padding: 24px;
        }

        /* Page title + breadcrumb */
        .page-title {
            font-size: 1.6rem;
            font-weight: 600;
            margin-top: 8px;
            margin-bottom: 4px;
        }

        .breadcrumb {
            display: flex;
            gap: 6px;
            font-size: 0.82rem;
            color: #6c757d;
            margin-bottom: 20px;
            list-style: none;
        }

        .breadcrumb li::before {
            content: "/ ";
        }

        .breadcrumb li:first-child::before {
            content: "";
        }

        /* ── SUMMARY CARDS ROW ── */
        .cards-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 24px;
        }

        .card {
            background-color: white;
            border: 1px solid rgba(0,0,0,0.1);
            border-radius: 6px;
            overflow: hidden;
        }

        .summary-card {
            flex: 1 1 22%;
            min-width: 200px;
            color: white;
        }

        .summary-card .card-body {
            padding: 16px 20px;
            font-size: 0.95rem;
        }

        .summary-card .card-footer {
            padding: 8px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(0,0,0,0.15);
            font-size: 0.8rem;
        }

        .summary-card .card-footer a {
            color: rgba(255,255,255,0.85);
        }

        .card-primary   { background-color: #0d6efd; }
        .card-success   { background-color: #198754; }
        .card-warning   { background-color: #ffc107; color: #212529 !important; }
        .card-danger    { background-color: #dc3545; }

        .card-warning .card-footer a { color: rgba(0,0,0,0.6); }
        .card-warning .card-footer   { color: rgba(0,0,0,0.5); }

        /* ── CHART CARDS ── */
        .charts-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 24px;
        }

        .chart-card {
            flex: 1 1 45%;
            min-width: 280px;
        }

        .card-header {
            padding: 12px 20px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
            background-color: rgba(0,0,0,0.02);
            font-size: 0.9rem;
            font-weight: 600;
            color: #495057;
        }

        .card-body {
            padding: 20px;
        }

        /* ── BAR CHART (Pure CSS + JS) ── */
        .bar-chart {
            display: flex;
            align-items: flex-end;
            gap: 12px;
            height: 160px;
            padding-bottom: 8px;
            border-bottom: 2px solid #dee2e6;
        }

        .bar-group {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            height: 100%;
            justify-content: flex-end;
        }

        .bar {
            width: 100%;
            background-color: #0d6efd;
            border-radius: 3px 3px 0 0;
            transition: background-color 0.2s;
            cursor: pointer;
            position: relative;
        }

        .bar:hover {
            background-color: #0a58ca;
        }

        .bar-label {
            font-size: 0.7rem;
            color: #6c757d;
            margin-top: 4px;
        }

        /* ── LINE CHART (SVG) ── */
        .line-chart-wrap svg {
            width: 100%;
            height: 160px;
        }

        /* ── RECORDS TABLE ── */
        .records-card {
            margin-bottom: 24px;
        }

        .records-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.875rem;
        }

        .records-table thead tr {
            background-color: #f8f9fa;
        }

        .records-table th,
        .records-table td {
            padding: 10px 16px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        .records-table th {
            font-weight: 600;
            color: #495057;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .records-table tr:hover {
            background-color: rgba(0,0,0,0.02);
        }

        .badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .badge-success { background-color: #d1e7dd; color: #0f5132; }
        .badge-danger  { background-color: #f8d7da; color: #842029; }

        .amount-income  { color: #198754; font-weight: 600; }
        .amount-expense { color: #dc3545; font-weight: 600; }

        /* ── ADD BUTTON ── */
        .add-btn {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 52px;
            height: 52px;
            background-color: #0d6efd;
            color: white;
            font-size: 26px;
            line-height: 52px;
            text-align: center;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(13,110,253,0.4);
            transition: background-color 0.2s, transform 0.1s;
        }

        .add-btn:hover {
            background-color: #0a58ca;
            transform: scale(1.05);
        }

        /* ── FOOTER ── */
        .page-footer {
            padding: 16px 24px;
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
            color: #6c757d;
        }

        .page-footer a {
            color: #0d6efd;
        }

        /* ── RESPONSIVE (media query from Lecture 4) ── */
        @media only screen and (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                top: 0;
                flex-direction: row;
                flex-wrap: wrap;
            }

            .main {
                margin-left: 0;
            }

            .sidebar-footer {
                display: none;
            }

            .summary-card {
                flex: 1 1 45%;
            }

            .chart-card {
                flex: 1 1 100%;
            }

            .topnav-brand {
                width: auto;
            }
        }

        @media only screen and (max-width: 480px) {
            .summary-card {
                flex: 1 1 100%;
            }

            .topnav-right .date-display {
                display: none;
            }
        }
    </style>
</head>
<body>

<!-- ── TOP NAV ── -->
<nav class="topnav">
    <div class="topnav-brand"></div>
    <div class="topnav-right">
        <select class="period-select" id="periodSelect" onchange="updatePeriod()">
            <option>MONTHLY</option>
            <option>YEARLY</option>
        </select>
        <span class="date-display" id="dateDisplay"></span>
        <div class="user-menu">
            <div class="user-icon" id="userIconBtn" onclick="toggleDropdown()">👤</div>
            <div class="user-dropdown" id="userDropdown">
                <div style="padding:10px 16px 6px;font-size:0.8rem;color:#6c757d;">My Account</div>
                <div class="dropdown-divider"></div>
                <a href="settings.html" class="dropdown-item">⚙️ Settings</a>
                <a href="activity.html" class="dropdown-item">📋 Activity Log</a>
                <div class="dropdown-divider"></div>
                <a href="login.html" class="dropdown-item logout">🚪 Logout</a>
            </div>
        </div>
    </div>
</nav>

<!-- ── SIDEBAR ── -->
<div class="sidebar">
    <div class="sidebar-section-label">Core</div>

    <a href="dashboard.php" class="nav-item active">
        <span class="nav-icon">🏠</span> Dashboard
    </a>

    <div class="sidebar-section-label">Finance</div>

    <a href="analysis.html" class="nav-item">
        <span class="nav-icon">📊</span> Analysis
    </a>

    <a href="budget.html" class="nav-item">
        <span class="nav-icon">🎯</span> Budget
    </a>

    <a href="category.html" class="nav-item">
        <span class="nav-icon">🏷️</span> Categories
    </a>

    <div class="sidebar-section-label">Account</div>

    <a href="settings.html" class="nav-item">
        <span class="nav-icon">⚙️</span> Settings
    </a>

    <div class="sidebar-footer">
        <div>Logged in as:</div>
        <span>My Account</span>
    </div>
</div>

<!-- ── MAIN CONTENT ── -->
<div class="main">
    <div class="main-inner">

        <!-- Page heading -->
        <h1 class="page-title">Dashboard</h1>
        <ul class="breadcrumb">
            <li>Dashboard</li>
        </ul>

        <!-- Summary cards -->
        <div class="cards-row">
            <div class="card summary-card card-success">
                <div class="card-body">
                    <div style="font-size:0.8rem;opacity:0.85;">Total Income</div>
                    <div style="font-size:1.4rem;font-weight:700;margin-top:4px;" id="totalIncome">RM 0.00</div>
                </div>
                <div class="card-footer">
                    <a href="analysis.html">View Details</a>
                    <span>›</span>
                </div>
            </div>

            <div class="card summary-card card-danger">
                <div class="card-body">
                    <div style="font-size:0.8rem;opacity:0.85;">Total Expense</div>
                    <div style="font-size:1.4rem;font-weight:700;margin-top:4px;" id="totalExpense">RM 0.00</div>
                </div>
                <div class="card-footer">
                    <a href="analysis.html">View Details</a>
                    <span>›</span>
                </div>
            </div>

            <div class="card summary-card card-primary">
                <div class="card-body">
                    <div style="font-size:0.8rem;opacity:0.85;">Balance</div>
                    <div style="font-size:1.4rem;font-weight:700;margin-top:4px;" id="balance">RM 0.00</div>
                </div>
                <div class="card-footer">
                    <a href="budget.html">View Budget</a>
                    <span>›</span>
                </div>
            </div>

            <div class="card summary-card card-warning">
                <div class="card-body">
                    <div style="font-size:0.8rem;opacity:0.7;">Transactions</div>
                    <div style="font-size:1.4rem;font-weight:700;margin-top:4px;" id="txCount">0</div>
                </div>
                <div class="card-footer">
                    <a href="#">This Month</a>
                    <span>›</span>
                </div>
            </div>
        </div>

        <!-- Charts row -->
        <div class="charts-row">
            <!-- Bar chart - monthly spending -->
            <div class="card chart-card">
                <div class="card-header">📊 Monthly Spending (RM)</div>
                <div class="card-body">
                    <div class="bar-chart" id="barChart"></div>
                </div>
            </div>

            <!-- Line chart - income vs expense trend -->
            <div class="card chart-card">
                <div class="card-header">📈 Income vs Expense Trend</div>
                <div class="card-body">
                    <div class="line-chart-wrap">
                        <svg id="lineChart" viewBox="0 0 400 150" xmlns="http://www.w3.org/2000/svg">
                            <!-- drawn by JS -->
                        </svg>
                    </div>
                    <div style="display:flex;gap:20px;margin-top:10px;font-size:0.78rem;color:#6c757d;">
                        <span>🟦 Income</span>
                        <span>🟥 Expense</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Records table -->
        <div class="card records-card">
            <div class="card-header">📋 Recent Records — <span id="recordDateLabel"></span></div>
            <div class="card-body" style="padding:0;">
                <table class="records-table">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody id="recordsBody">
                        <!-- filled by JS -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="page-footer">
        <span>© 2025 Expense Buddy</span>
        <div>
            <a href="#">Privacy Policy</a> &middot;
            <a href="#">Terms</a>
        </div>
    </div>
</div>

<!-- Add Transaction Button -->
<a href="add-transaction.html" class="add-btn">+</a>


<!-- ── JAVASCRIPT ── -->
<script>
    // ── 1. Display current date ──
    function getFormattedDate() {
        var today = new Date();
        var day   = today.getDate();
        var month = today.getMonth() + 1;
        var year  = today.getFullYear();
        if (day < 10)   { day   = "0" + day; }
        if (month < 10) { month = "0" + month; }
        return day + "/" + month + "/" + year;
    }

    document.getElementById("dateDisplay").innerHTML = getFormattedDate();
    document.getElementById("recordDateLabel").innerHTML = getFormattedDate();

    // ── 2. User dropdown toggle ──
    function toggleDropdown() {
        var dropdown = document.getElementById("userDropdown");
        if (dropdown.className === "user-dropdown") {
            dropdown.className = "user-dropdown open";
        } else {
            dropdown.className = "user-dropdown";
        }
    }

    // Close dropdown if user clicks anywhere else on the page
    document.onclick = function(e) {
        var menu = document.getElementById("userIconBtn");
        var dropdown = document.getElementById("userDropdown");
        if (e.target !== menu) {
            dropdown.className = "user-dropdown";
        }
    };

    // ── 3. Data — MONTHLY vs YEARLY ──
    var monthlyTransactions = [
        { category: "🍿 Food",       desc: "Lunch at cafeteria",  date: "01/06/2025", type: "expense", amount: 12.50 },
        { category: "👛 Salary",     desc: "Monthly salary",      date: "01/06/2025", type: "income",  amount: 2500.00 },
        { category: "🚌 Transport",  desc: "Bus pass",            date: "02/06/2025", type: "expense", amount: 30.00 },
        { category: "📚 Education",  desc: "Textbook",            date: "02/06/2025", type: "expense", amount: 55.00 },
        { category: "💼 Freelance",  desc: "Web project",         date: "03/06/2025", type: "income",  amount: 400.00 },
        { category: "🛒 Groceries",  desc: "Weekly groceries",    date: "03/06/2025", type: "expense", amount: 85.00 },
        { category: "🎮 Recreation", desc: "Cinema ticket",       date: "04/06/2025", type: "expense", amount: 18.00 }
    ];

    var yearlyTransactions = [
        { category: "👛 Salary",     desc: "Jan–Dec salary",      date: "2025", type: "income",  amount: 30000.00 },
        { category: "💼 Freelance",  desc: "Freelance projects",  date: "2025", type: "income",  amount: 4800.00 },
        { category: "🍿 Food",       desc: "Food & dining",       date: "2025", type: "expense", amount: 3600.00 },
        { category: "🚌 Transport",  desc: "Transport yearly",    date: "2025", type: "expense", amount: 1440.00 },
        { category: "📚 Education",  desc: "Books & courses",     date: "2025", type: "expense", amount: 960.00 },
        { category: "🛒 Groceries",  desc: "Groceries yearly",    date: "2025", type: "expense", amount: 3120.00 },
        { category: "🏠 House",       desc: "House rent",          date: "2025", type: "expense", amount: 7200.00 },
        { category: "🎮 Recreation", desc: "Entertainment",       date: "2025", type: "expense", amount: 600.00 }
    ];

    var monthlyBarData = [
        { label: "Jan", value: 420 },
        { label: "Feb", value: 310 },
        { label: "Mar", value: 580 },
        { label: "Apr", value: 390 },
        { label: "May", value: 470 },
        { label: "Jun", value: 200 }
    ];

    var yearlyBarData = [
        { label: "2020", value: 14000 },
        { label: "2021", value: 16800 },
        { label: "2022", value: 15200 },
        { label: "2023", value: 18900 },
        { label: "2024", value: 17400 },
        { label: "2025", value: 16920 }
    ];

    var monthlyIncomeData  = [1800, 2200, 2000, 2500, 2300, 2900];
    var monthlyExpenseData = [ 900, 1100,  980, 1200, 1050,  200];
    var monthlyLabels      = ["Jan","Feb","Mar","Apr","May","Jun"];

    var yearlyIncomeData  = [28000, 30000, 29500, 33000, 31000, 34800];
    var yearlyExpenseData = [14000, 16800, 15200, 18900, 17400, 16920];
    var yearlyLabels      = ["2020","2021","2022","2023","2024","2025"];

    // ── 4. Calculate totals from a transaction array ──
    function calculateTotal(txList, type) {
        var total = 0;
        var i;
        for (i = 0; i < txList.length; i++) {
            if (txList[i].type === type) {
                total = total + txList[i].amount;
            }
        }
        return total;
    }

    function formatRM(amount) {
        return "RM " + amount.toFixed(2);
    }

    // ── 5. Update summary cards ──
    function updateCards(txList) {
        var income  = calculateTotal(txList, "income");
        var expense = calculateTotal(txList, "expense");
        var bal     = income - expense;

        document.getElementById("totalIncome").innerHTML  = formatRM(income);
        document.getElementById("totalExpense").innerHTML = formatRM(expense);
        document.getElementById("balance").innerHTML      = formatRM(bal);
        document.getElementById("txCount").innerHTML      = txList.length;
    }

    // ── 6. Build records table ──
    function buildTable(txList) {
        var tbody = document.getElementById("recordsBody");
        var html  = "";
        var i;
        for (i = 0; i < txList.length; i++) {
            var tx         = txList[i];
            var amtClass   = (tx.type === "income") ? "amount-income" : "amount-expense";
            var amtSign    = (tx.type === "income") ? "+ " : "- ";
            var badgeClass = (tx.type === "income") ? "badge-success" : "badge-danger";
            var badgeText  = (tx.type === "income") ? "Income" : "Expense";

            html += "<tr>";
            html += "<td>" + tx.category + "</td>";
            html += "<td>" + tx.desc + "</td>";
            html += "<td>" + tx.date + "</td>";
            html += "<td><span class='badge " + badgeClass + "'>" + badgeText + "</span></td>";
            html += "<td class='" + amtClass + "'>" + amtSign + "RM " + tx.amount.toFixed(2) + "</td>";
            html += "</tr>";
        }
        tbody.innerHTML = html;
    }

    // ── 7. Build bar chart ──
    function buildBarChart(barData) {
        var container = document.getElementById("barChart");
        var maxVal = 0;
        var i;
        for (i = 0; i < barData.length; i++) {
            maxVal = Math.max(maxVal, barData[i].value);
        }
        var html = "";
        for (i = 0; i < barData.length; i++) {
            var heightPct = Math.round((barData[i].value / maxVal) * 100);
            html += "<div class='bar-group'>";
            html += "<div class='bar' style='height:" + heightPct + "%;' title='RM " + barData[i].value + "'></div>";
            html += "<div class='bar-label'>" + barData[i].label + "</div>";
            html += "</div>";
        }
        container.innerHTML = html;
    }

    // ── 8. Build line chart ──
    function buildLineChart(incomeData, expenseData, labels) {
        var svg  = document.getElementById("lineChart");
        var w    = 400;
        var h    = 130;
        var padL = 10;
        var padR = 10;
        var padT = 10;
        var padB = 20;
        var n    = incomeData.length;
        var maxV = 0;
        var i;

        for (i = 0; i < n; i++) {
            maxV = Math.max(maxV, incomeData[i], expenseData[i]);
        }

        function toY(val) {
            return padT + (h - padT - padB) * (1 - val / maxV);
        }
        function toX(idx) {
            return padL + idx * ((w - padL - padR) / (n - 1));
        }
        function pointsStr(data) {
            var pts = "";
            for (i = 0; i < n; i++) {
                pts += toX(i) + "," + toY(data[i]) + " ";
            }
            return pts.trim();
        }

        var svgContent = "";
        var g;
        for (g = 0; g <= 4; g++) {
            var gy = padT + g * ((h - padT - padB) / 4);
            svgContent += "<line x1='" + padL + "' y1='" + gy + "' x2='" + (w - padR) + "' y2='" + gy + "' stroke='#dee2e6' stroke-width='1'/>";
        }

        var incomePts   = pointsStr(incomeData);
        var expensePts  = pointsStr(expenseData);
        var areaIncome  = incomePts  + " " + toX(n-1) + "," + (h-padB) + " " + toX(0) + "," + (h-padB);
        var areaExpense = expensePts + " " + toX(n-1) + "," + (h-padB) + " " + toX(0) + "," + (h-padB);

        svgContent += "<polygon points='" + areaIncome  + "' fill='rgba(13,110,253,0.1)'/>";
        svgContent += "<polygon points='" + areaExpense + "' fill='rgba(220,53,69,0.1)'/>";
        svgContent += "<polyline points='" + incomePts  + "' fill='none' stroke='#0d6efd' stroke-width='2'/>";
        svgContent += "<polyline points='" + expensePts + "' fill='none' stroke='#dc3545' stroke-width='2'/>";

        for (i = 0; i < n; i++) {
            svgContent += "<circle cx='" + toX(i) + "' cy='" + toY(incomeData[i])  + "' r='4' fill='#0d6efd'/>";
            svgContent += "<circle cx='" + toX(i) + "' cy='" + toY(expenseData[i]) + "' r='4' fill='#dc3545'/>";
            svgContent += "<text x='" + toX(i) + "' y='" + (h-4) + "' text-anchor='middle' font-size='9' fill='#6c757d'>" + labels[i] + "</text>";
        }

        svg.innerHTML = svgContent;
    }

    // ── 9. Period selector — switches ALL data ──
    function updatePeriod() {
        var selected = document.getElementById("periodSelect").value;

        if (selected === "YEARLY") {
            document.getElementById("recordDateLabel").innerHTML = "Year " + new Date().getFullYear();
            document.getElementById("dateDisplay").innerHTML     = new Date().getFullYear();
            updateCards(yearlyTransactions);
            buildTable(yearlyTransactions);
            buildBarChart(yearlyBarData);
            buildLineChart(yearlyIncomeData, yearlyExpenseData, yearlyLabels);
        } else {
            document.getElementById("recordDateLabel").innerHTML = getFormattedDate();
            document.getElementById("dateDisplay").innerHTML     = getFormattedDate();
            updateCards(monthlyTransactions);
            buildTable(monthlyTransactions);
            buildBarChart(monthlyBarData);
            buildLineChart(monthlyIncomeData, monthlyExpenseData, monthlyLabels);
        }
    }

    // ── 10. Initial load — monthly by default ──
    updateCards(monthlyTransactions);
    buildTable(monthlyTransactions);
    buildBarChart(monthlyBarData);
    buildLineChart(monthlyIncomeData, monthlyExpenseData, monthlyLabels);

</script>

</body>
</html>