// This file contains JavaScript functions for client-side validation of the form in Settings.php and any interactive features needed for the project.

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('settingsForm');

    form.addEventListener('submit', function(event) {
        let isValid = true;

        // Validate Name
        const name = document.getElementById('name').value;
        if (name.trim() === '') {
            isValid = false;
            alert('Name is required.');
        }

        // Validate Font Style
        const fontStyle = document.getElementById('fontStyle').value;
        if (fontStyle === '') {
            isValid = false;
            alert('Font Style is required.');
        }

        // Validate Font Size
        const fontSize = document.getElementById('fontSize').value;
        if (fontSize === '') {
            isValid = false;
            alert('Font Size is required.');
        }

        // Validate Text Alignment
        const textAlignment = document.getElementById('textAlignment').value;
        if (textAlignment === '') {
            isValid = false;
            alert('Text Alignment is required.');
        }

        // Validate Picture Upload
        const pictureUpload = document.getElementById('pictureUpload').files.length;
        if (pictureUpload === 0) {
            isValid = false;
            alert('Picture Upload is required.');
        }

        // Validate Background Color
        const backgroundColor = document.getElementById('backgroundColor').value;
        if (backgroundColor === '') {
            isValid = false;
            alert('Background Color is required.');
        }

        // Validate Autobiography
        const autobiography = document.getElementById('autobiography').value;
        if (autobiography.trim() === '') {
            isValid = false;
            alert('Autobiography is required.');
        }

        // Validate Text Color
        const textColor = document.getElementById('textColor').value;
        if (textColor === '') {
            isValid = false;
            alert('Text Color is required.');
        }

        // Validate Link Color
        const linkColor = document.getElementById('linkColor').value;
        if (linkColor === '') {
            isValid = false;
            alert('Link Color is required.');
        }

        // Validate Navigation Background Color
        const navBackgroundColor = document.getElementById('navBackgroundColor').value;
        if (navBackgroundColor === '') {
            isValid = false;
            alert('Navigation Background Color is required.');
        }

        // Validate Navigation Text Color
        const navTextColor = document.getElementById('navTextColor').value;
        if (navTextColor === '') {
            isValid = false;
            alert('Navigation Text Color is required.');
        }

        // Validate Button Background Color
        const buttonBackgroundColor = document.getElementById('buttonBackgroundColor').value;
        if (buttonBackgroundColor === '') {
            isValid = false;
            alert('Button Background Color is required.');
        }

        // Validate Button Text Color
        const buttonTextColor = document.getElementById('buttonTextColor').value;
        if (buttonTextColor === '') {
            isValid = false;
            alert('Button Text Color is required.');
        }

        // Validate Container Background Color
        const containerBackgroundColor = document.getElementById('containerBackgroundColor').value;
        if (containerBackgroundColor === '') {
            isValid = false;
            alert('Container Background Color is required.');
        }

        // Validate Container Text Color
        const containerTextColor = document.getElementById('containerTextColor').value;
        if (containerTextColor === '') {
            isValid = false;
            alert('Container Text Color is required.');
        }

        // Validate Header Font Size
        const headerFontSize = document.getElementById('headerFontSize').value;
        if (headerFontSize === '') {
            isValid = false;
            alert('Header Font Size is required.');
        }

        // Validate Paragraph Font Size
        const paragraphFontSize = document.getElementById('paragraphFontSize').value;
        if (paragraphFontSize === '') {
            isValid = false;
            alert('Paragraph Font Size is required.');
        }

        // Prevent form submission if validation fails
        if (!isValid) {
            event.preventDefault();
        }
    });
});