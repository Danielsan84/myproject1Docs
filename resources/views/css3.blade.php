<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="matrix-text-container3">
                    <div class="frase1">
                        <p>The CSS3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="descrHtml1">
                <p>IL <mark><dfn>CSS3</dfn></mark> è un linguaggio di fogli di stile utilizzato per descrivere l'aspetto
                    e la formattazione di un documento HTML. <u>Il termine</u> <abbr
                        title="CASCADING STYLE SHEET">CSS3</abbr> <u>significa <q>CASCADING STYLE SHEET</u></q>.
                    Attraverso il <b>CSS3</b>, è possibile definire come i diversi elementi HTML devono essere
                    visualizzati sullo schermo, sui dispositivi mobili o su altri tipi di media. In pratica, il
                    <strong>CSS3</strong> permette di separare la struttura di un documento HTML (contenuto) dalla sua
                    presentazione visuale (stile).<br><ins><em>Con il CSS, puoi definire regole che specificano come i
                            vari elementi del documento devono essere visualizzati, includendo colori, dimensioni del
                            testo, posizioni, sfondi, bordi e molto altro</em></ins>. Le regole CSS sono definite
                    utilizzando selettori che identificano gli elementi HTML a cui si applicano, e dichiarazioni che
                    specificano le proprietà e i valori che si desidera assegnare a quegli elementi.</p>

                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="descrHtml2">
                            <div class="selettori">
                                <h6 class="text-center">I SELETTORI:</h6>
                                <ol>
                                    <li>
                                        <p>* Nel contesto di CSS, questo simbolo rappresenta un selettore universale.
                                            Viene utilizzato per selezionare tutti gli elementi presenti in una pagina
                                            HTML. Quindi, se si applica uno stile utilizzando il selettore *, verranno
                                            interessati tutti gli elementi HTML presenti nel documento.</p>
                                    </li>
                                    <li>
                                        <p>Il selettore per tag in CSS è uno dei selettori più semplici e comuni.
                                            Consente di selezionare tutti gli elementi che corrispondono a un
                                            determinato tipo di tag HTML. Per utilizzare il selettore per tag, devi
                                            semplicemente specificare il nome del tag come selettore. Ad esempio, se
                                            vuoi selezionare tutti gli elementi di h4 nel tuo documento HTML,
                                            utilizzerai il selettore per tag h4.</p>
                                    </li>
                                    <li>
                                        <p>Il selettore per classe in CSS ti consente di selezionare elementi HTML in
                                            base al valore dell'attributo class. Le classi sono utilizzate per
                                            identificare e raggruppare elementi simili all'interno di un documento HTML.
                                            Per utilizzare il selettore per classe, devi specificare il nome della
                                            classe preceduto da un punto (".") come selettore. Ad esempio, se hai un
                                            elemento div con la classe "code", utilizzerai il selettore ".code" per
                                            selezionarlo.</p>
                                    </li>
                                    <li>
                                        <p>Il selettore per ID in CSS ti consente di selezionare un elemento HTML in
                                            base al valore dell'attributo id. Gli ID sono identificatori unici assegnati
                                            a elementi specifici all'interno di un documento HTML. Per utilizzare il
                                            selettore per ID, devi specificare l'ID dell'elemento preceduto da unc
                                            cancelletto ("#") come selettore. Ad esempio, se hai un elemento div con
                                            l'ID "ido", utilizzerai il selettore "#ido" per selezionarlo. In questo
                                            caso, il selettore #ido selezionerà l'elemento con l'ID "ido" e applicherà
                                            uno stile che imposta il colore del testo su rosso. Gli ID sono univoci
                                            all'interno di un documento HTML, il che significa che ogni ID deve essere
                                            assegnato a un solo elemento. Pertanto, il selettore per ID selezionerà
                                            sempre al massimo un elemento nel tuo documento. A differenza delle classi,
                                            che possono essere applicate a più elementi, gli ID sono progettati per
                                            essere utilizzati per identificare un elemento specifico e devono essere
                                            unici all'interno del documento.</p>
                                    </li>
                                    <li>
                                        <p>Selettore discendente seleziona gli elementi figli di un altro elemento. Ad
                                            esempio, div p seleziona tutti gli elementi p che sono discendenti diretti
                                            di un elemento div.</p>
                                    </li>
                                    <li>
                                        <p>Selettore di attributo: Seleziona gli elementi che hanno un determinato
                                            attributo. Ad esempio, input[type="text"] seleziona tutti gli elementi
                                            input con l'attributo type uguale a "text".</p>
                                    </li>
                                    <li>
                                        <p>Selettore di combinazione combina più selettori per identificare elementi
                                            specifici. Ad esempio, div .classe seleziona gli elementi con class="classe"
                                            che sono discendenti diretti di un elemento div.</p>
                                    </li>
                                    <li>
                                        <p>Selettore di pseudo-classe seleziona elementi in base a uno stato o a
                                            un'interazione specifica. Ad esempio, a:hover seleziona i link quando
                                            vengono "hoverati" con il mouse.</p>
                                    </li>
                                    <li>
                                        <p>Selettore di pseudo-elemento seleziona una parte di un elemento. Ad esempio,
                                            p::first-line seleziona la prima riga di tutti gli elementi p.</p>
                                    </li>
                                    <li>
                                        <p>Selettore di combinazione combina più selettori per identificare elementi
                                            specifici. Ad esempio, div .classe seleziona gli elementi con class="classe"
                                            che sono discendenti diretti di un elemento div.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="descrHtml3">
                <div class="descrHtml2">
                    <h6>LE UNITà DI MISURA:</h6>
                    <p>Le unità di misura sono importanti per la responsività del sito, perchè se usiamo unità di misura
                        fisse, quando la pagina si riduce o si ingrandisce, i nostri elementi non si adatteranno alla
                        pagina, ma rimarranno sempre uguali, quindi per questo motivo si usano le unità di misura
                        relative, che sono:</p>
                    <ul>
                        <li>px</li>
                        <li>em</li>
                        <li>rem</li>
                        <li>vh</li>
                        <li>vw</li>
                        <li>%</li>
                    </ul>
                    <p>I px:</p>
                    <p>Il pixel è l'unità di misura più comune utilizzata per definire le dimensioni di un'immagine o di
                        un elemento HTML. Un pixel è un punto di colore sullo schermo. Un pixel è l'unità di misura più
                        piccola che può essere utilizzata per definire le dimensioni di un'immagine o di un elemento
                        HTML. Un pixel è un punto di colore sullo schermo. Un pixel è l'unità di misura più piccola che
                        può essere utilizzata per definire le dimensioni di un'immagine o di un elemento HTML. Un pixel
                        è un punto di colore sullo schermo.</p>
                    <p>Em:</p>
                    <p>Un em è una unità di misura relativa. Questo significa che un em è uguale alla dimensione del
                        carattere corrente. Pertanto, se il carattere corrente è di 12 punti, 1 em sarà uguale a 12
                        punti. Se il carattere corrente è di 24 punti, 1 em sarà uguale a 24 punti. Se il carattere
                        corrente è di 12 punti, 1 em sarà uguale a 12 punti. Se il carattere corrente è di 24 punti, 1
                        em sarà uguale a 24 punti. Se il carattere corrente è di 12 punti, 1 em sarà uguale a 12 punti.
                        Se il carattere corrente è di 24 punti, 1 em sarà uguale a 24 punti.</p>
                    <p>Rem:</p>
                    <p>Un rem è una unità di misura relativa. Questo significa che un rem è uguale alla dimensione del
                        carattere radice. Il carattere radice è il carattere predefinito per il tuo documento HTML. Di
                        solito è 16px. Pertanto, se il carattere radice è di 16px, 1 rem sarà uguale a 16px. Se il
                        carattere radice è di 32px, 1 rem sarà uguale a 32px. Se il carattere radice è di 16px, 1 rem
                        sarà uguale a 16px. Se il carattere radice è di 32px, 1 rem sarà uguale a 32px. Se il carattere
                        radice è di 16px, 1 rem sarà uguale a 16px. Se il carattere radice è di 32px, 1 rem sarà uguale
                        a 32px.</p>
                    <p>Vh:</p>
                    <p>Un vh è una unità di misura relativa. Questo significa che un vh è uguale all'1% dell'altezza
                        della finestra di visualizzazione. Pertanto, se l'altezza della finestra di visualizzazione è di
                        1000px, 1 vh sarà uguale a 10px. Se l'altezza della finestra di visualizzazione è di 2000px, 1
                        vh sarà uguale a 20px. Se l'altezza della finestra di visualizzazione è di 1000px, 1 vh sarà
                        uguale a 10px. Se l'altezza della finestra di visualizzazione è di 2000px, 1 vh sarà uguale a
                        20px. Se l'altezza della finestra di visualizzazione è di 1000px, 1 vh sarà uguale a 10px. Se
                        l'altezza della finestra di visualizzazione è di 2000px, 1 vh sarà uguale a 20px.</p>
                    <p>Vw:</p>
                    <p>Un vw è una unità di misura relativa. Questo significa che un vw è uguale all'1% della larghezza
                        della finestra di visualizzazione. Pertanto, se la larghezza della finestra di visualizzazione è
                        di 1000px, 1 vw sarà uguale a 10px. Se la larghezza della finestra di visualizzazione è di
                        2000px, 1 vw sarà uguale a 20px. Se la larghezza della finestra di visualizzazione è di 1000px,
                        1 vw sarà uguale a 10px. Se la larghezza della finestra di visualizzazione è di 2000px, 1 vw
                        sarà uguale a 20px. Se la larghezza della finestra di visualizzazione è di 1000px, 1 vw sarà
                        uguale a 10px. Se la larghezza della finestra di visualizzazione è di 2000px, 1 vw sarà uguale a
                        20px.</p>
                    <p>%:</p>
                    <p>Un % è una unità di misura relativa. Questo significa che un % è uguale all'1% della larghezza
                        del contenitore genitore. Pertanto, se la larghezza del contenitore genitore è di 1000px, 1%
                        sarà uguale a 10px. Se la larghezza del contenitore genitore è di 2000px, 1% sarà uguale a 20px.
                        Se la larghezza del contenitore genitore è di 1000px, 1% sarà uguale a 10px. Se la larghezza del
                        contenitore genitore è di 2000px, 1% sarà uguale a 20px. Se la larghezza del contenitore
                        genitore è di 1000px, 1% sarà uguale a 10px. Se la larghezza del contenitore genitore è di
                        2000px, 1% sarà uguale a 20px.</p>



                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="descrHtml3">
                <div class="descrHtml2">
                    <h6>Proprietà di allineamento ORIZZONTALE degli elementi</h6>
                    <p>Flex-start: Gli elementi vengono allineati all'inizio del contenitore. L'elemento iniziale sarà
                        posizionato
                        all'estremità sinistra.</p>
                    <p>Flex-end: Gli elementi vengono allineati alla fine del contenitore. L'elemento finale sarà
                        posizionato
                        all'estremità destra.</p>
                    <p>Center: Gli elementi vengono allineati al centro del contenitore lungo l'asse orizzontale.</p>
                    <p>Space-between: Gli elementi vengono distribuiti uniformemente lungo l'asse orizzontale con spazi
                        vuoti
                        tra di
                        essi.
                        Il primo elemento sarà posizionato all'inizio del contenitore e l'ultimo elemento alla fine del
                        contenitore.
                    </p>
                    <p>Space-around: Gli elementi vengono distribuiti uniformemente lungo l'asse orizzontale con spazi
                        vuoti
                        attorno
                        ad essi.
                        Gli spazi vuoti saranno uguali alla metà dello spazio vuoto tra gli elementi.
                        Il primo elemento sarà posizionato all'inizio del contenitore e l'ultimo elemento alla fine del
                        contenitore.
                        Gli elementi vengono distribuiti uniformemente lungo l'asse orizzontale con spazi vuoti sia tra
                        di essi
                        che all'inizio e alla fine del contenitore. Lo spazio tra gli elementi è uguale allo spazio tra
                        gli
                        elementi
                        e
                        i bordi del contenitore.</p>
                    <p>Space-evenly: Gli elementi vengono distribuiti uniformemente lungo l'asse orizzontale con spazi
                        vuoti sia
                        tra
                        di essi
                        che all'inizio e alla fine del contenitore. Lo spazio tra gli elementi è uguale.</p>
                    <p>Start: Equivalent to flex-start.</p>
                    <p>End: Equivalent to flex-end.</p>
                    <p>Left: Gli elementi vengono allineati all'estremità sinistra del contenitore.</p>
                    <p>Right: Gli elementi vengono allineati all'estremità destra del contenitore.</p>
             

                <h3>Proprietà di allineamento VERTICALE degli elementi</h3>

                    <p>Queste proprietà vengono solitamente utilizzate in combinazione con i layout flessibili (display:
                        flex o
                        display: inline-flex) per allineare gli elementi all'interno di un contenitore flessibile lungo
                        l'asse
                        trasversale.</p>
                    <p>Align-items: stretch: Questa è l'impostazione predefinita.
                        Gli elementi vengono estesi lungo l'asse trasversale del contenitore per occupare l'intera
                        altezza
                        disponibile.</p>
                    <p>Align-items: flex-start:
                        Gli elementi vengono allineati all'inizio del contenitore lungo l'asse trasversale.
                        Se gli elementi hanno altezze diverse, vengono posizionati in cima al contenitore.</p>
                    <p>Align-items: flex-end: Gli elementi vengono allineati alla fine del contenitore lungo l'asse
                        trasversale.
                        Se gli elementi hanno altezze diverse, vengono posizionati in fondo al contenitore.</p>
                    <p>Align-items: center: Gli elementi vengono allineati al centro del contenitore lungo l'asse
                        trasversale.
                    </p>
                    <p>Align-items: baseline: Gli elementi vengono allineati lungo la loro linea di base comune.
                        Questo può essere utile se gli elementi contengono testo con altezze diverse.</p>
                    <p>Align-items: initial: Ripristina il valore predefinito dell'attributo align-items.</p>
                    <p>Align-items: inherit: Eredità del valore di align-items dal genitore.</p>
                    <p>Flex-wrap: wrap; Gli elementi vengono avvolti su righe o colonne aggiuntive se non c'è abbastanza
                        spazio
                        sul contenitore principale.
                        In questo caso, gli elementi in eccesso vengono spostati su una nuova riga o colonna
                        per rendere responsive gli elementi.</p>
                    <p> L'attributo flex-direction: column viene utilizzato insieme al layout flessibile
                        (display: flex o display: inline-flex) per specificare l'orientamento dei componenti all'interno
                        di un contenitore flessibile lungo l'asse principale.
                        Quando si imposta flex-direction: column, gli elementi all'interno del contenitore flessibile
                        vengono
                        posizionati verticalmente, uno sopra l'altro, anziché orizzontalmente su una singola riga.
                        In pratica, se hai un contenitore flessibile con flex-direction: column, gli elementi al suo
                        interno
                        verranno impilati verticalmente.
                        Questo può essere utile quando si desidera creare una colonna di elementi,
                        ad esempio una lista verticale.
                    </p>
              


                <h3>ATTRIBUTO POSITION:</h3>

                <P>L'attributo position in CSS viene utilizzato per controllare il posizionamento degli elementi
                    all'interno di
                    un
                    layout.
                    Ci sono diverse opzioni che possono essere utilizzate con position:</P>
                <P>Position: static (valore predefinito): Gli elementi vengono posizionati secondo il normale flusso del
                    documento.
                    Questo valore non consente di utilizzare altre proprietà di posizionamento come top, bottom, left e
                    right.
                </P>
                <p>Position: relative: Gli elementi vengono posizionati in base alla loro posizione normale nel flusso
                    del
                    documento.
                    Tuttavia, è possibile utilizzare le proprietà top, bottom, left e right per spostare l'elemento
                    rispetto
                    alla sua posizione originale. L'elemento mantiene comunque il suo spazio originale nel layout.</p>
                <p>Position: absolute: L'elemento viene posizionato rispetto al suo primo genitore posizionato o
                    all'elemento
                    radice (di solito il documento HTML).
                    Puoi utilizzare le proprietà top, bottom, left e right per specificare la posizione dell'elemento.
                    L'elemento viene rimosso dal flusso del documento, quindi gli altri elementi possono sovrapporsi ad
                    esso.
                    Se nessuno dei genitori ha una posizione esplicita, l'elemento verrà posizionato rispetto al
                    documento HTML.
                </p>
                <p>Position: fixed: L'elemento viene posizionato rispetto alla finestra del browser e rimarrà fisso
                    anche quando si scorre la pagina.
                    Puoi utilizzare le proprietà top, bottom, left e right per specificare la posizione fissa
                    dell'elemento.
                    Gli elementi con position: fixed vengono rimossi dal flusso del documento, quindi gli altri elementi
                    possono
                    sovrapporsi ad essi.</p>
                <p>Position: sticky: L'elemento rimarrà nella posizione specificata finché non viene superata una soglia
                    definita,
                    quindi diventerà un elemento fixed fino a quando non tornerà nella sua posizione iniziale quando
                    viene
                    superata
                    un'altra soglia.
                    Questo valore è spesso utilizzato per creare elementi che rimangono "appiccicati" all'interno di un
                    contenitore
                    quando si scorre la pagina.</p>
                <p>L'attributo z-index: è una proprietà CSS che determina l'ordinamento degli elementi posizionati lungo
                    l'asse
                    Z (profondità) all'interno di uno stack di elementi sovrapposti.
                    In altre parole, l'attributo z-index consente di controllare quale elemento HTML viene visualizzato
                    sopra
                    gli altri quando si verificano sovrapposizioni.
                    Il valore dell'attributo z-index può essere un numero intero, un valore decimale o la parola chiave
                    "auto".
                    I numeri più grandi indicano un ordine superiore rispetto ai numeri più piccoli. Se due elementi
                    hanno lo
                    stesso valore di z-index, l'ordine di sovrapposizione viene determinato dall'ordine di
                    posizionamento nel
                    codice HTML.
                    È importante notare che l'attributo z-index funziona solo sugli elementi con una posizione definita,
                    come position: relative, position: absolute o position: fixed. Inoltre, l'attributo z-index
                    influisce solo
                    sugli elementi che si sovrappongono nello stesso contesto di posizionamento.</p>



            </div>
        </div>
    </div>
    </div>






    {{-- 1 TABELLA --}}






</x-layout>
