<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact - Style O Space</title>
    <?php include_once "includes/links.php"; ?>
</head>
<body>
    <?php include_once "includes/header.php"; ?>
    <!-- Back to top -->
    <a href="#" id="scroll" style="display: none;"><span></span></a>

    <div class="container-fluid bgimg mymt">
        <div class="container">
            <h1 class="pagehead">Contact Us</h1>
            <section>
                <nav>
                    <ol class="cd-breadcrumb custom-separator">
                        <li><a href="index.php">Home</a></li>
                        <!-- <li><a href="#0">Gallery</a></li> -->
                        <!-- <li><a href="#0">Web</a></li> -->
                        <li class="current"><em>Contact</em></li>
                    </ol>
                </nav>
            </section>
        </div>
    </div>
    <div class="container mt-4 contactus mb-5">
        <h2>Don't be a stranger</h2>
        <h3>Just say hello!</h3>
        <div class="row">
            <div class="col-md-6 context">
                <div class="mt-3">
                    <p class="text-justify">
                        <strong>STYLE O SPACE</strong>
                        is the unit of Rajendra Retail Ventures and Project a new Business Enterprise of Khatuwala Group which deals with Industrial Chemicals, Steel and now have ventured in Customised Modular Furniture.
                    </p>
                    <p class="text-justify">
                        We are situated in Athgaon, Guwahati , Assam, India and are providing services in the entire Assam Belt and nearby areas within 200 kms radius.
                    </p>
                </div>
                <div>
                    <h5>Need Help?</h5>
                    <p><a href="mailto:styleospace.guwahati@gmail.com">styleospace.guwahati@gmail.com</a></p>
                </div>
                <div>
                    <h5>Feel like talking?</h5>
                    <p><a href="callto:+91 84040 47907">+91 84040 47907</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <form method="POST" name="contactForm" action="" onsubmit="return validate()">
                    <div class="contactform mt-3">
                        <input type="text" class="inputbox" id="q_name" name="q_name" placeholder="Name" required>
                        <input type="text" class="inputbox" id="q_phone" name="q_phone" placeholder="Phone Number" required>
                        <input type="email" class="inputbox" id="q_email" name="q_email" placeholder="Email Address" required>
                        <textarea class="inputbox" id="q_msg" name="q_msg" placeholder="Write us here!"></textarea><br>
                        <div class="">
                            <!-- <?php if(isset($_SESSION['q_success_msg'])){ ?>
                                <p class="q_success_msg"><?php echo $_SESSION['q_success_msg']; unset($_SESSION['q_success_msg']); ?></p>
                            <?php } ?>
                            <?php if(isset($_SESSION['q_error_msg'])){ ?>
                                <p class="q_error_msg"><?php echo $_SESSION['q_error_msg']; unset($_SESSION['q_error_msg']); ?></p>
                            <?php } ?> -->
                        </div>
                        <button class="btn btn-success" id="send_query" name="send_query">Send</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
<?php include_once "includes/footer.php"; ?>

<script type="text/javascript">

</script>
</body>
</html>