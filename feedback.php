<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Website</title>
    <link rel="stylesheet" href="style.css">
    <style>
      @import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");

* {
  box-sizing: border-box;
}

body {
  align-items: center;
  background-color: #fef9f2;
  display: flex;
  font-family: "Montserrat", sans-serif;
  height: 100vh;
  justify-content: center;
  margin: 0;
  overflow: hidden;
}

.panel-container {
  align-items: center;
  background-color: #fff;
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  display: flex;
  flex-direction: column;
  font-size: 90%;
  justify-content: center;
  max-width: 400px;
  padding: 30px;
  text-align: center;
}

.panel-container strong {
  line-height: 20px;
}

.ratings-container {
  display: flex;
  margin: 20px 0;
}

.rating {
  flex: 1;
  margin: 10px 5px;
  padding: 20px;
}

.rating:hover,
.rating.active {
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.rating img {
  cursor: pointer;
  width: 40px;
}

.rating small {
  color: #555;
  cursor: pointer;
  display: inline-block;
  margin: 10px 0 0;
}

.rating:hover small,
.rating.active small {
  color: #111;
}

.btn {
  background-color: #302d2b;
  border: 0;
  border-radius: 4px;
  color: #fff;
  cursor: pointer;
  padding: 12px 30px;
}

.btn:active {
  transform: scale(0.98);
}

.fa-heart {
  color: red;
  font-size: 30px;
  margin-bottom: 10px;
}
.logo{
  color: black;
}
    </style>
</head>
<body>
    <main class="main">
        <header class="header">
            <a href="#" class="logo">Quiz Feedback</a>

            <nav class="navbar">
                <a href="#" class="active">About</a>
                <a href="index.php">Home</a>
            </nav>
        </header>
        </main>
            <div id="panel" class="panel-container">
  <strong>
    How satisfied are you with our <br />
    customer support performance?
  </strong>
  <div class="ratings-container">
    <div class="rating" data-rating="Unhappy">
      <img src="https://cdn-icons-png.flaticon.com/512/187/187150.png" alt="sad face" />
      <small>Unhappy</small>
    </div>
    <div class="rating" data-rating="Neutral">
      <img src="https://cdn-icons-png.flaticon.com/512/187/187136.png" alt="neutral face" />
      <small>Neutral</small>
    </div>
    <div class="rating active" data-rating="Satisfied">
      <img src="https://cdn-icons-png.flaticon.com/512/187/187133.png" alt="happy face" />
      <small>Satisfied</small>
    </div>
  </div>
  <button class="btn" id="send">Send Review</button>
</div>




    <script src="questions.js"></script>
    <script src="script.js"></script>
    <script>const ratings = document.querySelectorAll(".rating");
const ratingsContainer = document.querySelector(".ratings-container");
const sendBtn = document.querySelector("#send");
const panel = document.querySelector("#panel");
let selectedRating = "Satisfied";

ratingsContainer.addEventListener("click", (e) => {
  if (e.target.parentNode.classList.contains("rating")) {
    removeActive();
    selectedRating = e.target.closest(".rating").dataset.rating;
    e.target.closest(".rating").classList.add("active");
  }
});

sendBtn.addEventListener("click", () => {
  panel.innerHTML = `
    <i class="fa fa-heart"></i>
    <strong>Thank You!</strong>
    <br>
    <strong>Feedback: ${selectedRating}</strong>
    <p>We'll use your feedback to improve our customer support</p>
  `;
});

function removeActive() {
  ratings.forEach((rating) => rating.classList.remove("active"));
}
</script>
</body>
</html>