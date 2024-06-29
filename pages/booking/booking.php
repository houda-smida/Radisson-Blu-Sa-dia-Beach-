<main class="booking-container">
    <section>
        <form id="bookingForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <h1>Entrez les informations de votre demande de réservation</h1>
            <p>Ces informations seront transmises par e-mail à l'hôtel</p>

            <div>
                <label>
                    <span>Email :</span>
                    <input type="email" name="email" id="emailInput" required />
                </label>

                <label>
                    <span>Date d'arrivée :</span>
                    <input type="date" name="date_arrivee" required />
                </label>

                <label>
                    <span>Date de départ :</span>
                    <input type="date" name="date_depart" required />
                </label>

                <label>
                    <span>Nombre de voyageurs :</span>
                    <input type="number" name="nombre_voyageurs" required />
                </label>

                <label>
                    <span>Prix de nuité moyen :</span>
                    <input type="number" name="prix_nuité_moyen" required />
                </label>

                <label>
                    <span>Numéro de téléphone :</span>
                    <input type="tel" name="telephone" required />
                </label>
            </div>

            <button type="button" id="sendEmail">Envoyer la demande par email</button>
        </form>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let sendEmailButton = document.getElementById('sendEmail');
        if (sendEmailButton) {
            sendEmailButton.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default button behavior

                // Retrieve form data using FormData API
                let form = document.getElementById('bookingForm');
                let formData = new FormData(form);

                // Retrieve email value
                let email = formData.get('email');

                // Construct mailto: link
                let mailtoLink = 'mailto:radisson.blue.booking@gmail.com'
                    + '?subject=Demande%20de%20réservation%20pour%20' + encodeURIComponent(email)
                    + '&body=';

                // Prepare array to collect field entries
                let fields = [];

                // Iterate through formData entries
                for (let [key, value] of formData.entries()) {
                    // Skip the email field for body, add to subject
                    if (key !== 'email') {
                        fields.push(`${encodeURIComponent(key)}=${encodeURIComponent(value)}`);
                    }
                }

                // Append fields to mailto body
                mailtoLink += fields.join('%0A');

                // Open mailto: link
                window.location.href = mailtoLink;
            });
        }
    });
</script>
