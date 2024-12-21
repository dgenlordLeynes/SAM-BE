<!DOCTYPE html>
<html>

<head>
    <title>The Cafe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body,
        html {
            height: 100%;
            font-family: "Inconsolata", sans-serif;
            background-color: burlywood;
        }

        .bgimg {
            background-position: center;
            background-size: cover;
            background-image: url("https://i.pinimg.com/originals/69/24/07/6924077c26b44568acf9a2a666cd5682.gif");
            min-height: 75%;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">The Cafe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header with image -->
    <header class="bgimg d-flex align-items-center text-center text-white" id="home">
        <div class="container">
            <h1 class="display-1">Dgenlord's Island Personalities</h1>
            <p class="lead">15 Adr Street, 5015</p>
        </div>
    </header>

    <!-- About Section -->
    <section class="py-5" id="about">
        <div class="container">
            <h2 class="text-center mb-4">About The Cafe</h2>
            <p>The Cafe was founded by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>We serve fresh made-to-order breakfast and lunch sandwiches, sides, salads, and more.</p>
            <blockquote class="blockquote text-center">
                <p class="mb-5">"Use products from nature for what it's worth - but never too early, nor too late. Fresh
                    is the new sweet."</p>
                <footer class="blockquote-footer">Chef, Coffeeist, and Owner: Liam Brown</footer>
            </blockquote>
            <img src="https://i.pinimg.com/736x/a3/5c/61/a35c61f2825678dd6c9e9a497f7dc768.jpg" class="img-fluid mt-3" alt="Coffee Shop">
            <p><strong>Opening hours:</strong> Everyday from 6am to 5pm</p>
            <p><strong>Address:</strong> 15 Adr Street, 5015, NY</p>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="py-5 bg-light" id="menu">
        <div class="container">
            <h2 class="text-center mb-4">The Menu</h2>
            <ul class="nav nav-tabs justify-content-center" id="menuTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="eat-tab" data-bs-toggle="tab" data-bs-target="#eat"
                        type="button" role="tab">Eat</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="drink-tab" data-bs-toggle="tab" data-bs-target="#drink" type="button"
                        role="tab">Drink</button>
                </li>
            </ul>
            <div class="tab-content mt-4">
                <div class="tab-pane fade show active" id="eat" role="tabpanel">
                    <h5>Bread Basket</h5>
                    <p>Assortment of fresh baked fruit breads and muffins $5.50</p>
                    <h5>Honey Almond Granola</h5>
                    <p>Natural cereal of honey toasted oats, raisins, almonds, and dates $7.00</p>
                    <h5>Belgian Waffle</h5>
                    <p>Vanilla flavored batter with malted flour $7.50</p>
                </div>
                <div class="tab-pane fade" id="drink" role="tabpanel">
                    <h5>Coffee</h5>
                    <p>Regular coffee $2.50</p>
                    <h5>Chocolato</h5>
                    <p>Chocolate espresso with milk $4.50</p>
                </div>
                <div class="tab-pane fade" id="3" role="tabpanel">
                    <h5>Coffee</h5>
                    <p>Regular coffee $2.50</p>
                    <h5>Chocolato</h5>
                    <p>Chocolate espresso with milk $4.50</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4 bg-light">
        <p>&copy; 2024 Dgenlords's Website</p>
    </footer>
</body>

</html>