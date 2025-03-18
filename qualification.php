<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #ffffff; /* White background */
            font-size: 14px; /* Improved readability */
        }
        
        /* Card Styling */
        .card {
            background-color: #f8f9fa; /* Uniform card color */
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Heading Styling */
        .card-title {
            color: #212529;
            font-size: 18px;
            font-weight: bold;
        }

        .card-text {
            color: #333;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <!-- Left Column -->
        <div class="col-md-6">
            <div class="card mb-4">
                <h2 class="card-title">Education</h2>
                <div class="card-text">
                    <p><strong>Doctorate of Philosophy in Computer Science</strong> (2012-2016)<br>
                    <span class="text-danger">Bharathidasan University, Tiruchirappalli.</span></p>

                    <p><strong>Master of Philosophy in Computer Science</strong> (2009-2010) - First Class with Distinction<br>
                    <span class="text-success">St. Joseph’s College (Autonomous), Tiruchirappalli.</span></p>

                    <p><strong>Master of Computer Applications</strong> (2006-2009) - First Class<br>
                    <span class="text-warning">St. Joseph’s College (Autonomous), Tiruchirappalli.</span></p>
                </div>
            </div>

            <div class="card mb-4">
                <h2 class="card-title">Projects Guided</h2>
                <p class="card-text text-danger">Guided projects for B.Sc. (CS), M.Sc. (CS), BCA, and MCA students.</p>
            </div>

            <div class="card mb-4">
                <h2 class="card-title">Curriculum Development</h2>
                <ul class="card-text">
                    <li>Python</li>
                    <li>Fundamentals of Programming</li>
                    <li>MANET</li>
                    <li>C#.Net</li>
                    <li>Digital Marketing</li>
                </ul>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-6">
            <div class="card mb-4">
                <h2 class="card-title">Experience</h2>
                <p class="card-text">
                    <strong>Assistant Professor</strong> (July 2016 – Present)<br>
                    <span class="text-info">Department of Information Technology, St. Joseph’s College, Tiruchirappalli.</span>
                </p>
                <p class="card-text">
                    <strong>Assistant Professor</strong> (June 2010 – April 2012)<br>
                    <span class="text-secondary">Department of Computer Science, St. Joseph’s College, Tiruchirappalli.</span>
                </p>
            </div>

            <div class="card mb-4">
                <h2 class="card-title">Research Interests</h2>
                <ul class="card-text">
                    <li>Web Mining</li>
                    <li>Machine Learning</li>
                    <li>Analytics</li>
                    <li>Cloud Computing</li>
                </ul>
            </div>

            <div class="card mb-4">
                <h2 class="card-title">Awards</h2>
                <ul class="card-text">
                    <li>Outstanding Performance Award in MCA.</li>
                    <li>“Excellence Award for Best Faculty” from Spirituality and Education Intellectual Research Center, Chennai.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

<?php include 'footer.php'; ?>
</body>
</html>
