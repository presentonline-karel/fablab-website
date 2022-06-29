<div class="contactform-container">

    <?php //alert/succes message ?>
    <?php if ($success) : ?>
        <div class="alert success">
            <p><?= $success ?></p>
        </div>



    <?php else : ?>

        <?php if (isset($alert['error'])) : ?>
            <div><?= $alert['error'] ?></div>
        <?php endif; ?>

        <form id="form" class="contactform" method="post" action="<?= $page->url() ?>" novalidate>

            <?php //honeypot for cybersecurity analysis? ?>
            <div class="honeypot">
                <label for="website">Website <abbr title="required">*</abbr></label>
                <input type="url" id="website" name="website" tabindex="-1">
            </div>



            <div class="flex-row-desktop">
                <div class="contactform__field field form-control">
                    <label class="contactform__field__label">Naam</label>
                    <input id="name" class="contactform__field__input" type="text" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    <small>Error message</small>
                </div>

                <div class="contactform__field field form-control">
                    <label class="contactform__field__label">Email</label>
                    <input id="email" class="contactform__field__input" type="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    <small>Error message</small>
                </div>
            </div>

            

            <div class="contactform__field field form-control">
                <label class="contactform__field__label">Uw bericht</label>
                <textarea id="message" class="contactform__field__input textarea" name="message" required><?= esc($data['text'] ?? '') ?></textarea>
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <small>Error message</small>
            </div>

            <input class="contactform__submit button-small" type="submit" name="submit" value="Verzend">
        </form>
    <?php endif; ?>
</div>