<body class="wrapper">
    <header>
        <div>
            <h1>Code Lousiville | Project-PHP</h1>
            <h2>Today is <?php echo date('l, F j, Y'); ?></h2>
        </div>
    </header>
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="../index.php">Alchemy Momentum</a></h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
            </li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="<?php if ($pageSection == " portfolio ") { echo active; } ?>"><a href="portfolio.php">Portfolio Page</a>
                </li>
                <li class="has-dropdown">
                    <a href="#">Drop Down Menu</a>
                    <ul class="dropdown">
                        <li class="<?php if ($pageSection == " extra 1 ") { echo active; } ?>"><a href="extra1.php">Extra One</a>
                        </li>
                        <li class="<?php if ($pageSection == " extra2 ") { echo active; } ?>"><a href="extra2.php">Extra Two</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
                <li class="<?php if ($pageSection == " contact ") { echo active; } ?>"><a href="CLcontact.php">Contact Page</a>
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
