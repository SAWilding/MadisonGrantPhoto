// Get all clickable images
const clickableImages = document.querySelectorAll(".clickable-image");

// Loop through each image
clickableImages.forEach((image, index) => {
  const overlay = document.getElementById(`overlay${index}`);
  const enlargedImage = overlay.querySelector(".enlarged-image");
  const closeButton = overlay.querySelector(`#close-button${index}`);

  image.addEventListener("click", function () {
    enlargedImage.src = image.src;
    enlargedImage.style.height = "auto";
    overlay.style.display = "flex";
  });

  closeButton.addEventListener("click", function () {
    overlay.style.display = "none";
  });
});
