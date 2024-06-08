<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Exams | index page"; ?>
<?php require 'head.php'; ?>
<style>
    body {
        background-image: url('image/mca2.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">EDVANTIA INSIGHTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="exam.php">Exam</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login/logout</a>
      </li>
     
    </ul>

  </div>
</nav>
    <?php require 'header.php'; ?>

    <div class="container cont">


        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-5" style="width: 60%">
              
            </div>

            <div class="col-lg-9">
            <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-15 mb-10">
                <div class="card">
                    <div class="card-header text-center">NIMSET</div>
                     <!-- The slideshow -->
                        <div class="carousel-inner">
                     <div class="carousel-item active">
                     <ul class="navbar-nav ml-auto">
                     <div class="card-body">
                     NIMCET or National Institute of Technology MCA Common Entrance Test is the national-level MCA entrance exam conducted by the National Institute of Technology (NIT). NITs are institutes of national importance under the Ministry of Education, Government of India. NITs at Agartala, Allahabad, Bhopal, Jamshedpur, Kurukshetra, Raipur, Surathkal, Tiruchirappalli, and Warangal offer MCA program. The MCA admission 2022 into any of these 9 NITs is based on NIMCET rank
                    </div>
                    <div class="card-body">
                    </div>
                    <div class="card-body">
                    National Institutes of Technology (NITs) are Institutions of National Importance Under Ministry of Education, Govt. of India. The NIMCET is a Common Entrance National Level Test, conducted by any of the NITs, for admission in to their MCA programme. The MCA programme is offered by NITs at Agartala, Allahabad, Bhopal, Jamshedpur, Kurukshetra, Patna, Raipur, Surathkal, Tiruchirappalli and Warangal and IIIT Bhopal. The admission into the MCA programme for the year 2024-25 in above 09 NITs is based on the Rank obtained in NIMCET-2024 only..<br>

                    <div class="card-body">
                        If You want more information  <a href="login.php" target="_blank"> click here<a>
                    </div>



                    <!-- Add Download Button -->
                    <div class="card-body text-center">
                                <button id="downloadButton" class="btn btn-primary">Download PDF</button>
                            </div>

                            <!-- Like, Share, Comment Buttons -->
                            <div class="card-footer">
                                <button id="likeButton" class="btn btn-primary mr-2">Like</button>
                                <button id="shareButton" class="btn btn-success mr-2">Share</button>
                                <button id="commentButton" class="btn btn-info">Comment</button>
                                <span id="likeCount" class="ml-3">0 Likes</span>
                                <span id="shareCount" class="ml-3">0 Shares</span>
                                <span id="commentCount" class="ml-3">0 Comments</span>
                            </div>

                            <!-- Comment Section -->
                            <div id="commentSection" class="card-body">
                                <!-- Comments will be dynamically added here -->
                            </div>
                        </div>
                    </div>
                </div>
                    

                    

                </div>
            </div>
            
           

        <div class="row">
            <div class="col-lg-6 rounded mb-5">

            </div>
            <div class="col-lg-6 rounded mb-5">
                 </div>
        </div>

       

    <?php require 'footer.php'; ?>

    <script>
// Function to trigger file download
function downloadFile() {
    // Change 'path/to/your/file.pdf' to the actual path of your PDF file
    const fileUrl = "files/NIMCET.pdf";
    const fileName = 'NIMCET.pdf'; // Specify the file name

    const a = document.createElement('a');
    a.href = fileUrl;
    a.download = fileName;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}




    // Attach click event listener to the download button
    const downloadButton = document.getElementById('downloadButton');
    downloadButton.addEventListener('click', downloadFile);

    // Handling like, share, and comment interactions
    let likeCount = 0;
    let shareCount = 0;
    let commentCount = 0;

    const likeButton = document.getElementById('likeButton');
    const shareButton = document.getElementById('shareButton');
    const commentButton = document.getElementById('commentButton');

    const likeCountSpan = document.getElementById('likeCount');
    const shareCountSpan = document.getElementById('shareCount');
    const commentCountSpan = document.getElementById('commentCount');
    const commentSection = document.getElementById('commentSection');

    likeButton.addEventListener('click', () => {
        likeCount++;
        likeCountSpan.textContent = `${likeCount} Likes`;
    });

    shareButton.addEventListener('click', () => {
        shareCount++;
        shareCountSpan.textContent = `${shareCount} Shares`;
    });

    commentButton.addEventListener('click', () => {
        const comment = prompt('Enter your comment:');
        if (comment) {
            commentCount++;
            commentCountSpan.textContent = `${commentCount} Comments`;
            const newComment = document.createElement('div');
            newComment.textContent = comment;
            
            // Add delete button to each comment
            const deleteButton = document.createElement('button');
            deleteButton.textContent = 'Delete';
            deleteButton.className = 'btn btn-danger ml-2';
            deleteButton.onclick = function() {
                // Remove the comment and decrement the comment count
                commentSection.removeChild(newComment);
                commentCount--;
                commentCountSpan.textContent = `${commentCount} Comments`;
            };
            
            newComment.appendChild(deleteButton);
            commentSection.appendChild(newComment);
        }
    });
</script>
</body>
</html>