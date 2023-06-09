// script.js

function toggleCourseDetails(htmlCoursesDetails) {
    var courseDetails = document.getElementById(courses + 'htmlCoursesDetails');
    if (courseDetails.style.display === 'none') {
        courseDetails.style.display = 'block';
    } else {
        courseDetails.style.display = 'none';
    }

}