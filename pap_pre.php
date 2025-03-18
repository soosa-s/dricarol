<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal Publications - Dr. I. Carol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1300px;
            margin-top: 50px;
        }
        .card {
            border-left: 5px solid #007bff;
            transition: all 0.3s ease-in-out;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .card:hover {
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            transform: scale(1.02);
        }
        .card-body {
            padding: 15px;
        }
        .journal-title {
            font-style: italic;
            color: #555;
        }
        .search-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Journal Publications</h2>

    <!-- Search Options -->
    <div class="row search-container">
        <div class="col-md-6">
            <input type="text" id="searchTitle" class="form-control" placeholder="Search by Title or Publication...">
        </div>
        <div class="col-md-4">
            <select id="searchYear" class="form-select">
                <option value="">Search by Year</option>
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-secondary w-100" onclick="clearFilters()">Clear</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" id="publicationsContainer">

            <?php 
           $publications = [
            ["I. Carol", "Advancing Data Security in Cloud Computing: A Comprehensive Exploration of Quantum-Secure Variant of Fully Homomorphic Encryption Technique", "Journal of Cuestiones De Fisioterapia, Vol. 54, No. 3, 2025"],
            ["I. Carol", "Comparative Survey of Random Forest and Decision Tree in Predictive Analytic", "Journal of Emerging Technologies and Innovative Research (JETIR), Volume 9, pp. 367-378, Feb 2022"],
            ["I. Carol", "Survey on IoT-Based Heart Attack Prediction", "International Journal of Advanced Research in Computer and Communication Engineering, Volume 9, pp. 161-164, Dec 2020"],
            ["I. Carol", "A Survey on Blockchain Parameters and Challenges for Heart Disease", "International Journal of Advanced Research in Computer and Communication Engineering, Volume 9, pp. 197-200, Nov 2020"],
            ["I. Carol", "Learning Techniques - Classification of Insulin Dependent Diabetes Mellitus Among Adults", "International Journal of Research in Engineering, Science and Management, Volume 3, pp. 61-64, Nov 2020"],
            ["I. Carol", "Cloud Environment For Classification Based Communication System", "International Journal For Research & Development In Technology, Volume 11, pp. 81-84, Nov 2019"],
            ["I. Carol and S. Britto Ramesh Kumar", "Comparative Study of Conflict Identification and Resolution in Heterogeneous Data sources", "International Conference on Computer Networks and Inventive Communication Technologies (ICCNCT - 2018), Springer (Scopus Indexed), 2018"],
            ["I. Carol and S. Britto Ramesh Kumar", "Data Fusion Using Conflict Identification Methods for Knowledge Mining Based Repository Creation", "International Journal of Advanced Research In Computer And Communication Engineering, Volume 5, Number 2, pp. 436-441, February 2016"],
            ["I. Carol and S. Britto Ramesh Kumar", "Learning Behavior Analysis Using Data Mining Techniques", "International Journal of Applied Engineering Research (Scopus Indexed), Volume 10, Number 82, pp. 532-537, December 2015"],
            ["I. Carol and S. Britto Ramesh Kumar", "Conflict Resolution and Duplicate Elimination in Heterogeneous Datasets Using Unified Data Retrieval Techniques", "Indian Journal of Science and Technology (Scopus Indexed), Volume 8, Issue 22, Pages: 1-6, September 2015"],
            ["I. Carol and S. Britto Ramesh Kumar", "Feedback Based Conflict Identification and Resolution Using Duplicate Elimination and Ranking Techniques", "International Journal of Computers & Technology, June 2015"],
            ["I. Carol and S. Britto Ramesh Kumar", "Conflict Identification and Resolution in Heterogeneous Datasets: A Comprehensive Survey", "International Journal of Computer Applications (0975 – 8887), Volume 113 – No. 12, March 2015"],
            ["I. Carol and S. Britto Ramesh Kumar", "Inconsistency Resolution and Joint Information Extraction from Multiple Data Sources", "International Journal of Advanced Research in Computer and Communication Engineering, ISSN (Online): 2278-1021, ISSN (Print): 2319-5940, Vol. 3, Issue 7, July 2014"],
            ["I. Carol", "A Cloud Model for Effective E-Learning", "World Congress on Computing and Communication Technologies, Feb 2014"],
            ["I. Carol and S. Britto Ramesh Kumar", "Categorization of Metabolic Syndrome X Among Adults Using Learning Techniques", "CiiT - International Journal of Data Mining and Knowledge Engineering, DOI: DMKE052013003, India, May 2013"],
            ["I. Carol, L. Arockiam, and S. Charles", "Deriving Association Between Urban and Rural Students' Programming Skills", "International Journal on Computer Science and Engineering (IJCSE), Vol. 2, No. 3, pp. 687-690, 2010"]
        ];

            foreach ($publications as $pub) {
                // Extracting year from the last element (publication details)
                preg_match('/\b(19|20)\d{2}\b/', $pub[2], $yearMatch);
                $year = $yearMatch[0] ?? "Unknown";

                echo '<div class="card mb-3 publication-card" data-year="'.$year.'">
                        <div class="card-body">
                            <h6 class="card-title"><strong>'.$pub[0].'</strong></h6>
                            <p class="card-text">"'.$pub[1].'"</p>
                            <p class="journal-title">'.$pub[2].'</p>
                        </div>
                      </div>';
            }
            ?>

        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        populateYearFilter();
        document.getElementById("searchTitle").addEventListener("input", filterPublications);
        document.getElementById("searchYear").addEventListener("change", filterPublications);
    });

    function populateYearFilter() {
        let years = [...new Set([...document.querySelectorAll('.publication-card')].map(card => card.dataset.year))];
        years.sort((a, b) => b - a);  // Sorting in descending order

        let yearSelect = document.getElementById("searchYear");
        years.forEach(year => {
            let option = document.createElement("option");
            option.value = year;
            option.textContent = year;
            yearSelect.appendChild(option);
        });
    }

    function filterPublications() {
        let searchText = document.getElementById("searchTitle").value.toLowerCase();
        let selectedYear = document.getElementById("searchYear").value;
        let cards = document.querySelectorAll(".publication-card");

        cards.forEach(card => {
            let title = card.querySelector(".card-text").textContent.toLowerCase();
            let year = card.dataset.year;

            let matchesTitle = title.includes(searchText);
            let matchesYear = selectedYear === "" || year === selectedYear;

            if (matchesTitle && matchesYear) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }

    function clearFilters() {
        document.getElementById("searchTitle").value = "";
        document.getElementById("searchYear").value = "";
        filterPublications();
    }
</script>

</body>
</html>

<?php include 'footer.php'; ?>
