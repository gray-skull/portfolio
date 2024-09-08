<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brenton Gray's Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>

    <header id="header">
        <h1>Brenton Gray</h1>
        <h2>Software Engineer</h2>
    </header>

    <div class="section-container">
        <nav class="fancy-border">
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#interests">Interests</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <section class="fancy-border" id="about">
            <h3>About Me</h3>
            <p>
                United States Marine Corps veteran with 20 years 
                of experience in technical fields, specializing 
                in software development and complex problem-solving. 
                Possesses over two years of experience developing 
                high-quality software in C++ and Java, with a strong 
                background in leadership, project management, and 
                process improvement. Extensive communication and 
                collaboration skills, with a proven ability to rapidly 
                acquire and implement new technical proficiencies. Holds 
                an active Secret Security Clearance.
            </p>
        </section>

        <section class="fancy-border" id="projects">
            <h3>Projects</h3>
            <ul id="github-projects"></ul>

            <script>
                // Function to fetch repository data from GitHub
                async function fetchGitHubRepos() {
                    try {
                        const response = await fetch(`https://api.github.com/users/gray-skull/repos`);
                        const repos = await response.json();
        
                        // Get the list element where we will display the projects
                        const projectList = document.getElementById('github-projects');

                        // filter out forked repos
                        const myRepos = repos.filter(repo => !repo.fork);
        
                        myRepos.forEach(repo => {
                            // Create a list item for each repository
                            const listItem = document.createElement('li');
        
                            // Add a link to the repository
                            const repoLink = document.createElement('a');
                            repoLink.href = repo.html_url;
                            repoLink.textContent = repo.name;
        
                            // Add the repository description
                            const description = document.createElement('p');
                            description.textContent = repo.description;
        
                            // Append the link and description to the list item
                            listItem.appendChild(repoLink);
                            listItem.appendChild(description);
        
                            // Append the list item to the project list
                            projectList.appendChild(listItem);
                        });
                    } catch (error) {
                        console.error('Error fetching GitHub repositories:', error);
                    }
                }
        
                // Call the function to fetch GitHub repos when the page loads
                fetchGitHubRepos();
            </script>

        </section>

        <section class="fancy-border" id="interests">
            <h3>Current Interests</h3>
            <ul>
                <li>JavaScript, HTML, CSS</li>
                <li>Video games</li>
                <li>Reading/Writing Fantasy</li>
            </ul>
        </section>

        <section class="contact-border" id="contact">
            <h3>Contact Me</h3>
            <p>If you have any questions, please feel free to <a href="mailto:brenton.j.gray@outlook.com">email me</a>!</p>
        </section>
    </div>
    
    <footer>
        <h4><?php include 'counter.php'; ?></h4>
        <h4>&copy; 2024 Brenton Gray</h4>
    </footer>

</body>
</html>