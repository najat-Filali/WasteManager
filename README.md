# Waste Manager

## Contexte
Afin d'aider les communes à améliorer leur gestion des déchets, vous devez programmer
un logiciel qui aura pour fonction d'assigner les différents déchets générés par les
acteur.ices de la commune aux service de traitement des déchets disponibles.

Plusieurs types de déchets existes pour le moment, mais il est probable que d'autres 
se rajoutent par la suite (la conception devra le prendre en compte) :
* Déchets gris, le déchet de base
* Déchets plastiques, qui seront de différents types
* Déchets cartons
* Déchets compostables

Plusieurs services de traitements des déchets seront disponibles (pareillement, d'autres peuvent exister par la suite) :
* Incinérateur, qui accepte tout type de déchets
* Centre de tri déchets recyclables, se charge de trier les déchets pour les envoyer aux centres de traitements adequat (optionnel mais intéressant, rajoute un intermédiaire)
* Centre de recyclage, peuvent traiter carton et/ou plastiques, potentiellement selon leur type
* Composteurs de quartier, peuvent traiter les déchets compostables

Chacun de ces services de traitement a une capacité de traitement définie en tonne et rejette du CO2.

