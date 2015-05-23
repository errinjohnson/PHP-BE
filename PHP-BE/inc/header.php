<body class="wrapper">
    <header>
        <div>
            <h2>Errin Johnson's</h2>
            <h2>Code Lousiville | Project-PHP</h2>
            <h3>Today is <?php echo date('l, F j, Y'); ?></h3>
        </div>
    </header>
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="http://www.alchemymomentum.com/">Alchemy Momentum</a></h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
            </li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="<?php if ($pageSection == " project ") { echo active; } ?>"><a href="index.php">Errin's CL PHP Project</a>
                </li>
                <li class="has-dropdown">
                    <a href="#">Drop Down Menu</a>
                    <ul class="dropdown">
                        <li class="<?php if ($pageSection == " portfolio ") { echo active; } ?>"><a href="Portfolio.php">Portfolio</a>
                        </li>
                        <li class="<?php if ($pageSection == " Place2 ") { echo active; } ?>"><a href="#">PlaceHolder</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
                <li class="<?php if ($pageSection == " contact ") { echo active; } ?>"><a href="contact.php">Contact Errin</a>
                </li>
                <li class="has-form">
                    <div class="row collapse">
                        <div class="large-8 small-9 columns">
                            <input type="text" placeholder="Find Stuff">
                        </div>
                        <div class="large-4 small-3 columns">
                            <a href="#" class="alert button expand">Search</a>
                        </div>
                    </div>
                </li>
            </ul>

        </section>
    </nav>
