// Get the color picker input element and the checkbox for the gradient
const colorPicker = document.getElementById('colorPicker');
const addGradientCheckbox = document.getElementById('addGradient');

// Add event listener to listen for color changes
colorPicker.addEventListener('input', updateCoverColor);
addGradientCheckbox.addEventListener('change', updateCoverColor);

function updateCoverColor() {
    // Get the selected color value
    const selectedColor = colorPicker.value;

    // Check if the gradient checkbox is checked
    const includeGradient = addGradientCheckbox.checked;

    // Get the cover photo element
    const coverPhoto = document.querySelector('.cover-photo');

    // Set the background color based on whether the gradient should be included or not
    if (includeGradient) {
        coverPhoto.style.background = `linear-gradient(133deg, rgb(0, 0, 0) 0%, rgba(255, 255, 255, 0) 100%), ${selectedColor}`;
    } else {
        coverPhoto.style.background = selectedColor;
    }
}
