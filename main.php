<!DOCTYPE html>
<html>
<head>
    <title>Developers Project Manager</title>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
    <link rel="stylesheet" href="myCss/application.css" type="text/css" />
    <?php date_default_timezone_set( 'EST');?>
</head>

<body class="wrapper">
    <header>
        <div>
            <h1>Code Lousiville | Project-PHP</h1>
            <!-- Asana tag#34267351905331 #33602425209457
 -->
            <h2>Today is <?php echo date('l, F j, Y'); ?></h2>
        </div>
    </header>
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="#">My Site</a></h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
            </li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="active"><a href="#">Right Button Active</a>
                </li>
                <li class="has-dropdown">
                    <a href="#">Right Button Dropdown</a>
                    <ul class="dropdown">
                        <li><a href="#">First link in dropdown</a>
                        </li>
                        <li class="active"><a href="#">Active link in dropdown</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
                <li><a href="#">Left Nav Button</a>
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
    <section>
        <div class="slides panel row">
            <div class="slick-slide panel grid-full">
                <div class="grid-half">
                    <h3>Using Slick Slider</h3>
                    <p class="lead">"I have set up Slider for my Portfolio using Slicks' Plug-in; hence my Portfolio"</p>
                    <p>"Customized the settings and values within the Slider Initialization "</p>
                </div>
                <div class="grid-half">
                    <div>Side Two</div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <h4>Responsive Web Design | &copy;<?php echo date('Y'); ?> Alchemy Momentum</h4>
    </footer>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="foundation/js/vendor_js/jquery.js"></script>
    <script src="foundation/js/foundation_js/foundation.min.js"></script>
    <script src="foundation/js/foundation_js/foundation.dropdown.js"></script>
    <script src="foundation/js/foundation_js/foundation.topbar.js"></script>
    <script src="foundation/js/foundation_js/foundation.reveal.js"></script>
    <!--script src="animsition/animsition-master/dist/js/jquery.animsition.min.js"></script -->
    <!-- animsition js -->
    <!--cript src="#"></script -->

    <script>
        $(document).foundation();
        $(document).foundation('topbar', 'reflow');
    </script>
</body>

</html>