const canvas = document.getElementById("canvas");
const words = ["Web Developer", "Full-stack Developer"];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
    let prevWordLength = currentWord.length;
    currentWord = words[i];

    if (isDeleting) {
        // Check if the previous word was longer
        if (prevWordLength > currentWord.length) {
            document.getElementById("typewriter").textContent =
                currentWord.substring(0, j - 1) +
                " | " +
                document.getElementById("typewriter").querySelector("h4")
                    .textContent;
        } else {
            if (document.getElementById("typewriter")) {
                document.getElementById("typewriter").textContent =
                    currentWord.substring(0, j - 1) + "|";
            }
        }

        j--;
        if (j == 0) {
            isDeleting = false;
            i++;
            if (i == words.length) {
                i = 0;
            }
        }
    } else {
        if (document.getElementById("typewriter")) {
            document.getElementById("typewriter").textContent =
                currentWord.substring(0, j + 1) + "|";
            j++;
            if (j == currentWord.length) {
                isDeleting = true;
            }
        }
    }
    setTimeout(type, 150);
}

type();
