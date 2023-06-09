function showCourseDetails(course) {
    var courseDetailsSection = document.getElementById("course-details");
    var courseTitle = document.getElementById("course-title");
    var courseDescription = document.getElementById("course-description");

    courseTitle.textContent = course.toUpperCase() + " Course";
    if (course === "html") {
        courseDescription.textContent = "HTML course description goes here.";
    } else if (course === "css") {
        courseDescription.textContent = "CSS course description goes here.";
    } else if (course === "python") {
        courseDescription.textContent = "Python course description goes here.";
    } else if (course === "javascript") {
        courseDescription.textContent = "JavaScript course description goes here.";
    } else if (course === "ruby") {
        courseDescription.textContent = "Ruby course description goes here.";
    } else {
        courseDescription.textContent = "";
    }

    courseDetailsSection.style.display = "block";
}

function toggleCourseMenu() {
    var courseMenu = document.getElementById("course-menu");
    if (courseMenu.style.display === "block") {
        courseMenu.style.display = "none";
    } else {
        courseMenu.style.display = "block";
    }
}