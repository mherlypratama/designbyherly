<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magic Menu Indicator</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="navigation">
    <ul>
      <li class="list active">
        <a href="#">
          <span class="icon">
            <ion-icon name="home-outline"></ion-icon>
          </span>
          <span class="text">Home</span>
        </a>
      </li>
      <li class="list">
        <a href="#">
          <span class="icon">
            <ion-icon name="person-outline"></ion-icon>
          </span>
          <span class="text">Profile</span>
        </a>
      </li>
      <li class="list">
        <a href="#">
          <span class="icon">
            <ion-icon name="chatbubble-outline"></ion-icon>
          </span>
          <span class="text">Mesagges</span>
        </a>
      </li>
      <li class="list">
        <a href="#">
          <span class="icon">
            <ion-icon name="camera-outline"></ion-icon>
          </span>
          <span class="text">Photos</span>
        </a>
      </li>
      <li class="list">
        <a href="#">
          <span class="icon">
            <ion-icon name="settings-outline"></ion-icon>
          </span>
          <span class="text">Settings </span>
        </a>
      </li>
      <div class="indicator"></div>
    </ul>
  </div>
  <script>
    const list = document.querySelectorAll('.list');
    function activeLink() {
      list.forEach((item) =>
        item.classList.remove('active'));
      this.classList.add('active')


    }
    list.forEach((item) =>
      item.addEventListener('click', activeLink));
  </script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>