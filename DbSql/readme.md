Vogliamo creare uno spazio virtuale in stile social network 
dove gli utenti possano condividere le proprie esperienze. 

Ogni utente può creare dei 🧐POST, 
al quale può aggiungere uno o più 🧐MEDIA come foto e video. 
Ogni post può avere uno o più 🧐TAGS che servono per categorizzare i contenuti. 
Gli altri utenti possono interagire con il post esprimendo il loro gradimento attraverso un semplice 🧐LIKE.

## Step 1 (Diagramma ER)
Individuate prima le entità su cui si basa la piattaforma e poi osservate come sono relazionate. 
Inoltre, specificate i campi e i diversi vincoli disponibili per ciascun campo, come ad esempio l'utilizzo di UNIQUE per garantire l'unicità dei valori e NOT NULL per indicare l’obbligo di fornire un valore per quel campo. 
Attenzione alle chiavi primarie. 
BONUS: espandete il diagramma per integrare anche l’entità Tags e Commenti.

## n.1
Seleziona gli utenti che hanno postato almeno un video

SELECT `users`.`username`, `medias`.`path` FROM `users` JOIN `medias` ON `users`.`id` = `medias`.`user_id`;

## n.2
Seleziona tutti i post senza Like (13)

SELECT `posts`.`id` AS `post_id`, `likes`.`post_id` AS `post_with_like`, `posts`.`title`
FROM `posts`
LEFT JOIN `likes` ON `posts`.`id` = `likes`.`post_id`
WHERE `likes`.`post_id` IS NULL;

## n.3
Conta il numero di like per ogni post (165)

SELECT COUNT(`likes`.`post_id`) AS `like_number`, `posts`.`id`
FROM `posts`
LEFT JOIN `likes` ON `posts`.`id` = `likes`.`post_id` 
GROUP BY `posts`.`id`;

## n.4
Ordina gli utenti per il numero di media caricati (25) 

SELECT COUNT(`medias`.`path`) AS `upload_media_number`, `medias`.`user_id`, `users`.`username`
FROM `medias`
JOIN `users` ON `medias`.`user_id` = `users`.`id`
GROUP BY `medias`.`user_id`
ORDER BY `upload_media_number` DESC;


## n.5
Ordina gli utenti per totale di likes ricevuti nei loro posts (25) 

