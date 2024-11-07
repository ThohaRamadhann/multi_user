<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard - Survey Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    body {
      background-color: #f4f6f9;
      font-family: Arial, sans-serif;
    }

    .dashboard-container {
      max-width: 900px;
      margin: auto;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .dashboard-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #eaeaea;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    h1 {
      font-size: 1.75rem;
      color: #333;
    }

    .btn-logout {
      color: #ffffff;
      background-color: #dc3545;
      border: none;
      padding: 6px 12px;
    }

    .card-custom {
      border: none;
      border-radius: 8px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.05);
    }

    .card-header-custom {
      background-color: #007bff;
      color: #ffffff;
      font-weight: bold;
      padding: 12px 15px;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }

    .card-body {
      padding: 20px;
    }

    .card-title {
      font-size: 1.25rem;
      font-weight: 600;
    }

    .stat-box {
      text-align: center;
    }

    .stat-box h3 {
      font-size: 1.5rem;
      margin: 0;
      color: #007bff;
    }

    .stat-box p {
      color: #6c757d;
      margin: 0;
    }
  </style>
</head>

<body>

  <div class="dashboard-container">
    <div class="dashboard-header">
      <h1>Survey Data Management</h1>
      <!-- Form logout dengan metode POST -->
      <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-logout">Logout</button>
      </form>
    </div>

    <div class="row mb-4">
      <div class="col-md-4">
        <div class="card card-custom">
          <div class="card-header-custom">Total Surveys</div>
          <div class="card-body stat-box">
            <h3>1,234</h3>
            <p>Surveys conducted</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-custom">
          <div class="card-header-custom">Active Respondents</div>
          <div class="card-body stat-box">
            <h3>567</h3>
            <p>Currently active</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-custom">
          <div class="card-header-custom">Data Points Collected</div>
          <div class="card-body stat-box">
            <h3>3,890</h3>
            <p>Entries in database</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card card-custom mt-4">
      <div class="card-header-custom">Survey Overview</div>
      <div class="card-body">
        <h5 class="card-title">Summary of Recent Surveys</h5>
        <p>Get insights and details about the most recent surveys conducted, including participation rates, response times, and key findings.</p>
        <a href="/surveys" class="btn btn-primary">View All Surveys</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>
