<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Form Generation</title>
  
    <style>
        #submitButton{display:none;margin:20px auto;padding:10px 20px;background-color:#007bff;color:#fff;border:none;border-radius:5px;cursor:pointer;font-size:16px;}
        .form-card{display:inline-block;vertical-align:top;width:30%;margin:0 1.5%;}
        @media screen and (max-width: 768px){.form-card{width:100%;margin:0;}}
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    margin-top: 20px;
}

form {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"],
input[type="email"],
input[type="tel"],
input[type="number"],
select {
    width: calc(100% - 22px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input[type="radio"] {
    display: inline-block;
    margin-right: 5px;
}

button {
    display: block;
    width: 200px;
    margin: 0 auto;
    margin-top: 20px;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

#submitButton {
    display: block;
    width: 150px;
    margin: 20px auto;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s, box-shadow 0.3s;
}

#submitButton:hover {
    background-color: #0056b3;
    box-shadow: 0px 6px 7px rgba(0, 0, 0, 0.2);
}

button:hover {
    background-color: #0056b3;
}

ul, li {
    list-style-type: none;
}


    </style>
</head>
<body>
    <h1>Participant Registration Form</h1>
    <input type="number" id="teamSize" placeholder="Enter number of teams" min="2">
    <button onclick="generateForms()">Generate Forms</button>
    <div id="formsContainer"></div>
    <button id="submitButton" onclick="submitAllForms()">Submit</button>

    <script>
        function generateForms() {
            var teamSize = parseInt(document.getElementById("teamSize").value);
            if (teamSize < 1) {
                alert("Please enter a positive number of teams.");
                return;
            }
            var formsContainer = document.getElementById("formsContainer");
            formsContainer.innerHTML = "";

            var ul = document.createElement("ul");
            for (var i = 0; i < teamSize; i++) {
                var li = document.createElement("li");
                li.classList.add("form-card");

                var form = document.createElement("form");
                form.innerHTML = `
                    <div class="form-group">
                        <label for="name${i}">Full Name:</label>
                        <input type="text" id="name${i}" name="name${i}" required>
                    </div>
                    <div class="form-group">
                        <label for="password${i}Password:</label>
                        <input type="password" id="password${i}" name="password${i}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email${i}">Email:</label>
                        <input type="email" id="email${i}" name="email${i}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone${i}">Phone Number:</label>
                        <input type="tel" id="phone${i}" name="phone${i}" required>
                    </div>
                    <div class="form-group">
                        <label for="collegeID${i}">College ID:</label>
                        <input type="text" id="collegeID${i}" name="collegeID${i}" required>
                    </div>
                    <div class="form-group">
                        <label for="role${i}">Role (Student/Teacher):</label>
                        <select id="role${i}" name="role${i}" required>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gender${i}">Gender:</label>
                        <input type="radio" id="male${i}" name="gender${i}" value="male" required>
                        <label for="male${i}">Male</label>
                        <input type="radio" id="female${i}" name="gender${i}" value="female" required>
                        <label for="female${i}">Female</label>
                    </div>
                    <div class="form-group">
                        <label for="age${i}">Age:</label>
                        <input type="number" id="age${i}" name="age${i}" required min="1">
                    </div>
                `;
                li.appendChild(form);
                ul.appendChild(li);
            }
            formsContainer.appendChild(ul);
            var submitButton = document.getElementById("submitButton");
            submitButton.style.display = "block";
        }

        function submitAllForms() {
            var forms = document.querySelectorAll('form');
            var allFormsFilled = true;

            forms.forEach(function(form) {
                var inputs = form.querySelectorAll('input, select');
                inputs.forEach(function(input) {
                    if (input.value === "") {
                        allFormsFilled = false;
                    }
                });
            });

            if (allFormsFilled) {
                alert("Registered successfully");
            } else {
                alert("Please enter the form data first");
            }
        }
    </script>
</body>
</html>
