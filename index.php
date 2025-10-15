<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>AMS - Login</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="bg-gray-soft">
  <main class="center-page">
    <div class="card max-w-md">
      <div class="text-center mb-6">
        <h1 class="title">AMS: Academic Monitoring</h1>
        <p class="muted">Secure Login</p>
      </div>

      <form id="loginForm" class="form-stack" method="POST" onsubmit="return handleLogin(event)">
        <label class="label">Email / ID
          <input id="email" name="email" class="input" type="text" value="instructor@example.com" required />
        </label>

        <label class="label">Password
          <input id="password" name="password" class="input" type="password" value="password" required />
        </label>

        <label class="label">Role
          <select id="role" name="role" class="select">
            <option value="instructor">Instructor</option>
            <option value="admin">Admin</option>
            <option value="student">Student/Parent</option>
          </select>
        </label>

        <button type="submit" class="btn primary w-full">LOGIN</button>
      </form>
    </div>
  </main>

  <script src="assets/js/main.js"></script>
</body>
</html>
