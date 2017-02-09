<section id="contact">
        <div class="forma-box-container">
            <div class="main-site-wrapper">
                <div class="forma-box">
                    <h1 class="forma-title">Sazināties</h1>
                    <form action="#" id="my-form" method="POST" name="form">
                        <?php echo '<div class="box'.($isError ? '-error' : '-message').'">'.$msg.'</div>'; ?>

                        <div class="form-row">
                            <input class="form_field<?=($name == '' && $isError) ? ' error' : '' ?>" value="<?=$name?>" type="text" name="name" placeholder="Vārds Uzvārds" id="username">
                        </div>

                        <div class="form-row">
                            <input class="form_field<?=($email == '' && $isError) ? ' error' : '' ?>" value="<?=$email?>" type="text" name="email" placeholder="E-pasts" id="email">
                        </div>

                        <div class="form-row">
                            <textarea class="form_field<?=($message == '' && $isError) ? ' error' : '' ?>" name="message" placeholder="Tavs jautājums" id="message"><?=$message?></textarea>
                        </div>

                        <div class="form-row">
                            <button class="contact-submit" type="submit">Sūtīt ziņu</button>
                        </div>
                    </form>



                    <div class="forma-address">
                        Rīga, Visskaistākā iela 1 // mob:(+371) 26 27 96 07 // hello@moodcreations.eu
                    </div>
                </div>
            </div>
        </div>
    </section>
