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
 * 3. 
 * */