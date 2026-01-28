<?php get_header(); ?>

<main>
    <section id="hero" class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <p class="overline">System Online...</p>
                <h1 class="glitch-text" data-text="Nathanael Dunning">Nathanael Dunning</h1>
                <h2 class="subtitle">Data Engineer</h2>
                <p class="bio">
                    Specializing in modern data platforms using the <span class="highlight">Apache Stack</span> & <span
                        class="highlight">Azure</span>.
                    Transforming enterprise data into actionable intelligence.
                </p>
                <div class="cta-group">
                    <a href="#contact" class="btn btn-primary">Initialize Link</a>
                    <a href="#experience" class="btn btn-outline">View Logs</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="cyber-circle-container">
                    <div class="cyber-circle outer"></div>
                    <div class="cyber-circle inner"></div>
                    <div class="cyber-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title"><span class="hash">01.</span> Profile Description</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        Based in Ft. Worth, TX. I am a Data Engineer with a proven track record in designing and
                        maintaining enterprise-scale data pipelines.
                        Currently driving data innovation at McLane Company, processing billions of records to
                        support $40M+ in sales operations.
                    </p>
                    <p>
                        My passion lies in Lakehouse Architecture, Real-time Analytics, and building resilient
                        infrastructure that empowers business decisions.
                        When I'm not engineering data pipelines, I'm optimizing my Home Lab (Linux VMs, Docker, game
                        servers, Jellyfin, self-hosted AI/web applications), running D&D campaigns, writing fantasy
                        narratives, managing investments, or traveling.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="section">
        <div class="container">
            <h2 class="section-title"><span class="hash">02.</span> Experience Logs</h2>
            <div class="timeline">
                <!-- Job 1 -->
                <div class="timeline-item">
                    <div class="timeline-card">
                        <div class="timeline-header">
                            <h3 class="role">Data Engineer</h3>
                            <span class="company">McLane Company, Inc.</span>
                            <span class="location">Remote / Temple, TX</span>
                            <span class="date">July 2023 – Jan 2026</span>
                        </div>
                        <div class="timeline-body">
                            <ul>
                                <li>Designed end-to-end Azure Data Factory pipelines ingesting data from Oracle EBS
                                    & DB2 into Microsoft Fabric Lakehouses using Spark.</li>
                                <li>Supported datasets ranging from small tables to 6 billion+ records, managing
                                    daily and hourly ingestion schedules.</li>
                                <li>Implemented watermark-based incremental loading and upsert logic for efficient
                                    reprocessing.</li>
                                <li>Architected raw, curated, and semantic layers using Medallion Architecture,
                                    star schema, and snowflake schema patterns with dimensional modeling best
                                    practices.</li>
                                <li>Led data engineering efforts as primary technical owner for enterprise tradeshow
                                    applications supporting $40M+ in sales across 110K+ store locations and 80
                                    distribution centers.</li>
                                <li>Awarded the 212 Award for Innovation for critical data engineering
                                    contributions.</li>
                                <li>Implemented Type 1 and Type 2 slowly changing dimensions to track historical changes
                                    in master data tables.</li>
                                <li>Designed partitioning strategies using monthly and yearly keys to optimize query
                                    performance on finance datasets.</li>
                                <li>Provided production on-call support in coordination with RunOps teams using
                                    monitoring alerts, logs, and dashboards.</li>
                                <li>Advocated for and contributed to adoption of Git-based version control and CI/CD
                                    practices using Azure DevOps, improving deployment safety and code review processes.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Job 2 -->
                <div class="timeline-item">
                    <div class="timeline-card">
                        <div class="timeline-header">
                            <h3 class="role">Programmer / Analyst</h3>
                            <span class="company">McLane Company, Inc.</span>
                            <span class="location">Remote / Temple, TX</span>
                            <span class="date">May 2022 – July 2023</span>
                        </div>
                        <div class="timeline-body">
                            <ul>
                                <li>Developed data-driven applications using Azure Synapse, Databricks, SQL, and
                                    Python.</li>
                                <li>Transitioned legacy reporting workflows to cloud-based analytics platforms.</li>
                                <li>Partnered with stakeholders to deliver solutions for finance and operational
                                    reporting.</li>
                                <li>Contributed to development of dimensional data models supporting finance and
                                    operational reporting requirements.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Job 3 -->
                <div class="timeline-item">
                    <div class="timeline-card">
                        <div class="timeline-header">
                            <h3 class="role">Data Science & Analytics Intern</h3>
                            <span class="company">McLane Company, Inc.</span>
                            <span class="date">Feb 2020 – May 2022</span>
                        </div>
                        <div class="timeline-body">
                            <ul>
                                <li>Supported Azure-based analytics and ML initiatives using SQL and Python.</li>
                                <li>Assisted with data ingestion and validation for enterprise-scale datasets.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Job 4 -->
                <div class="timeline-item">
                    <div class="timeline-card">
                        <div class="timeline-header">
                            <h3 class="role">Customer Service Representative</h3>
                            <span class="company">Papa John's</span>
                            <span class="date">May 2018 – Aug 2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="section">
        <div class="container">
            <h2 class="section-title"><span class="hash">03.</span> Technical Modules</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3><span class="icon">🏗️</span> Data Platforms</h3>
                    <ul class="skill-list">
                        <li>Microsoft Fabric</li>
                        <li>Azure Data Factory</li>
                        <li>Apache Spark</li>
                        <li>Azure Synapse</li>
                        <li>Databricks</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3><span class="icon">💻</span> Programming</h3>
                    <ul class="skill-list">
                        <li>Python (pandas, PySpark, requests, scikit-learn, XGBoost)</li>
                        <li>SQL (Complex Joins, CTEs, Window Functions)</li>
                        <li>Spark SQL</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3><span class="icon">☁️</span> Infrastructure</h3>
                    <ul class="skill-list">
                        <li>Microsoft Azure (Primary)</li>
                        <li>AWS / GCP (Familiar)</li>
                        <li>Docker</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3><span class="icon">⚙️</span> Engineering</h3>
                    <ul class="skill-list">
                        <li>Lakehouse Architecture</li>
                        <li>Medallion Architecture</li>
                        <li>Dimensional Modeling (Star Schema, Snowflake Schema, SCD Type 1/2)</li>
                        <li>Incremental Loading (Watermark-based)</li>
                        <li>Partitioning Strategies (Date-based optimization)</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3><span class="icon">🛡️</span> Data Quality</h3>
                    <ul class="skill-list">
                        <li>Schema Validation</li>
                        <li>Row Count Reconciliation</li>
                        <li>Null Checks / Duplicates</li>
                        <li>Data Profiling</li>
                        <li>Manual QA Workflows</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3><span class="icon">🚀</span> DevOps</h3>
                    <ul class="skill-list">
                        <li>Azure DevOps (CI/CD)</li>
                        <li>Git / Version Control</li>
                        <li>Jira</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="section">
        <div class="container">
            <h2 class="section-title"><span class="hash">04.</span> Education Database</h2>
            <div class="education-grid">
                <div class="edu-card">
                    <h3>BBA, Business Computer Information Systems</h3>
                    <span class="school">University of Mary Hardin-Baylor</span>
                    <span class="year">2022</span>
                </div>
                <div class="edu-card">
                    <h3>High School</h3>
                    <span class="school">Harvest Christian Academy</span>
                    <span class="year">2018</span>
                </div>
            </div>
        </div>
    </section>

    <section id="leadership" class="section">
        <div class="container">
            <h2 class="section-title"><span class="hash">05.</span> Leadership Protocols</h2>
            <div class="projects-grid">
                <article class="project-card">
                    <div class="project-content">
                        <h3>YCT Foundation - Vice President</h3>
                        <p class="project-date">Dec 2022 – Present</p>
                        <p class="project-desc">Managed donor relations and ops for $70k-$100k budget. Restructured
                            board governance for compliance. Generated six figures in donations for student leadership
                            conference.</p>
                    </div>
                </article>
                <article class="project-card">
                    <div class="project-content">
                        <h3>UMHB Student Gov - Vice President</h3>
                        <p class="project-date">Aug 2020 – May 2022</p>
                        <p class="project-desc">Served as Vice President of the Student Government Association.</p>
                    </div>
                </article>
                <article class="project-card">
                    <div class="project-content">
                        <h3>UMHB Investment Club - President</h3>
                        <p class="project-date">Aug 2020 – May 2022</p>
                        <p class="project-desc">Led the university investment club operations.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="systems" class="section">
        <div class="container">
            <h2 class="section-title"><span class="hash">06.</span> Personal Systems</h2>

            <h3 style="color: var(--neon-cyan); margin-bottom: 20px; font-family: var(--font-heading);">Home Lab
                Infrastructure</h3>
            <ul style="color: var(--text-secondary); margin-bottom: 30px; list-style-type: none; padding-left: 0;">
                <li style="margin-bottom: 10px; padding-left: 20px; border-left: 2px solid var(--neon-purple);">Linux
                    VMs for development and testing</li>
                <li style="margin-bottom: 10px; padding-left: 20px; border-left: 2px solid var(--neon-purple);">Docker
                    containerization for application deployment</li>
                <li style="margin-bottom: 10px; padding-left: 20px; border-left: 2px solid var(--neon-purple);">Game
                    servers for multiplayer hosting (including D&D virtual tabletop platforms)</li>
                <li style="margin-bottom: 10px; padding-left: 20px; border-left: 2px solid var(--neon-purple);">Jellyfin
                    media server</li>
                <li style="margin-bottom: 10px; padding-left: 20px; border-left: 2px solid var(--neon-purple);">
                    Self-hosted AI applications and web services</li>
                <li style="margin-bottom: 10px; padding-left: 20px; border-left: 2px solid var(--neon-purple);">Home
                    Assistant for automation (YAML-based configuration)</li>
                <li style="margin-bottom: 10px; padding-left: 20px; border-left: 2px solid var(--neon-purple);">
                    Development tools and experimental platforms</li>
            </ul>

            <h3 style="color: var(--neon-cyan); margin-bottom: 20px; font-family: var(--font-heading);">Creative
                Projects</h3>
            <ul style="color: var(--text-secondary); margin-bottom: 30px; list-style-type: none; padding-left: 0;">
                <li style="margin-bottom: 10px; padding-left: 20px; border-left: 2px solid var(--neon-pink);">Tabletop
                    RPG Storytelling: Active D&D player and campaign notetaker, crafting extensively detailed
                    character backstories (20+ pages) focused on narrative continuity, character relationships, and
                    world-building integration</li>
                <li style="margin-bottom: 10px; padding-left: 20px; border-left: 2px solid var(--neon-pink);">Creative
                    Writing: Fantasy narrative development with emphasis on complex character relationships and
                    multi-generational storytelling</li>
            </ul>

            <h3 style="color: var(--neon-cyan); margin-bottom: 20px; font-family: var(--font-heading);">Web Development
            </h3>
            <ul style="color: var(--text-secondary); margin-bottom: 30px; list-style-type: none; padding-left: 0;">
                <li style="margin-bottom: 10px; padding-left: 20px; border-left: 2px solid var(--neon-green);">Built and
                    maintain npdfw.com using AI-assisted development workflows for rapid prototyping
                    and iteration</li>
            </ul>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container center-text">
            <h2 class="section-title center-margin"><span class="hash">07.</span> Establish Connection</h2>
            <h1 class="big-title">Get In Touch</h1>
            <p class="contact-desc">
                Open to Remote & Relocation opportunities.
            </p>
            <div class="contact-links">
                <a href="mailto:nate@dunning.me" class="btn btn-primary big-btn">nate@dunning.me</a>
                <a href="https://linkedin.com/in/npdunning" target="_blank" class="btn btn-outline big-btn">LinkedIn</a>
                <span class="phone-number">817-944-6332</span>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
