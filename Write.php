<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.gstatic.com" rel="preconnect"/>
    <link
            href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
            rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Document</title>
  </head>
  <body>
    <?php
      include './fragments/header.php';
      ?>

    <div class="container">
      <form action="create_post.php" method="post">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input
          type="email"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Title of your blog..(10-255 characteres)"
        />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >Sub-title</label
        >
        <input
          type="email"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Sub-title of your blog..(10-300 characteres)"
        />
      </div>
      <form>
        <div class="form-group">
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="option"
              id="option1"
              value="option1"
            />
            <label class="form-check-label" for="option1">DevOps</label>
          </div>

          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="option"
              id="option2"
              value="option2"
            />
            <label class="form-check-label" for="option2">Data Science</label>
          </div>

          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="option"
              id="option3"
              value="option3"
            />
            <label class="form-check-label" for="option3"
              >Web Development</label
            >
          </div>

          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="option"
              id="option4"
              value="option4"
            />
            <label class="form-check-label" for="option4">Cloud Cmputing</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="option"
              id="option4"
              value="option4"
            />
            <label class="form-check-label" for="option4">cyber security</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="option"
              id="option4"
              value="option4"
            />
            <label class="form-check-label" for="option4"
              >Artificial Intelligence</label
            >
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="option"
              id="option4"
              value="option4"
            />
            <label class="form-check-label" for="option4">Networking</label>
          </div>

      <input type="file" id="file" accept="image/*" hidden />
          <div class="img-area" data-img="">
            <i class="bx bxs-cloud-upload icon"></i>
            <h3>Upload Image</h3>
            <p>Image size must be less than <span>2MB</span></p>
          </div>
          <button class="btn btn-primary btn-lg select-image">Select Image</button>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Tell Your Story...</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-primary btn-lg select-image">Publish</button>
    </form>
      </div>

    <footer class="footer">
      <div class="container grid grid--footer">
        <div class="logo-col">
          <p class="copyright"">
            Copyright &copy; 2023 <br> by Khalil and Mouadh, <br>All rights reserved.
          </p>
        </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
