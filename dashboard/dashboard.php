<?php
require_once 'includes/sidebar.php';
?>


<!-- Main Content -->
<div class="main-content">
    <div class="top-bar">
        <div class="page-title">
            <h4 id="page-title">Dashboard</h4> <!-- Default title for Dashboard page -->
        </div>
        <div class="logout-button">
            <a href="#" class="btn btn-danger">Logout</a> <!-- Link to logout page -->
        </div>
    </div>

    <!-- Cards -->
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Blogs</h5>
                    <p class="card-text" id="blogs-count">0</p> <!-- Space for total number of blogs -->
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Views</h5>
                    <p class="card-text" id="views-count">0</p> <!-- Space for total number of views -->
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Blogs Section -->
    <div class="latest-blogs">
        <h3 class="latest-blogs-heading">My Latest Blogs</h3>
        <ul class="list-unstyled" id="latest-blogs-list">
            <!-- Blog titles will be dynamically added here -->
            <li class="blog-item"><a href="#">Blog Title 1</a></li>
            <li class="blog-item"><a href="#">Blog Title 2</a></li>
            <li class="blog-item"><a href="#">Blog Title 3</a></li>
            <li class="blog-item"><a href="#">Blog Title 4</a></li>
            <li class="blog-item"><a href="#">Blog Title 5</a></li>
        </ul>
    </div>


</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>