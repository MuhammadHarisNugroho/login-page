<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
    <title>Hello, world!</title>
</head>

<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="https://beritapasundan.com/wp-content/uploads/2023/05/IMG_20230524_220821.jpg"
          height="100"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a>

      <!-- Notifications -->
      <div class="dropdown">
        <a
          class="text-reset me-3 dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="data:image/jpeg;base64,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"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Title</th>
      <th>Status</th>
      <th>Position</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">John Doe</p>
            <p class="text-muted mb-0">john.doe@gmail.com</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Software engineer</p>
        <p class="text-muted mb-0">IT department</p>
      </td>
      <td>
        <span class="badge badge-success rounded-pill d-inline">Active</span>
      </td>
      <td>Senior</td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/6.jpg"
              class="rounded-circle"
              alt=""
              style="width: 45px; height: 45px"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">Alex Ray</p>
            <p class="text-muted mb-0">alex.ray@gmail.com</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Consultant</p>
        <p class="text-muted mb-0">Finance</p>
      </td>
      <td>
        <span class="badge badge-primary rounded-pill d-inline"
              >Onboarding</span
          >
      </td>
      <td>Junior</td>
      <td>
        <button
                type="button"
                class="btn btn-link btn-rounded btn-sm fw-bold"
                data-mdb-ripple-color="dark"
                >
          Edit
        </button>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/7.jpg"
              class="rounded-circle"
              alt=""
              style="width: 45px; height: 45px"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">Kate Hunington</p>
            <p class="text-muted mb-0">kate.hunington@gmail.com</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Designer</p>
        <p class="text-muted mb-0">UI/UX</p>
      </td>
      <td>
        <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
      </td>
      <td>Senior</td>
      <td>
        <button
                type="button"
                class="btn btn-link btn-rounded btn-sm fw-bold"
                data-mdb-ripple-color="dark"
                >
          Edit
        </button>
      </td>
    </tr>
  </tbody>
</table>
<!-- Navbar -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>