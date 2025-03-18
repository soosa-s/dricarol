<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books by Dr. I. Carol</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
        }
        .book-card {
            background-color: #f8f1e4; /* Light Beige */
            border: 1px solid #d2b48c; /* Soft Brown Border */
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .book-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
        .card-title {
            color:rgb(173, 224, 125); /* Dark Brown Title */
            font-weight: bold;
        }
        .card-text {
            color:rgb(146, 63, 118); /* Deep Brown for better contrast */
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4 text-dark">📚 Books by Dr. I. Carol</h2>
    
    <div class="row">
        <?php 
        $books = [
            ["title" => "IoT and Robotics: Foundations of Automation", "publisher" => "Leilani Katie Publications and Press", "isbn" => "978-93-6348-432-0", "year" => "2025"],
            ["title" => "Big Data Analytics & its Application", "publisher" => "Leilani Katie Publications and Press", "isbn" => "978-81-969944-7", "year" => "2024"],
            ["title" => "Android Programming: An Absolute Beginner’s Guide", "publisher" => "Self Publications, Kerala", "isbn" => "978-93-5 891-16", "year" => "2023"]
        ];

        foreach ($books as $book) {
            echo '<div class="col-md-4">
                    <div class="card book-card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title">' . $book['title'] . '</h5>
                            <p class="card-text"><strong>📖 Publisher:</strong> ' . $book['publisher'] . '</p>
                            <p class="card-text"><strong>📘 ISBN:</strong> ' . $book['isbn'] . '</p>
                            <p class="card-text"><strong>📅 Year:</strong> ' . $book['year'] . '</p>
                        </div>
                    </div>
                  </div>';
        }
        ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php include 'footer.php'; ?>
