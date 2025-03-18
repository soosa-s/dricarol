<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Workshops & Faculty Development Programs Attended</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Workshop Title</th>
                    <th>Organizer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $workshops = [
                    ["Workshop on Cloud Computing Analytics", "St. Joseph’s College, Trichy"],
                    ["Prof. S. T. Rajan Endowment Workshop on React JS", "St. Joseph’s College, Trichy"],
                    ["Workshop on Project Management and R Language", "St. Joseph’s College, Trichy"],
                    ["Two-Day Faculty Development Workshop on Outcome-Based Education", "Don Bosco College, Yelagiri Hills"],
                    ["Workshop on Internet of Things and Its Applications", "St. Joseph’s College, Trichy"],
                    ["Two-Day Workshop on Data Mining Tools", "Jeyaram College of Engineering, Trichy"],
                    ["One-Day Workshop on Web Service Technology", "VIT Chennai Campus"],
                    ["One-Day Workshop on Research Methodology", "Bharathiar University"],
                    ["One-Day Workshop on Research Methodology", "Bharathidasan University"]
                ];

                foreach ($workshops as $index => $workshop) {
                    echo "<tr>
                            <td>" . ($index + 1) . "</td>
                            <td><strong>{$workshop[0]}</strong></td>
                            <td><strong>{$workshop[1]}</strong></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>
