const fs = require("fs");
const path = require("path");

const imageDir = path.join(__dirname, "img", "Gal");
const outputFile = path.join(__dirname, "image-list.json");

fs.readdir(imageDir, (err, files) => {
  if (err) {
    console.error("Error reading directory:", err);
    return;
  }

  console.log("Files in directory:", files); // Log the files array

  // Filter to only include image files
  const imageFiles = files.filter((file) => /\.(jpg|jpeg|png|gif)$/.test(file));

  console.log("Filtered image files:", imageFiles); // Log the filtered image files

  // Write the list to a JSON file
  fs.writeFile(outputFile, JSON.stringify(imageFiles, null, 2), (err) => {
    if (err) {
      console.error("Error writing JSON file:", err);
    } else {
      console.log("Image list saved to image-list.json");
    }
  });
});
