function showCourseDetails(course) {
    var courseContent = document.getElementById(course + "-content");
    if (courseContent) {
        var coursesSection = document.getElementById("courses");
        var htmlContent = document.getElementById("html-content");
        if (course === "html") {
            coursesSection.style.display = "none";
            htmlContent.style.display = "block";
        } else {
            coursesSection.style.display = "block";
            htmlContent.style.display = "none";
        }
    }
}