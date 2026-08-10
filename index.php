<?php 
$formConfig = [
  'toEmail'   => 'eip@eiphax.tech',
  'fromName'  => 'main form contact',
  'formEmail' => 'form@eiphax.tech',
  'subject'   => 'New submission from EIPHAX MAIN FORM',
];

require '/var/www/eipmain/lib/submit.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="index for eip's website. contains various things. slightly more stylised than a default index.">
        <meta name="author" content="eip" />
        <title>the eip index</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
		<!-- carousel script -->
		<script src="js/carousel.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">eiphax</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="https://news.eiphax.tech/wp-content/uploads/2021/07/48px-Emblem_interrobang.svg_.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">back to top</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#thingsimade">things i've made</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#homebrewstuff">homebrew stuff</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#miscstuff">miscellaneous stuff</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#marketing">eiphax marketing campaign info</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sla">enterprise-grade SLA</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">email me</a></li>
					<li class="nav-item"><img src="/img/caffeine.svg" width="250"></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        eip
                        <span class="text-primary">hax</span>
                    </h1>
                    <p class="lead mb-5">hi. i'm eip. i guess i'm a 'hobbyist web developer', except my skillset is 'write bad html, steal js/css/php, eat hot chip and lie'. i do my best to only steal things that are license-free or otherwise free to use, like bootstrap themes.</p>
					<p>the eip network privacy policy can be found <a href="https://eiphax.tech/privacy" target="_blank">here</a>.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.facebook.com/eiphax/"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- things i made -->
            <section class="resume-section" id="thingsimade">
                <div class="resume-section-content">
<div class="container text-center my-3">
    <h2 class="font-weight-light">things i've made</h2>
	<p class="lead mb-5">these are things that i've made myself, usually with the help of code, assets or themes 'borrowed' from elsewhere on the internet.</p>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
				<div class="row">
                    <div class="col">
                        <div class="card card-body h-100">
                            facts that i think are cool (i'm probably most proud of this one)
							<a href="https://facts.eiphax.tech" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-body h-100">
                            life rules
							<a href="https://rules.eiphax.tech" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-body h-100">
                            an http tarpit to waste time for sniffers
							<br>use 'curl -v https://tarpit.eiphax.tech/wp-login' in a terminal to see what it does
                        </div>
                    </div>
                </div>
				</div>
                <div class="carousel-item">
				<div class="row">
                    <div class="col">
                        <div class="card card-body h-100">
                            my blog (uses wordpress)
							<a href="https://blog.eiphax.tech" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-body h-100">
                            random shit i picked up about using linux (uses wordpress)
							<a href="https://bytes.eiphax.tech" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-body h-100">
                            an eip-flavoured implementation of the PrivateBin project. it's like pastebin, except encrypted
							<a href="https://bin.eiphax.tech" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                </div>
				</div>
                <div class="carousel-item">
				<div class="row">
                    <div class="col">
                        <div class="card card-body h-100">
                            eip's meme collection (uses lychee)
							<a href="https://album.eiphax.tech" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-body h-100">
                            the eip news channel (uses wordpress)
							<a href="https://news.eiphax.tech" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                </div>
				</div>
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
                </div>
            </section>
            <hr class="m-0" />
			<!-- homebrew stuff -->
            <section class="resume-section" id="homebrewstuff">
                <div class="resume-section-content">
<div class="container text-center my-3">
    <h2 class="font-weight-light">homebrew stuff</h2>
	<p class="lead mb-5">these are mostly things that i've made or written myself, often with help from the crc club, and sometimes entirely written by others but maintained by me</p>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
				<div class="carousel-item active">
				<div class="row">
                    <div class="col">
                        <div class="card card-body h-100">
                            bruteforce movable, used in hacking 3ds consoles, written by DeadPhoenix and now maintained by me and crc
							<a href="https://bfm.nintendohomebrew.com" target="_blank" class="btn btn-primary">go see</a>
                        </div>
						</div>
                    <div class="col">
                        <div class="card card-body h-100">
                            my 3ds database
							<a href="https://3ds.eiphax.tech" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-body h-100">
                            my switch database
							<a href="https://nx.eiphax.tech" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
				</div>
				</div>
                <div class="carousel-item">
				<div class="row">
                    <div class="col">
                        <div class="card card-body h-100">
                            the nintendo homebrew landing website
							<a href="https://nintendohomebrew.com" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-body h-100">
                            a master key generator for the 3ds and wiiu
							<a href="https://mkey.eiphax.tech" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-body h-100">
                            frii gaems world, a bait website for the nintendo homebrew community
							<a href="https://friigaemsworld.com" target="_blank" class="btn btn-primary">go see</a>
                        </div>
					</div>
				</div>
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
                </div>
            </section>
            <hr class="m-0" />
			<!-- misc stuff -->
            <section class="resume-section" id="miscstuff">
                <div class="resume-section-content">
<div class="container text-center my-3">
    <h2 class="font-weight-light">miscellaneous stuff</h2>
	<p class="lead mb-5">other bullshit i keep around</p>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel3" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
			<div class="row">
                    <div class="col">
                        <div class="card card-body h-100">
                            bullshit: a card game
							<a href="https://eiphax.tech/bullshit" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-body h-100">
                            shitpost.lol, a meme domain
							<a href="https://shitpost.lol" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                </div>
				</div>
                <div class="carousel-item">
				<div class="row">
                    <div class="col">
                        <div class="card card-body h-100">
                            uwu.tax, a meme domain
							<a href="https://uwu.tax" target="_blank" class="btn btn-primary">go see</a>
                        </div>
					</div>
                    <div class="col">
                        <div class="card card-body h-100">
                            hacc.me, a meme domain
							<a href="https://hacc.me" target="_blank" class="btn btn-primary">go see</a>
                        </div>
                    </div>
                </div>
				</div>
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel3" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
                </div>
            </section>
			<!-- marketing -->
            <section class="resume-section" id="marketing">
                <div class="resume-section-content">
<div class="container text-center my-3">
    <h2 class="font-weight-light">marketing</h2>
	<p class="lead mb-5">eiphax synergistic zero-goal marketing report</p>
    <div class="row mx-auto my-auto">
		<a href="eiphax_marketing.pdf" download target="_blank">click here</a> to download the eiphax marketing whitepaper! full of incredible amounts of cutting-edge marketing insight.
    </div>
</div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- enterprise service reliability theatre -->
            <section class="resume-section" id="sla">
                <div class="resume-section-content">
                    <div class="container my-3">
                        <div class="text-center mb-5">
                            <p class="text-primary text-uppercase font-weight-bold mb-2">eipServices&trade; trust centre</p>
                            <h2 class="font-weight-light">enterprise service availability commitment</h2>
                            <p class="lead">hyperscale reliability from a streamlined single-node operating model.</p>
                            <span class="badge bg-success">OPERATIONAL EXCELLENCE POSTURE: GREEN</span>
                        </div>

                        <div class="row g-3 text-center mb-5">
                            <div class="col-md-4">
                                <div class="card card-body h-100">
                                    <small class="text-uppercase text-muted">all-inclusive availability objective</small>
                                    <h3 class="display-5 text-primary mb-1">&gt;99.93%</h3>
                                    <p class="mb-0">scheduled maintenance included, because exclusions are for cowards</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-body h-100">
                                    <small class="text-uppercase text-muted">planned interruption envelope</small>
                                    <h3 class="display-5 text-primary mb-1">&lt;6h</h3>
                                    <p class="mb-0">aggregate projected downtime per rolling 365-day service epoch</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-body h-100">
                                    <small class="text-uppercase text-muted">operational availability</small>
                                    <h3 class="display-5 text-primary mb-1">~100%</h3>
                                    <p class="mb-0">outside declared platform-modernisation events, probably</p>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body mb-4">
                            <h3>the commitment</h3>
                            <p>eipServices targets greater than 99.93% gross annual service availability across the complete production service boundary. this objective includes routine state-reconciliation operations and controlled weekly platform-modernisation events, providing a more honest availability posture than providers who quietly remove maintenance from the denominator.</p>
                            <p class="mb-2"><strong>Projected baseline availability:</strong> 99.9356%</p>
                            <div class="progress" style="height: 1.5rem;" role="progressbar" aria-label="Projected eipServices availability" aria-valuenow="99.9356" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success" style="width: 99.9356%;">99.9356%</div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-lg-6">
                                <div class="card card-body h-100">
                                    <h3>service-interruption portfolio</h3>
                                    <table class="table table-sm mb-0">
                                        <thead>
                                            <tr><th>resilience activity</th><th>cadence</th><th>impact</th><th>annualised</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>state-consistency refresh</td><td>daily</td><td>~30 seconds</td><td>182.5 minutes</td></tr>
                                            <tr><td>platform modernisation</td><td>Thursday</td><td>~3 minutes</td><td>156 minutes</td></tr>
                                            <tr class="font-weight-bold"><td>aggregate envelope</td><td>rolling annual</td><td>&mdash;</td><td>338.5 minutes</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card-body h-100">
                                    <h3>competitive positioning</h3>
                                    <p>eipServices' projected all-inclusive availability exceeds the published single-instance commitments commonly associated with ordinary Amazon EC2 and Google Compute Engine deployments, without requiring multi-zone duplication, a Kubernetes control plane, or anyone saying &ldquo;service mesh&rdquo; in a meeting.</p>
                                    <p class="mb-0"><small>competitor figures depend on product, architecture, region, contract, exclusions and the willingness to complete a service-credit claim form. this comparison is marketing, not procurement advice.</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mb-4" id="slaFinePrint">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="measurementHeading">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#measurementDetails" aria-expanded="true" aria-controls="measurementDetails">availability measurement framework</button>
                                </h3>
                                <div id="measurementDetails" class="accordion-collapse collapse show" aria-labelledby="measurementHeading" data-bs-parent="#slaFinePrint">
                                    <div class="accordion-body">
                                        availability is the proportion of observation intervals during which the applicable production endpoint returns a syntactically valid application response within the prevailing latency tolerance. the reporting period is a rolling 365-day window. gross availability includes planned maintenance. operational availability excludes declared maintenance windows. partial interruptions, upstream network weirdness and incidents occurring while nobody is looking may be classified according to the disposition of the operator, evidence and executive discretion.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="maintenanceHeading">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#maintenanceDetails" aria-expanded="false" aria-controls="maintenanceDetails">maintenance and change governance</button>
                                </h3>
                                <div id="maintenanceDetails" class="accordion-collapse collapse" aria-labelledby="maintenanceHeading" data-bs-parent="#slaFinePrint">
                                    <div class="accordion-body">
                                        daily state-reconciliation events occur at approximately midday AEST and carry a nominal 30-second interruption budget. weekly platform-modernisation events occur on Thursday mornings and carry a nominal three-minute interruption budget. emergency changes may occur whenever something has become sufficiently cooked. all changes are governed by the eipServices Continuous Assurance, Refresh and Accountability Methodology (CARAmel).
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="remedyHeading">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#remedyDetails" aria-expanded="false" aria-controls="remedyDetails">service credits, remedies and exclusions</button>
                                </h3>
                                <div id="remedyDetails" class="accordion-collapse collapse" aria-labelledby="remedyHeading" data-bs-parent="#slaFinePrint">
                                    <div class="accordion-body">
                                        if availability falls below the stated objective, eligible customers may request a service credit equal to up to 100% of the amount they paid for the affected free service during the affected billing period. at current list pricing, the maximum credit is therefore zero dollars. requests must include timestamps, probe evidence, a concise incident narrative and a drawing of a horse. exclusions include force majeure, hostile traffic, upstream providers, user error, DNS, acts of god, acts of cron and circumstances reasonably described as &ldquo;computer bullshit&rdquo;.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-primary mb-0" role="note">
                            <strong>forward-looking statement:</strong> 99.9356% is a schedule-derived projection, not an audited historical result or legally binding SLA. &ldquo;effectively 100%&rdquo; means very good, not mathematically perfect. eipServices reserves the right to replace precise terminology with more impressive terminology at any time.
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
<!-- contact -->
            <section class="resume-section" id="contact">
                <div class="resume-section-content">
                    <p class="lead mb-5">email me or some shit</p>
      <form class="form" action="" method="post" novalidate>
        <div class="status-msg" role="status" aria-live="polite" <?php echo empty($statusMsg) ? 'hidden' : ''; ?>>
          <?php if (!empty($statusMsg)) echo $statusMsg; ?>
        </div>

        <label>
          Name
          <input name="name" required autocomplete="name"
                 value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : ''; ?>">
        </label>

        <label>
          Email
          <input type="email" name="email" required autocomplete="email"
                 value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : ''; ?>">
        </label>

        <label>
          Subject
          <input type="text" name="usersubject" required autocomplete="off" placeholder="Enter subject"
                 value="<?php echo isset($_POST['usersubject']) ? htmlspecialchars($_POST['usersubject'], ENT_QUOTES, 'UTF-8') : ''; ?>">
        </label>

        <label>
          Message
          <textarea name="message" rows="6" required><?php
            echo isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8') : '';
          ?></textarea>
        </label>

        <input type="hidden" name="token" value="">
        <!-- honeypot + time gate -->
        <label class="hp" aria-hidden="true"
               style="position:absolute; left:-10000px; top:auto; width:1px; height:1px; overflow:hidden; opacity:0;">
          Website
          <input name="favourite-colour" tabindex="-1" autocomplete="new-password">
        </label>
        <input type="hidden" name="ts" value="<?php echo time(); ?>">

        <button class="btn" type="submit" name="submit">Send</button>
      </form>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
    </body>
</html>
