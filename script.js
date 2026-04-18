const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');
const navLinks = document.querySelectorAll('.nav-links li');

burger.addEventListener('click', () => {
    // Toggle Nav
    nav.classList.toggle('nav-active');

    // Animate Links
    navLinks.forEach((link, index) => {
        if (link.style.animation) {
            link.style.animation = '';
        } else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
        }
    });

    // Burger Animation
    burger.classList.toggle('toggle');
});


const projects = [
    {
        image: 'img/blog.png',
        title: 'Blog Platform',
        description: 'Developed a dynamic blog platform with user authentication and personalized dashboards for multiple user roles. The platform enables users to create, edit, and manage their blogs seamlessly, with all posts displayed on a unified interface. Built using PHP, MySQL, and JavaScript, the project ensures secure session handling and responsive design for an optimal user experience.',
        link: 'https://github.com/Safeera-banu/Blog-Platform'
    },
    {
        image: 'img/weather.png',
        title: 'Weather App',
        description: 'Developed a responsive weather app providing real-time weather updates and global forecasts, featuring PWA capabilities for offline access and home-screen installation. The app displays key weather data, including temperature, humidity, and wind speed, in a user-friendly interface. Built using JavaScript, HTML, and CSS, it ensures a seamless experience across devices.',
        link: 'https://safeera-weather.netlify.app'
    }
];

let currentProject = 0;

const projectImage = document.querySelector('.project-image');
const projectTitle = document.querySelector('.project-info h2');
const projectDescription = document.querySelector('.project-info p');
const projectLink = document.querySelector('.project-info a');

function loadProject(index) {
    projectImage.src = projects[index].image;
    projectTitle.textContent = projects[index].title;
    projectDescription.textContent = projects[index].description;
    projectLink.href = projects[index].link;
}

document.querySelector('.prev-btn').addEventListener('click', () => {
    currentProject = (currentProject - 1 + projects.length) % projects.length;
    loadProject(currentProject);
});

document.querySelector('.next-btn').addEventListener('click', () => {
    currentProject = (currentProject + 1) % projects.length;
    loadProject(currentProject);
});

// Load initial project
loadProject(currentProject);
