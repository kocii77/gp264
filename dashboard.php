
<html>
<head>
    
    <title>Expense Buddy - Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background-color: #f5f7fa;
        }

        /* SIDEBAR */
        .sidebar {
            width: 200px;
            min-height: 100vh;
            background-color: black;
            color: white;
            position: fixed;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .nav-item {
            display: block;
            padding: 30px;
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        .arrow {
            display: inline-block;
            margin-right: 10px;
            transition: 0.3s;
        }

        .nav-item:hover {
            background-color: #333;
            padding-left: 25px;
        }

        .nav-item:hover .arrow {
            transform: translateX(5px);
        }

        .nav-item:hover {
            background-color: #333;
        }

        /* MAIN CONTENT */
        .main {
            margin-left: 200px;
            padding: 20px;
        }

        /* TOP BAR */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo img {
            height: 100px;
            width: auto;
        }
        /* SUMMARY CARDS */
        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }   

        .card {
            flex: 1 1 30%;
            padding: 20px;
            border-radius: 10px;
            font-weight: bold;
        }
        .income-card {
             background-color: #d4edda; /* light green */
            color: #155724;
        }

        .expense-card {
            background-color: #f8d7da; /* light red */
            color: #721c24;
        }

        .balance-card {
            background-color: #1c1841; /* light blue */
            color: #968bb6;
        }

        /* RECORDS */
        .records {
            margin-top: 30px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }

        .record-item {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }

        .expense {
            color: red;
        }

        .income {
            color: green;
        }

        /* FLOAT BUTTON */
        .add-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: black;
            color: white;
            font-size: 30px;
            text-align: center;
            line-height: 50px;
            border-radius: 10px;
            cursor: pointer;
        }

        @media only screen and (max-width: 600px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }

    .main {
        margin-left: 0;
    }
}
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2></h2>

       <a href="dashboard.html" class="nav-item">
            <span class="arrow">›</span> Home
        </a>

        <a href="analysis.html" class="nav-item">
            <span class="arrow">›</span> Analysis
        </a>

        <a href="budget.html" class="nav-item">
            <span class="arrow">›</span> Budget
        </a>

        <a href="categories.html" class="nav-item">
            <span class="arrow">›</span> Categories
        </a>

        <a href="settings.html" class="nav-item">
            <span class="arrow">›</span> Settings
        </a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main">

        <!-- TOP BAR -->
        <div class="top-bar">
            <div>
                <select>
                    <option>MONTHLY</option>
                    <option>YEARLY</option>
                </select>

                <span> < DD/MM/YYYY > </span>
            </div>

            <div class="logo">
                <img src="img/logo.png">
                
            </div>
        </div>

        <!-- SUMMARY -->
        <div class="cards">
            <div class="card income-card">Total Income: RM 0</div>
            <div class="card expense-card">Total Expense: RM 0</div>
            <div class="card balance-card">Balance: RM 0</div>
        </div>

        <!-- RECORDS -->
        <div class="records">
            <h3>Records DD/MM/YYYY</h3>

            <div class="record-item">
                <span>🍿 Food</span>
                <span class="expense">- RM 20.00</span>
            </div>

            <div class="record-item">
                <span>👛 Salary</span>
                <span class="income">+ RM 500.00</span>
            </div>

        </div>

    </div>

    <!-- ADD BUTTON -->
    <a href="TransactionsPageExpenseBuddy.html" class="add-btn">+</a>

    <?php
session_start();
if (!isset($_SESSION['nama_pengguna'])) {
    header("Location: index.php"); // Boot them back if they aren't logged in
    exit();
}
?>

</body>
</html>