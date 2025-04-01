let slideIndex = 0;

        function showSlides() {
            let slides = document.getElementsByClassName("slide");

            // Hide all slides
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            // loop
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            // Show the current slide!
            slides[slideIndex - 1].style.display = "block";

            setTimeout(showSlides, 3000);
        }
        
        showSlides();