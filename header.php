<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Data Engineer specializing in Azure Data Factory, Apache Spark, and enterprise-scale data pipelines. Processing billions of records to drive business intelligence.">
    <meta name="keywords"
        content="Data Engineer, Azure, Spark, Databricks, Python, SQL, Lakehouse Architecture, Fort Worth">
    <meta property="og:title" content="Nathanael Dunning | Data Engineer">
    <meta property="og:description" content="Data Engineer specializing in Azure, Spark, and enterprise data pipelines">
    <meta property="og:url" content="https://npdfw.com">
    <meta property="og:type" content="website">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="scanline"></div>
    <header class="header">
        <div class="container header-container">
            <a href="<?php echo home_url('/'); ?>" class="logo">NPD<span class="blink">_</span></a>
            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="#about" data-text="About">About</a></li>
                    <li><a href="#experience" data-text="Experience">Experience</a></li>
                    <li><a href="#skills" data-text="Skills">Skills</a></li>
                    <li><a href="#leadership" data-text="Leadership">Leadership</a></li>
                    <li><a href="#systems" data-text="Systems">Systems</a></li>
                    <li><a href="#contact" data-text="Contact">Contact</a></li>
                </ul>
                <div class="mobile-menu-toggle">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </nav>
        </div>
    </header>