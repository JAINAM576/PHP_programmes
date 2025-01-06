<?php include 'header.php'; ?>
    <div class="jumbotron text-center bg-cover text-white" style="background-image: url('img/india-heritage.jpg'); height: 400px; background-position: center;">
        <h1 class="display-4 font-weight-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.6);">Explore India's Rich Cultural Heritage</h1>
        <p class="lead" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.5);">Discover the ancient monuments, vibrant temples, and modern architectural marvels that make India truly unique.</p>
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-4 font-weight-bold" style="color: #2c3e50;">Explore by Category</h2>
        <div class="row">

            <!-- Card 1: Ancient Monuments & Forts -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0" style="border-radius: 10px;">
                    <img src="img/Monuments/agra_fort.jpeg" class="card-img-top head_image" alt="Agra Fort">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-primary">Ancient Monuments & Forts</h5>
                        <p class="card-text">Explore the monumental forts and ancient heritage sites that shaped India's history.</p>
                        <a href="ancient.php" class="btn btn-outline-primary btn-block">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Cave Temples and Rock Art -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0" style="border-radius: 10px;">
                    <img src="img/Caves/ajanta.jpeg" class="card-img-top head_image" alt="Ajanta Caves">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-primary">Cave Temples and Rock Art</h5>
                        <p class="card-text">Discover the artistry and religious devotion carved into India's ancient rock-cut temples.</p>
                        <a href="caves.php" class="btn btn-outline-primary btn-block">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Temples & Religious Sites -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0" style="border-radius: 10px;">
                    <img src="img/Temples/Sun.jpeg" class="card-img-top head_image" alt="Konark Sun Temple">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-primary">Temples & Religious Sites</h5>
                        <p class="card-text">Explore the magnificent temples of India, representing centuries of spiritual devotion.</p>
                        <a href="temples.php" class="btn btn-outline-primary btn-block">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Card 4: Modern & Unique Sites -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0" style="border-radius: 10px;">
                    <img src="img/Modern/Historic.jpeg" class="card-img-top head_image" alt="Chhatrapati Shivaji Terminus">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-primary">Modern & Unique Sites</h5>
                        <p class="card-text">India's contributions to modern architecture and engineering continue to inspire the world.</p>
                        <a href="modern.php" class="btn btn-outline-primary btn-block">Learn More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
  .card {
    transition: transform 0.3s, box-shadow 0.3s;
    border-radius: 10px;
}

.card:hover {
    transform: scale(1.08);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.bg-cover {
    background-size: cover;
    background-position: center center;
}

.head_image {
    height: 220px;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.btn-outline-primary {
    border-color: #1abc9c;
    color: #1abc9c;
    transition: background-color 0.3s, color 0.3s;
}

.btn-outline-primary:hover {
    background-color: #1abc9c;
    color: white;
}

.jumbotron {
    background-size: cover;
    background-position: center;
    height: 400px;
    position: relative;
}

.jumbotron::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
}

.jumbotron h1, .jumbotron p {
    position: relative;
    z-index: 2;
}

.jumbotron h1 {
    font-size: 3rem;
    font-weight: 700;
    color: #fff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
}

.jumbotron p {
    font-size: 1.2rem;
    color: #ddd;
}


    </style>

<?php include 'footer.php'; ?>
