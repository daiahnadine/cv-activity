<!DOCTYPE html>
<html>
<head>
    <title>My Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .resume-container {
            position: relative;
            background-color: transparent;
        }
        .resume {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1;
            border: 2px solid #ddd; 
        }
        .first-section {
            margin-bottom: 20px;
            background-color: #aad5f2; 
            padding: 20px;
            border-radius: 5px;
        }
        .section h3 {
            margin-bottom: 20px;
            margin-top: 40px;
            margin-left: 15px;
        }
        .section h2 {
            margin-bottom: 
            color: #333;
        }
        .section p {
            color: #333;
            margin-left: 25px;
            text-align: justify;
        }
        .profile-picture {
            float: left;
            margin-right: 20px;
            margin-top: 5px;
            margin-left: 20px;
            background-color: #aad5f2; 
            padding: 5px;
            border-radius: 5px;
        }
        .profile-picture img {
            width: 150px;
            height: 150px;
            border: 2px solid black;
        }
        .highlight-list {
            margin-left: 20px;
        }
        .highlight-list li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="resume-container">
        <div class="resume">
            <div class="first-section">
                <div class="profile-picture">
                    <img src="1x1pic.jpg" alt="Profile Picture">
                </div>
                <h2><?php echo "AIAH NADINE Q. DELOS REYES"; ?></h2>
                <p><?php echo "0042 BE, J.P. Rizal Street, Asis 3, Mendez, Cavite 4121"; ?></p>
                <p><?php echo "0992 - 369 - 2695"; ?></p>
                <p><?php echo "aiahnadinedelosreyes@gmail.com"; ?></p>
            </div>


            <div class="section">
                <h3>OBJECTIVE</h3>
                <p><?php echo "To obtain an entry level in a challenging position to a 
                company witih proficiency in customer services and to enhance my skills 
                and develop my ability to work in a fast – paced environment."; ?></p>
            </div>


            <div class="section">
                <h3>HIGHLIGHT OF SKILLS</h3>
                <ul class="highlight-list">
                    <li>Highly organized</li>
                    <li>Motivated</li>
                    <li>Efficient</li>
                    <li>Team player</li>
                    <li>Work independently</li>
                    <li>Demonstrate good communication skills</li>
                </ul>
            </div>


            <div class="section">
                <h3>PERSONAL INFORMATION</h3>
                <p><?php echo "AGE: 21 years old"; ?></p>
                <p><?php echo "DATE OF BIRTH: December 16, 2002"; ?></p>
                <p><?php echo "PLACE OF BIRTH: Pasay, City"; ?></p>
                <p><?php echo "HEIGHT: 5'3"; ?></p>
                <p><?php echo "WEIGHT: 42kg"; ?></p>
                <p><?php echo "RELIGION: Catholic"; ?></p>
                <p><?php echo "CITIZENSHIP: Filipino"; ?></p>
                <p><?php echo "CIVIL STATUS: Single"; ?></p>
            </div>


            <div class="section">
                <h3>ABOUT ME</h3>
                <p><?php echo "Can speak both Filipino and English languages. Knowledgeable in OracleDB, MySQL, Intellij, Github, Git, Confluence, Jira, Php, C++, and Notepad++. 
                Awarded as student with Complete Attendance and Most Responsible for the school year 2018-2019. Also awarded as a bronze medalist for the school year 2019-2020.
                Been a dean's lister for the first and second semester of school year 2021-2022. Currently in third year college at Rogationist College in Silang, Cavite taking up 
                Bachelor of Science in Information Technology."; ?></p> 
            </div>

            
            <div class="section">
                <h3>HOBBIES</h3>
                <ul class="highlight-list">
                    <li>Reading</li>
                    <li>Crafting</li>
                    <li>Playing guitar and ukelele</li>
                    <li>Watching</li>
                    <li>Coding</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
