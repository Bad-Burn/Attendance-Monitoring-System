<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>AMS - Admin Dashboard</title>
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
          <button data-view="student-parent" class="nav-btn">Student/Parent</button>
        </div>

        <div class="nav-right">
          <span id="welcomeText" class="muted hide-md">Welcome, Admin</span>
          <button id="logoutBtn" class="btn secondary sm">Logout</button>
        </div>
      </nav>
    </header>

    <main class="container page-content">
      <section class="space-y">
        <h2 class="page-title">Admin Dashboard</h2>

        <div class="grid-stats">
          <div class="card stat">
            <div class="stat-icon blue">👤</div>
            <div>
              <p class="muted">Total Users</p>
              <p class="stat-value">1,245</p>
            </div>
          </div>

          <div class="card stat">
            <div class="stat-icon green">📚</div>
            <div>
              <p class="muted">Active Classes</p>
              <p class="stat-value">72</p>
            </div>
          </div>

          <div class="card stat">
            <div class="stat-icon amber">🕒</div>
            <div>
              <p class="muted">Pending Logs</p>
              <p class="stat-value">3</p>
            </div>
          </div>

          <div class="card stat">
            <div class="stat-icon red">⚠️</div>
            <div>
              <p class="muted">Missing Grades</p>
              <p class="stat-value">8</p>
            </div>
          </div>
        </div>

        <div class="grid-3">
          <div class="card lg-col-2">
            <h3>Recent User Registrations</h3>
            <div class="table-wrap">
              <table class="table">
                <thead>
                  <tr><th>User Name</th><th>Role</th><th>Date Created</th><th>Actions</th></tr>
                </thead>
                <tbody id="adminUsers">
                  <tr>
                    <td>John Doe</td><td>Student</td><td>2025-10-15</td>
                    <td>
                      <button class="btn secondary sm">Approve</button>
                      <button class="btn destructive sm">Deny</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Jane Smith</td><td>Parent</td><td>2025-10-15</td>
                    <td>
                      <button class="btn secondary sm">Approve</button>
                      <button class="btn destructive sm">Deny</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="card">
            <h3>Activity Feed</h3>
            <ul class="feed">
              <li><strong>Instructor Smith</strong> updated grades for <span class="highlight">ITEL 304</span><div class="muted">2 min ago</div></li>
              <li><strong>New Student User</strong> registered: John Doe.<div class="muted">5 min ago</div></li>
              <li><strong>System Backup</strong> completed successfully.<div class="muted">1 hour ago</div></li>
            </ul>
          </div>
        </div>
      </section>
    </main>
  </div>

  <script src="assets/js/main.js"></script>
</body>
</html>
