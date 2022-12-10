<!DOCTYPE html>
<html lang="en">
<?php include 'includes/conn.php'; 
        if (isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $message=$_POST['message'];

            $query=mysqli_query($conn, "insert into mails (name,email,message) 
            value('$name','$email','$message')");
            if ($query) 
            {
                echo "<script>alert('Thank you for contacting us.');</script>";  		
                echo "<script>window.location.href='index.php'</script>";	
            }
            else
            {
                echo "<script>alert('Something Went Wrong. Please try again.');</script>"; 
                echo "<script>window.location.href='contact.php'</script>";	
            }
        }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Avid">
    <meta name="description" content="Contact information for Annex Cafe">
    <title>Contact Us - Annex</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css 2/style.css">
    <script src="js/main.js" defer></script>
</head>

<body>
<?php include "./includes/header.php" ?>


    <section class="hero">
        <figure>
            <img src="./img/pili pili slices.jpeg" alt="Annex Cafe" title="Annex ready to serve your dilicacy!" width="800" height="667">
            <figcaption class="offscreen">
                Annex Cafe
            </figcaption>
        </figure>
    </section>
    <main class="main">
        <article class="main__article">
            <h2>Our Location</h2>
                <address>
                    Kisii Town, Along Jogoo Road,
                    Street no.47
                    <br><br>
                    Phone: <a href="tel:0741467228">0740798463</a>
                </address>
        </article>
        <hr>
        <article class="main__article contact">
            <h2 class="contact__h2">Our Contact Form</h2>

            <form action="" method="post" class="contact__form">
                <fieldset class="contact__fieldset">
                    <legend class="offscreen">Send Us A Message</legend>
                    <p class="contact__p">
                        <label class="contact__label" for="name">Name:</label>
                        <input class="contact__input" type="text" name="name" id="name" placeholder="your name" required>
                    </p>
                    <p class="contact__p">
                        <label class="contact__label" for="email">Email:</label>
                        <input class="contact__input" type="email" name="email" id="email" placeholder="your email" required>
                    </p>
                    <p class="contact__p">
                        <label class="contact__label" for="message">Your Message:</label>
                        <br>
                        <textarea class="contact__textarea" name="message" id="message" cols="30" rows="10"
                        placeholder="Type your message here"></textarea>
                    </p>
                </fieldset>
                <button class="contact__button" type="submit" name="submit">Send</button>
                <button class="contact__button" type="reset">Reset</button>
            </form>
        </article>
    </main>
<?php include "includes/footer.php" ?>

</body>

</html>