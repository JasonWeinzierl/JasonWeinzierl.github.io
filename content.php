<?php
if (empty($_GET['content'])) {
    exit;
}

switch ($_GET['content']) {
case 0:
    // home
    echo '';
    break;
case 1:
    // projects
    echo <<<HTML

                <div class="row">
                    <div class="col-md">
                        <h3>Belton Historical Society <a href="https://beltonhistoricalsociety.org" class="text-muted">Site<span class="fas fa-link fa-xs" aria-hidden="true"></span></a></h3>
                        <ul class="list-unstyled">
                            <li class="text-muted">July 2011 to Present</li>
                            <li>Redesigned/rebuilt site using Bootstrap 3 <mark>CSS</mark> framework over Summer 2017</li>
                            <li>Migrated to Bootstrap 4, Spring 2019</li>
                            <li>Custom <mark>PHP</mark> classes using Object Oriented Design to easily handle the database</li>
                            <li><mark>MariaDB</mark> database normalized</li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h3>simple-chatroom <a href="https://github.com/JasonWeinzierl/simple-chatroom" class="text-muted">CLI<span class="fas fa-link fa-xs" aria-hidden="true"></span></a></h3>
                        <ul class="list-unstyled">
                            <li class="text-muted">Nov 2018 to Present</li>
                            <li>Project for Networking</li>
                            <li>Built entirely with <mark>Node.js</mark>, over TCP</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h3>Capstone <span class="text-muted">Application</span></h3>
                        <ul class="list-unstyled">
                            <li class="text-muted">2018</li>
                            <li>5-person group, Computer Science Capstone</li>
                            <li>Note-taking app for iOS, UI in <mark>React Native</mark></li>
                            <li>Emphasis on low-movement UI</li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h3>Clippin <span class="text-muted">Application</span></h3>
                        <ul class="list-unstyled">
                            <li class="text-muted">Oct 2017 to Dec 2017</li>
                            <li>3-person group for Software Engineering, learned Agile Methodology</li>
                            <li>macOS clipboard manager in <mark>Swift</mark></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h3>Missouri Rail <a href="http://missourirail.com" class="text-muted">Site<span class="fas fa-link fa-xs" aria-hidden="true"></span></a></h3>
                        <ul class="list-unstyled">
                            <li class="text-muted">Feb 2017 to Apr 2017</li>
                            <li>5-person group effort for introductory Databases course</li>
                            <li>PHP, MariaDB, inspiration for the Society website</li>
                        </ul>
                    </div>
                </div>
HTML;
    break;
case 2:
    // education
    echo <<<HTML

                <div class="row">
                    <div class="col-md">
                        <h3>Computer Science, Minor</h3>
                        <ul class="list-unstyled">
                            <li>Object-Oriented Design: Java, PHP, Swift</li>
                            <li>Database Applications: SQL</li>
                            <li>Agile Methodology: Scrum, Kanban, git</li>
                            <li>UNIX Systems: Bash</li>
                            <li>Theory of Computation</li>
                            <li>Computer Networks</li>
                            <li>Design and Analysis of Algorithms</li>
                            <li>Microcomputer Engineering</li>
                            <li>Senior Capstone Design Sequence</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h3>Physics&#151;BS</h3>
                        <ul class="list-unstyled">
                            <li>Mechanics</li>
                            <li>Electricity &amp; Magnetism</li>
                            <li>Astronomy</li>
                            <li>Thermodynamics</li>
                            <li>Quantum Mechanics</li>
                            <li>Computational Biological Physics</li>
                            <li>Nuclear Magnetic Resonance</li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h3>Mathematics&#151;BS</h3>
                        <ul class="list-unstyled">
                            <li>Differential Equations</li>
                            <li>Real Analysis</li>
                            <li>Linear Algebra</li>
                            <li>Non-Euclidean Geometry</li>
                            <li>Abstract Algebra</li>
                            <li>Theory of Numbers</li>
                        </ul>
                    </div>
                </div>
HTML;
    break;
case 3:
    // interests
    echo <<<HTML

                <h3>Music</h3>
                <ul class="list-unstyled">
                    <li>Marching Mizzou, Mellophone <span class="text-muted">5 years</span></li>
                    <li>Classical Piano <span class="text-muted">Since 2001</span></li>
                    <li>Family Brass Quintet</li>
                </ul>
                <h3>Volunteer Work</h3>
                <ul class="list-unstyled">
                    <li>Re-notated Marching Mizzou's music in Finale <span class="text-muted">Summer 2018</span></li>
                    <li>Sound Booth operation at my local church</li>
                    <li>Maintaining the Belton Historical Society, interacting with officers and members</li>
                </ul>
HTML;
    break;
default:
    break;
}
