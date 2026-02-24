const blockOne = document.getElementById("one");
const blockTwo = document.getElementById("two");
const blockThree = document.getElementById("three");


const sectionOne = document.getElementById("pierwsza");
const sectionTwo = document.getElementById("opisy");
const sectionThree = document.getElementById("galeria");

function changeOfSectionOne() {

    blockOne.style.backgroundColor = "MistyRose";

    blockTwo.style.backgroundColor = "#FFAEA5";
    blockThree.style.backgroundColor = "#FFAEA5";

    sectionOne.style.display = "block";
    sectionTwo.style.display = "none";
    sectionThree.style.display = "none";
};

function changeOfSectionTwo() {

    blockTwo.style.backgroundColor = "MistyRose";

    blockOne.style.backgroundColor = "#FFAEA5";
    blockThree.style.backgroundColor = "#FFAEA5";

    sectionTwo.style.display = "block";
    sectionOne.style.display = "none";
    sectionThree.style.display = "none";
};

function changeOfSectionThree() {

    blockThree.style.backgroundColor = "MistyRose";

    blockTwo.style.backgroundColor = "#FFAEA5";
    blockOne.style.backgroundColor = "#FFAEA5";

    sectionThree.style.display = "block";
    sectionOne.style.display = "none";
    sectionTwo.style.display = "none";

};