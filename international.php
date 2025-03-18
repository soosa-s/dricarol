<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> International Conference Proceedings Publications</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #e3f2fd; /* Light blue background */
        }
        .container {
            margin-top: 50px;
            max-width: 1000px;
        }
        .card {
            margin-bottom: 20px;
            border-left: 5px solid #6a1b9a; /* Purple left border */
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: #6a1b9a; /* Purple card title */
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4 text-primary"> International Conference Proceedings Publications</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Resolving Data Inconsistency in Data Integration</h5>
            <p class="card-text"><strong>I. Carol and S. Britto Ramesh Kumar</strong></p>
            <p>2014 International Conference on Contemporary Computing and Informatics (IC3I), IEEE, 978-1-4799-6629-5/14, 2014.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">A Recommender System for Sweaty Sock Syndrome</h5>
            <p class="card-text"><strong>I. Carol and S. Britto Ramesh Kumar</strong></p>
            <p>CCSIT 2012, Part I, LNICST 84, pp. 90–96, Springer.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">A Survey on Web Mining</h5>
            <p class="card-text"><strong>I. Carol</strong></p>
            <p>International Conference on Recent Trends in Computer Applications, Hindustan College of Arts and Science, Chennai, 2013.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Determination of Metabolic Disorder among Adults Using Supervised Learning Techniques</h5>
            <p class="card-text"><strong>I. Carol and C. Lalitha</strong></p>
            <p>International Conference on Emerging Trends in Information Technology (ICETIT), Dr. MGR Janaki Arts & Science College, Chennai, ISBN: 978-93-81899-21-2, 2012.</p>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>

</body>
</html>
