<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in - Product System</title>
    <style>
        :root { --pink: #c9828d; --nude: #f4e9df; --cream: #fffaf5; --coffee: #4c3028; --muted: #876e63; --line: #e3cec1; }
        * { box-sizing: border-box; }
        body { font-family: 'Trebuchet MS', sans-serif; display: grid; place-items: center; min-height: 100vh; margin: 0; padding: 24px; color: var(--coffee); background: var(--nude); }
        .login-card { width: min(100%, 390px); padding: 42px; border: 1px solid var(--line); border-radius: 18px; background: var(--cream); box-shadow: 0 18px 45px rgba(76, 48, 40, .12); }
        .eyebrow { color: var(--pink); font-size: 12px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase; }
        h2 { margin: 10px 0 8px; font-family: Georgia, serif; font-size: 34px; font-weight: normal; }
        .intro { margin: 0 0 28px; color: var(--muted); font-size: 14px; }
        .form-group { margin-bottom: 18px; }
        label { display: block; margin-bottom: 7px; color: var(--muted); font-size: 13px; font-weight: bold; }
        input { width: 100%; padding: 13px 14px; border: 1px solid var(--line); border-radius: 9px; outline: none; background: white; color: var(--coffee); font: inherit; }
        input:focus { border-color: var(--pink); box-shadow: 0 0 0 3px rgba(201, 130, 141, .16); }
        button { width: 100%; margin-top: 6px; padding: 13px; border: 0; border-radius: 9px; cursor: pointer; background: var(--coffee); color: white; font: inherit; font-weight: bold; }
        button:hover { background: #674338; }
        .error { margin-bottom: 16px; padding: 11px 12px; border-radius: 8px; background: #f7dfe0; color: #8c3f48; font-size: 13px; }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="eyebrow">Product system</div>
        <h2>Login</h2>
        <p class="intro">Welcome back. Sign in to continue.</p>
        <?php if(!empty($error)): ?>
            <div class="error"><?= $error; ?></div>
        <?php endif; ?>
        <form action="<?= site_url('auth/login_process'); ?>" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Log In</button>
        </form>
    </div>
</body>
</html>