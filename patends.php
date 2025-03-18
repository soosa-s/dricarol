<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/style.css">

<style>
    body {
        background: linear-gradient(135deg, #f8f9fa, #dde5f4);
    }

    .patent-card {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        padding: 20px;
    }

    .patent-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .patent-item {
        display: flex;
        align-items: center;
        padding: 15px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .patent-item:last-child {
        border-bottom: none;
    }

    .icon-circle {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 1.5rem;
        color: white;
        flex-shrink: 0;
    }

    .bg-blue { background: linear-gradient(135deg, #007bff, #0056b3); }
    .bg-yellow { background: linear-gradient(135deg, #ffc107, #e0a800); }
    .bg-purple { background: linear-gradient(135deg, #8A2BE2, #6A0DAD); } /* Changed Red to BlueViolet */

    .custom-color {
        color:rgb(245, 131, 116) !important; /* Custom BlueViolet Text */
    }

    .patent-badge {
        font-size: 0.9rem;
        padding: 8px 12px;
        border-radius: 15px;
        font-weight: bold;
        cursor: pointer;
    }

    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease-out forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card patent-card fade-in">
                <h2 class="text-center mb-4 text-primary fw-bold">🔬 Patents Received</h2>
                <div class="list-group">
                    <div class="list-group-item patent-item">
                        <div class="icon-circle bg-blue me-3">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div class="flex-grow-1">
                            <strong class="custom-color">Affordable Solar Assisted Neonatal Intensive Care Warmer</strong>
                        </div>
                        <span class="badge bg-success text-white ms-auto patent-badge" 
                              data-bs-toggle="tooltip" 
                              title="Patent No: 6315485">
                            6315485
                        </span>
                    </div>
                    <div class="list-group-item patent-item">
                        <div class="icon-circle bg-yellow me-3">
                            <i class="bi bi-lightbulb-fill"></i>
                        </div>
                        <div class="flex-grow-1">
                            <strong class="custom-color">IoT Controlled Clip Lamp for Keyboards and Computer Tables</strong>
                        </div>
                        <span class="badge bg-warning text-dark ms-auto patent-badge" 
                              data-bs-toggle="tooltip" 
                              title="Patent No: 393560-001">
                            393560-001
                        </span>
                    </div>
                    <div class="list-group-item patent-item">
                        <div class="icon-circle bg-purple me-3"> <!-- Changed Red to Purple -->
                            <i class="bi bi-cpu-fill"></i>
                        </div>
                        <div class="flex-grow-1">
                            <strong class="custom-color">Machine Learning-Based Fully Automated Brain Tumor Detection</strong>
                        </div>
                        <span class="badge bg-danger text-white ms-auto patent-badge" 
                              data-bs-toggle="tooltip" 
                              title="Patent No: 202341017944">
                            202341017944
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS for Tooltip -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Initialize Bootstrap Tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>

<?php include 'footer.php'; ?>
