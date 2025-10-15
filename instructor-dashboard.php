<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>AMS - Instructor Dashboard</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="bg-gray-soft">
  <div class="app-root">
    <header class="topbar">
      <nav class="container nav-flex">
        <div class="brand">AMS</div>

        <div class="nav-links hide-sm">
          <button data-view="admin" class="nav-btn">Admin</button>
          <button data-view="instructor" class="nav-btn active">Instructor</button>
          <button data-view="student-parent" class="nav-btn">Student/Parent</button>
        </div>

        <div class="nav-right">
          <span id="welcomeText" class="muted hide-md">Welcome, Instructor</span>
          <button id="logoutBtn" class="btn secondary sm">Logout</button>
        </div>
      </nav>
    </header>

    <main class="container page-content">
      <div class="space-y">
        <div>
          <h2 class="page-title">Instructor Dashboard</h2>
          <p class="muted">Today is Wednesday, October 15, 2025.</p>
        </div>

        <div class="grid-3">
          <div class="card lg-col-2 text-center">
            <p class="muted">Your current class is:</p>
            <h3 class="big-title">Calculus II (Section B)</h3>
            <p class="muted">2:00 PM - 3:30 PM</p>
            <button id="startAttendanceBtn" class="btn primary large mt-6">START ATTENDANCE NOW</button>
          </div>

          <div class="stack">
            <div class="card">
              <h3>Recent Class Attendance</h3>
              <div class="chart-box" id="instructorBarChart"></div>
            </div>

            <div class="card warning">
              <h3>Grade Status Alert</h3>
              <p class="muted">4/5 classes have updated grades for this period.</p>
              <button class="btn secondary w-full">View Missing Grades</button>
            </div>
          </div>
        </div>

        <div class="card">
          <h3>Today's Upcoming Classes</h3>
          <ul class="list-plain">
            <li class="list-item">
              <div>
                <strong>Physics 101</strong>
                <div class="muted">Section A</div>
              </div>
              <div class="mono">4:00 PM - 5:00 PM</div>
            </li>
          </ul>
        </div>
      </div>
    </main>
  </div>

  <script src="assets/js/charts.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
