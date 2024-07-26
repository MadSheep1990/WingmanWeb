<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>

  <?php include("navbar.php") ?>

  <div class="container">
    <div id="listImg" style="margin-top: 90px; margin-bottom: 65px">
      <div class="row">
        <?php
        $directory = 'img/Gal';
        $jpgImages = glob($directory . "/*.jpg");
        $pngImages = glob($directory . "/*.png");
        $gifImages = glob($directory . "/*.gif");

        // Merge all image arrays
        $images = array_merge($jpgImages, $pngImages, $gifImages);

        $columnsPerRow = 6;
        $index = 0; // Initialize index variable

        foreach ($images as $image) {
          if ($index % $columnsPerRow === 0 && $index != 0) {
            echo '</div><div class="row">';
          }

          // Generate a unique ID for each image
          $imageId = 'img' . $index;
          echo '<div class="col col-xl-2 col-md-4 col-12 p-2 d-flex justify-content-center align-items-center">';
          echo '<img id="' . $imageId . '" src="' . $image . '" alt="Gallery Image" class="img-thumbnail" style="cursor:pointer;width:100%;height:auto;margin:5px;">';
          echo '</div>';

          $index++;
        }
        ?>
      </div>
    </div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="imageModalLabel">Image</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-flex justify-content-center align-items-center">
            <img id="modalImage" src="" alt="Full-size image" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Include Popper.js and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const imageIds = Array.from(document.querySelectorAll('#listImg img')).map(img => img.id);

      imageIds.forEach(id => {
        const imgElement = document.getElementById(id);
        imgElement.addEventListener('click', () => {
          const modalImage = document.getElementById('modalImage');
          modalImage.src = imgElement.src; // Set the modal image source

          // Initialize the modal
          const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
          imageModal.show(); // Show the modal
        });
      });
    });
  </script>
  <!-- <script>
    document.addEventListener("DOMContentLoaded", () => {
      // Fetch the image list JSON file
      fetch("image-list.json")
        .then((response) => response.json())
        .then((imageFiles) => {
          const basePath = "img/Gal/"; // Adjust if necessary
          const listImgDiv = document.getElementById("listImg");

          const columnsPerRow = 6; // Number of columns per row
          let rowDiv;

          imageFiles.forEach((file, index) => {
            // Create a new row if index is at the start of a new row
            if (index % columnsPerRow === 0) {
              rowDiv = document.createElement("div");
              rowDiv.className = "row";
              listImgDiv.appendChild(rowDiv);
            }

            // Create a new column and image
            const colDiv = document.createElement("div");
            colDiv.className = "col col-xl-2 col-md-4 col-12 m-auto border";

            const imgElement = document.createElement("img");
            imgElement.src = basePath + file;
            imgElement.alt = file;
            imgElement.style.width = "100%"; // Ensures image scales with column width

            imgElement.addEventListener("click", () => {
              const modalImage = document.getElementById("modalImage");
              modalImage.src = imgElement.src; // Set the modal image source
              const imageModal = new bootstrap.Modal(
                document.getElementById("imageModal")
              );
              imageModal.show(); // Show the modal
            });

            colDiv.appendChild(imgElement);
            rowDiv.appendChild(colDiv);
          });
        })
        .catch((error) => console.error("Error fetching image list:", error));
    });
  </script> -->
  <?php
  include('footer.php');
  ?>
</body>


</html>