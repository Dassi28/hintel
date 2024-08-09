<?php require_once('components/header.php'); ?>

<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;"></h5>
            <h1>Réservez d’un seul clic votre place à<br> l’Institut Supérieur Hintel </h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form bg-primary rounded p-5">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="name" placeholder="Prénom"
                                required="required" data-validation-required-message="Remplissez tous les champs" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="name" placeholder="Nom"
                                required="required" data-validation-required-message="Remplissez tous les champs" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="date" class="form-control border-0 p-4" id="name"
                                placeholder="Date de naissance" required="required"
                                data-validation-required-message="Remplissez tous les champs" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="name" placeholder="Nationalité"
                                required="requi
                                red" data-validation-required-message="Remplissez tous les champs" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="name" placeholder="Ville"
                                required="required" data-validation-required-message="Remplissez tous les champs" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Remplissez tous les champs" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="name" placeholder="Téléphone"
                                required="required" data-validation-required-message="Remplissez tous les champs" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="name" placeholder="Filière"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="name" placeholder="Niveau"
                                required="required" data-validation-required-message="Remplissez tous les champs" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control border-0 py-3 px-4" rows="5" id="message"
                                placeholder="Message" required="required"
                                data-validation-required-message="Remplissez tous les champs"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn bg-secondary py-3 px-5" type="submit"
                                id="sendMessageButton">Soumettre</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php require_once('components/footer.php'); ?>