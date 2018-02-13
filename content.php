<?php
if (empty($_GET['content'])) {
    exit;
}

switch ($_GET['content']) {
case 0:
    echo '';
    break;
case 1:
    echo <<<HTML

                <h2>Major Projects</h2>
                <div class="row">
                    <div class="col-md">
                        <h3>Belton Historical Society <span class="text-muted">Site</span></h3>
                        <ul class="list-unstyled">
                            <li class="text-muted">July 2011 to Present</li>
                            <li>Redesigned/rebuilt site using Twitter's Bootstrap <mark>CSS</mark> framework over Summer 2017</li>
                            <li>Custom <mark>PHP</mark> classes using Object Oriented Design to easily handle the database</li>
                            <li><mark>MariaDB</mark> database normalized</li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h3>Missouri Rail <span class="text-muted">Site</span></h3>
                        <ul class="list-unstyled">
                            <li class="text-muted">Feb 2017 to Apr 2017</li>
                            <li>5-person group effort for introductory Databases course</li>
                            <li>PHP, MariaDB, inspiration for the Society website</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h3>Clippin <span class="text-muted">Application</span></h3>
                        <ul class="list-unstyled">
                            <li class="text-muted">Oct 2017 to Dec 2017</li>
                            <li>3-person group for Software Engineering, learned Agile Methodology</li>
                            <li>macOS clipboard manager in <mark>Swift</mark></li>
                        </ul>
                    </div>
                </div>
HTML;
    break;
case 2:
    echo 'education here';
    break;
case 3:
    echo 'hobbies';
    break;
default:
    break;
}
