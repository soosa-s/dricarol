<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" href="assets/style.css">

<style>
    /* Table Styling */
    
    
    .styled-table {
        border-collapse: collapse;
        width: 100%;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    /* Table Header */
    .styled-table thead {
        position: sticky;
        top: 0;
        background-color: #0056b3; /* Dark Blue */
        color: white;
        z-index: 10;
    }
    .styled-table th, .styled-table td {
        padding: 12px;
        text-align: left;
    }
    /* Row Colors */
    .styled-table tbody tr:nth-child(even) {
        background-color: #e3f2fd; /* Light Blue */
    }
    .styled-table tbody tr:nth-child(odd) {
        background-color: #f8f9fa; /* Light Grey */
    }
    .styled-table tbody tr:hover {
        background-color: #d0ebff; /* Hover Effect */
        transition: 0.3s;
    }
    /* Uniform Text Color */
    .conference-text {
        color: #007bff; /* Royal Blue */
        font-weight: bold;
    }
</style>

</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4 text-primary">🎓 Conferences Attended</h2>

        <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Conference Title</th>
                        <th>Location</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $conferences = [
                            ["title" => "National Conference on Mobile Technologies, Big Data & Data Analytics", "location" => "Sri Sai Bharath College of Arts and Science", "date" => "02 February 2018"],
                            ["title" => "National Conference on Mobile Technologies, Big Data & Data Analytics", "location" => "Srimad Andavan Arts and Science College, Trichy", "date" => "24 January 2018"],
                            ["title" => "2nd World Conference on Computing and Communication Technologies", "location" => "IEEE, Trichy", "date" => "02-04 February 2017"],
                            ["title" => "International Conference on Contemporary Computing and Informatics (IC3I)", "location" => "IEEE, Mysore", "date" => "27-29 November 2015"],
                            ["title" => "World Congress on Computing and Communication Technologies", "location" => "Trichy", "date" => "27 February - 1 March 2014"],
                            ["title" => "International Conference on Recent Trends in Computer Applications", "location" => "Hindustan College of Arts and Science, Chennai", "date" => "27-28 September 2013"],
                            ["title" => "International Conference on Emerging Trends in Information Technology (ICETIT)", "location" => "Dr. MGR Janaki Arts & Science College, Chennai", "date" => "5 October 2012"],
                            ["title" => "National Conference on LNICST", "location" => "Bangalore", "date" => "2-4 January 2012"]
                        ];

                        $i = 1;
                        foreach ($conferences as $conf) {
                            echo "
                                <tr>
                                    <td class='conference-text'>{$i}</td>
                                    <td class='conference-text'>{$conf['title']}</td>
                                    <td class='conference-text'>{$conf['location']}</td>
                                    <td class='conference-text'>{$conf['date']}</td>
                                </tr>";
                            $i++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php include 'footer.php'; ?>
