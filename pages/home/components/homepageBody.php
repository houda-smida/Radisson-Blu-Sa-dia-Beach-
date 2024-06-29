<?php

$cardsData = [
    [
        
        'title' => 'Yes I Can!',
        'introduction' => 'Notre philosophie de service «&nbsp;Yes I can!&nbsp;» est au cœur de nos interactions avec les hôtes, ce qui nous démarque de nos concurrents. Elle transparaît dans l’attitude positive et l’approche professionnelle quotidiennes de nos collaborateurs, pour vous assurer une expérience inoubliable.  ',
    ],
    [
        
        'title' => 'Des espaces élégants',
        'introduction' => "Style, forme, beauté et fonctionnalité. C'est ce que vous trouverez au Radisson Blu. De la superbe Wine Tower de Stansted au Dom Lounge du Radisson Blu Hotel de Berlin, notre objectif est d'améliorer l'expérience unique du voyageur à travers des structures et des espaces élégants et sophistiqués pour les affaires et les loisirs.",
    ],
    [
        
        'title' => 'Halls d’entrée et espaces publics inspirants',
        'introduction' => "Le hall d’entrée et les espaces communs forment la première impression des hôtes de Radisson Blu et sont pensés aussi bien pour l’arrivée que pour le départ. Nous avons amélioré tous les espaces communs du Radisson Blu pour améliorer encore l'expérience globale des clients. Chaque espace commun, salle de réunion, lieu de réception, bar, restaurant et espace de bien-être a bénéficié d’une attention exceptionnelle, à l’image de tous les services des hôtels Radisson Blu.",
    ],
];

?>

<section class="card-section-container"
class="mx-auto w-full max-w-7xl gap-10 sm:px-28 lg:px-0">
    <div>
       <?php foreach ($cardsData as $card): ?>
            <div class="card-container">
                <h2><?php echo $card['title']; ?></h2>
                <p><?php echo $card['introduction']; ?></p>    
            </div>
        <?php endforeach; ?>
    </div>
</section>