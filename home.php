<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Website</title>
    <style>
    body {
    background-image: url('homebg.jpg');
    font-family: cursive, sans-serif;
    text-align: center;
    background-size: cover;
    color: rgb(243, 235, 238);
    font-size: 20px;
}
.container {
    display: flex;
    justify-content: flex-end; /* Moves buttons to the right */
    padding: 5px;
}
button {
    position: relative;
    padding: 12px 24px;
    margin: 10px;
    font-size: 16px;
    cursor: pointer;
    background-color:rgb(43, 28, 29);
    color:rgb(126, 44, 44);
    border: 2px solidrgb(223, 20, 20);
    border-radius: 4px;
    overflow: hidden;
    transition: background 0.3s, color 0.3s;
}

/* Sprinkle effect */
button::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 5px;
    height: 5px;
    background-color:rgb(19, 5, 1); /* Sprinkle color */
    border-radius: 50%;
    opacity: 0;
    box-shadow: 10px 10px #ffcc29, -10px -10px #29ff57, 15px -15px #2979ff, -15px 15px #ff29a8;
    transform: translate(-50%, -50%);
    animation: sprinkle 0.6s ease-out infinite;
}

/* Hover effect */
button:hover {
    background-color:rgb(112, 20, 20);
    color:rgb(216, 213, 213);
}

/* Sprinkle Animation */
@keyframes sprinkle {
    0% {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }
    100% {
        opacity: 0;
        transform: translate(-50%, -50%) scale(2);
    }
}/* Active (clicked) effect */
button:active {
    background-color: #003d82; /* Even darker blue */
}/* Dark mode styles */
.dark-mode {
    background-color: #121212 !important;
    color: #ffffff !important;
    background-image: none !important;
}

.dark-mode .content {
    background: rgba(255, 255, 255, 0.1) !important;
    color: #ffffff !important;
}

.dark-mode button {
    background-color: #333 !important;
    color: #ffffff !important;
}

/* Content sections */
.content {
    display: none;
    margin-top: 10px;
    padding: 20px;
    background: rgba(0, 0, 0, 0.8);
    border: 1px solid #ccc;
    max-width: 800px;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
    color: white;
    border-radius: 10px;
}
.custom-text{
    margin-left:200px;
    margin-top: 50px;

}

</style>
</head>
<body>
    <div class="container">
        
        <button onclick="toggleContent('homeContent')">Home</button>
        <button onclick="toggleContent('helpSection')">Help</button>
        <button onclick="StartQuiz()"> Start Quiz</button>
        <button onclick="toggleContent('privacyPolicy')">Privacy & Policy</button>
        <button onclick="toggleContent('contactSection')">Contact Us</button>
        <button onclick="toggleContent('homeDetails')">More About Us</button>
        <button id="darkModeToggle">🌙</button>
    </div>

    <div class="content" id="homeContent">
        <h2>Welcome to Our Quiz Platform</h2>
        <p>Test your knowledge with fun and interactive quizzes.</p><p> Challenge yourself and improve your skills!</p>
         <h3>Why Play Our Quizzes?</h3>
    <ul>
        <li>Engaging quizzes with multiple levels.</li>   
       <img src="quiz.jpeg" alt="centered image1" style="position:absolute; top:200px;right:270px;width: 300px;">        

        <li>Real-time feedback on answers.</li>
        <li>Rewards and motivation for high achievers.</li>
        <li>Secure and user-friendly experience.</li>
        <li>Dark mode support for better accessibility.</li>
    </ul>


    </div>

    <div class="content" id="homeDetails">
        <h2>About Our Quiz Platform</h2>
        <p>Welcome to the ultimate quiz experience! Our platform is designed to test and enhance your knowledge in various computer-related topics.</p>
        <ul>
            <li>Engaging quizzes with multiple levels.</li>
            <li>Real-time feedback on answers.</li>
            <li>Rewards and motivation for high achievers.</li>
            <li>Secure and user-friendly experience.</li>
        </ul>
    </div>

    <div class="content" id="helpSection">
        <h2>Help & Support</h2>
        <p>Need assistance? Here’s how to navigate our quiz platform:</p>
        
        <ul>
            <li>Click on 'Login' to access your account or create a new one.</li>
            <li>Once logged in, start the quiz and answer the questions.</li>
            <li>If you forget your password, use the 'Forgot Password' option to reset it.</li>
            <li>For any issues, visit the 'Contact Us' page to reach out to support.</li>
        </ul>
        <h3>How It Works</h3>
    <ul>
        <li>Sign up or log in to start your quiz journey.</li>
        <li>Choose a quiz category and difficulty level.</li>
        <li>Answer questions within the time limit to earn points!</li>
        <li>Compete with friends and climb the leaderboard.</li>
    </ul>

    
    </div>

    <div class="content" id="privacyPolicy">
        <h2>Privacy & Policy</h2>
        <ul>
            <li>Your personal data is securely stored and not shared with third parties.</li>
            <li>We collect minimal data necessary for account creation and quiz tracking.</li>
            <li>we useyour nformation for improving our website and features</li>
            <li>All quiz content is protected and cannot be reproduced without permission.</li>
            <li>By using this platform, you agree to abide by our terms and conditions.</li>
            <li>We have right to  access,update, or delete your personal data</li>

        </ul>
    </div>

    <div class="content" id="contactSection">
        <h2>Contact Us</h2>
        <p>Have questions or need support? Reach out to us:</p>
        <ul>
            <li>Email:assissubba11@gmail.com or yamkumarichettri@gmail.com</li>
            <li>Phone:+9876543210</li>
            <li>Live Chat: Available on weekdays from 9 AM - 5 PM</li>
            <li>Address: 123 Quiz Street, Knowledge City, Country</li>
            <li>Follow us on social media for updates and new quizzes.</li>
        </ul>
    </div>
<h2 class="custom-text"><marquee style="width: 500px;" direction="left">welcome to our  quiz website</marquee></h2>
<p class="custom-text">Knowledge is power, but attitude shapes how you use it</p>
    <script>
        function toggleContent(sectionId) {
            var sections = document.querySelectorAll('.content');
            sections.forEach(function(section) {
                if (section.id === sectionId) {
                    section.style.display = section.style.display === "block" ? "none" : "block";
                } else {
                    section.style.display = "none";
                }
            });
        }

        function loginOrStartQuiz() {
            if (sessionStorage.getItem("loggedIn") === "true") {
                window.location.href = "quiz.html";
            } else {
                window.location.href = "login.html";
            }
        }

        function StartQuiz(){
    window.location.href="quiz.html";
   
}

document.addEventListener("DOMContentLoaded", function () {
    const darkModeToggle = document.getElementById("darkModeToggle");

    // Apply dark mode on page load if previously enabled
    if (localStorage.getItem("darkMode") === "enabled") {
        document.body.classList.add("dark-mode");
    }

    // Add click event to toggle dark mode
    darkModeToggle.addEventListener("click", function () {
        document.body.classList.toggle("dark-mode");

        // Save user preference
        if (document.body.classList.contains("dark-mode")) {
            localStorage.setItem("darkMode", "enabled");
        } else {
            localStorage.setItem("darkMode", "disabled");
        }
    });
});
    </script>
</body>
</html>