<?php
/**
 * Author: Valdimar Gunnarsson
 *
 * 1. HTTP stendur fyrir Hypertext Transfer Protocol
 *    HTTP er stateless protocol, sem þýðir að hann lítur á hver og eina beiðni sem einstaka færslu og geymir aldrei neina upplýsingar um notandann.
 *    Til að geyma upplýsingar um notanda er yfirleitt notaðar 'cookies'
 *
 * 2. Status codes eru skilaboð sem HTTP sendir til baka eftir að það er búið að vinna út úr beiðninni.
 *
 *    1XX: Informational Messages
 *    PLAGEHOLDER
 *
 *    2xx: Sucessful
 *    Þessir kóðar segja notanda að það hafi tekist að vinna beiðnina
 *    Dæmi:
 *    200: 'OK'
 *    202: 'Accepted' -- Beiðnin var samþykkt en ekki endilaga keyrð
 *    204: 'No Content' -- Engin gögnum skilað
 *
 *    3xx: Redirection
 *    Þessir kóðar segja notanda að gera eitthvað aukalega. Oftast notað til að láta notanda fara á annað URL til að keyra beiðnina
 *    Dæmi:
 *    301: 'Moved Permanently' -- Skráin hefur verið færð á nýtt URL
 *    303: 'See Other' -- Skráin hefur verið færð á nýtt URL, en er tímabundið ástand
 *    304: 'Not modified' -- Vefþjónninn hefur ákveðið að skráin sem notandi hefur beðið um hefur ekki breyst síðan síðustu beiðn og að notandi ætti að nota skrá geymda hjá notanda
 *
 *    4xx: Client Error
 *    Þessir kóðar eru nýttir þegar vefþjónn heldur að notandi hefur gert villu
 *    Dæmi:
 *    400: 'Bad Request' -- Beiðnin hefur verið brengluð
 *    403: 'Forbidden' -- Vefþjónn hefur neitað notanda aðgengi að skránni sem beðið var um
 *    404: 'Not Found' -- Algengasti og mest þekkti villukóði, 404 þýðir að þjóninn finnur ekki skrána sem notandi bað um
 *
 *    5xx: Server Error
 *    Þessum kóðum er skilað þegar vefþjónn lendir í vandamálum þegar hann er að vinna úr beiðninni
 *    Dæmi:
 *    500: 'Internal Server Error' -- Þessi kóði gefur í skyn að vefþjónnin hefur lent í óvæntum vandræðum
 *    502: 'Bad Gateway' -- Þessi kóði getur oft komið þegar það er vandamál með tengin á milli vefþjóns og notanda, oft vegna eldveggs
 *    503: 'Service Unavailable' -- Vefþjónn er annaðhvort of upptekinn til að höndla beiðnina eða hann er niðri í bili
 *
 * 3. HTTP 2.0 var gert vegna þess að með tímanum hefur magn af gögnum og skjölum sem þarf að nota í vefsíðum verið að hækka og var HTTP 1 ekki hannað með það í huga.
 *    Einn af helstu mununum er það að í staðinn fyrir að nota texta fyrir protocola notar HTTP 2.0 binary sem er minna í stærð og mikið ólíklegra að villur komi upp.
 *    Annar munur er það að HTTP 2.0 er 'multiplexað' sem gerir það að verkum að það er hæght að vinna í meira en einni beiðni frá notanda í einu, sem eykur vinnsluhraða.
 *    HTTP 2.0 munt einungis nota eina TCP tengingu í staðinn fyrir 4-8 fyrir hvert 'origin'. Þar sem að síður nota of mörg origin er ekki ólíklegt að ein síða gæti opnað 15-30 TCP tengingar.
 *    Þetta hættir á að bufferarnir munu fyllast af þeim og hægja á öllu, sem aftur á móti gerir það að verkum að sumum gögnum verður hent og það þarf þá að ná í þau aftur.
 *    HTTP 2.0 mun líka nota 'header compression' til að þjappa gögnum sem þarf að skila. Samkvæmkt Patrick McManus sem vinnur fyrir Mozilla, þá tekur það um 7 ferðir að koma gögnunum af síðu sem er með um 80 assets, En ef maður þjappar headerum þá myndi það bara taka eina.
 *
 *
 * */

$jsonData = ['events' => [
    ['location' => 'San Francisco, CA', 'date' => 'May 1', 'map' => 'img/map-ca.png'],
    ['location' => 'Austin, TX', 'date' => 'May 15', 'map' => 'img/map-tx.png'],
    ['location' => 'New York, NY', 'date' => "May 30", 'map' => 'img/map-ny.png']
]];

$jsonEncoded = json_encode($jsonData);
$jsonDecoded = json_decode($jsonEncoded);
echo $jsonEncoded;
echo $jsonDecoded;