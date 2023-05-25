<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>BEM UKRIDA</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">LOGIN BEM UKRIDA - KABINET BARA 2023/2024</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid"/>
            
            
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">LOGIN MAHASISWA UKRIDA</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign In" />
            <div class="login-signup">
                    <span class="text">Dont Have An Account?
                        <a href="register.php" class="text signup-link">Signup Now</a>
                    </span>
                </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>LOGIN MAHASISWA UKRIDA</h3>
            <p>
              Login Untuk Mahasiswa UKRIDA!!!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              LOGIN MAHASISWA
            </button>
          </div>
          <img src="image/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>LOGIN BEM UKRIDA - KABINET BARA 2023/2024</h3>
            <p>
              Login Untuk BPH, STAFF & STAFF MUDA BEM UKRIDA - KABINET BARA 2023/2024!!!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              LOGIN BEM UKRIDA
            </button>
          </div>
          <img src="image/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/login.js"></script>
  </body>
  
</html>