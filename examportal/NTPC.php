<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Exams | index page"; ?>
<?php require 'head.php'; ?>
<style>
    body {
        background-image: url('image/rail3.jpg');
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
                    <div class="card-header text-center">RRB  NTPC Exam</div>
                     <!-- The slideshow -->
                        <div class="carousel-inner">
                     <div class="carousel-item active">
                     <ul class="navbar-nav ml-auto">
                     <div class="card-body">
                     One of the biggest recruitment Exams in India is the RRB NTPC exam, which is used to choose applicants for a variety of non-technical jobs in the Indian Railways.

To fill openings for roles like clerk, traffic assistant, goods guard, station master, commercial apprentice, and many more, the RRB NTPC exam is held. Since these jobs don’t call for specific technical training or credentials, they are categorized as non-technical.
                    </div>
                    <div class="card-body">
                    
                    The RRB NTPC (Non-Technical Popular Categories) exam is conducted by the Railway Recruitment Boards (RRBs) to recruit candidates for various non-technical and popular categories of posts in the Indian Railways. This exam is highly competitive and offers employment opportunities in clerical, commercial, and other non-technical roles within the railway sector. Here's an overview of the RRB NTPC exam
                    </div>
                    <div class="card-body">
                    The RRB NTPC exam opens doors to promising career opportunities in the Indian Railways. It offers job security, competitive salary, and opportunities for growth. Candidates should stay updated with the official RRB notifications, prepare thoroughly for the exams, and meet the eligibility criteria to succeed in this competitive recruitment process.<br>

                    <div class="card-body">
                        If You want more information  <a href="https://www.pw.live/exams/railway/rrb-ntpc/" target="_blank"> click here<a>
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

<!-- JavaScript to handle file download and interaction -->
<script>
// Function to trigger file download
function downloadFile() {
    // Change 'path/to/your/file.pdf' to the actual path of your PDF file
    const fileUrl = "files/RRB-NTPC.pdf";
    const fileName = 'RRB-NTPC.pdf'; // Specify the file name

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
