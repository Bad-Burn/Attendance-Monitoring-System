<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>AMS - Student/Parent</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="bg-gray-soft">
  <div class="app-root">
    <header class="topbar">
      <nav class="container nav-flex">
        <div class="brand">AMS</div>
        <div class="nav-links hide-sm">
          <button data-view="admin" class="nav-btn">Admin</button>
          <button data-view="instructor" class="nav-btn">Instructor</button>
          <button data-view="student-parent" class="nav-btn active">Student/Parent</button>
        </div>
        <div class="nav-right">
          <span id="welcomeText" class="muted hide-md">Viewing as Parent of Alex Johnson</span>
          <button id="logoutBtn" class="btn secondary sm">Logout</button>
        </div>
      </nav>
    </header>

    <main class="container page-content">
      <div class="space-y">
        <div>
          <h2 class="page-title">Student Portal</h2>
          <p class="muted">Viewing as Parent of Alex Johnson</p>
        </div>

        <div class="grid-2">
          <div class="card center">
            <p class="muted">Current Attendance</p>
            <p class="big-number green">97%</p>
            <p class="muted">3 absences this semester</p>
          </div>

          <div class="card center">
            <p class="muted">Overall GPA</p>
            <p class="big-number blue">3.85</p>
            <p class="muted">Excellent Standing</p>
          </div>
        </div>

        <div class="grid-3">
          <div class="card lg-col-2">
            <h3>8-Week Attendance Trend</h3>
            <div class="chart-box" id="trendLineChart"></div>
          </div>

          <div class="stack">
            <div class="card">
              <h3>Grades Summary</h3>
              <details class="group"><summary>Calculus II <span class="blue">A-</span></summary>
                <div class="muted small mt-2">Midterm: 92%<br/>Assignment 1: 95%</div>
              </details>
              <details class="group"><summary>Physics 101 <span class="green">A</span></summary></details>
            </div>

            <div class="card">
              <h3>Recent Attendance Timeline</h3>
              <ul class="timeline">
                <li class="timeline-item green">
                  <div class="row-between">
                    <strong>Calculus II</strong>
                    <span class="badge green">PRESENT</span>
                  </div>
                  <div class="muted">Oct 14, 2025</div>
                  <div class="muted">Time In: 2:01 PM, Time Out: 3:28 PM</div>
                </li>

                <li class="timeline-item red">
                  <div class="row-between">
                    <strong>Physics 101</strong>
                    <span class="badge red">ABSENT</span>
                  </div>
                  <div class="muted">Oct 13, 2025</div>
                  <div class="muted">Reason: Unexcused</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="assets/js/charts.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
