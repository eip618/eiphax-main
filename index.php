<?php 
// Include form submission script 
include_once 'submit.php'; 
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
<!-- contact -->
            <section class="resume-section" id="contact">
                <div class="resume-section-content">
                    <p class="lead mb-5">email me or some shit</p>
<?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $status; ?>" style="text-align: center; margin: 1em 0;">
        <?php echo $statusMsg; ?>
    </div>
<?php } ?>
<!-- form "borrowed" from codexworld.com -->
<!-- Google recaptcha API library -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- Contact form fields -->
<form action="" method="post" class="cnt-form">
<table>
    <tr>
	<td><div class="form-input">
        <label for="name">Name</label></td>
        <td><input type="text" name="name" placeholder="Enter your name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required=""></td>
    </div>
	</tr>
	<tr>
    <td><div class="form-input">
        <label for="email">Email</label></td>
        <td><input type="email" name="email" placeholder="Enter your email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required=""></td>
    </div>
	</tr>
	<tr>
    <td><div class="form-input">
        <label for="usersubject">Subject</label></td>
        <td><input type="text" name="usersubject" placeholder="Enter subject" value="<?php echo !empty($postData['usersubject'])?$postData['usersubject']:''; ?>" required=""></td>
    </div>
	</tr>
	<tr>
    <td><div class="form-input">
        <label for="message">Message</label></td>
        <td><textarea name="message" placeholder="Type your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea></td>
    </div>
	</tr>
</table>
<p />
    <div class="form-input">
        <!-- Google reCAPTCHA box -->
        <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
    </div>
    <input type="submit" name="submit" class="btn" value="Submit">
</form>
<p />
<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
    </body>
</html>
