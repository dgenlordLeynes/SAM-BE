<!DOCTYPE html>
<html>

<head>
    <title>Island of Personalities</title>
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
            <a class="navbar-brand" href="#">Islands of Personality</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#islands">Islands</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header with image -->
    <header class="bgimg d-flex align-items-center text-center text-white" id="home">
        <div class="container">
            <h1 class="display-1">Dgenlord's Island Personalities</h1>
        </div>
    </header>

    <!-- About Section -->
    <section class="py-5" id="about">
        <div class="container">
            <h2 class="text-center mb-4">About the website</h2>
            <p>This website is dedicated to showcasing the unique islands of personality, inspired by the concept of Inside Out. Each island represents a different aspect of personality and is designed to provide an insight of my whole personality.</p>
            <p>The islands consist of 4 distinct personalities, each with its own unique characteristics and features. Each personality island contains 3 different types of content, offering a diverse range of information and activities for visitors to know about me.</p>
            <img src="https://i.pinimg.com/736x/a3/5c/61/a35c61f2825678dd6c9e9a497f7dc768.jpg" class="img-fluid mx-auto d-block" alt="Coffee Shop">
        </div>
    </section>

    <!-- Islands Section -->
    <section class="py-5" id="islands">
        <div class="container">
            <h2 class="text-center mb-4">Island Contents</h2>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php
                include 'connect.php';

                
                $sql = "SELECT * FROM islandsOfPersonality";
                $result = executeQuery($sql);
                $first = true;

                while ($row = mysqli_fetch_assoc($result)) {
                    $activeClass = $first ? 'active' : '';
                    echo '<li class="nav-item" role="presentation">';
                    echo '<a class="nav-link ' . $activeClass . '" id="' . $row['islandOfPersonalityID'] . '-tab" data-bs-toggle="tab" data-bs-target="#' . $row['islandOfPersonalityID'] . '" role="tab" aria-controls="' . $row['islandOfPersonalityID'] . '" aria-selected="' . ($first ? 'true' : 'false') . '">' . $row['name'] . '</a>';
                    echo '</li>';
                    $first = false;
                }
                ?>
            </ul>

            <!-- Tab content -->
            <div class="tab-content mt-3" id="myTabContent">
                <?php

                mysqli_data_seek($result, 0);

                while ($row = mysqli_fetch_assoc($result)) {
                    $islandID = $row['islandOfPersonalityID'];
                    echo '<div class="tab-pane fade' . ($islandID == 1 ? ' show active' : '') . '" id="' . $islandID . '" role="tabpanel" aria-labelledby="' . $islandID . '-tab">';
                    echo '<h5>' . $row['name'] . ' Contents</h5>';


                    $contentSql = "SELECT * FROM islandContents WHERE islandOfPersonalityID = $islandID";
                    $contentResult = executeQuery($contentSql);

                    echo '<div class="row">';
                    while ($contentRow = mysqli_fetch_assoc($contentResult)) {
                        echo '<div class="col-md-4 text-center mb-4">';
                        echo '<img src="' . $contentRow['image'] . '" class="img-fluid" alt="' . $contentRow['content'] . '">';
                        echo '<p>' . $contentRow['content'] . '</p>';
                        echo '</div>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
                ?>
               <a href="../index.html" class="btn btn-dark mt-3 mx-auto d-block">Go to Homepage</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4 bg-light">
        <p>&copy; 2024 Dgenlord's Website</p>
    </footer>
</body>

</html>