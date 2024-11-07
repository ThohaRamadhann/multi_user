<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Survey Questionnaire</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    body {
      background-color: #f9fafb;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin-top: 50px;
    }

    .question-card {
      margin-bottom: 20px;
    }

    .question-title {
      font-size: 1.25rem;
      color: #333;
    }

    .logout-btn {
      position: absolute;
      top: 10px;
      right: 10px;
    }
  </style>
</head>

<body>

  <!-- Logout Button -->
  <div class="logout-btn">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
      @csrf
      <button type="submit" class="btn btn-danger">Logout</button>
    </form>
  </div>

  <div class="container bg-white p-4 rounded shadow-sm">
    <h1 class="mb-4">Survey Questionnaire</h1>
    <form action="/submit-questionnaire" method="POST">
      @csrf

      <!-- Question 1 -->
      <div class="card question-card">
        <div class="card-body">
          <h5 class="question-title">1. How satisfied are you with our services?</h5>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="q1option1" value="Very Satisfied" required>
            <label class="form-check-label" for="q1option1">Very Satisfied</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="q1option2" value="Satisfied">
            <label class="form-check-label" for="q1option2">Satisfied</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="q1option3" value="Neutral">
            <label class="form-check-label" for="q1option3">Neutral</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="q1option4" value="Dissatisfied">
            <label class="form-check-label" for="q1option4">Dissatisfied</label>
          </div>
        </div>
      </div>

      <!-- Question 2 -->
      <div class="card question-card">
        <div class="card-body">
          <h5 class="question-title">2. How likely are you to recommend us to others?</h5>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question2" id="q2option1" value="Very Likely" required>
            <label class="form-check-label" for="q2option1">Very Likely</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question2" id="q2option2" value="Likely">
            <label class="form-check-label" for="q2option2">Likely</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question2" id="q2option3" value="Neutral">
            <label class="form-check-label" for="q2option3">Neutral</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question2" id="q2option4" value="Unlikely">
            <label class="form-check-label" for="q2option4">Unlikely</label>
          </div>
        </div>
      </div>

      <!-- Question 3 (Text Area) -->
      <div class="card question-card">
        <div class="card-body">
          <h5 class="question-title">3. What improvements would you like to see?</h5>
          <div class="form-group">
            <textarea class="form-control" name="question3" rows="3" placeholder="Write your feedback here..." required></textarea>
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Submit Survey</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
