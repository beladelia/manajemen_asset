<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login - SIMASTER</title>

  <!-- Font Awesome buat ikon mata -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body{
      margin:0;
      font-family:Inter,system-ui,-apple-system,"Segoe UI",Roboto,Arial;
      display:flex;
      align-items:center;
      justify-content:center;
      height:100vh;
      background:#f4f6f9
    }
    .card{
      width:100%;
      max-width:460px;
      background:#fff;
      padding:32px;
      border-radius:12px;
      box-shadow:0 8px 30px rgba(0,0,0,0.08);
      text-align:center
    }
    .logo{
      display:block;
      margin:0 auto 15px;
      width:120px;
      height:auto
    }
    h1{
      color:#7a0e0e;
      margin:6px 0 4px;
      font-size:28px
    }
    p.sub{
      color:#555;
      margin-bottom:18px;
      font-size:14px
    }
    .input,
    .btn{
      width:100%;
      padding:12px 14px;
      margin:8px 0;
      font-size:15px;
      border-radius:8px;
      box-sizing:border-box
    }
    .input{
      border:1px solid #e2e8f0
    }
    .password-wrapper {
      position: relative;
    }
    .toggle-password {
      position: absolute;
      top: 50%;
      right: 12px;
      transform: translateY(-50%);
      cursor: pointer;
      color: #333;
      font-size: 18px;
    }
    .toggle-password:hover {
      color: #7a0e0e;
    }
    .actions{
      display:flex;
      align-items:center;
      justify-content:space-between;
      margin-top:8px
    }
    .btn{
      background:#7a0e0e;
      color:#fff;
      border:none;
      font-weight:600;
      cursor:pointer
    }
    .error{
      color:#a00;
      font-size:13px;
      text-align:left;
      margin-top:6px
    }
    label.rem{
      display:flex;
      gap:8px;
      align-items:center;
      color:#444;
      font-size:14px
    }
    a.small{
      font-size:13px;
      color:#666;
      text-decoration:none
    }
  </style>
</head>
<body>
  <div class="card" role="main">
    <img src="{{ asset('images/logo_kemhan.png') }}" alt="Logo Kemhan" class="logo"/>
    <h1>SIMASTER</h1>
    <p class="sub">Sistem Informasi Manajemen Aset Terpadu<br>Kementerian Pertahanan RI</p>

    <form method="POST" action="{{ route('login.post') }}">
      @csrf

      <input class="input" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
      @error('email') <div class="error">{{ $message }}</div> @enderror

      <div class="password-wrapper">
        <input class="input" type="password" id="password" name="password" placeholder="Password" required>
        <i class="fa-solid fa-eye-slash toggle-password" id="togglePassword"></i>
      </div>
      @error('password') <div class="error">{{ $message }}</div> @enderror

      <div class="actions">
        <label class="rem"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat saya</label>
        <a class="small" href="#">Lupa password?</a>
      </div>

      <button class="btn" type="submit">Login</button>
    </form>

    <div style="margin-top:12px;font-size:13px;color:#777">© 2025 Kementerian Pertahanan RI</div>
  </div>

  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
      const isHidden = passwordInput.getAttribute('type') === 'password';
      passwordInput.setAttribute('type', isHidden ? 'text' : 'password');
      // Saat password terlihat → tampilkan mata terbuka
      if (isHidden) {
        this.classList.remove('fa-eye-slash');
        this.classList.add('fa-eye');
      } else {
        this.classList.remove('fa-eye');
        this.classList.add('fa-eye-slash');
      }
    });
  </script>
</body>
</html>
