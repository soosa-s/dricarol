<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- Include Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f4f4f9;
    }

    .event-container {
        max-width: 1000px; /* Reduced Card Size */
        margin: auto;
    }

    .event-card {
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .event-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    }

    .event-header {
        padding: 15px;
        background: #1a237e; /* Dark Royal Blue */
        color: #ffeb3b; /* Gold Accent */
        text-align: center;
        font-size: 1.5rem;
        font-weight: bold;
        border-radius: 12px 12px 0 0;
    }

    .event-item {
        display: flex;
        align-items: center;
        background: white;
        padding: 14px;
        margin-bottom: 8px;
        border-left: 5px solid #1a237e;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
    }

    .event-item:hover {
        background-color: #e3f2fd;
        transform: scale(1.02);
    }

    .event-icon {
        font-size: 1.8rem;
        margin-right: 12px;
        color: #1a237e;
    }

    .event-text strong {
        font-size: 1.1rem;
        color: #1a237e;
    }

    .event-text span {
        color: #6c757d;
        font-size: 0.9rem;
    }
</style>

<div class="container my-5">
    <div class="event-container">
        <div class="card shadow-lg event-card">
            <div class="event-header">
                🎤 Workshops & Talks
            </div>
            <div class="card-body">
                <div class="event-item">
                    <i class="bi bi-calendar-event event-icon"></i>
                    <div class="event-text">
                        <strong>Workshop on “Cloud and IoT”</strong>  
                        <br> Hosted at <strong>Dhanalakshmi Srinivasan Engineering College, Perambalur</strong>  
                        <br><span>📅 4th November 2024</span>
                    </div>
                </div>

                <div class="event-item">
                    <i class="bi bi-chat-square-text event-icon"></i>
                    <div class="event-text">
                        <strong>Special Talk on “From Theory to Reality: The Impact of AI and Machine Learning”</strong>  
                        <br> Delivered at <strong>Arul Anandar College (National Seminar), Madurai</strong>  
                        <br><span>📅 29th February 2024</span>
                    </div>
                </div>

                <div class="event-item">
                    <i class="bi bi-bullseye event-icon"></i>
                    <div class="event-text">
                        <strong>Inaugural Address on “Industry 4.0”</strong>  
                        <br> Given at <strong>St. Joseph’s College, Trichy</strong>  
                        <br><span>📅 2nd December 2020</span>
                    </div>
                </div>

                <div class="event-item">
                    <i class="bi bi-lightbulb event-icon"></i>
                    <div class="event-text">
                        <strong>Special Talk on “Disruptive Technologies”</strong>  
                        <br> Conducted at <strong>St. Joseph’s College, Trichy</strong>  
                        <br><span>📅 10th December 2019</span>
                    </div>
                </div>

                <div class="event-item">
                    <i class="bi bi-pc-display event-icon"></i>
                    <div class="event-text">
                        <strong>Workshop on “Data Mining”</strong>  
                        <br> Hosted at <strong>Jeyaram Engineering College, Trichy</strong>
                    </div>
                </div>

                <div class="event-item">
                    <i class="bi bi-flag event-icon"></i>
                    <div class="event-text">
                        <strong>Inaugural Address on “TechNet - Computer Science”</strong>  
                        <br> Delivered at <strong>National Seminar, Hayagriva Arts and Science College, Dindigul</strong>  
                        <br><span>📅 9th August 2018</span>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php include 'footer.php'; ?>
