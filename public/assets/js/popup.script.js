/***
 * FUNCTION LISTENER
 */
const kknewsletterMouseEvent = e => {
    const shouldShowExitIntent =
        !e.toElement &&
        !e.relatedTarget &&
        e.clientY < 10;

    if (shouldShowExitIntent) {
        document.removeEventListener('mouseout', kknewsletterMouseEvent);
        kknewsletterModalVisibility("show");
    }
};

// save remember cookies
function kknewsletterSaveCookies() {
    const date = new Date();
    date.setTime(date.getTime() + (parseInt(kknewsletter442Config.remember_day) * 24 * 60 * 60 * 1000));
    expires = '; expires=' + date.toUTCString();
    document.cookie = kknewsletterCookies + '=' + (kknewsletter442Config.remember_day || '') + expires + ';';
}
// check remember cookies
function kknewsletterCookiesExist() {
    let result = false;
    const cookies = document.cookie.split(';');
    for (const cookie of cookies) {

        if (cookie.indexOf(kknewsletterCookies + '=') > -1) {
            result = true;
        }
    }
    return result;
}
// Swith between modal visibility
function kknewsletterModalVisibility(visibility = "show") {
    let nylysModal = document.getElementById("newsletter-bbloc442");
    nylysModal.classList.replace(`nylis-modal-${ visibility == "show" ? 'hide' : 'show'  }`, `nylis-modal-${visibility}`);
}
// Set style to element with a Json
function jsonToElementStyle(elements, jsonStyle) {
    elementsArray = elements.split(",");

    elementsArray.forEach(element => {
        Object.assign(document.querySelector(element.trim()).style, jsonStyle);
    });

}
// Form Ui
function kknewsletterFormUI(statut = "loading") {
    let formOpacity = "1";
    let formProgressOpacity = "0";
    let formStatutReponseDisplay = "none";

    if (statut == "loading") {
        formOpacity = .4;
        formProgressOpacity = 1;
    } else if (statut == "default") {
        formOpacity = 1;
        formProgressOpacity = 0;
    } else if (statut == "finish") {
        formStatutReponseDisplay = "block";
        jsonToElementStyle("#newsletter-bbloc442 form input, #newsletter-bbloc442 form button", {display: "none"});
    }

    jsonToElementStyle("#newsletter-bbloc442 form", {opacity: formOpacity});
    jsonToElementStyle("#newsletter-bbloc442 .progress-bar", {opacity: formProgressOpacity});
    jsonToElementStyle("#newsletter-bbloc442 form .statut-reponse", {display: formStatutReponseDisplay});
}
// API call function
// - get newsletter content
function kknewsletterContentFormApi(config) {
    fetch(config.website+"api/script/popup-content?url="+config.domain)
        .then((response) => response.json())
        .then((data) => {
            if (data.statut) {
                document.querySelector("div[data-newsletter-content='newsletter-bbloc442']").innerHTML = data.data;
            }
        })
        .catch((error) => {
            console.log(error);
        });
}

// - get subscription api reponse
function kknewsletterFormApiReponse(reponseType, reponseMessage) {
    let color = reponseType == 'success' ? '#50cd89' : '#f1416c';
    jsonToElementStyle("#newsletter-bbloc442 form .statut-reponse", {
        color : color,
        display : "block"
    });

    document.querySelector("#newsletter-bbloc442 form .statut-reponse").textContent = reponseMessage;
}

/***
 * Detail et GET User Configuration
 **/
let kknewsletterDefaultSuccessMessage = "âœ“ You have successfully subscribed to our newsletter";
let kknewsletterDefaultErrorMessage = "âŠ— Something went wrong, please try again later";
let kknewsletter442GetScript = document.getElementById("kknewsletter442");
let kknewsletterCookies = 'kknewsletter-cookies';
let kknewsletter442Modal = `<div  id="newsletter-bbloc442" class="nylis-modal-hide">
    <div class="modal-content">
        <div class="progress-bar">
            <div class="progress-bar-value"></div>
        </div>
        <div class="modal-body">
            <form method="GET" action="#">
                <div style="width:100%" data-newsletter-content='newsletter-bbloc442'>
                    <h2>Newsletter</h2>
                    <p>Want to get updates to your mailbox? ðŸ“¬ <br>Subscribe to our newsletter!</p>
                </div>
                <p class="statut-reponse">Message de retour test</p>
                <input name="kknewsletter442-name" id="kknewsletter442-name" type="text" required
                    placeholder="Your name" />
                <input name="kknewsletter442-email" id="kknewsletter442-email" type="email" required
                    placeholder="Your email address" class="email" />
                <button class="submit">Subscribe</button>
                <span class="newsletter-close">x</span>
            </form>
        </div>
    </div>
</div>`;


let kknewsletter442Config = {
    domain: window.location.origin,
    api: 'api/contact/create',
    remember_day: 10,
    website: 'https://newsletter.nilys.com/'
}


document.addEventListener("DOMContentLoaded", (e) => {
    /**
     * We check if no remember ookie is set,
     * Before bind event listener
     */
    if (!kknewsletterCookiesExist()) {

        // Check if modal Html code exist
        if ( document.getElementById("newsletter-bbloc442") == null ) {
            document.querySelector('body').innerHTML += kknewsletter442Modal;
        }

        // Try getting newletter content message from API
        kknewsletterContentFormApi(kknewsletter442Config);

        // Adding, exit listener
        setTimeout(() => {
            // When he cursor or focus leave the html document
            document.addEventListener('mouseout', kknewsletterMouseEvent);
        }, 500);

        /***
         * Event LISTENER
         */
        // Close Modal button click
        document.querySelector('.newsletter-close').addEventListener("click", (e) => {
            e.stopPropagation();
            kknewsletterModalVisibility("hide");
            kknewsletterSaveCookies();
        })

        // Submit Newletter form
        document.querySelector("#newsletter-bbloc442 form").addEventListener("submit", (e) => {
            e.preventDefault();

            // Init form
            kknewsletterFormUI("loading");

            // api fetch call
            let api_url = kknewsletter442Config.website + kknewsletter442Config.api +
                `?firstname=${document.getElementById("kknewsletter442-name").value}&email=${document.getElementById("kknewsletter442-email").value}&url=${kknewsletter442Config.domain}`;

            fetch(api_url)
                .then((response) => response.json())
                .then((data) => {
                    kknewsletterFormUI("default");
                    if (data.statut) {
                        kknewsletterSaveCookies();
                        kknewsletterFormUI("finish");
                        kknewsletterFormApiReponse('success', kknewsletterDefaultSuccessMessage);
                    } else {
                        kknewsletterFormApiReponse('error', data.error ? "âŠ—" + data.error :
                            kknewsletterDefaultErrorMessage);
                    }
                })
                .catch((error) => {
                    kknewsletterFormUI("default");
                    kknewsletterFormApiReponse('error', "âŠ—" + kknewsletterDefaultErrorMessage);
                });
        })
    }
});
