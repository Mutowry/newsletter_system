<?php
require_once 'includes/sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- Main Content -->
    <div class="main-content">
        <div class="top-bar">
            <div class="page-title">
                <h4 id="page-title">Blogs</h4> <!-- Default title for Dashboard page -->
            </div>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#logoutModal"> <!-- Logout Button -->
                Logout
            </button>
        </div>

        <!-- Add Blog Button -->
        <div class="d-flex justify-content-end mb-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBlogModal">
                Add Blog
            </button>
        </div>

        <!-- Blog Cards -->
        <div class="row">
            <!-- Placeholder Blog Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="position-relative">
                    <div class="card-actions position-absolute" style="top: -10px; right: 10px;">
                        <a href="#" class="text-primary mr-2">Edit</a>
                        <a href="#" class="text-danger">Delete</a>
                    </div>
                    <div class="blog-card">
                        <img src="placeholder-image.jpg" class="blog-card-img-top" alt="Blog Image">
                        <div class="blog-card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="blog-card-text">A short preview of the blog content... </p>
                            <a href="#" class="btn btn-link">Read More</a> <!-- Link to the full blog post -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Placeholder Blog Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="position-relative">
                    <div class="card-actions position-absolute" style="top: -10px; right: 10px;">
                        <a href="#" class="text-primary mr-2">Edit</a>
                        <a href="#" class="text-danger">Delete</a>
                    </div>
                    <div class="blog-card">
                        <img src="placeholder-image.jpg" class="blog-card-img-top" alt="Blog Image">
                        <div class="blog-card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="blog-card-text">A short preview of the blog content... </p>
                            <a href="#" class="btn btn-link">Read More</a> <!-- Link to the full blog post -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Placeholder Blog Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="position-relative">
                    <div class="card-actions position-absolute" style="top: -10px; right: 10px;">
                        <a href="#" class="text-primary mr-2">Edit</a>
                        <a href="#" class="text-danger">Delete</a>
                    </div>
                    <div class="blog-card">
                        <img src="placeholder-image.jpg" class="blog-card-img-top" alt="Blog Image">
                        <div class="blog-card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="blog-card-text">A short preview of the blog content... </p>
                            <a href="#" class="btn btn-link">Read More</a> <!-- Link to the full blog post -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Placeholder Blog Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="position-relative">
                    <div class="card-actions position-absolute" style="top: -10px; right: 10px;">
                        <a href="#" class="text-primary mr-2">Edit</a>
                        <a href="#" class="text-danger">Delete</a>
                    </div>
                    <div class="blog-card">
                        <img src="placeholder-image.jpg" class="blog-card-img-top" alt="Blog Image">
                        <div class="blog-card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="blog-card-text">A short preview of the blog content... </p>
                            <a href="#" class="btn btn-link">Read More</a> <!-- Link to the full blog post -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Placeholder Blog Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="position-relative">
                    <div class="card-actions position-absolute" style="top: -10px; right: 10px;">
                        <a href="#" class="text-primary mr-2">Edit</a>
                        <a href="#" class="text-danger">Delete</a>
                    </div>
                    <div class="blog-card">
                        <img src="placeholder-image.jpg" class="blog-card-img-top" alt="Blog Image">
                        <div class="blog-card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="blog-card-text">A short preview of the blog content... </p>
                            <a href="#" class="btn btn-link">Read More</a> <!-- Link to the full blog post -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Placeholder Blog Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="position-relative">
                    <div class="card-actions position-absolute" style="top: -10px; right: 10px;">
                        <a href="#" class="text-primary mr-2">Edit</a>
                        <a href="#" class="text-danger">Delete</a>
                    </div>
                    <div class="blog-card">
                        <img src="placeholder-image.jpg" class="blog-card-img-top" alt="Blog Image">
                        <div class="blog-card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="blog-card-text">A short preview of the blog content... </p>
                            <a href="#" class="btn btn-link">Read More</a> <!-- Link to the full blog post -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Placeholder Blog Card 7 -->
            <div class="col-md-4 mb-4">
                <div class="position-relative">
                    <div class="card-actions position-absolute" style="top: -10px; right: 10px;">
                        <a href="#" class="text-primary mr-2">Edit</a>
                        <a href="#" class="text-danger">Delete</a>
                    </div>
                    <div class="blog-card">
                        <img src="placeholder-image.jpg" class="blog-card-img-top" alt="Blog Image">
                        <div class="blog-card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="blog-card-text">A short preview of the blog content... </p>
                            <a href="#" class="btn btn-link">Read More</a> <!-- Link to the full blog post -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Placeholder Blog Card 8 -->
            <div class="col-md-4 mb-4">
                <div class="position-relative">
                    <div class="card-actions position-absolute" style="top: -10px; right: 10px;">
                        <a href="#" class="text-primary mr-2">Edit</a>
                        <a href="#" class="text-danger">Delete</a>
                    </div>
                    <div class="blog-card">
                        <img src="placeholder-image.jpg" class="blog-card-img-top" alt="Blog Image">
                        <div class="blog-card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="blog-card-text">A short preview of the blog content... </p>
                            <a href="#" class="btn btn-link">Read More</a> <!-- Link to the full blog post -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Placeholder Blog Card 9 -->
            <div class="col-md-4 mb-4">
                <div class="position-relative">
                    <div class="card-actions position-absolute" style="top: -10px; right: 10px;">
                        <a href="#" class="text-primary mr-2">Edit</a>
                        <a href="#" class="text-danger">Delete</a>
                    </div>
                    <div class="blog-card">
                        <img src="placeholder-image.jpg" class="blog-card-img-top" alt="Blog Image">
                        <div class="blog-card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="blog-card-text">A short preview of the blog content... </p>
                            <a href="#" class="btn btn-link">Read More</a> <!-- Link to the full blog post -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Blog Modal -->
    <div class="modal fade" id="addBlogModal" tabindex="-1" aria-labelledby="addBlogModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBlogModalLabel">New Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="blogTitle">Title</label>
                        <input type="text" class="form-control" id="blogTitle" placeholder="Title">
                    </div>

                    <div class="form-group">
                        <label for="featuredImage">Featured Image</label>
                        <input type="file" class="form-control-file" id="featuredImage">
                    </div>

                    <div class="form-group">
                        <label for="blogContent">Story</label>
                        <textarea name="blogContent" id="blogContent" class="form-control" rows="6"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Blog</button>
                </div>
            </div>
        </div>
    </div>

    <!-- CKEditor 5 Integration (via PHP-generated JS) -->
    <?php
    echo '<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>';
    echo '<script>
        ClassicEditor
            .create(document.querySelector("#blogContent"))
            .catch(error => {
                console.error(error);
            });
        </script>';
    ?>

    <!-- Logout Confirmation Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to log out?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="../index.php" class="btn btn-primary">Logout</a> <!-- Replace 'logout.php' with your actual logout script -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>